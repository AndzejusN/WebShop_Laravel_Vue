import {defineStore} from 'pinia';

export const useProductsStore = defineStore('products', {
    state: () => ({
        products: []
    }),
    getters: {
        count: (state) => state.products.length
    },
    actions: {
        load() {
            fetch('/api/v1/products').then(response => response.json()).then(data => {
                this.products = data.products;
            });
        }
    }
});
