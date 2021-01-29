<template>
     <div id="login">
        <Header/>
    </div>
</template>

<script>
    import Header from './Header';
    export default {
        components:{
            Header
        }
    }
</script>

<style scoped>
   #login {
        margin: 0;
        padding: 0;
        background-image: url('https://raw.githubusercontent.com/LeMinhQuoc/API-Laravel/main/Background.png');
        height: 100vh;
    }

</style>
