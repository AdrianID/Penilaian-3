<template>
    <div class="main">
        <router-link to="/product" class="btn btn-primary-outline">
               <strong>Product List</strong>
        </router-link>
        <router-link to="/cart" class="btn btn-primary">
               <strong> Check Out</strong>
        </router-link>
        <!-- <button class="btn btn-primary-outline">Product List</button>
        <button class="btn btn-primary">Check Out</button> -->
    </div>
</template>

<script>
export default {
};
</script>
<style scoped>
.main{
    display: inline-block;
    width: 50%;
}
</style>