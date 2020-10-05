import store from './store/store'

Echo.join('chat')
    .here(users => {
        store.commit('LOAD_USERS', users)
    })
    .joining(users => {
        console.log('joining')
        console.log(users)
    })
    .leaving(users => {
        console.log('leaving')
        console.log(users)
    })