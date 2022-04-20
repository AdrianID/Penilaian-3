<template>
        <div class="w-50 ">
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
                    <CartListItem></CartListItem>
                </tbody>
            </table>
        </div>
</template>

<script>
import CartListItem from './Cart_List_Item.vue'
export default {
  name: "CartList",
  components:{
      CartListItem
  }
};
</script>