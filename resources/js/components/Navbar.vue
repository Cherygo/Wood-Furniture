<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const showMobileMenu = ref(false);
</script>

<template>
    <header class="font-sans">
        <div class="bg-white py-4 shadow-sm">
            <div class="container mx-auto px-4 flex items-center justify-between">

                <div class="text-3xl font-extrabold text-slate-800 tracking-tight">
                  <Link href="/">WoodFurniture</Link>
                </div>

                <nav class="hidden md:flex items-center space-x-8 text-gray-600 font-medium">
                    <Link href="/about-us" class="hover:text-orange-500 transition">About Us</Link>
                    <Link href="/catalog" class="hover:text-orange-500 transition">Catalog</Link>
                    <Link href="/we-are-here" class="hover:text-orange-500 transition">Where to find us?</Link>
                </nav>

                <div class="hidden md:flex items-center space-x-3">
                    <Link href="/login" class="px-5 py-2 bg-slate-800 text-white rounded font-bold hover:bg-slate-700 transition">
                        Login
                    </Link>
                    <Link href="/register" class="px-5 py-2 bg-orange-500 text-white rounded font-bold hover:bg-orange-600 transition">
                        Register
                    </Link>
                </div>

                <button @click="showMobileMenu = !showMobileMenu" class="md:hidden text-2xl text-slate-800">
                    ☰
                </button>
            </div>

            <div v-if="showMobileMenu" class="md:hidden border-t mt-4 px-4 py-4 space-y-3 flex flex-col bg-gray-50">
                <Link href="/about-us" class="block text-gray-700">About Us</Link>
                <Link href="/catalog" class="block text-gray-700">Catalog</Link>
                <div class="pt-2 flex gap-2">
                    <Link href="/login" class="flex-1 text-center py-2 bg-slate-800 text-white rounded">Login</Link>
                    <Link href="/register" class="flex-1 text-center py-2 bg-orange-500 text-white rounded">Register</Link>
                </div>
            </div>
        </div>

        <div class="bg-slate-800 py-3 overflow-x-auto">
            <div class="container mx-auto px-4">
                <div class="flex space-x-8 text-gray-300 font-medium text-sm whitespace-nowrap">
                    <Link href="/catalog" class="hover:text-white transition">All Products</Link>
                    <Link href="/catalog?c=tables" class="hover:text-white transition">Tables</Link>
                    <Link href="/catalog?c=chairs" class="hover:text-white transition">Chairs</Link>
                    <Link href="/catalog?c=wardrobes" class="hover:text-white transition">Wardrobes</Link>
                    <Link href="/catalog?c=armchairs" class="hover:text-white transition">Armchairs</Link>
                    <Link href="/catalog?c=beds" class="hover:text-white transition">Beds</Link>
                    <Link href="/catalog?c=sofas" class="hover:text-white transition">Sofas</Link>
                </div>
            </div>
        </div>
    </header>
</template>
