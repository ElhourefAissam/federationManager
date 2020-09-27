<template>
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Ajouter un Employe
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un Employe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form >
                            <!-- {{Form::token()}} -->
                            <div class=" form-group">
                                <label for="NomFr">Nom</label>
                                <input type="text" name="NomFr" v-model="NomFr" class="form-control" placeholder="..">
                            </div>
                            <div class=" form-group">
                                <label for="NomAr" class="float-right col-6 text-xl-right">الاسم</label>
                                <input type="text" name="NomAr" v-model="NomAr" class="form-control text-xl-right" placeholder="">
                            </div>
                            <div class=" form-group">
                                <label for="CNI">CNI</label>
                                <input type="text" name="CNI" v-model="CNI" class="form-control" placeholder="..">
                            </div>
                            <div class=" form-group">
                                <div class="">
                                    <label for="Sexe">Date Naissance</label>
                                    <label for="DNS" class="float-right col-6 text-xl-right">تاريخ الازديد</label>
                                </div>
                                <input type="date" name="DNS" v-model="DNS" class="form-control text-xl-right" placeholder="">
                            </div>
                            <div class=" form-group">
                                <div>
                                    <label for="Sexe">Sexe</label>
                                    <label for="Sexe" class="float-right col-6 text-xl-right">الجنس</label>
                                </div>
                                <select name="Sexe" id="id_Sexe" class="form-control">
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>
                            <div class=" form-group">
                                <label for="StatutFamilierFr">StatutFamilierFr</label>
                                <select name="StatutFamilierFr" id="id_StatutFamilierFr" class="form-control">
                                    <option value="Marie">Marie</option>
                                    <option value="Celebataire">Celebataire</option>
                                </select>
                            </div>
                            <div class=" form-group">
                                <label for="StatutFamilierAr" class="float-right col-6 text-xl-right">الحالة العائلية</label>
                                <select name="StatutFamilierAr" id="id_StatutFamilierAr" class="form-control">
                                    <option value="Marie">متزوج</option>
                                    <option value="Celebataire">عازب</option>
                                </select>
                            </div>
                            <div class=" form-group">
                                <label for="Telephone">Telephone</label>
                                <input type="text" inputmode="tel" name="Telephone" v-model="Telephone" class="form-control" placeholder="..">
                            </div>
                            <div class=" form-group">
                                <label for="AdressFr" >Adress</label>
                                <input type="text" name="AdressFr" v-model="AdressFr" class="form-control text-xl-right" placeholder="Adress">
                            </div>
                            <div class=" form-group">
                                <label for="AdressAr" class="float-right col-6 text-xl-right">العنوان</label>
                                <input type="text" name="AdressAr" v-model="AdressAr" class="form-control" placeholder="العنوان">
                            </div>
                            <div class=" form-group">
                                <label for="Image" class="col-6">Image</label>
                                <input type="file" name="Image" @change="imageSelected" class="form-control file" id="Image">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Ajouter" @click="AddEmploye" data-dismiss="modal">
                    </div>
                </div>
            </div>
            <div v-if="imagepreview" class="mt-3">
                <img :src="imagepreview" class="figure-img img-fluid rounded"  style="max-height:100px;">
            </div>
        </div>
    </div>
</template>>
<script>
    export default {
        data : function(){
            return {
                Employess : {},
                NomFr : '',
                NomAr : '',
                CNI : '',
                DNS : '',
                Sexe : '',
                StatutFamilierFr : '',
                StatutFamilierAr : '',
                Telephone : '',
                AdressFr : '',
                AdressAr : '',
                Image : '',
                imagepreview: null,
            }
        },
        methods : {
            imageSelected(e){
                if(window.FileReader) {
                    var image  = e.target.files[0];
                    var reader = new FileReader();
                    if (image && image.type.match('image.*')) {
                    reader.readAsDataURL(image);
                    } else {
                    img.css('display', 'none');
                    img.attr('src', '');
                    }
                    reader.onloadend = function (e) {
                        this.imagepreview.attr('src', reader.result);
                        this.imagepreview.css('display', 'block');
                    }
                }
            },
            AddEmploye(){
                let data = new FormData();
                data.append('NomFr', this.NomFr);
                data.append('NomAr', this.NomAr);
                data.append('CNI', this.CNI);
                data.append('Sexe', this.Sexe);
                data.append('DNS', this.DNS);
                data.append('StatutFamilierFr', this.StatutFamilierFr);
                data.append('StatutFamilierAr', this.StatutFamilierAr);
                data.append('AdressFr', this.AdressFr);
                data.append('AdressAr', this.AdressAr);
                data.append('Telephone', this.Telephone);
                if(document.getElementById('Image').files[0]){
                    data.append('Image', document.getElementById('Image').files[0]);
                };
                axios.post('http://localhost/federationlaravel/public/api/employe/', data)
                .then( (response)=> {
                    this.$emit('EmployeAdded',response)
                })
                .catch(error => console.log(error));
            }
        }
    }
</script>