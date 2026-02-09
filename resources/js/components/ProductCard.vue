<template>
    <div class="group w-72 shrink-0 rounded-lg bg-white shadow-sm border border-gray-100 overflow-hidden snap-start hover:shadow-md transition-shadow duration-300">
        <div class="h-56 overflow-hidden">
            <img
                :src="product.image"
                :alt="product.name"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
            >
        </div>

        <div class="p-4">
            <h3 class="mb-2 text-lg font-medium text-gray-800 truncate">{{ product.name }}</h3>
            <p class="text-xl font-bold text-orange-500">{{ product.price }}</p>
        </div>
    </div>
</template>

<script setup lang="ts">
defineProps({
    product: Object
});
</script>
