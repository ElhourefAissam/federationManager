<template>
    <div>
        <Add-Handicap class=" m-3" @HandicapAdded="getResults"></Add-Handicap>
        <div class=" container-small">
            <input type="text" class="form-control" @keyup="FindHandicap" v-model="q" placeholder="Recherche">
        </div>
        <div class=" list-group mb-3" v-for="handicap in Handicaps.data" :key="handicap.id">
            <div class="list-group-item m-lg-1">
                 <h3><a href="#"> <span>{{handicap.lebelFr}}</span> &ThinSpace; <span class=" float-right">{{handicap.lebelAr}}</span></a></h3>
                <div class="inline">
                    <small class="float-left col-6">{{handicap.descriptionFr}}</small>
                    <small class="float-right col-6 text-lg-right">{{handicap.descriptionAr}}</small>
                </div>
                <div class="inline text-md-center mt-5">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#EditModal"
                            @click="getHandicap(handicap)">
                        Modifie
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal"
                            @click="getHandicap(handicap)">
                        Supprimer
                    </button>
                </div>
            </div>
        </div>
        <div>
            <Edit-Handicap :handicap="handicap" @HandicapUpdated="getResults"></Edit-Handicap>
            <Delete-Handicap :handicap="handicap" @HandicapDeleted="getResults"></Delete-Handicap>
        </div>
        <div class="">
            <pagination :data="Handicaps" @pagination-change-page="getResults" class="mt-5"></pagination>
        </div>
        <div v-if="!this.Handicaps" class=" alert-danger">
          <h3>No Handicaps load!!</h3>
        </div>       
    </div>
</template>
<script>
export default {
    data : function(){
        return {
            Handicaps : {},
            handicap : {},
            q : ''
        }
    },
    mounted(){
         this.getResults();
    },
    methods : {
        getResults(page = 1) {
			axios.get('http://localhost/federationlaravel/public/api/handicap/'+ this.q+'?page=' + page)
				.then(response => {
					this.Handicaps = response.data;
				});
        },
        getHandicap(handicap){
                this.handicap = handicap;
        },
        refresh(Handicaps){
            this.Handicaps = Handicaps.data;
        },
        FindHandicap(){
            if(this.q.length > 0){
                axios.get('http://localhost/federationlaravel/public/api/handicap/'+ this.q)
				.then(response => {
                    this.Handicaps = response.data;
				});
            }else
                this.getResults();
        }
    }
}
</script>