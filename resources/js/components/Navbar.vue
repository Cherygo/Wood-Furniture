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
                                class="flex items-center gap-4 text-sm font-bold text-slate-800"
                            >
                               Hi, {{ user.email }}
                                <Link
                                    class="cursor-pointer text-blue-600 font-medium bg-yellow-100 rounded-full px-4 py-2 transition hover:bg-yellow-400"
                                    as="button"
                                    href="/cart"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" fill="none" stroke="#0A2342" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="10" cy="20.5" r="1.5" fill="none" stroke="#0A2342" stroke-width="2"/>
                                        <circle cx="18" cy="20.5" r="1.5" fill="none" stroke="#0A2342" stroke-width="2"/>
                                        <path d="M6 10h15" fill="none" stroke="#FFC107" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M6 14h13" fill="none" stroke="#FFC107" stroke-width="2" stroke-linecap="round"/>
                                        <circle cx="10" cy="20.5" r="0.5" fill="#FFC107"/>
                                        <circle cx="18" cy="20.5" r="0.5" fill="#FFC107"/>
                                    </svg>
                                </Link>
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
                        href="/catalog?category=Armchair&max_price=&min_price=&sort_price="
                        class="transition hover:text-white"
                    >Armchairs</Link
                    >
                    <Link
                        href="/catalog?category=Bed&max_price=&min_price=&sort_price="
                        class="transition hover:text-white"
                    >Beds</Link
                    >
                    <Link
                        href="/catalog?category=Chair&max_price=&min_price=&sort_price="
                        class="transition hover:text-white"
                    >Chairs</Link
                    >
                    <Link
                        href="/catalog?category=Table&max_price=&min_price=&sort_price="
                        class="transition hover:text-white"
                        >Tables</Link
                    >
                    <Link
                        href="/catalog?category=Sofa&max_price=&min_price=&sort_price="
                        class="transition hover:text-white"
                        >Sofas</Link
                    >
                    <Link
                        href="/catalog?category=Wardrobe&max_price=&min_price=&sort_price="
                        class="transition hover:text-white"
                        >Wardrobes</Link
                    >
                </div>
            </div>
        </div>
    </header>
</template>
