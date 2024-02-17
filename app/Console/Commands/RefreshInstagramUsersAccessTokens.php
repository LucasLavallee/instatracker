<?php

namespace App\Console\Commands;

use App\Models\InstagramUser;
use App\Services\InstagramService;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Crypt;

class RefreshInstagramUsersAccessTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:refresh-instagram-users-access-tokens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh InstagramUsers refresh tokens before expiration. Tokens are refreshed 10 days before expiration.';

    public function __construct(private InstagramService $instagramService)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $usersWithOldTokens = InstagramUser::select(['id', 'access_token'])
            ->whereDate('token_expiration_date', '<', Carbon::now()->addDays(10))
            ->get();

        foreach ($usersWithOldTokens as $userWithOldToken) {
            // refresh users token
            $refreshedAccessTokenDetails = $this->instagramService->refreshAccessToken(Crypt::decryptString($userWithOldToken->access_token));
            $tokenExpirationDate = Carbon::now()->addSeconds($refreshedAccessTokenDetails['expires_in']);

            // save freshly created token
            $userWithOldToken->access_token = Crypt::encryptString($refreshedAccessTokenDetails['access_token']);
            $userWithOldToken->token_expiration_date = $tokenExpirationDate;
            $userWithOldToken->save();
        }
    }
}
