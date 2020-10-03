<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="DeleteModalLabel">Suuprimer un Office</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4>Est que vous aves Supprimer Office {{office.lebelFr}}</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-danger" value="Suprrimer" @click="DeleteOffice" data-dismiss="modal">
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
            Offices : {}
        }
    },
    methods : {
        DeleteOffice : function(){
            axios.delete('http://localhost/federationlaravel/public/api/Office/'+this.office.id)
            .then((response) => {
                this.$emit('OfficeDeleted',response)
            })
            .catch(error => console.log(error));
        }
    }
}
</script>