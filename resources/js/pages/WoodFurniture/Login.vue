<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';

const form = useForm({
    login: '',
    password: '',
});
</script>

<template>
    <Head title="Login" />

    <MainLayout>
        <div class="flex items-center justify-center min-h-[60vh] py-12">

            <div class="w-full max-w-md px-6">

                <form @submit.prevent="submit" class="bg-gray-100 rounded-lg shadow-xl p-8">
                    <h1 class="text-3xl font-extrabold text-slate-800 text-center mb-8 tracking-tight">
                        Login
                    </h1>

                    <div class="space-y-5">
                        <div>
                            <input
                                type="text"
                                class="w-full px-4 py-3 border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition"
                                placeholder="Email Address"
                                v-model="form.email"
                            >
                        </div>

                        <div>
                            <input
                                type="password"
                                class="w-full px-4 py-3 border border-gray-300 rounded text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition"
                                placeholder="Password"
                                v-model="form.password"
                            >
                        </div>

                        <button
                            class="w-full py-3 px-4 bg-slate-800 hover:bg-slate-700 text-white font-bold rounded shadow transition duration-200"
                        >
                            Login
                        </button>
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

                    <div class="mt-6 text-center text-sm text-gray-600">
                        Don't have an account?
                        <Link href="/register" class="font-bold text-orange-500 hover:text-slate-700 transition">
                            Register here
                        </Link>
                    </div>
                </form>
            </div>
        </div>
    </MainLayout>
</template>
