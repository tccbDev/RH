<template>
	<div class="content-body" style="    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: -87px;
    margin-left: 20px;" >
		<div class="container-fluid">
			<div class="col-xl-18 col-lg-18">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Nouveau projet</h4>
					</div>
					<div class="card-body">
						<div class="basic-form">
							<form>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label>Nom Projet</label>
										<input type="text" class="form-control" placeholder="" v-model="nomPro">
									</div>
									<div class="form-group col-md-6">
										<label>Numéro d'objet</label>
										<input type="text" class="form-control" placeholder="" v-model="numObj">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>Description</label>
										<textarea class="form-control" placeholder="Description du projet   ..."  v-model="description">
                                                    </textarea>

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Nature</label>
                                                       <br>
												<label class="radio-inline mr-3"><input type="radio" name="optradio" v-model="nature" value="executive"> Executive</label>
                                            <label class="radio-inline mr-3"><input type="radio" name="optradio" v-model="nature" value="delegue" > Délégué</label>	
											</div>
                                            </div>
                                            <div class="form-row">
											<div class="form-group col-md-6">
													<label>Nom  du client</label>
													<input type="text" class="form-control" placeholder="" v-model="nomCli">
                                                    <input type="text" class="form-control" placeholder="" id="image" v-model="imageBS64" hidden>
											</div>
                                            <div class="form-group col-md-6">
													<label>Photo du projet</label>
													<input type="file" @change="previewFiles">
											</div>
											
                                            </div>
                                            <div class="form-row">
											<div class="form-group col-md-6">
													<label>Date debut projet</label>
													<input type="date" class="form-control" placeholder="" v-model="datedebut">
											</div>
                                            <div class="form-group col-md-6">
													<label>Date fin Projet</label>
                                                    <input type="date" class="form-control" placeholder="" v-model="datefin">
													
											</div>
											
                                            </div>
											<div class="form-row">
											<div class="form-group col-md-6">
													<label>Code Analytique </label>
													<input type="text" class="form-control" placeholder="" v-model="codean">
											</div>

												<div class="form-group col-md-6">
													<label>Manager</label>
													<v-autocomplete
															:items="manager"
															label="Postes"
															v-model="ma"
															@change="change"
													></v-autocomplete>
												</div>
                                    
											
                                            </div>
											<button type="button" class="btn menu-btn" @click="clickButton">créer</button>
										</form>
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
				nomPro:'',
				codean:'',
				numObj:'',
				description:'',
				manager:[],
				nature:'',
				nomCli:'',
				datedebut:'',
				datefin:'',
				data:'',
				imageBS64:'',
				f:[],
				ma:'',
			}
		},
		methods: {
			async getData(){
				let d = [];
				await axios.get('http://localhost:8000/ListOfManagers').then(function (res) {
					var myObj = JSON.parse(res.data);
					for(var i =0;i<myObj.length;i++){
						//console.log(this.data)
						d.push(myObj[i])
					}
					//console.log(myObj)
				})
				//let a = []
				var i = 0;
				for(i;i<d.length;i++){
					//console.log(d[i])
				}
				let listOfObjects = Object.keys(d).map((key) => {
					return d[key].nom
				})
				this.manager = listOfObjects


			},
			change(){
				console.log(this.ma)
			},
			async clickButton(){
				const options = {
					headers: {'Content-Type': 'application/x-www-form-urlencoded'}
				};
				var im = document.getElementById("image").value
				console.log(this.ma)
				var data = {"manager":this.ma,"datedebut":this.datedebut,"datefin":this.datefin,"nomPro":this.nomPro,"numObj":this.numObj,"description":this.description,"nature":this.nature,"nomCli":this.nomCli,"codean":this.codean,"image":im}
				await axios.post('http://localhost:8000/AjouterProjet',data,options).then(res=>this.data=res.data.toString())
        this.$router.push('/Index');

			},
			previewFiles(event) {
				this.f=[];
				//console.log(this.getBase64(event.target.files[0]))
				//var i =0;
				//for(i;i<event.target.files.length;i++){
				this.getBase64(event.target.files[0])
				//var s = document.getElementById("image").value
				//console.log(this.imageBS64)
				//this.f.push(this.imageBS64)
				//}

				//console.log(this.f);


				//console.log(this.$refs.myFiles.files)
				//console.log(event.target.files);
			},

			getBase64(file) {
				//var image = '';
				//var d =[];
				var reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload =  function () {
					var s = reader.result.split(",");
					document.getElementById("image").value = s[1];

					//image = e.target.result
					/**var s = reader.result.split(",");
					 image = s[1];
					 return image ;
					 callback(reader.result);**/
					//console.log(image);
					//this.arraypush(image);
				};

				console.log(reader.result)
				reader.onerror = function (error) {
					console.log('Error: ', error);
				};

			},
			arraypush(d){
				this.file.push(d);
				console.log(this.file)
			}


		},
		beforeMount(){
			this.getData()
		}

	}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style >

</style>
