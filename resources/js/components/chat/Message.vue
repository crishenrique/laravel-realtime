<template>
    <div class="message">
        <b>{{ message.user.name }} disse:</b> {{ message.body }}
    </div>
</template>

<script>
export default {
    props: ['message']
    
}
</script>