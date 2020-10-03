<template>
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Ajouter un Office
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un type de Handicap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class=" form-group">
                            <label for="lebelFr">Nom</label>
                            <input type="text" name="lebelFr" v-model="lebelFr" class="form-control" placeholder="office..">
                        </div>
                        <div class=" form-group">
                            <label for="lebelAr" class="float-right col-6 text-xl-right">الاسم</label>
                            <input type="text" name="lebelAr" v-model="lebelAr" class="form-control text-xl-right" placeholder="الاسم">
                        </div>
                        <div class=" form-group">
                            <label for="AdressFr">Adresse</label>
                            <textarea rows="2" name="AdressFr" v-model="AdressFr" class="form-control" placeholder="Adress"></textarea>
                        </div>
                        <div class=" form-group">
                            <label for="AdressAr" class="float-right col-6 text-xl-right">العنوان</label>
                            <textarea rows="2"  name="AdressAr" v-model="AdressAr" class="form-control text-xl-right" placeholder="العنوان"></textarea>
                        </div>
                        <div class=" form-group">
                            <label for="Telephone" class="float-right col-6 text-xl-center">Telephone</label>
                            <input type="text" name="Telephone" v-model="Telephone" class="form-control text-xl-center" placeholder="الاسم">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Ajouter" @click="AddOffice" data-dismiss="modal">
                </div>
            </div>
            </div>
        </div>
    </div>
</template>>
<script>
export default {
    data : function(){
        return {
            Office : {},
            lebelFr : '',
            lebelAr : '',
            AdressFr : '',
            AdressAr : '',
            Telephone : ''
        }
    },
    methods : {
        AddOffice : function(){
            axios.post('http://localhost/federationlaravel/public/api/Office',{
                lebelFr : this.lebelFr,
                lebelAr : this.lebelAr,
                AdressFr : this.AdressFr,
                AdressAr : this.AdressAr,
                Telephone : this.Telephone
            })
            .then((response) => {
                this.$emit('OfficeAdded',response)
            })
            .catch(error => console.log(error));
        }
    }
}
</script>>