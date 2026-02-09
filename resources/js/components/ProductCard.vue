<template>
    <div
        class="group w-72 shrink-0 snap-start overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition-shadow duration-300 hover:shadow-md"
    >
        <div class="h-56 overflow-hidden">
            <img
                :src="product.image"
                :alt="product.name"
                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
            />
        </div>

        <div class="p-4">
            <h3 class="mb-2 truncate text-lg font-medium text-gray-800">
                {{ product.name }}
            </h3>
            <p class="text-xl font-bold text-orange-500">
                {{ product.price }}€
            </p>
        </div>
    </div>
</template>

<script setup lang="ts">
interface Furniture {
    id: number;
    name: string;
    price: number;
    image: string;
}

defineProps<{
    product: Furniture;
}>();
</script>
