<script setup>
import WoodFurnitureLayout from '@/layouts/WoodFurnitureLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    first_name: '',
    last_name: '',
    middle_name: '',
    login: '',
    email: '',
    password: '',
    password_confirmation: '',
    agree: false,
});
</script>

<template>
    <Head title="Register" />

    <WoodFurnitureLayout>
        <div class="registration mt120">
            <div class="container">
                <form @submit.prevent>
                    <p class="bbtext">Register</p>
                    <div class="form">
                        <input type="text" class="form-input" placeholder="First Name*" v-model="form.first_name">
                    </div>
                    <div class="form">
                        <input type="text" class="form-input" placeholder="Last Name*" v-model="form.last_name">
                    </div>
                    <div class="form">
                        <input type="text" class="form-input" placeholder="Middle Name" v-model="form.middle_name">
                    </div>
                    <div class="form">
                        <input type="text" class="form-input" placeholder="Login*" v-model="form.login">
                    </div>
                    <div class="form">
                        <input type="text" class="form-input" placeholder="Email*" v-model="form.email">
                    </div>
                    <div class="form">
                        <input type="password" class="form-input" placeholder="Password*" v-model="form.password">
                    </div>
                    <div class="form">
                        <input type="password" class="form-input" placeholder="Confirm Password*" v-model="form.password_confirmation">
                    </div>
                    <div class="form">
                        <div class="check">
                            <input type="checkbox" v-model="form.agree">
                            <label>I agree to registration rules</label>
                        </div>
                    </div>
                    <button class="orbtn">Register</button>
                </form>
            </div>
        </div>
    </WoodFurnitureLayout>
</template>
