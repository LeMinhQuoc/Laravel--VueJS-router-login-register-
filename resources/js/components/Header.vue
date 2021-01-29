<template>
    <div class="contain">
            <div class="header">
                <div class="header-right">
                <h6>LOGO</h6>
                </div>
                <div class= "header-left">
                    <h6><router-link to="/home">HOME</router-link></h6>
                    <h6><router-link to="/login">LOGIN</router-link></h6>
                    <h6>EDIT PROFILE</h6>
                    <h6>IMAGE</h6>
                    <h6><router-link to="/register">REGISTER</router-link></h6>
                </div>
            </div>
        </div>
</template>

<style>
    .header{
        display: flex;
        justify-content: space-between;
        background-color: white;
        opacity: 0.8;
        height: auto;
    }
    .header h6{
        padding: 20px;
    }
    .header-left{
        display: flex;
    }
</style>