<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="DeleteModalLabel">Delete un type de Handicap </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Est que vous aves Supprimer ce type de Handicap {{handicap.lebelFr}}</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-danger" value="Suprrimer" @click="DeleteHandicap" data-dismiss="modal">
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
            Handicaps : {}
        }
    },
    methods : {
        DeleteHandicap : function(){
            axios.delete('http://localhost/federationlaravel/public/api/handicap/'+this.handicap.id)
            .then((response) => {
                this.$emit('HandicapDeleted',response)
            })
            .catch(error => console.log(error));
        }
    }
}
</script>