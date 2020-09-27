<template>
    <div>
       <div class="">
			<div class="">
				
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           			Ajouter un Employe
        		</button>
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
                                <input type="text" name="NomFr" v-model="data.roleName" class="form-control" placeholder="Role">
                            </div>
                        </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Ajouter" @click="addRole" data-dismiss="modal">
                    </div>
                </div>
              </div>
            </div>
          </div>
				<div class="">
					<div class="">
						<table class="_table">
								<!-- TABLE TITLE -->
							<tr>
								<th>ID</th>
								<th>Role type</th>
								<th>Created at</th>
								<th>Action</th>
							</tr>
								<!-- TABLE TITLE -->


								<!-- ITEMS -->
							<tr v-for="(role, i) in roles" :key="i" v-if="roles.length">
								<td>{{role.id}}</td>
								<td class="">{{role.roleName}}</td>
								<td>{{role.created_at}}</td>
								<td>
									<Button type="info" size="small" @click="showEditModal(role, i)">Edit</Button>
									<Button type="error" size="small" @click="showDeletingModal(role, i)"  :loading="role.isDeleting">Delete</Button>
								</td>
							</tr>
								<!-- ITEMS -->
					</table>
					</div>
				</div>

				<!-- <Modal
					v-model="editModal"
					title="Edit role"
					:mask-closable="false"
					:closable="false" >
					<Input v-model="editData.roleName" placeholder="Edit tag name"  />
					<div slot="footer">
						<Button type="default" @click="editModal=false">Close</Button>
						<Button type="primary" @click="editRole" :disabled="isAdding" :loading="isAdding">{{isAdding ? 'Editing..' : 'Edit Role'}}</Button>
					</div>
				</Modal> -->
			</div>
		</div>
    </div>
</template>


<script>
export default {
	data(){
		return {
			data : {
				roleName: ''
			}, 
			roles : [], 
			editData : {
				roleName: ''
			}, 
			index : -1, 
			// showDeleteModal: false, 
			isDeleing : false,
			deleteItem: {}, 
			deletingIndex: -1, 
			websiteSettings: []
		}
	},
	methods : {
		addRole(){
			axios.post('http://localhost/federationlaravel/public/create_role', this.data.roleName)
            .then( (response)=> {
                console.log(response);
            })
            .catch(error => console.log(error));
		},
		editRole(){
			if(this.editData.roleName.trim()=='') return this.e('Tag name is required')
				
			}
		},
		deleteTag(){
			
		}, 
	 
}
</script>