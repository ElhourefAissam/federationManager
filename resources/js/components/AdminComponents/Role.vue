<template>
  <div>
    <div class>
      <div class>
        <!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
        <button
          type="button"
          class="btn btn-primary"
          data-toggle="modal"
          data-target="#exampleModal"
        >Ajouter un Employe</button>
        <div
          class="modal fade"
          id="exampleModal"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title  m-2" id="exampleModalLabel">Ajouter un Employe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body m-2">
                <form>
                  <!-- {{Form::token()}} -->
                  <div class="form-group">
                    <label for="roleName">Nom</label>
                    <input type="text" name="roleName" v-model="data.roleName" class="form-control" placeholder="Role" />
                  </div>
                </form>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" value="Ajouter" @click="addRole" data-dismiss="modal" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class>
          <div class>
            <table class=" table tab-content table-bordered">
              <!-- TABLE TITLE -->
              <tr>
                <th>ID</th>
                <th>Role type</th>
                <th>Created at</th>
                <th>Action</th>
              </tr>
              <!-- TABLE TITLE -->

              <!-- ITEMS -->
              <tr v-for="(role, i) in roles"  :key="i" v-bind:value="role.id">
                <td>{{role.id}}</td>
                <td class>{{role.roleName}}</td>
                <td>{{role.created_at}}</td>
                <td class="">
                  <Button class="btn-secondary btn btn-group-sm" type="info" size="small" @click="showEditModal(role, i)">Edit</Button>
                  <Button class="btn-danger btn btn-group-sm"
                    type="error"
                    size="small"
                    @click="showDeletingModal(role, i)"
                    :loading="role.isDeleting"
                  >Delete</Button>
                </td>
              </tr>
              <!-- ITEMS -->
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      data: {
        roleName: "",
      },
      roles: [],
      editData: {
        roleName: "",
      },
      
    };
  },
  mounted(){
    this.getRoles();
  },
  methods: {
    getRoles(){
        axios.get('http://localhost/federationlaravel/public/api/getRoles')
        .then( (response)=> {
            this.roles = response.data;
        })
        .catch(error => console.log(error));
      },
    addRole() {
      let data = new FormData();
                data.append('roleName', this.data.roleName);
      axios
        .post("http://localhost/federationlaravel/public/api/addRole", data)
        .then((response) => {
          console.log(response);
          this.getRoles();
        })
        .catch((error) => console.log(error));
    },
    editRole() {
      if (this.editData.roleName.trim() == "")
        return this.e("Tag name is required");
    },
  },
  deleteTag() {},
};
</script>