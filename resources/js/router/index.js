import { createRouter, createWebHistory } from 'vue-router'

import Home from '../pages/Home.vue'
import Posts from '../pages/Posts.vue'

const routes = [
    {
        path: '/',
        component: Home,
    },
    {
        path: '/instagram-users/:id',
        component: Posts,
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
