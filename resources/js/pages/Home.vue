<template>
    <section class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="pb-2 mb-6 border-b-2">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Liste des utilisateurs</h1>
                <p class="text-sm leading-6 text-gray-500">Liste des utilisateurs ayant autorisés la récupération de leur posts Instagram. </p>
                <p class="text-sm leading-6 text-gray-500">Si vous souhaitez apparaitre dans cette liste, cliquez <span class="underline font-semibold text-rose-600 cursor-pointer" @click="triggerAuthorization">ici</span></p>
            </div>

            <div type="button" v-if="listLoading">
                <svg class="animate-spin h-10 w-10 mr-3" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <path fill="rgb(244, 63, 94)" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50"></path>
                </svg>
            </div>

            <div>
                <div class="flex flex-1 justify-end" v-if="instagramUsers.length > 0">
                    <p class="bg-rose-500 text-white rounded-full px-4">Total: {{ paginationData.total }}</p>
                </div>

                <ul role="list" class="divide-y divide-gray-100" v-if="instagramUsers.length > 0">
                    <li v-for="person in instagramUsers" :key="person.username">
                        <router-link :to="'/instagram-users/' + person.id" class="flex justify-between gap-x-6 py-5">
                            <div class="flex min-w-0 gap-x-4">
                                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" :src="'/images/instagram_logo.png'" alt="" />
                                <div class="min-w-0 flex-auto">
                                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ person.username }}</p>
                                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">https://www.instagram.com/{{ person.username }}</p>
                                </div>
                            </div>
                            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                <p class="text-sm leading-6 text-gray-900 font-semibold">{{ person.totalPosts }} posts récupérés</p>
                                <p class="mt-1 text-xs leading-5 text-gray-500">
                                    Dernière mise à jour: <time :datetime="person.lastPostsUpdate">{{ formatDate(person.lastPostsUpdate) }}</time>
                                </p>
                            </div>
                        </router-link>
                    </li>
                </ul>

                <p class="text-center mb-6 text-sm text-gray-600" v-if="instagramUsers.length === 0">Aucun utilisateurs Instagram pour le moment.</p>

                <pagination
                    :pagination-data="paginationData"
                    @previous-page="getInstagramUsers(parseInt(paginationData.currentPage) - 1)"
                    @next-page="getInstagramUsers(parseInt(paginationData.currentPage) + 1)"
                />
            </div>
        </div>
    </section>
</template>

<script setup>

import {onMounted, ref} from 'vue'
import Pagination from '../components/Pagination.vue'
import {useDateHelpers} from '../dateHelpers.js'

const paginationData = ref({
    currentPage: null,
    total: null,
    lastPage: null,
})

const instagramUsers = ref([])
const listLoading = ref(true)
const { formatDate } = useDateHelpers()

const getInstagramUsers = (page = 1) => {
    listLoading.value = true

    axios.defaults.withCredentials = true

    axios.get('/api/front/instagram-users', {params: {page}}).then(response => {
        paginationData.value = response.data.pagination
        instagramUsers.value = response.data.instagramUsers
        listLoading.value = false
    }).catch(error => {
        listLoading.value = false
    })
}

const triggerAuthorization = () => {
    let instagramAuthUrl = 'https://api.instagram.com/oauth/authorize'
    instagramAuthUrl += '?client_id=' + import.meta.env.VITE_INSTAGRAM_CLIENT_ID
    instagramAuthUrl += '&redirect_uri=' + import.meta.env.VITE_APP_URL + '/auth/'
    instagramAuthUrl += '&scope=user_profile,user_media'
    instagramAuthUrl += '&response_type=code'

    window.open(instagramAuthUrl)
}

/** Lifecycle hooks **/

onMounted(() => {
    getInstagramUsers()
})

</script>

<style scoped>

</style>
