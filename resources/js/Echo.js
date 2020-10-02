const { default: Echo } = require("laravel-echo");
const { Store } = require("vuex");

Echo.join('chat')
    .here(users => {
        Store.commit('LOAD_USERS', users)
    })
    .joining(users => {
        console.log('joining')
        console.log(users)
    })
    .leaving(users => {
        console.log('leaving')
        console.log(users)
    })