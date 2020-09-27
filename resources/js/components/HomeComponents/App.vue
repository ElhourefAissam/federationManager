<template>
    <div>
    <transition name="route" mode="out-in">
        <router-view :key="$route.path"></router-view>
    </transition>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
    .route-enter-to,.route-leave{
        opacity: 0;
        transform: translateY(-30px);
    }
    .route-enter,.route-leave-to{
        opacity: 1;
        transform: translateY(30px);
    }
    .route-enter-active,.route-leave-active{
        transition: all 0.5s ease;
    }
</style>