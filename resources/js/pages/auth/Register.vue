<script setup lang="ts">
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
        <div
            class="flex min-h-[80vh] items-center justify-center bg-white py-12"
        >
            <div class="w-full max-w-lg px-6">
                <form @submit.prevent="submit">
                    <h1
                        class="mb-8 text-center text-3xl font-extrabold tracking-tight text-slate-800"
                    >
                        Create Account
                    </h1>

                    <div class="space-y-4">
                        <div>
                            <input
                                type="text"
                                class="w-full rounded border border-gray-300 px-4 py-3 text-gray-700 transition focus:border-transparent focus:ring-2 focus:ring-orange-500 focus:outline-none"
                                placeholder="Login*"
                                v-model="form.login"
                            />
                        </div>
                        <div
                            v-if="form.errors.login"
                            class="mt-1 text-sm text-red-500"
                        >
                            {{ form.errors.login }}
                        </div>

                        <div>
                            <input
                                type="email"
                                class="w-full rounded border border-gray-300 px-4 py-3 text-gray-700 transition focus:border-transparent focus:ring-2 focus:ring-orange-500 focus:outline-none"
                                placeholder="Email Address*"
                                v-model="form.email"
                            />
                        </div>
                        <div
                            v-if="form.errors.email"
                            class="mt-1 text-sm text-red-500"
                        >
                            {{ form.errors.email }}
                        </div>

                        <div>
                            <input
                                type="password"
                                class="w-full rounded border border-gray-300 px-4 py-3 text-gray-700 transition focus:border-transparent focus:ring-2 focus:ring-orange-500 focus:outline-none"
                                placeholder="Password*"
                                v-model="form.password"
                            />
                        </div>
                        <div
                            v-if="form.errors.password"
                            class="mt-1 text-sm text-red-500"
                        >
                            {{ form.errors.password }}
                        </div>

                        <div>
                            <input
                                type="password"
                                class="w-full rounded border border-gray-300 px-4 py-3 text-gray-700 transition focus:border-transparent focus:ring-2 focus:ring-orange-500 focus:outline-none"
                                placeholder="Confirm Password*"
                                v-model="form.password_confirmation"
                            />
                        </div>
                    </div>

                    <div class="mt-2 flex items-center">
                        <input
                            id="terms"
                            type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-orange-500 focus:ring-orange-500"
                            v-model="form.agree"
                        />
                        <label
                            for="terms"
                            class="ml-2 block text-sm text-gray-700"
                        >
                            Remember me
                        </label>
                    </div>

                    <button
                        class="mt-2 w-full rounded bg-slate-800 px-4 py-3 font-bold text-white shadow transition duration-200 hover:bg-slate-700"
                    >
                        Register
                    </button>

                    <div class="mt-6 text-center text-sm text-gray-600">
                        Already have an account?
                        <Link
                            href="/login"
                            class="font-bold text-orange-500 transition hover:text-orange-600"
                        >
                            Login here
                        </Link>
                    </div>
                </form>
            </div>
        </div>
    </MainLayout>
</template>
