<template>
    <div class="my-component">
        <div>{{ message }}</div>
        <div><button @click="sayHello">Click me</button></div>
    </div>
</template>

<script>
    export default{
        data() {
            return {
                message : 'abc'
            }
        },
        methods : {
            sayHello() {
                alert('Hello World')
            }
        },
        computed : {
            sayGoodbye() {
                return alert(this.message)
            }
        }
    }
</script>

<style lang="scss" scoped>
    .my-component {
        color : blue;
    }
</style>

