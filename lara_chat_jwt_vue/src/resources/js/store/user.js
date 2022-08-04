import {defineStore} from 'pinia';

export const useStore = defineStore('user', {
    state: ()=>({
        id:null,
        name:'',
        email:'',
        email_verified_at:null,
        password:'',
        password_confirmation:'',
        created_at:null
    }),
    getters: {
        loggedIn: (state)=>state.id !==null,
    },
    actions: {
        updateUser (payload){
            this.id = payload.id
            this.name = payload.name
            this.email = payload.email
            this.email_verified_at = payload.email_verified_at
        }
    }
})
