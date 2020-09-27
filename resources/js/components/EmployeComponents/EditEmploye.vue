<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="EditModalLabel">Modifie information d'employe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <!-- {{Form::token()}} -->
                            <div class=" form-group">
                                <label for="NomFr">Nom</label>
                                <input type="text" name="NomFr" v-model="employe.NomFr" class="form-control" placeholder="Handicap..">
                            </div>
                            <div class=" form-group">
                                <label for="NomAr" class="float-right col-6 text-xl-right">الاسم</label>
                                <input type="text" name="NomAr" v-model="employe.NomAr" class="form-control text-xl-right" placeholder="الاسم">
                            </div>
                            <div class=" form-group">
                                <label for="CNI">CNI</label>
                                <input type="text" name="CNI" v-model="employe.CNI" class="form-control" placeholder="Handicap..">
                            </div>
                            <div class=" form-group">
                                <label for="DNS" class="float-right col-6 text-xl-right">الاسم</label>
                                <input type="date" name="DNS" v-model="employe.DNS" class="form-control text-xl-right" placeholder="الاسم">
                            </div>
                            <div class=" form-group">
                                <label for="Sexe">Sexe</label>
                                <select name="Sexe" id="Sexe" class="form-control">
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>
                            <div class=" form-group">
                                <label for="StatutFamilierFr">Statut Familier</label>
                                <select name="StatutFamilierFr" id="StatutFamilierFr" class="form-control">
                                    <option value="Marie">Marie</option>
                                    <option value="Celebataire">Celebataire</option>
                                </select>
                            </div>
                            <div class=" form-group">
                                <label for="StatutFamilierAr">الحالة العائلية</label>
                                <select name="StatutFamilierAr" id="StatutFamilierAr" class="form-control">
                                    <option value="Marie">متزوج</option>
                                    <option value="Celebataire">عازب</option>
                                </select>
                            </div>
                            <div class=" form-group">
                                <label for="Telephone">Telephone</label>
                                <input type="text" name="Telephone" v-model="employe.Telephone" class="form-control" placeholder="Handicap..">
                            </div>
                            <div class=" form-group">
                                <label for="AdressFr" class="float-right col-6 text-xl-right">Adress</label>
                                <input type="text" name="AdressFr" v-model="employe.AdressFr" class="form-control text-xl-right" placeholder="الاسم">
                            </div>
                            <div class=" form-group">
                                <label for="AdressAr">العنوان</label>
                                <input type="text" name="AdressAr" v-model="employe.AdressAr" class="form-control" placeholder="Handicap..">
                            </div>
                            <div class=" form-group">
                                <label for="Image" class="float-right col-6 text-xl-right">Image</label>
                                <input type="file" name="Image"  class="form-control text-xl-right" placeholder="الاسم">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Modifie" @click="UpdateEmploye" data-dismiss="modal">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props : ['employe'],
     data : function(){
        return {
           
        }
    },
    methods : {
        UpdateEmploye : function(){
            let data = new FormData();
                data.append('NomFr', this.employe.NomFr);
                data.append('NomAr', this.employe.NomAr);
                data.append('CNI', this.employe.CNI);
                data.append('Sexe', this.employe.Sexe);
                data.append('DNS', this.employe.DNS);
                data.append('StatutFamilierFr', this.employe.StatutFamilierFr);
                data.append('StatutFamilierAr', this.employe.StatutFamilierAr);
                data.append('AdressFr', this.employe.AdressFr);
                data.append('AdressAr', this.employe.AdressAr);
                data.append('Telephone', this.employe.Telephone);
                    for (var pair of data.entries()) {
                        console.log(pair[0]+ ', ' + pair[1]); 
                    }
                if(document.getElementById('Image').files[0]){
                    data.append('Image', document.getElementById('Image').files[0]);
                }
                axios.put('http://localhost/federationlaravel/public/api/employe/'+this.employe.id, data)
                .then( (response)=> {
                    this.$emit('EmployeUpdated',response)
                })
                .catch(error => console.log(error));
        }
    }
}
</script>