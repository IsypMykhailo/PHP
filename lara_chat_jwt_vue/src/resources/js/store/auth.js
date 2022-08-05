import { defineStore } from 'pinia'

export const useAuthStore = defineStore('auth', {
    state: () => ({
        jwt: localStorage.getItem('jwt') || null
    }),
    getters: {
    },
    actions: {
        rememberJwt(jwt) {
            this.jwt = jwt
            localStorage.setItem('jwt', jwt)
        },
        forgetJwt() {
            this.jwt = null
            localStorage.removeItem('jwt')
        },
    }
})
