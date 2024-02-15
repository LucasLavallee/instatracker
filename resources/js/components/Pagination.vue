<template>
    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
        <div class="flex flex-1 justify-between sm:hidden">
            <p :class="isFirstPage ? 'bg-gray-200 hover:bg-gray-200' : ''" @click="previousPage()" href="#" class="relative inline-flex items-center rounded-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                <ChevronLeftIcon class="h-5 w-5" aria-hidden="true" />
                <span class="mr-2">Précédent</span>
            </p>
            <p @click="nextPage()" :class="isLastPage ? 'bg-gray-200 hover:bg-gray-200' : ''" href="#" class="relative inline-flex items-center rounded-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                <span class="ml-2">Suivant</span>
                <ChevronRightIcon class="h-5 w-5" aria-hidden="true" />
            </p>
        </div>
        <div class="hidden sm:flex sm:flex-1 sm:justify-between">
            <p :class="isFirstPage ? 'bg-gray-200 hover:bg-gray-200' : ''" @click="previousPage()" href="#" class="relative inline-flex items-center rounded-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                <ChevronLeftIcon class="h-5 w-5" aria-hidden="true" />
                <span class="mr-2">Précédent</span>
            </p>
            <div>
                <p href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-rose-500 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-600">Page {{ paginationData.currentPage }} / {{ paginationData.lastPage }}</p>
            </div>
            <p @click="nextPage()" :class="isLastPage ? 'bg-gray-200 hover:bg-gray-200' : ''" href="#" class="relative inline-flex items-center rounded-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                <span class="ml-2">Suivant</span>
                <ChevronRightIcon class="h-5 w-5" aria-hidden="true" />
            </p>
        </div>
    </div>
</template>

<script setup>
import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/20/solid'
import { computed } from 'vue'

const emit = defineEmits(['previousPage', 'nextPage'])

const props = defineProps({
    paginationData: {
        type: Object,
        required: true,
        default: () => {}
    }
})

const nextPage = () => {
    if (isLastPage.value) {
        return
    }
    emit('nextPage')
}

const previousPage = () => {
    if (isFirstPage.value) {
        return
    }
    emit('previousPage')
}

const isLastPage = computed(() => {
    return parseInt(props.paginationData.currentPage) === props.paginationData.lastPage
})

const isFirstPage = computed(() => {
    return parseInt(props.paginationData.currentPage) === 1
})

</script>

<style scoped>

</style>
