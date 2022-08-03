import {createWebHistory, createRouter} from "vue-router/dist/vue-router"

const routes = [
    {
        path: '/',
        name: 'Home',
        component: () => import( /*webpackChunkName: "Home" */ './../pages/PageHome.vue')
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'Error404',
        component: () => import( /*webpackChunkName: "Error404" */ './../pages/PageError404.vue')
    },

]

const index = createRouter({
    history: createWebHistory(),
    routes
})

export default index
