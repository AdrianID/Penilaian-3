<template>
        <div class="main">
        <h1 class="display-4">Keranjang Belanja</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <CartListItem v-for="cartItem in cartItems" :key="cartItem.id" :cartItem="cartItem"></CartListItem>
                </tbody>
            </table>
        </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";
import CartListItem from './Cart_List_Item.vue'
export default {
  name: "CartList",
  components:{
      CartListItem
  },
  computed: {
    ...mapGetters(["cartItems"]),
  }
};
</script>
<style scoped>
.main{
    max-width: 80%;
}
</style>