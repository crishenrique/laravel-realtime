<template>
    <div class="messages scroll" ref="messages">
        <scale-loader 
            :loading="loading">
        </scale-loader>
        
        <message 
            v-for="message in messages" 
            :key="message.id"
            :message="message">
        </message>  
    </div>  
</template>

<script>
import ScaleLoader from 'vue-spinner/src/ScaleLoader.vue'

export default {
    created () {
        this.loadMessages()
    },

    data () {
        return {
            laoding: false,
        }
    },

    computed: {
        messages () {
            // return this.$store.state.chat.messages
            return this.$store.getters.messages
        }
    },

    methods: {
        loadMessages() {
            this.loading = true

            this.$store.dispatch('loadMessages')
                .finally(() => {
                    this.loading = false

                    this.scrollMessages()
                })
    },

    scrollMessages() {
        setTimeout(() => {
            this.$refs.messages.scroll({
                top: this.$refs.messages.scrollHeight,
                let: 0,
                behavior: 'smooth'
                })
            }, 100)
        }
    },

    watch: {
        messages() {
            this.scrollMessages()
        }
    },

    components: {
        ScaleLoader
    }
}
</script>

<style scoped>
.messages{
    height: 400px;
    max-height: 400px;
    overflow-x: hidden;
    overflow-y: auto;
}

.scroll::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
    background-color: #f5f5f5;
}
.scroll::-webkit-scrollbar-track
{
    width: 12px;
    background-color: #f5f5f5;
}
.scroll::-webkit-scrollbar
{
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #D62929;
}

</style>