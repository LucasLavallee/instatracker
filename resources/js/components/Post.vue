<template>
    <div class="w-full lg:max-w-full lg:flex rounded-lg shadow-lg">
        <div class="relative h-80 lg:h-auto lg:w-80 flex-none bg-cover rounded-l text-center" :style="'background-image: url(' + currentMediaUrl + ')'">
            <arrow-left-circle-icon v-if="post.mediaType === 'CAROUSEL_ALBUM'" @click="previousImage()" class="rounded-full bg-white top-1/2 -translate-y-1/2 -left-2 absolute h-8 w-8 text-rose-600"/>
            <arrow-right-circle-icon v-if="post.mediaType === 'CAROUSEL_ALBUM'" @click="nextImage()" class="rounded-full bg-white top-1/2 -translate-y-1/2 -right-2 absolute h-8 w-8 text-rose-600"/>
        </div>
        <div class="bg-white rounded p-4 flex flex-col justify-between leading-normal">
            <div class="h-80 flex flex-col justify-between">
                <p class="text-sm text-gray-600 flex items-center">
                    {{ post.caption }}
                </p>
                <p class="self-end text-sm text-gray-400">Publié le {{ formatDate(post.timestamp) }}</p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed, ref } from 'vue'
import { useDateHelpers } from '../dateHelpers.js'
import { ArrowLeftCircleIcon, ArrowRightCircleIcon } from '@heroicons/vue/16/solid/index.js'

const props = defineProps({
    post: {
        type: Object,
        required: true,
        default: () => {}
    }
})

const { formatDate } = useDateHelpers()
const currentCarouselAlbumItem = ref(0)

const currentMediaUrl = computed(() => {
    if (props.post.mediaType === 'IMAGE') {
        return props.post.mediaUrl
    } else if(props.post.mediaType === 'CAROUSEL_ALBUM') {
        return props.post.children[currentCarouselAlbumItem.value].mediaUrl
    } else { // VIDEO
        return props.post.thumbnailUrl
    }
})

const previousImage = () => {
    if (currentCarouselAlbumItem.value > 0) {
        currentCarouselAlbumItem.value--
    }
}

const nextImage = () => {
    if (currentCarouselAlbumItem.value < props.post.children.length - 1) {
        currentCarouselAlbumItem.value++
    }
}

</script>

<style scoped>

</style>
