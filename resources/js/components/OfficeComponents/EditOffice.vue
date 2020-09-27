<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="EditModalLabel">Modifie un Office</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class=" form-group">
                            <label for="lebelFr">Nom</label>
                            <input type="text" name="lebelFr" v-model="office.lebelFr" class="form-control" placeholder="office..">
                            </div>
                            <div class=" form-group">
                                <label for="lebelAr" class="float-right col-6 text-xl-right">الاسم</label>
                                <input type="text" name="lebelAr" v-model="office.lebelAr" class="form-control text-xl-right" placeholder="الاسم">
                            </div>
                            <div class=" form-group">
                                <label for="AdressFr">Adresse</label>
                                <textarea rows="2" name="AdressFr" v-model="office.AdressFr" class="form-control" placeholder="Adress"></textarea>
                            </div>
                            <div class=" form-group">
                                <label for="AdressAr" class="float-right col-6 text-xl-right">العنوان</label>
                                <textarea rows="2"  name="AdressAr" v-model="office.AdressAr" class="form-control text-xl-right" placeholder="العنوان"></textarea>
                            </div>
                            <div class=" form-group">
                                <label for="Telephone" class="float-right col-6 text-xl-center">Telephone</label>
                                <input type="text" name="Telephone" v-model="office.Telephone" class="form-control text-xl-center" placeholder="الاسم">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Modifie" @click="UpdateOffice" data-dismiss="modal">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props : ['office'],
     data : function(){
        return {
            
        }
    },
    methods : {
        UpdateOffice : function(){
            axios.put('http://localhost/federationlaravel/public/api/office/'+this.office.id,{
                lebelFr : this.office.lebelFr,
                lebelAr : this.office.lebelAr,
                AdressFr : this.office.AdressFr,
                AdressAr : this.office.AdressAr,
                Telephone : this.office.Telephone
            })
            .then((response) => {
                this.$emit('OfficeUpdated',response)
            })
            .catch(error => console.log(response));
        }
    }
}
</script>