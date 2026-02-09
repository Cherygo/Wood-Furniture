<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

const page = usePage();
const user = computed(() => page.props.auth.user);
const showMobileMenu = ref(false);
</script>

<template>
    <header class="font-sans">
        <div class="bg-white py-4 shadow-sm">
            <div
                class="container mx-auto flex items-center justify-between px-4"
            >
                <div
                    class="text-3xl font-extrabold tracking-tight text-slate-800"
                >
                    <Link href="/">WoodFurniture</Link>
                </div>

                <nav
                    class="hidden items-center space-x-8 font-medium text-gray-600 md:flex"
                >
                    <Link
                        href="/about-us"
                        class="transition hover:text-orange-500"
                        >About Us</Link
                    >
                    <Link
                        href="/catalog"
                        class="transition hover:text-orange-500"
                        >Catalog</Link
                    >
                    <Link
                        href="/we-are-here"
                        class="transition hover:text-orange-500"
                        >Where to find us?</Link
                    >
                </nav>

                <div class="hidden items-center space-x-4 md:flex">
                    <div v-if="user" class="flex items-center gap-4">
                        <div class="text-right">
                            <span
                                class="block text-sm font-bold text-slate-800"
                            >
                                {{ user.email }}
                            </span>
                        </div>

                        <Link
                            href="/logout"
                            method="post"
                            as="button"
                            class="rounded border border-slate-300 px-4 py-2 font-bold text-slate-700 transition hover:bg-slate-100"
                        >
                            Logout
                        </Link>
                    </div>

                    <div v-else class="flex items-center gap-3">
                        <Link
                            href="/login"
                            class="rounded bg-slate-800 px-5 py-2 font-bold text-white transition hover:bg-slate-700"
                        >
                            Login
                        </Link>
                        <Link
                            href="/register"
                            class="rounded bg-orange-500 px-5 py-2 font-bold text-white transition hover:bg-orange-600"
                        >
                            Register
                        </Link>
                    </div>
                </div>

                <button
                    @click="showMobileMenu = !showMobileMenu"
                    class="text-2xl text-slate-800 md:hidden"
                >
                    ☰
                </button>
            </div>

            <div
                v-if="showMobileMenu"
                class="mt-4 flex flex-col space-y-3 border-t bg-gray-50 px-4 py-4 md:hidden"
            >
                <Link href="/about-us" class="block text-gray-700"
                    >About Us</Link
                >
                <Link href="/catalog" class="block text-gray-700">Catalog</Link>
                <div class="border-t border-gray-200 pt-4">
                    <div v-if="user" class="space-y-3">
                        <div class="px-1 font-bold text-slate-800">
                            Hi, {{ user.email }}
                        </div>
                        <Link
                            href="/logout"
                            method="post"
                            as="button"
                            class="w-full rounded border border-slate-300 py-2 text-center font-bold text-slate-700 transition hover:bg-slate-200"
                        >
                            Logout
                        </Link>
                    </div>

                    <div v-else class="flex flex-col space-y-3">
                        <Link
                            href="/login"
                            class="rounded bg-slate-800 px-5 py-2 text-center font-bold text-white transition hover:bg-slate-700"
                        >
                            Login
                        </Link>
                        <Link
                            href="/register"
                            class="rounded bg-orange-500 px-5 py-2 text-center font-bold text-white transition hover:bg-orange-600"
                        >
                            Register
                        </Link>
                    </div>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto bg-slate-800 py-3">
            <div class="container mx-auto px-4">
                <div
                    class="flex space-x-8 text-sm font-medium whitespace-nowrap text-gray-300 md:justify-center"
                >
                    <Link href="/catalog" class="transition hover:text-white"
                        >All Products</Link
                    >
                    <Link
                        href="/catalog?c=tables"
                        class="transition hover:text-white"
                        >Tables</Link
                    >
                    <Link
                        href="/catalog?c=chairs"
                        class="transition hover:text-white"
                        >Chairs</Link
                    >
                    <Link
                        href="/catalog?c=wardrobes"
                        class="transition hover:text-white"
                        >Wardrobes</Link
                    >
                    <Link
                        href="/catalog?c=armchairs"
                        class="transition hover:text-white"
                        >Armchairs</Link
                    >
                    <Link
                        href="/catalog?c=beds"
                        class="transition hover:text-white"
                        >Beds</Link
                    >
                    <Link
                        href="/catalog?c=sofas"
                        class="transition hover:text-white"
                        >Sofas</Link
                    >
                </div>
            </div>
        </div>
    </header>
</template>
