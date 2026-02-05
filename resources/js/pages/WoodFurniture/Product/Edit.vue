<script setup>
import WoodFurnitureLayout from '@/layouts/WoodFurnitureLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    price: '',
    color: '',
});
</script>

<template>
    <Head title="Edit Product" />

    <WoodFurnitureLayout>

        <div class="registration mt120">
            <div class="container">
                <form @submit.prevent>
                    <p class="bbtext">Edit Product</p>
                    <div class="form">
                        <input type="text" class="form-input" placeholder="Name" v-model="form.name">
                    </div>
                    <div class="form">
                        <input type="text" class="form-input" placeholder="Price" v-model="form.price">
                    </div>
                
                    <div class="form">
                        <input type="text" class="form-input" placeholder="Color" v-model="form.color">
                    </div>
                    <button class="orbtn">Edit</button>
                </form>
            </div>
        </div>
    </WoodFurnitureLayout>
</template>
