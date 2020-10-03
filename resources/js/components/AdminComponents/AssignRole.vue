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
            <option v-for="(r, i) in roles"  :key="i" v-bind:value="r.id">
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
  props : ['user', 'permission'],
  data() {
    return {
      data: {
        id: ''
      },
      isSending : false,
      roles: [],
      resources: [
        {resourceName: '/', read: true, write: true, update: true, delete: true, name: '/'},
        {resourceName: 'Home', read: true, write: true, update: true, delete: true, name: '/Home'},
        {resourceName: 'Offices', read: true, write: true, update: true, delete: true, name: 'Office'},
        {resourceName: 'DetailsOffices', read: false, write: false, update: false, delete: false, name: 'category'},
        {resourceName: 'Handicap', read: false, write: false, update: false, delete: false, name: 'createBlog'},
        {resourceName: 'Employe', read: false, write: false, update: false, delete: false, name: 'blogs'},
        {resourceName: 'AssignRole', read: false, write: false, update: false, delete: false, name: 'adminusers'},
        {resourceName: 'Role', read: false, write: false, update: false, delete: false, name: 'role'},
      ],
      defaultResourcesPermission: [
        {resourceName: '/', read: false, write: false, update: false, delete: false, name: '/'},
        {resourceName: 'Home', read: false, write: false, update: false, delete: false, name: '/Home'},
        {resourceName: 'Offices', read: false, write: false, update: false, delete: false, name: 'Office'},
        {resourceName: 'DetailsOffices', read: false, write: false, update: false, delete: false, name: 'category'},
        {resourceName: 'Handicap', read: false, write: false, update: false, delete: false, name: 'createBlog'},
        {resourceName: 'Employe', read: false, write: false, update: false, delete: false, name: 'blogs'},
        {resourceName: 'AssignRole', read: false, write: false, update: false, delete: false, name: 'adminusers'},
        {resourceName: 'Role', read: false, write: false, update: false, delete: false, name: 'role'},
      ],
    };
  },
  mounted() {
    this.getRoles();
  },
  methods: {
      assignRoles(){
        let dataa = JSON.stringify(this.resources)
        axios.post('http://localhost/federationlaravel/public/api/assignRole', {'permission' : dataa, 'id': this.data.id})
        .then( (response)=> {
          console.log(dataa)
            let index = this.roles.findIndex(role => role.id == this.data.id)
            this.roles[index].permission = data
        })
        .catch(error => console.log(error));
      },
      getRoles(){
        axios.get('http://localhost/federationlaravel/public/api/getRoles')
        .then( (response)=> {
            this.roles = response.data;
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
   
  },
};
</script>