<template>
  <div>
    <div class="container">
      <div class="">
        <!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
        <div class="">
          <p class="">
            Role Manangement
          <select v-model="data.id" @on-change="changeAdmin">
            <option disabled value="">Choisissez</option>
            <option v-for="(r, i) in roles" v-if="roles.length" :key="i" v-bind:value="r.id">
            {{ r.roleName }}
            </option>
          </select>
          <span>Sélectionné : {{ data.id }}</span>

          <div class="">
            <table class="table table- d-xl-table-cell data-table">
              <!-- TABLE TITLE -->
              <tr class="row d-table-row">
                <th>Resource name</th>
                <th>Read</th>
                <th>Write</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
              <!-- TABLE TITLE -->

              <!-- ITEMS -->
              <tr v-for="(r, i) in resources" :key="i" class="row d-table-row">
                <td>{{r.resourceName}}</td>
                <td><div class="form-check">
                    <input v-model="r.read" class="form-check-input position-static" type="checkbox" value="r.read">
                    <Checkbox v-model="r.read"></Checkbox>
                </div></td>
                <td><div class="form-check">
                    <input v-model="r.write" class="form-check-input position-static" type="checkbox" value="r.write">
                </div></td>
                <td><div class="form-check">
                    <input v-model="r.update" class="form-check-input position-static" type="checkbox" value="r.update">
                </div></td>
                <td><div class="form-check">
                    <input v-model="r.delete" class="form-check-input position-static" type="checkbox" value="r.delete">
                </div></td>
              </tr>
              <!-- ITEMS -->
              <div class=" mt-2 center">
                  <Button class="primary" @click="assignRoles">Assign</Button>
              </div>
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
        id: ''
      },
      isSending : false,
     roles: [],
     resources: [
          {resourceName: 'Home', read: false, write: false, update: false, delete: false, name: '/'},
          {resourceName: 'Office', read: false, write: false, update: false, delete: false, name: 'Office'},
          {resourceName: 'Category', read: false, write: false, update: false, delete: false, name: 'category'},
          {resourceName: 'Create blogs', read: false, write: false, update: false, delete: false, name: 'createBlog'},
          {resourceName: 'Blogs', read: false, write: false, update: false, delete: false, name: 'blogs'},
          {resourceName: 'Admin users', read: false, write: false, update: false, delete: false, name: 'adminusers'},
          {resourceName: 'Role', read: false, write: false, update: false, delete: false, name: 'role'},
          {resourceName: 'Assign Role', read: false, write: false, update: false, delete: false, name: 'assignRole'},
      ],
      defaultResourcesPermission: [
          {resourceName: 'Home', read: false, write: false, update: false, delete: false, name: '/'},
          {resourceName: 'Tags', read: false, write: false, update: false, delete: false, name: 'tags'},
          {resourceName: 'Category', read: false, write: false, update: false, delete: false, name: 'category'},
          {resourceName: 'Create blogs', read: false, write: false, update: false, delete: false, name: 'createBlog'},
          {resourceName: 'Blogs', read: false, write: false, update: false, delete: false, name: 'blogs'},
          {resourceName: 'Admin users', read: false, write: false, update: false, delete: false, name: 'adminusers'},
          {resourceName: 'Role', read: false, write: false, update: false, delete: false, name: 'role'},
          {resourceName: 'Assign Role', read: false, write: false, update: false, delete: false, name: 'assignRole'},
      ],
    };
  },
  mounted() {
    this.getRoles()
  },
  methods: {
      assignRoles(){
        let data = JSON.stringify(this.resources)
        axios.post('http://localhost/federationlaravel/public/api/assign_roles', {'permission' : data, 'id': this.data.id})
        .then( (response)=> {
            let index = this.roles.findIndex(role => role.id == this.data.id)
            this.roles[index].permission = data
        })
        .catch(error => console.log(error));
     },
     changeAdmin(){
       let index = this.roles.findIndex(role => role.id == this.data.id)
       console.log(index)
       let permission = this.roles[index].permission
       if(!permission){
           this.resources = this.defaultResourcesPermission
       }else{
         this.resources = JSON.parse(permission)
       }
     },
    getRoles() {
        axios.get('http://localhost/federationlaravel/public/api/get_roles')
        .then(response => {
          this.roles = response.data;
          console.log(this.roles)
        });
    },
    
  },
};
</script>