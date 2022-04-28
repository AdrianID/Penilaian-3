import Vuex from 'vuex';
import product from'./modules/product';
import cart from './modules/cart';
import Vue from 'vue';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    cartItems: [],
    cartTotal: 0,
    productItems: [],
    totalPrice:0

  },
  getters: {
    cartItems: state => state.cartItems,
    cartTotal: state => state.cartTotal,
    productItems: state => state.productItems,
    TotalPrice: state => state.totalPrice
  },
  mutations: {
    ADD_TO_CART(state,{id,title,price,quantity}){
        state.totalPrice += price;
        state.cartTotal += quantity;
        let findProduct = state.productItems.find(o => o.id === id)
        
        findProduct.stock -= quantity;
        let findCart = state.cartItems.find(o => o.id === id)
        if(findCart){
            findCart.quantity +=1;
        }else{
            state.cartItems.push({
                id,
                title,
                price,
                quantity
            })
        }
    },

    UPDATE_PRODUCT_ITEMS (state, payload) {
        state.productItems = payload;
    },

    DELETE_ITEM_CART(state,{id,price,quantity}){
        let findProduct = state.productItems.find(o => o.id === id)
        let findCart = state.cartItems.find(o => o.id === id)
        if(quantity === 1){
            state.cartItems.splice(state.cartItems.findIndex(function(i){
                return i.id === id;
            }), 1);
            findProduct.stock += 1;
        }else{
            findCart.quantity -= 1;
            findProduct.stock += 1;
        }
        state.cartTotal -= 1;
        state.totalPrice -= price;
    }


  },
  actions: {
    addProductToCart({commit},{id,title,price , quantity}){
        commit('ADD_TO_CART',{id,title,price, quantity});
    },

    getProductItems ({ commit }) {
        axios.get(`/api/get_data_product`).then((response) => {
          commit('UPDATE_PRODUCT_ITEMS', response.data)
        });
    },
    deleteItemFromCart({commit},{id,price,quantity}){
        commit('DELETE_ITEM_CART',{id,price,quantity});
    }
  },
  modules: {
    product,
    cart
  }
})
