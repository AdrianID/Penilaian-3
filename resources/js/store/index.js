import Vuex from 'vuex';
import product from'./modules/product';
import cart from './modules/cart';
import Vue from 'vue';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
  },
  getters: {
  },
  mutations: {
  },
  actions: {
  },
  modules: {
    product,
    cart
  }
})
