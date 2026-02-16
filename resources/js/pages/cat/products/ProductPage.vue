<script setup>
import { Link } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';


const props = defineProps({
    product: Object,
});

</script>

<template>
    <MainLayout>
        <div class="bg-gray-50 min-h-screen py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">

                <nav class="flex mb-8 text-sm text-gray-500">
                    <Link href="/" class="hover:text-[#0A2342]">Home</Link>
                    <span class="mx-2">/</span>
                    <Link href="/catalog" class="hover:text-[#0A2342]">Catalog</Link>
                    <span class="mx-2">/</span>
                    <span class="text-gray-900 font-medium">{{ product.type }}</span>
                </nav>

                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-0">

                        <div class="relative h-96 md:h-auto bg-gray-100 flex items-center justify-center p-8">
                            <img
                                :src="product.image || 'https://via.placeholder.com/600'"
                                :alt="product.name"
                                class="max-h-full max-w-full object-contain hover:scale-105 transition-transform duration-500 ease-in-out"
                            />
                        </div>

                        <div class="p-8 md:p-12 flex flex-col justify-center">

                            <div class="flex justify-between items-start mb-4">
                                <span class="text-sm text-gray-500 font-medium tracking-wider uppercase">
                                    {{ product.type }}
                                </span>
                            </div>

                            <h1 class="text-4xl font-extrabold text-[#0A2342] mb-4 leading-tight">
                                {{ product.name }}
                            </h1>

                            <div class="flex items-end mb-6">
                                <span class="text-3xl font-bold text-[#0A2342]">{{ product.price }} €</span>
                            </div>

                            <p class="text-gray-600 leading-relaxed mb-8">
                                {{ product.color }}
                            </p>

                            <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-100">
                                <button
                                    @click="addToCart"
                                    class="flex-1 bg-[#0A2342] text-white font-bold py-3 px-8 rounded-lg shadow-lg hover:bg-[#1a3a5f] hover:shadow-xl transition-all duration-300 flex items-center justify-center gap-2"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFC107]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Add to Cart
                                </button>
                            </div>

                            <div class="mt-8 pt-8 border-t border-gray-100">
                                    <div>
                                        <dt class="text-gray-500">Availability</dt>
                                        <dd class="font-medium text-green-600">In Stock</dd>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
