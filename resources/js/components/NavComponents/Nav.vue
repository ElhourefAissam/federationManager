<template>
    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" v-for="(nav, i) in permission" :key="i" v-if="permission.length && nav.read">
              <router-link :to="'/federationlaravel/public/'+ nav.name" class="nav-link">{{nav.resourceName}}</router-link>
            </li>
            <!-- <li class="nav-item">
              <router-link to="/federationlaravel/public/Home/Offices" class="nav-link">Offices</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/federationlaravel/public/Home/Handicap" class="nav-link">Handicap</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/federationlaravel/public/Home/Employe" class="nav-link">Employe</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/federationlaravel/public/Home/Student" class="nav-link">Student</router-link>
            </li>
            <li class="nav-item">
               <router-link to="/federationlaravel/public/Home/Material" class="nav-link">Material</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/federationlaravel/public/Home/Parent" class="nav-link">Parent</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/federationlaravel/public/Home/Vehicle" class="nav-link">Vehicle</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/federationlaravel/public/Home/AssignRole" class="nav-link">Assign Role</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/federationlaravel/public/Home/Role" class="nav-link">Role</router-link>
            </li>
             <li class="nav-item">
              <router-link to="/About" class="nav-link">About</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/Contact" class="nav-link">Contact</router-link>
            </li> 
            <li class="nav-item">
              <router-link to="/More" class="nav-link">More</router-link>
            </li> -->
        </ul>
    </div>
</template>
<script>
export default {
  props : ['permission']
}
</script>>