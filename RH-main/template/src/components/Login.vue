<template>

    <v-app>
<div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Se connecter ?</h4>
                                    <form action="index.html">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" name="email" v-model="email">
                                            <label class="col-lg-4 col-form-label" for="email" v-if="emailresponse">
                                                <span class="text-danger">{{error}}</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Mot de passe</strong></label>
                                            <input type="password" class="form-control" placeholder="Mot de passe" name="password" v-model="password">
                                            <label class="col-lg-4 col-form-label" for="password" v-if="passwordresponse">
                                                <span class="text-danger">{{error}}</span>
                                            </label>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Mot de passe oublié ?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="Button" class="btn btn-primary btn-block" @click="login()">Se connecter</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </v-app>
</template>
<script>
    import axios from 'axios';

    export default {
        components: {

        },
        data () {
            return {
                emailresponse:false,
                passwordresponse:false,
                email:'',
                password:'',
                data:[],
                response:[],
                error:''

            }
        },
        methods: {
                 async login(){
                     localStorage.clear()
                var d = {"email":this.email,"password":this.password}
                     const options = {
                         headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                     };
                 await axios.post('http://127.0.0.1:8000/Login',d,options).then(res=>this.data.push(res.data)).catch(error=>this.response=error.response)
                     console.log(this.data)
                if(this.data!=null){
                    //localStorage.clear()
                    //console.log(this.data)
                    localStorage.setItem("user",JSON.stringify(this.data[0]))
                    if(this.data[0].nom == null && this.data[0].role !== "admin"){
                        this.$router.push("/ModifierUser")
                    }else{
                        if(this.data[0].role ==="admin"){
                            this.$router.push("/DashBoardAdmin")
                        }else{
                            this.$router.push("/index")
                        }

                    }

                    //console.log(localStorage.getItem("user"))
                    //console.log(this.data[0])
                }if(this.response!=null){

                    this.error = this.response.data;
                         if(this.error==="Email invalide"){
                             this.emailresponse = true;
                             this.passwordresponse = false
                         }
                         if(this.error ==="Mot de passe invalide"){
                             this.emailresponse = false;
                             this.passwordresponse = true;
                         }
                    //console.log(this.response)
                }
                //localStorage.clear()
                     //console.log(JSON.parse(localStorage.getItem("user")))
            }

        },
        beforeMount(){
            //this.getData()
        }

    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style >

</style>

