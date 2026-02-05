<script setup>
import WoodFurnitureLayout from '@/layouts/WoodFurnitureLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    login: '',
    password: '',
});
</script>

<template>
    <Head title="Login" />

    <WoodFurnitureLayout>
        <div class="registrtion mt120">
            <div class="container">
                <form @submit.prevent>
                    <p class="bbtext">Login</p>
                    <div class="form">
                        <input type="text" class="form-input" placeholder="Login*" v-model="form.login">
                    </div>
                
                    <div class="form-label">
                        <input type="password" class="form-input" placeholder="Password*" v-model="form.password">
                    </div>
                    <button class="orbtn">Login</button>
                </form>
            </div>
        </div>
    </WoodFurnitureLayout>
</template>
