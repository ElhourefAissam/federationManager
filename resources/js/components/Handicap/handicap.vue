<template>
    <div>
        <div class=" form-row">
            <input type="text" class=" form-control" @keyup="FindHandicap" v-model="q">
        </div>
        <AddHandicap class=" m-3" @HandicapAdded="getResults"></AddHandicap>
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
            <EditHandicap :handicap="handicap" @HandicapUpdated="getResults"></EditHandicap>
            <DeleteHandicap :handicap="handicap" @HandicapDeleted="getResults"></DeleteHandicap>
        </div>
            <pagination :data="Handicaps" @pagination-change-page="getResults" class="mt-5"></pagination>
        <div v-if="!Handicaps.data" class=" alert-danger">
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
			axios.get('api/handicap/'+ this.q+'?page=' + page)
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
                axios.get('api/handicap/'+ this.q)
				.then(response => {
                    this.Handicaps = response.data;
				});
            }else
                this.getResults();
        }
    }
}
</script>