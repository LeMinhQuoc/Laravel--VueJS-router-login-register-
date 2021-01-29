<template>
       <div id="login">
        <Header/>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" @submit.prevent="formSubmit">
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" v-model="create.username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" v-model="create.password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="text-info">First Name:</label><br>
                                <input type="text" name="firstname" id="firstname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="text-info">Last Name:</label><br>
                                <input type="text" name="lastname" id="lastname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <span v-if="error.name">{{error.name}}</span>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <button  type="submit"  class="btn btn-danger">Register</button>
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
    data() {
         return {
            
            create:{
                username:'',
                password:'',
                email:''
            },
            
            success: '',
            result:'',
            error:[]
        }
    },

      methods: {
        formSubmit() {
            let existingObj = this;
            console.log(this.create.username);
            console.log(this.create.password);
            
            axios.post('http://127.0.0.1:8000/api/login/', this.create)
                .then(function (res) {
                    existingObj.success = res.data.success;
                    existingObj.result = res.data.result;
    
                    if( existingObj.result != 0){
                        alert(existingObj.success);
                        window.location.href = 'http://127.0.0.1:8000/userprofile';
                    }
                    
                    else{
                        alert('Login fail. Please fill out correct account!');
                        window.location.href = 'http://127.0.0.1:8000';
                    }
                })
                
                .catch(function (err) {
                    existingObj.output = err;
                });
        }
     }       
}
</script>
<style scoped>
    #login {
        margin: 0;
        padding: 0;
        background-image: url('https://raw.githubusercontent.com/LeMinhQuoc/API-Laravel/main/Background.png');
       
    }
    .text-info {
        color:  black!important;
    }
    #login .container #login-row #login-column #login-box {
        margin-top: 200px;
        max-width: 600px;
        margin-bottom: 100px;
        height: 670px;
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
