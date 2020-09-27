<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="EditModalLabel">Modifie un type de Handicap</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="lebelFr">Nom</label>
                                <input type="text" name="lebelFr" v-model="handicap.lebelFr" class="form-control" placeholder="Handicap..">
                            </div>
                            <div class="form-group">
                                <label for="lebelAr" class="float-right col-6 text-xl-right">الاسم</label>
                                <input type="text" name="lebelAr" v-model="handicap.lebelAr" class="form-control text-xl-right" placeholder="الاسم">
                        </div>
                            <div class=" form-group">
                                <label for="descriptionFr">Description</label>
                                <textarea rows="2" name="descriptionFr" v-model="handicap.descriptionFr" class="form-control" placeholder="Description"></textarea>
                            </div>
                            <div class=" form-group">
                                <label for="descriptionAr" class="float-right col-6 text-xl-right">الوصف</label>
                                <textarea rows="2"  name="descriptionAr" v-model="handicap.descriptionAr" class="form-control text-xl-right" placeholder="الوصف"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Modifie" @click="UpdateHandicap" data-dismiss="modal">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props : ['handicap'],
     data : function(){
        return {
           
        }
    },
    methods : {
        UpdateHandicap : function(){
            axios.put('http://localhost/federationlaravel/public/api/handicap/'+this.handicap.id,{
                lebelFr : this.handicap.lebelFr,
                lebelAr : this.handicap.lebelAr,
                descriptionFr : this.handicap.descriptionFr,
                descriptionAr : this.handicap.descriptionAr
            })
            .then((response) => {
                this.$emit('HandicapUpdated',response)
            })
            .catch(error => console.log(response));
        }
    }
}
</script>