<template>
  <div>
    <div class="container">
      <div class="">
        <!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
        <div class="">
          <p class="">
            Role Manangement
          <select v-model="data.id" @change="changeAdmin">
            <option disabled value="0">Choisissez</option>
            <option v-for="(r, i) in roles"  :key="i" v-bind:value="r.id">
              {{ r.roleName }}
            </option>
          </select>

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
              <div v-if="data.id != ''" class=" mt-2 center">
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
        {resourceName: 'Home', read: true, write: false, update: false, delete: false, name: '/'},
        {resourceName: 'Offices', read: true, write: false, update: false, delete: false, name: 'Offices'},
        {resourceName: 'DetailsOffices', read: false, write: false, update: false, delete: false, name: 'Office'},
        {resourceName: 'Handicap', read: false, write: false, update: false, delete: false, name: 'Handicap'},
        {resourceName: 'Employe', read: false, write: false, update: false, delete: false, name: 'Employe'},
        {resourceName: 'AssignRole', read: false, write: false, update: false, delete: false, name: 'AssignRole'},
        {resourceName: 'Role', read: false, write: false, update: false, delete: false, name: 'Role'},
      ],
      defaultResourcesPermission: [
        {resourceName: 'Home', read: true, write: false, update: false, delete: false, name: '/'},
        {resourceName: 'Offices', read: true, write: false, update: false, delete: false, name: 'Offices'},
        {resourceName: 'DetailsOffices', read: false, write: false, update: false, delete: false, name: 'Office'},
        {resourceName: 'Handicap', read: false, write: false, update: false, delete: false, name: 'Handicap'},
        {resourceName: 'Employe', read: false, write: false, update: false, delete: false, name: 'Employe'},
        {resourceName: 'AssignRole', read: false, write: false, update: false, delete: false, name: 'AssignRole'},
        {resourceName: 'Role', read: false, write: false, update: false, delete: false, name: 'Role'},
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
          let index = this.roles.findIndex(role => role.id == this.data.id)
          this.roles[index].permission = JSON.parse(response.config.data).permission
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