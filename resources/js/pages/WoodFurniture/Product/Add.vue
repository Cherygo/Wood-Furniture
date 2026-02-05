<script setup>
import WoodFurnitureLayout from '@/layouts/WoodFurnitureLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    price: '',
    country: '',
    category: '',
    color: '',
});
</script>

<template>
    <Head title="Add Product" />

    <WoodFurnitureLayout>

        <div class="registration mt120">
            <div class="container">
                <form @submit.prevent>
                    <p class="bbtext">Add Product</p>
                    <div class="form">
                        <input type="text" class="form-input" placeholder="Name" v-model="form.name">
                    </div>
                    <div class="form">
                        <input type="text" class="form-input" placeholder="Price" v-model="form.price">
                    </div>
                    <div class="form">
                        <select class="form-input" v-model="form.country">
                            <option value="">Russia</option>
                            <option value="">China</option>
                            <option value="">Belarus</option>
                        </select>
                    </div>
                    <div class="form">
                        <select class="form-input" v-model="form.category">
                            <option value="">Sofa</option>
                            <option value="">Armchair</option>
                            <option value="">Table</option>
                        </select>
                    </div>
                
                    <div class="form">
                        <input type="text" class="form-input" placeholder="Color" v-model="form.color">
                    </div>
                    <button class="orbtn">Add</button>
                </form>
            </div>
        </div>
    </WoodFurnitureLayout>
</template>
