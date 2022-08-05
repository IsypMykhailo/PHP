import './bootstrap'


// Подключение Vie И его центрального компонента
import { createApp } from 'vue'
import Welcome from './components/Welcome'
const app = createApp(Welcome)

// Подключение хранилища
import { createPinia } from 'pinia'
const pinia = createPinia()
app.use(pinia)

// Подключение системы коротких сообщений
import Toaster from '@meforma/vue-toaster'
app.use(Toaster)


// Подключение маршрутов
import router from "./router";
app.use(router)

// Внедрение Vue в страницу
app.mount('#app')
