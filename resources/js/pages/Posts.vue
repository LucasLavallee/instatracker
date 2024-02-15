<template>
    <section class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex justify-between gap-x-6 py-5" v-if="!loading && instagramUser">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" :src="'/images/instagram_logo.png'" alt="" />
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ instagramUser.username }}</p>
                        <a :href="'https://www.instagram.com/' + instagramUser.username" target="_blank" class="mt-1 truncate text-xs leading-5 text-gray-500">https://www.instagram.com/{{ instagramUser.username }}</a>
                    </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="mt-1 text-xs leading-5 text-gray-500">
                        Dernière mise à jour: <time :datetime="instagramUser.lastPostsUpdate">{{ formatDate(instagramUser.lastPostsUpdate) }}</time>
                    </p>
                </div>
            </div>

            <div class="flex flex-1 justify-end">
                <p class="bg-rose-500 text-white rounded-full px-4">Total: {{ paginationData.total }}</p>
            </div>

            <div class="flex flex-wrap gap-y-6 py-5" v-if="!loading && instagramUser">
                <post v-for="post in posts" :key="post.id" :post="post"/>
            </div>

            <pagination
                v-if="!loading"
                :pagination-data="paginationData"
                @previous-page="getInstagramUserPosts(parseInt(paginationData.currentPage) - 1)"
                @next-page="getInstagramUserPosts(parseInt(paginationData.currentPage) + 1)"
            />
        </div>
    </section>
</template>

<script setup>
import {onMounted, ref} from 'vue'
import { useRoute } from 'vue-router'
import Post from '../components/Post.vue'
import {useDateHelpers} from '../dateHelpers.js'
import Pagination from "../components/Pagination.vue";

const { formatDate } = useDateHelpers()
const route = useRoute()
const posts = ref([]);
const instagramUser = ref(null);
const loading = ref(true)
const paginationData = ref({
    currentPage: null,
    total: null,
    lastPage: null,
})

const getInstagramUserDetails = () => {
    loading.value = true

    axios.get('/api/instagram-users/' + route.params.id).then(response => {
        instagramUser.value = response.data.instagramUser
        loading.value = false
    }).catch(error => {
        loading.value = false
    })
}

const getInstagramUserPosts = (page = 1) => {
    loading.value = true

    axios.get('/api/instagram-users/' + route.params.id + '/posts', {params: {page}}).then(response => {
        posts.value = response.data.posts
        paginationData.value = response.data.pagination
        loading.value = false
    }).catch(error => {
        loading.value = false
    })
}

/** Lifecycle hooks **/
onMounted(() => {
    getInstagramUserDetails()
    getInstagramUserPosts()
})

</script>

<style scoped>

</style>
