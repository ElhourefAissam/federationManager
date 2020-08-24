<template>
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Ajouter un Handicap
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
                        <!-- {{Form::token()}} -->
                        <div class=" form-group">
                            <label for="lebelFr">Nom</label>
                            <input type="text" name="lebelFr" v-model="lebelFr" class="form-control" placeholder="Handicap..">
                        </div>
                        <div class=" form-group">
                            <label for="lebelAr" class="float-right col-6 text-xl-right">الاسم</label>
                            <input type="text" name="lebelAr" v-model="lebelAr" class="form-control text-xl-right" placeholder="الاسم">
                        </div>
                        <div class=" form-group">
                            <label for="descriptionFr">Description</label>
                            <textarea rows="2" name="descriptionFr" v-model="descriptionFr" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class=" form-group">
                            <label for="descriptionAr" class="float-right col-6 text-xl-right">الوصف</label>
                            <textarea rows="2"  name="descriptionAr" v-model="descriptionAr" class="form-control text-xl-right" placeholder="الوصف"></textarea>
                        </div>
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Ajouter" @click="AddHandicap" data-dismiss="modal">
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
            Handicaps : {},
            lebelFr : '',
            lebelAr : '',
            descriptionFr : '',
            descriptionAr : ''
        }
    },
    methods : {
        AddHandicap : function(){
            axios.post('api/handicap',{
                lebelFr : this.lebelFr,
                lebelAr : this.lebelAr,
                descriptionFr : this.descriptionFr,
                descriptionAr : this.descriptionAr
            })
            .then((response) => {
                this.$emit('HandicapAdded',response)
                alert('Bien Ajouter')
            })
            .catch(error => console.log(error));
        }
    }
}
</script>>