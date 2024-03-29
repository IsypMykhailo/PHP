import { defineStore } from 'pinia'
import {useToastStore} from "./toast";

const serverUrl = 'http://localhost:8000/api/'

export const useApiStore = defineStore('api', {
    getters: {
        get(url, options = {}) {
            fetch(serverUrl + url)
                .then(res=> {
                    return res.json()
                })
                .then(json => {
                    return json
                })
                .catch(err => {
                    const toast = useToastStore()
                    toast.error(err)
                })
        },
        post (url, data, options = {}){
            options.method = 'POST'
            options.body = data
            fetch(serverUrl + url, options)
                .then(res=> {
                    return res.json()
                })
                .then(json => {
                    return json
                })
                .catch(err => {
                    const toast = useToastStore()
                    toast.error(err)
                })
        }
    }
})


/*
// Пример отправки POST запроса:
async function postData(url = '', data = {}) {
  // Default options are marked with *
  const response = await fetch(url, {
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: {
      'Content-Type': 'application/json'
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *client
    body: JSON.stringify(data) // body data type must match "Content-Type" header
  });
  return await response.json(); // parses JSON response into native JavaScript objects
}
postData('https://example.com/answer', { answer: 42 })
  .then((data) => {
    console.log(data); // JSON data parsed by `response.json()` call
  });
 */
