<template>

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
                                    <h4 class="text-center mb-4">Inscription</h4>
                                    <form action="index.html">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="username" v-model="usename">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" v-model="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Mot de passe</strong></label>
                                            <input type="password" class="form-control" value="Mot de passe" v-model="password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="Button" class="btn btn-primary btn-block" @click="clickButton()">S'inscrire</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Vous avez déja un compte? <a class="text-primary" href="/Login">Se connecter</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->


</template>

<script>
  import axios from 'axios';

export default {
  components: {
      
    },
    data () {
        return {
            usename:'',
            email:'',
            password:'',
            data:'',
        }
    },
    methods: {
        async clickButton(){
            const options = {
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            };
            var data = {"username":this.usename,"password":this.password,"email":this.email}
            await axios.post('http://127.0.0.1:8000/register',data,options).then(res=>this.data=res.data.toString())
            if(this.data ==="Done"){
                this.$router.push("/Login")
            }
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
