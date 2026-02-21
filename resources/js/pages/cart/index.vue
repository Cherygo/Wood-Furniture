<script setup lang="ts">
import { Link, router } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';

const props = defineProps({
    cartItems: Array,
    subtotal: Number,
});

const removeItem = (itemId) => {
    if (confirm('Are you sure you want to remove this item?')) {
        router.delete(`/cart/${itemId}`);
    }
};
</script>

<template>
    <MainLayout>
        <div class="bg-gray-50 min-h-screen py-12">
            <div class="container mx-auto px-4 max-w-6xl">

                <h1 class="text-3xl font-bold text-[#0A2342] mb-8">Shopping Cart</h1>

                <div v-if="cartItems.length === 0" class="text-center py-20 bg-white rounded-lg shadow-sm border border-gray-100">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        class="h-24 w-24 mx-auto mb-6"
                    >
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" fill="none" stroke="#0A2342" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="10" cy="20.5" r="1.5" fill="none" stroke="#0A2342" stroke-width="2"/>
                        <circle cx="18" cy="20.5" r="1.5" fill="none" stroke="#0A2342" stroke-width="2"/>
                        <path d="M6 10h15" fill="none" stroke="#FFC107" stroke-width="2" stroke-linecap="round"/>
                        <path d="M6 14h13" fill="none" stroke="#FFC107" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="10" cy="20.5" r="0.5" fill="#FFC107"/>
                        <circle cx="18" cy="20.5" r="0.5" fill="#FFC107"/>
                    </svg>

                    <p class="text-xl text-gray-500 mb-6">Your cart is currently empty.</p>

                    <Link href="/catalog" class="inline-block bg-[#0A2342] text-white px-8 py-3 rounded-lg font-bold hover:bg-[#153a6b] transition">
                        Start Shopping
                    </Link>
                </div>

                <div v-else class="flex flex-col lg:flex-row gap-8">

                    <div class="flex-grow space-y-4">
                        <div
                            v-for="item in cartItems"
                            :key="item.id"
                            class="bg-white p-4 sm:p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col sm:flex-row items-center gap-6"
                        >
                            <div class="w-24 h-24 bg-gray-100 rounded-lg flex-shrink-0 overflow-hidden">
                                <img
                                    :src="item.furniture.image || 'https://via.placeholder.com/150'"
                                    :alt="item.furniture.name"
                                    class="w-full h-full object-contain"
                                >
                            </div>

                            <div class="flex-grow text-center sm:text-left">
                                <p class="text-xs text-gray-500 uppercase font-bold">{{ item.furniture.type }}</p>
                                <Link :href="`/product/${item.furniture.id}`" class="text-lg font-bold text-[#0A2342] hover:text-blue-600">
                                    {{ item.furniture.name }}
                                </Link>

                            </div>

                            <div class="text-right min-w-[100px]">
                                <p class="font-bold text-lg text-[#0A2342]">{{ item.furniture.price }} €</p>
                            </div>

                            <button
                                @click="removeItem(item.id)"
                                class="text-gray-400 hover:text-red-500 transition p-2 cursor-pointer"
                                title="Remove item"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="w-full lg:w-96 flex-shrink-0">
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 sticky top-4">
                            <h2 class="text-xl font-bold text-[#0A2342] mb-6">Order Summary</h2>

                            <div class="space-y-4 text-gray-600 border-b border-gray-100 pb-6">
                                <div class="flex justify-between">
                                    <span>Subtotal</span>
                                    {{ subtotal }} €
                                </div>

                                <div class="flex justify-between">
                                    <span>Shipping</span>
                                    <span class="text-green-600 font-medium">Free</span>
                                </div>
                            </div>

                            <div class="flex justify-between items-center py-6">
                                <span class="text-lg font-bold text-[#0A2342]">Order Total</span>

                            </div>

                            <button class="w-full bg-[#0A2342] text-white py-4 rounded-lg font-bold hover:bg-[#153a6b] transition shadow-lg flex justify-center items-center gap-2 group">
                                Checkout
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFC107] group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>

                            <p class="text-xs text-center text-gray-400 mt-4">
                                Secure Checkout. 30-day money-back guarantee.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </MainLayout>
</template>
