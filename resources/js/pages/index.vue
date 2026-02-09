<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import ProductCard from '@/components/ProductCard.vue';
import MainLayout from '@/layouts/MainLayout.vue';

defineProps({
    featuredProducts: Array
});

// Scroll Logic
const scrollContainer = ref(null);

const scrollRight = () => {
    if (scrollContainer.value) {
        scrollContainer.value.scrollBy({ left: 320, behavior: 'smooth' });
    }
};
</script>

<template>
    <MainLayout>

        <section class="relative h-[500px] md:h-[600px] flex items-center">
            <div class="absolute inset-0 z-0">
                <img
                    src="../../../public/assets/imgs/banner1.jpg"
                    alt="Hero"
                    class="w-full h-full object-cover"
                >
                <div class="absolute inset-0 bg-black/50"></div>
            </div>

            <div class="container mx-auto px-4 relative z-10 text-center md:text-left">
                <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight max-w-xl mx-auto md:mx-0">
                    Furniture for every home!
                </h2>
                <Link
                    href="/"
                    class="inline-block px-8 py-3 bg-orange-500 text-white font-bold rounded hover:bg-orange-600 transition transform hover:scale-105"
                >
                    To Catalog
                </Link>
            </div>
        </section>

        <section class="py-16 container mx-auto px-4">

            <div class="flex justify-between items-center mb-8">
                <h3 class="text-3xl font-bold text-slate-800">Popular Items</h3>
                <button
                    @click="scrollRight"
                    class="w-10 h-10 rounded-full bg-slate-800 text-white flex items-center justify-center hover:bg-slate-700 transition"
                >
                    →
                </button>
            </div>

            <div
                ref="scrollContainer"
                class="flex gap-6 overflow-x-auto pb-6 snap-x snap-mandatory scrollbar-hide"
                style="scrollbar-width: none; -ms-overflow-style: none;"
            >
                <ProductCard
                    v-for="product in featuredProducts"
                    :key="product.id"
                    :product="product"
                />

                <Link
                    href="/"
                    class="snap-start shrink-0 w-72 rounded-lg bg-slate-800 flex flex-col items-center justify-center text-white hover:bg-slate-700 transition group cursor-pointer"
                >
                    <span class="text-xl font-bold mb-2">See all in Catalog</span>
                    <span class="text-3xl group-hover:translate-x-2 transition-transform">→</span>
                </Link>
            </div>

        </section>

    </MainLayout>
</template>

<style>
/* Utility to hide scrollbar in Webkit (Chrome/Safari) */
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
</style>
