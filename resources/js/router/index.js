import { createRouter, createWebHistory } from 'vue-router'

import Home from '../pages/Home.vue'
import NotFound from '../pages/NotFound.vue'
import Posts from '../pages/Posts.vue'

const routes = [
    {
        path: '/',
        component: Home,
    },
    {
        path: '/instagram-users/:id',
        component: Posts,
    },
    // {
    //     path: '/:pathMatch(.*)*',
    //     component: NotFound,
    // }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
