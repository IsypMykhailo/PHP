import { defineStore } from 'pinia'
import { useAuthStore } from './auth'

export const useStore = defineStore('user', {
    state: () => (
        {
            id: null,
            name: '',
            email: '',
            email_verified_at: null,
            password: '',
            password_confirmation: '',
            created_at: null
        }),
    getters: {
        loggedIn: (state) => state.id !== null,
    },
    actions: {
        updateUser (payload) {
            this.id = payload.id
            this.name = payload.name
            this.email = payload.email
            this.email_verified_at = payload.email_verified_at
            this.created_at = payload.created_at
        },
        clearUser () {
            this.$reset()
        }

        /*
        confirmJwt () {
            if (this.loggedIn)
                return;
            const authStore = useAuthStroe()
            if (authStore.jwt)
            {
                fetch(authStore.combineUrl('auth/jwt'), {
                    method: 'GET',
                    headers: {
                        'authorization': authStore.jwt,
                        'Content-Type': 'application/json'
                    },
                })
                    .then(res => {
                        if (res && res.status === 200) {
                            return res.json()
                        }
                        else if (res && res.status === 401) {
                            this.clearUser()
                            authStore.forgetJwt()
                        }
                    })
                    .then(data => {
                        if (data)
                            this.updateUser(data)
                    })
            }
            else
            {
                this.clearUser()
            }
        },
         */
    }

})
