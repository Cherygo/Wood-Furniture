<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
interface Furniture {
    id: number;
    name: string;
    category: string;
    price: number;
    image: string;
}

defineProps<{
    product: Furniture;
}>();
</script>

<template>
    <div
        class="group w-72 shrink-0 snap-start overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-shadow duration-300 hover:shadow-md"
    >
        <Link :href="`/product/${product.id}`" class="block h-full">
            <div class="h-56 overflow-hidden">
                <img
                    :src="product.image"
                    :alt="product.name"
                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                    style="object-fit: fill"
                />
            </div>

            <div class="p-4">
                <p class="text-xs text-black">{{ product.category }}</p>
                <h3 class="mb-2 truncate text-lg font-medium text-gray-800">
                    {{ product.name }}
                </h3>
                <p class="text-xl font-bold text-orange-500 flex items-center justify-between">
                    {{ product.price }}€
                <span>
                    <button
                        @click.prevent="addToCart"
                        class="text-blue-600 font-medium bg-yellow-100 rounded-full px-4 py-2 transition hover:bg-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" fill="none" stroke="#0A2342" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="10" cy="20.5" r="1.5" fill="none" stroke="#0A2342" stroke-width="2"/>
                            <circle cx="18" cy="20.5" r="1.5" fill="none" stroke="#0A2342" stroke-width="2"/>

                            <path d="M6 10h15" fill="none" stroke="#FFC107" stroke-width="2" stroke-linecap="round"/>
                            <path d="M6 14h13" fill="none" stroke="#FFC107" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="10" cy="20.5" r="0.5" fill="#FFC107"/>
                            <circle cx="18" cy="20.5" r="0.5" fill="#FFC107"/>
                        </svg>
                </button>
                </span>
                </p>
            </div>
        </Link>
    </div>
</template>
