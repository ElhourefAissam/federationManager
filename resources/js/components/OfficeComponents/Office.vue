<template>
    <div>
            <h1 class=" text-info  m-md-3">Liste des Offices</h1>
            <Add-Office class=" m-3" @OfficeAdded="getResults"></Add-Office>
            <div class=" container-small mb-2">
                <input type="text" class="form-control" @keyup="FindOffice" v-model="q" placeholder="Recherche">
            </div>
            <div class="card-group mb-3" v-for="office in Offices.data" :key="office.id">
                <div class="card mb-3">
                    <div class="m-2">
                        <img src="https://images.squarespace-cdn.com/content/v1/5a5906400abd0406785519dd/1552662149940-G6MMFW3JC2J61UBPROJ5/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/baelen.jpg?format=1500w" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <a href="" @click="then.show = true">
                            <h5 class="card-title">
                                <span>{{office.lebelFr}}</span> &ThinSpace; 
                                <span class="float-right">{{office.lebelAr}}</span>
                            </h5>
                            <p class="card-text">
                                <small class="float-left col-6">{{office.AdressFr}}</small>
                                <small class="float-right">{{office.AdressAr}}</small>
                                <small class="float-left col-6">{{office.Telephone}}</small>
                            </p>
                        </a>
                    </div>
                    <div class="inline text-md-center mt-2 mb-3">
                        <router-link :to="{name: 'DetailsOffices', params: {id:office.id}}" class="btn btn-primary">Afficher</router-link>                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#EditModal"
                                @click="getOffice(office)">
                            Modifie
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal"
                                @click="getOffice(office)">
                            Supprimer
                        </button>
                    </div>
                </div>
            </div>
            <div>
                <Edit-Office :office="office" @OfficeUpdated="getResults"></Edit-Office>
                <Delete-Office :office="office" @OfficeDeleted="getResults"></Delete-Office>
            </div>
            <div class="">
                <pagination :data="Offices" @pagination-change-page="getResults" class="mt-5"></pagination>
            </div>
            <div v-if="!this.Offices.data" class="alert-danger">
                <h3>No Offices load!!</h3>
            </div>    
    </div>
</template>
<script>
export default {
    data : function(){
        return {
            Offices : {},
            office : {},
            q : ''
        }
    },
    mounted(){
         this.getResults();
    },
    methods : {
        getResults(page = 1) {
			axios.get('http://localhost/federationlaravel/public/api/Office/'+ this.q+'?page=' + page)  
				.then(response => {
					this.Offices = response.data;
				});
        },
        getOffice(office){
                this.office = office;
                then.show = true;
        },
        refresh(Offices){
            this.Offices = Offices.data;
        },
        FindOffice(){
            if(this.q.length > 0){
                axios.get('http://localhost/federationlaravel/public/api/Office/'+ this.q)
				.then(response => {
                    this.Offices = response.data;
				});
            }else
                this.getResults();
        }
    }
}
</script>