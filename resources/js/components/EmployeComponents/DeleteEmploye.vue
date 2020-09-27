<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="DeleteModalLabel">Supprimer un Employe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Est que vous aves Supprimer cette Employe {{employe.Nom}}</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-danger" value="Suprrimer" @click="DeleteEmploye" data-dismiss="modal">
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
        DeleteEmploye : function(){
            axios.delete('http://localhost/federationlaravel/public/api/employe/'+this.employe.id)
            .then((response) => {
                this.$emit('EmployeDeleted',response)
            })
            .catch(error => console.log(error));
        }
    }
}
</script>