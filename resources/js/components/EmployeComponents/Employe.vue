<template>
    <div>
        <Add-Employe class=" m-3" @EmployeAdded="getResults"></Add-Employe>
        <div class=" container-small">
            <input type="text" class="form-control" @keyup="FindEmploye" v-model="q" placeholder="Recherche">
        </div>
        <div class=" list-group mb-3" v-for="employe in Employes.data" :key="employe.id">
            <div class="list-group-item m-lg-1">
                 <h3><a href="#"> <span>{{employe.NomFr}}</span> &ThinSpace; <span class=" float-right">{{employe.NomAr}}</span></a></h3>
                <div class="inline">
                    <small class="float-left col-6">{{employe.AdressFr}}</small>
                    <small class="float-right col-6 text-lg-right">{{employe.AdressAr}}</small>
                </div>
                <div class="inline text-md-center mt-5">
                    <router-link :to="{name :'ShowEmploye', params:{id:employe.id}}" class="btn btn-primary">Detail</router-link>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#EditModal"
                            @click="getEmploye(employe)">
                        Modifie
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal"
                            @click="getEmploye(employe)">
                        Supprimer
                    </button>
                </div>
            </div>
        </div>
        <div>
            <Edit-Employe :employe="employe" @EmployeUpdated="getResults"></Edit-Employe>
            <Delete-Employe :employe="employe" @EmployeDeleted="getResults"></Delete-Employe>
        </div>
        <div class="">
            <pagination :data="Employes" @pagination-change-page="getResults" class="mt-5"></pagination>
        </div>
        <div v-if="!this.Employes" class=" alert-danger">
          <h3>No Employes load!!</h3>
        </div>       
    </div>
</template>
<script>
export default {
    data : function(){
        return {
            Employes : {},
            employe : {},
            q : ''
        }
    },
    mounted(){
         this.getResults();
    },
    methods : {
        getResults(page = 1) {
			axios.get('http://localhost/federationlaravel/public/api/employe/'+ this.q+'?page=' + page)
				.then(response => {
					this.Employes = response.data;
				});
        },
        getEmploye(employe){
                this.employe = employe;
        },
        refresh(Employes){
            this.Employes = Employes.data;
        },
        FindEmploye(){
            if(this.q.length > 0){
                axios.get('http://localhost/federationlaravel/public/api/employe/'+ this.q)
				.then(response => {
                    this.Employes = response.data;
				});
            }else
                this.getResults();
        }
    }
}
</script>