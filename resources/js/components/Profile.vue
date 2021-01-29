<template>
    <div id="login">
        <Header/>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" @submit.prevent="formSubmit">
                            
                            <div class="form-group">
                                <label for="firstname" class="text-info">First name:</label><br>
                                <input type="text" name="firstname" id="firstname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="text-info">Last Name:</label><br>
                                <input type="text" name="lastname" id="lastname" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="dob" class="text-info">Date of birth:</label><br>
                                <input type="text" name="dob" id="dob" class="form-control">
                            </div>
                            <button  type="submit"  class="btn btn-danger">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import Header from './Header';
export default {
    components:{
        Header
    },
     methods: {
        formSubmit() {
            alert('oke');
        }
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
    .text-info {
        color:  black!important;
    }
    #login .container #login-row #login-column #login-box {
        margin-top: 200px;
        max-width: 600px;
        height: 440px;
        background-color: #EAEAEA;
    }
    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #re   gister-link {
        margin-top: -85px;
    }
    .form-group{
        margin-top: 10%;
    }
   
</style>
