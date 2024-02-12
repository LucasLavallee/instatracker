<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Agreement
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property string $idcc
 * @property int $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CConstant> $cConstants
 * @property-read int|null $c_constants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Establishment> $establishments
 * @property-read int|null $establishments_count
 * @method static \Database\Factories\AgreementFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Agreement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agreement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agreement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Agreement whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agreement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agreement whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agreement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agreement whereIdcc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agreement whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agreement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperAgreement {}
}

namespace App\Models{
/**
 * App\Models\Amount
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\AmountFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Amount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Amount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Amount query()
 * @method static \Illuminate\Database\Eloquent\Builder|Amount whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amount whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Amount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperAmount {}
}

namespace App\Models{
/**
 * App\Models\ApplicationSource
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Document> $documents
 * @property-read int|null $documents_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\ApplicationSourceFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSource query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSource whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSource whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSource whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSource whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApplicationSource whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperApplicationSource {}
}

namespace App\Models{
/**
 * App\Models\AttachmentPeriod
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\AttachmentPeriodFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AttachmentPeriod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttachmentPeriod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttachmentPeriod query()
 * @method static \Illuminate\Database\Eloquent\Builder|AttachmentPeriod whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttachmentPeriod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttachmentPeriod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttachmentPeriod whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttachmentPeriod whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperAttachmentPeriod {}
}

namespace App\Models{
/**
 * App\Models\CConstant
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property float $value
 * @property \Illuminate\Support\Carbon $effective_date
 * @property int|null $user_id
 * @property int $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $is_percentage
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Agreement> $agreements
 * @property-read int|null $agreements_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CConstantVersion> $cConstantVersions
 * @property-read int|null $c_constant_versions_count
 * @property-read \App\Models\User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CConstantVersion> $versions
 * @property-read int|null $versions_count
 * @method static \Database\Factories\CConstantFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant query()
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant whereEffectiveDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant whereIsPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstant whereValue($value)
 * @mixin \Eloquent
 */
	class IdeHelperCConstant {}
}

namespace App\Models{
/**
 * App\Models\CConstantVersion
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property float $value
 * @property \Illuminate\Support\Carbon $effective_date
 * @property int|null $user_id
 * @property int $c_constant_id
 * @property int $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $is_percentage
 * @property-read \App\Models\CConstant $cConstant
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion query()
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion whereCConstantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion whereEffectiveDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion whereIsPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CConstantVersion whereValue($value)
 * @mixin \Eloquent
 */
	class IdeHelperCConstantVersion {}
}

namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property int|null $user_id
 * @property int $workforce
 * @property int|null $number_work_study_students
 * @property int $customer_id
 * @property int $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \App\Models\Customer $customer
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Document> $documents
 * @property-read int|null $documents_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Establishment> $establishments
 * @property-read int|null $establishments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KConstant> $kConstants
 * @property-read int|null $k_constants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $managingUsers
 * @property-read int|null $managing_users_count
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\CompanyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereNumberWorkStudyStudents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereWorkforce($value)
 * @mixin \Eloquent
 */
	class IdeHelperCompany {}
}

namespace App\Models{
/**
 * App\Models\ConstantReferencePeriod
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $period
 * @property int $calendar_days
 * @property int $business_days
 * @property int $working_days
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ConstantReferencePeriodFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ConstantReferencePeriod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConstantReferencePeriod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ConstantReferencePeriod query()
 * @method static \Illuminate\Database\Eloquent\Builder|ConstantReferencePeriod whereBusinessDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConstantReferencePeriod whereCalendarDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConstantReferencePeriod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConstantReferencePeriod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConstantReferencePeriod wherePeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConstantReferencePeriod whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ConstantReferencePeriod whereWorkingDays($value)
 * @mixin \Eloquent
 */
	class IdeHelperConstantReferencePeriod {}
}

namespace App\Models{
/**
 * App\Models\ContractType
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property int $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\ContractTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContractType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperContractType {}
}

namespace App\Models{
/**
 * App\Models\Contribution
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\ContributionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Contribution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contribution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contribution query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contribution whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contribution whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contribution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contribution whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contribution whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperContribution {}
}

namespace App\Models{
/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $code
 * @property string $domain
 * @property string $label
 * @property string|null $logo
 * @property string|null $color
 * @property int|null $user_id
 * @property int $enabled
 * @property string|null $admin_first_name
 * @property string|null $admin_last_name
 * @property string|null $admin_email
 * @property string|null $admin_password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\CustomerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAdminEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAdminFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAdminLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAdminPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereDomain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUserId($value)
 * @mixin \Eloquent
 */
	class IdeHelperCustomer {}
}

namespace App\Models{
/**
 * App\Models\Document
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \App\Models\ApplicationSource|null $applicationSource
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Document query()
 * @mixin \Eloquent
 */
	class IdeHelperDocument {}
}

namespace App\Models{
/**
 * App\Models\EmployeeCategory
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KConstant> $kConstants
 * @property-read int|null $k_constants_count
 * @method static \Database\Factories\EmployeeCategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeCategory whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeCategory whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmployeeCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperEmployeeCategory {}
}

namespace App\Models{
/**
 * App\Models\Establishment
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property int|null $user_id
 * @property int $company_id
 * @property int $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $reference_period_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Agreement> $agreements
 * @property-read int|null $agreements_count
 * @property-read \App\Models\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KConstant> $kConstants
 * @property-read int|null $k_constants_count
 * @property-read \App\Models\ReferencePeriod|null $referencePeriod
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\EstablishmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment whereReferencePeriodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Establishment whereUserId($value)
 * @mixin \Eloquent
 */
	class IdeHelperEstablishment {}
}

namespace App\Models{
/**
 * App\Models\Fiche
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \App\Models\Amount|null $amount
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ApplicationSource> $applicationSources
 * @property-read int|null $application_sources_count
 * @property-read \App\Models\AttachmentPeriod|null $attachmentPeriod
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ContractType> $contractTypes
 * @property-read int|null $contract_types_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Contribution> $contributions
 * @property-read int|null $contributions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\EmployeeCategory> $employeeCategories
 * @property-read int|null $employee_categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Establishment> $establishments
 * @property-read int|null $establishments_count
 * @property-read \App\Models\FicheStatus|null $ficheStatus
 * @property-read \App\Models\FicheSubTheme|null $ficheSubTheme
 * @property-read \App\Models\FicheTheme|null $ficheTheme
 * @property-read \App\Models\FicheType|null $ficheType
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FicheVersion> $ficheVersions
 * @property-read int|null $fiche_versions_count
 * @property-read \App\Models\FicheVersion|null $latestFicheVersion
 * @property-read \App\Models\ManagementUnit|null $managementUnit
 * @property-read \App\Models\PaymentPeriod|null $paymentPeriod
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Prorata> $proratas
 * @property-read int|null $proratas_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RateImpact> $rateImpacts
 * @property-read int|null $rate_impacts_count
 * @property-read \App\Models\Round|null $round
 * @property-read \App\Models\TriggerType|null $triggerType
 * @property-read \App\Models\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FicheVersion> $versions
 * @property-read int|null $versions_count
 * @method static \Database\Factories\FicheFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Fiche newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fiche newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fiche query()
 * @mixin \Eloquent
 */
	class IdeHelperFiche {}
}

namespace App\Models{
/**
 * App\Models\FicheStatus
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\FicheStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FicheStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheStatus whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheStatus whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperFicheStatus {}
}

namespace App\Models{
/**
 * App\Models\FicheSubTheme
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $fiche_theme_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \App\Models\FicheTheme $ficheTheme
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\FicheSubThemeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FicheSubTheme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheSubTheme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheSubTheme query()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheSubTheme whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheSubTheme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheSubTheme whereFicheThemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheSubTheme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheSubTheme whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheSubTheme whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheSubTheme whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperFicheSubTheme {}
}

namespace App\Models{
/**
 * App\Models\FicheTheme
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $fiche_type_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FicheSubTheme> $ficheSubThemes
 * @property-read int|null $fiche_sub_themes_count
 * @property-read \App\Models\FicheType $ficheType
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\FicheThemeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FicheTheme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheTheme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheTheme query()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheTheme whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheTheme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheTheme whereFicheTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheTheme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheTheme whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheTheme whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheTheme whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperFicheTheme {}
}

namespace App\Models{
/**
 * App\Models\FicheType
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FicheTheme> $ficheThemes
 * @property-read int|null $fiche_themes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\FicheTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FicheType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheType query()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheType whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheType whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheType whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FicheType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperFicheType {}
}

namespace App\Models{
/**
 * App\Models\FicheVersion
 *
 * @property-read \App\Models\Amount|null $amount
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ApplicationSource> $applicationSources
 * @property-read int|null $application_sources_count
 * @property-read \App\Models\AttachmentPeriod|null $attachmentPeriod
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ContractType> $contractTypes
 * @property-read int|null $contract_types_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Contribution> $contributions
 * @property-read int|null $contributions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\EmployeeCategory> $employeeCategories
 * @property-read int|null $employee_categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Establishment> $establishments
 * @property-read int|null $establishments_count
 * @property-read \App\Models\Fiche|null $fiche
 * @property-read \App\Models\FicheStatus|null $ficheStatus
 * @property-read \App\Models\ManagementUnit|null $managementUnit
 * @property-read \App\Models\PaymentPeriod|null $paymentPeriod
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Prorata> $proratas
 * @property-read int|null $proratas_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RateImpact> $rateImpacts
 * @property-read int|null $rate_impacts_count
 * @property-read \App\Models\Round|null $round
 * @property-read \App\Models\TriggerType|null $triggerType
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|FicheVersion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheVersion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FicheVersion query()
 * @mixin \Eloquent
 */
	class IdeHelperFicheVersion {}
}

namespace App\Models{
/**
 * App\Models\KConstant
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\EmployeeCategory> $employeeCategories
 * @property-read int|null $employee_categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Establishment> $establishments
 * @property-read int|null $establishments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KConstantVersion> $kConstantVersions
 * @property-read int|null $k_constant_versions_count
 * @property-read \App\Models\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KConstantVersion> $versions
 * @property-read int|null $versions_count
 * @method static \Database\Factories\KConstantFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|KConstant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KConstant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KConstant query()
 * @mixin \Eloquent
 */
	class IdeHelperKConstant {}
}

namespace App\Models{
/**
 * App\Models\KConstantVersion
 *
 * @property-read \App\Models\KConstant|null $kConstant
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|KConstantVersion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KConstantVersion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KConstantVersion query()
 * @mixin \Eloquent
 */
	class IdeHelperKConstantVersion {}
}

namespace App\Models{
/**
 * App\Models\LConstant
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property float $value
 * @property \Illuminate\Support\Carbon $effective_date
 * @property int|null $user_id
 * @property int $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $is_percentage
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LConstantVersion> $lConstantVersions
 * @property-read int|null $l_constant_versions_count
 * @property-read \App\Models\User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LConstantVersion> $versions
 * @property-read int|null $versions_count
 * @method static \Database\Factories\LConstantFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant query()
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant whereEffectiveDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant whereIsPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstant whereValue($value)
 * @mixin \Eloquent
 */
	class IdeHelperLConstant {}
}

namespace App\Models{
/**
 * App\Models\LConstantVersion
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property float $value
 * @property \Illuminate\Support\Carbon $effective_date
 * @property int|null $user_id
 * @property int $l_constant_id
 * @property int $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $is_percentage
 * @property-read \App\Models\LConstant $lConstant
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion query()
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion whereEffectiveDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion whereIsPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion whereLConstantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LConstantVersion whereValue($value)
 * @mixin \Eloquent
 */
	class IdeHelperLConstantVersion {}
}

namespace App\Models{
/**
 * App\Models\ManagementUnit
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\ManagementUnitFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ManagementUnit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ManagementUnit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ManagementUnit query()
 * @method static \Illuminate\Database\Eloquent\Builder|ManagementUnit whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ManagementUnit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ManagementUnit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ManagementUnit whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ManagementUnit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperManagementUnit {}
}

namespace App\Models{
/**
 * App\Models\MathFormula
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \App\Models\MathFormulaType|null $mathFormulaType
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormula newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormula newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormula query()
 * @mixin \Eloquent
 */
	class IdeHelperMathFormula {}
}

namespace App\Models{
/**
 * App\Models\MathFormulaKeyword
 *
 * @property int $id
 * @property string $keyword
 * @property string $label
 * @property string|null $code_column_name
 * @property string|null $value_column_name
 * @property string|null $table_name
 * @property string|null $class_name
 * @property int $is_central
 * @property int $can_be_uploaded
 * @property int $is_suffixable
 * @property int $is_date
 * @property string $group
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\MathFormulaKeywordFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword query()
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereCanBeUploaded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereClassName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereCodeColumnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereIsCentral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereIsDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereIsSuffixable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaKeyword whereValueColumnName($value)
 * @mixin \Eloquent
 */
	class IdeHelperMathFormulaKeyword {}
}

namespace App\Models{
/**
 * App\Models\MathFormulaType
 *
 * @property int $id
 * @property string $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MathFormula> $mathFormulas
 * @property-read int|null $math_formulas_count
 * @method static \Database\Factories\MathFormulaTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaType query()
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaType whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MathFormulaType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperMathFormulaType {}
}

namespace App\Models{
/**
 * App\Models\PaymentPeriod
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\PaymentPeriodFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentPeriod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentPeriod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentPeriod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentPeriod whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentPeriod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentPeriod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentPeriod whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentPeriod whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperPaymentPeriod {}
}

namespace App\Models{
/**
 * App\Models\Prorata
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property int $enabled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\ProrataFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Prorata newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prorata newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Prorata query()
 * @method static \Illuminate\Database\Eloquent\Builder|Prorata whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prorata whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prorata whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prorata whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prorata whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Prorata whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperProrata {}
}

namespace App\Models{
/**
 * App\Models\RateImpact
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\RateImpactFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|RateImpact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RateImpact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RateImpact query()
 * @method static \Illuminate\Database\Eloquent\Builder|RateImpact whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RateImpact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RateImpact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RateImpact whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RateImpact whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperRateImpact {}
}

namespace App\Models{
/**
 * App\Models\ReferencePeriod
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Establishment> $establishments
 * @property-read int|null $establishments_count
 * @method static \Database\Factories\ReferencePeriodFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ReferencePeriod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReferencePeriod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReferencePeriod query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReferencePeriod whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReferencePeriod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReferencePeriod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReferencePeriod whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReferencePeriod whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperReferencePeriod {}
}

namespace App\Models{
/**
 * App\Models\Round
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\RoundFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Round newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Round newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Round query()
 * @method static \Illuminate\Database\Eloquent\Builder|Round whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Round whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Round whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Round whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Round whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperRound {}
}

namespace App\Models{
/**
 * App\Models\Tenant
 *
 * @property int $id
 * @property string $name
 * @property array|null $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Stancl\Tenancy\Database\Models\Domain> $domains
 * @property-read int|null $domains_count
 * @method static \Stancl\Tenancy\Database\TenantCollection<int, static> all($columns = ['*'])
 * @method static \Stancl\Tenancy\Database\TenantCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tenant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperTenant {}
}

namespace App\Models{
/**
 * App\Models\TriggerType
 *
 * @property int $id
 * @property string $code
 * @property string $label
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @method static \Database\Factories\TriggerTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|TriggerType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TriggerType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TriggerType query()
 * @method static \Illuminate\Database\Eloquent\Builder|TriggerType whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TriggerType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TriggerType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TriggerType whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TriggerType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperTriggerType {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property int $enabled
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Nova\Actions\ActionEvent> $actions
 * @property-read int|null $actions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CConstantVersion> $cConstantVersions
 * @property-read int|null $c_constant_versions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CConstant> $cConstants
 * @property-read int|null $c_constants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Customer> $customers
 * @property-read int|null $customers_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Establishment> $establishments
 * @property-read int|null $establishments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FicheVersion> $ficheVersions
 * @property-read int|null $fiche_versions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Fiche> $fiches
 * @property-read int|null $fiches_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KConstantVersion> $kConstantVersions
 * @property-read int|null $k_constant_versions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\KConstant> $kConstants
 * @property-read int|null $k_constants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LConstantVersion> $lConstantVersions
 * @property-read int|null $l_constant_versions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LConstant> $lConstants
 * @property-read int|null $l_constants_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $managedCompanies
 * @property-read int|null $managed_companies_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

