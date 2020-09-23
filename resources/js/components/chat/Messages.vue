<template>
    <div class="messages">
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
    created() {
        this.loadMessages()
    },

    data () {
        return {
            laoding: false,
        }
    },

    computed: {
        messages () {
            return this.$store.state.chat.messages
        }
    },

    methods: {
        loadMessages() {
            this.loading = true

            this.$store.dispatch('loadMessages')
                .finally(() => this.loading = false)

        }
    },

    components: {
        ScaleLoader
    }
}
</script>