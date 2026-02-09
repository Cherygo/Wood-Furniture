<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';

const form = useForm({
    login: '',
    email: '',
    password: '',
    password_confirmation: '',
    agree: false,
});
const submit = () => {
    form.post('/register', {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register" />

    <MainLayout>
        <div class="flex items-center justify-center min-h-[80vh] py-12 bg-white">

            <div class="w-full max-w-lg px-6">

                <form @submit.prevent="submit">
                    <h1 class="text-3xl font-extrabold text-slate-800 text-center mb-8 tracking-tight">
                        Create Account
                    </h1>

                    <div class="space-y-4">

                        <div>
                            <input
                                type="text"
                                class="w-full px-4 py-3 border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition"
                                placeholder="Login*"
                                v-model="form.login"
                            >
                        </div>
                        <div v-if="form.errors.login" class="text-red-500 text-sm mt-1">
                            {{ form.errors.login }}
                        </div>

                        <div>
                            <input
                                type="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition"
                                placeholder="Email Address*"
                                v-model="form.email"
                            >
                        </div>
                        <div v-if="form.errors.email" class="text-red-500 text-sm mt-1">
                            {{ form.errors.email }}
                        </div>

                        <div>
                            <input
                                type="password"
                                class="w-full px-4 py-3 border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition"
                                placeholder="Password*"
                                v-model="form.password"
                            >
                        </div>
                        <div v-if="form.errors.password" class="text-red-500 text-sm mt-1">
                            {{ form.errors.password }}
                        </div>

                        <div>
                            <input
                                type="password"
                                class="w-full px-4 py-3 border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition"
                                placeholder="Confirm Password*"
                                v-model="form.password_confirmation"
                            >
                        </div>

                    </div>

                    <div class="flex items-center mt-2">
                        <input
                            id="terms"
                            type="checkbox"
                            class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500"
                            v-model="form.agree"
                        >
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>

                        <button
                            class="w-full py-3 px-4 bg-slate-800 hover:bg-slate-700 text-white font-bold rounded shadow transition duration-200 mt-2"
                        >
                            Register
                        </button>

                    <div class="mt-6 text-center text-sm text-gray-600">
                        Already have an account?
                        <Link href="/login" class="font-bold text-orange-500 hover:text-orange-600 transition">
                            Login here
                        </Link>
                    </div>
                </form>
            </div>
        </div>
    </MainLayout>
</template>
