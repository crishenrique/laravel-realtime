import store from './store/store'

Echo.join('chat')
    .here(users => {
        store.commit('LOAD_USERS', users)
    })
    .joining(user => {
        store.commit('JOINING_USER', user)
    })
    .leaving(user => {
        console.log('leaving')
        console.log(user)
    })