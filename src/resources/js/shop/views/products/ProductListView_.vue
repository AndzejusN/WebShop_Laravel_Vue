<script setup>

import {reactive} from 'vue';
import {useProductsStore} from '../../stores/products';

const productsStore = useProductsStore();

productsStore.load();

const state = reactive({
    removableProductIndex: null,
    search: '',
    check: ''
});


</script>

<template>
    <div class="container">
        <div class="row">
            <div class="col-3 px-3">
                <div class="row">
                    <div class="mt-3">
                        <input type="checkbox" id="check" name="check"
                               v-model="state.check"
                               @change="addSearchParameter('check', state.check)"/>
                        <label for="check">&nbsp; Sell on-line</label>
                    </div>
                    <div class="mt-5">
                        <div class="input-group">
                            <div class="input-group-text">Search</div>
                            <label for="search"></label>
                            <input type="text" class="form-control" placeholder="Search by model..." id="search"
                                   name="search" v-model="state.search"
                                   @change="addSearchParameter('search', state.search)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 d-flex flex-wrap mt-3 px-3">
                <div class="row input-group" style="display:inline-flex; width:auto;">
                    <div class="card text-center" v-for="product in productsStore.products" :key="product.id" style="width: 17rem;">
                        <img class="card-img-top" src="/img/noimage.png" alt="Some ...">
                        <div class="card-body">
                            <h5 class="card-title">{{ product.name }}</h5>
                            <p class="card-text">{{ product.id }}</p>
                            <p class="card-text">{{ product.model }}</p>
                            <p class="card-text">{{ product.price }} Euro</p>
                        </div>
                        <button  @click="$router.push({name: 'products-manage', params: {id: product.id}})" type="button" class="w-100 btn btn-lg btn-outline-primary mb-2">Change Product</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<style scoped>

</style>
