<template>
        <div class="w-50">
            <h1 class="display-4">Semua Produk</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <ProductListItem></ProductListItem>
                </tbody>
            </table>
        </div>
</template>

<script>
import ProductListItem from './Product_List_Item.vue'
export default {
  name: "ProductList",
  components:{
      ProductListItem
  }
};
</script>