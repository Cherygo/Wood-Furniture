<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import ProductCard from '@/pages/cat/products/ProductCard.vue';
import MainLayout from '@/layouts/MainLayout.vue';

defineProps({
    furniture: Object,
});

const scrollContainer = ref(null);

const scrollRight = () => {
    if (scrollContainer.value) {
        scrollContainer.value.scrollBy({ left: 320, behavior: 'smooth' });
    }
};
</script>

<template>
    <MainLayout>
        <section class="relative flex h-[500px] items-center md:h-[600px]">
            <div class="absolute inset-0 z-0">
                <img
                    src="../../../public/assets/imgs/banner1.jpg"
                    alt="Hero"
                    class="h-full w-full object-cover"
                />
                <div class="absolute inset-0 bg-black/50"></div>
            </div>

            <div
                class="relative z-10 container mx-auto px-4 text-center md:text-left"
            >
                <h2
                    class="mx-auto mb-6 max-w-xl text-4xl leading-tight font-extrabold text-white md:mx-0 md:text-6xl"
                >
                    Furniture for every home!
                </h2>
                <Link
                    href="/catalog"
                    class="inline-block transform rounded bg-orange-500 px-8 py-3 font-bold text-white transition hover:scale-105 hover:bg-orange-600"
                >
                    To Catalog
                </Link>
            </div>
        </section>

        <section class="container mx-auto px-4 py-16">
            <div class="mb-8 flex items-center justify-between">
                <h3 class="text-3xl font-bold text-slate-800">Popular Items</h3>
            </div>

            <div class="relative">

                <div
                    ref="scrollContainer"
                    class="scrollbar-hide flex snap-x snap-mandatory gap-6 overflow-x-auto pb-6"
                    style="scrollbar-width: none; -ms-overflow-style: none"
                >
                    <div class="flex items-stretch gap-6">
                        <ProductCard
                            v-for="item in furniture"
                            :key="item.id"
                            :product="item"
                        />

                        <Link
                            v-if="furniture && furniture.length > 0"
                            href="/catalog"
                            class="p-4 font-bold text-2xl group flex w-72 shrink-0 cursor-pointer snap-start flex-col items-center justify-center rounded-lg bg-slate-800 text-white transition hover:bg-slate-700"
                        >
                            See all in Catalog
                        </Link>
                    </div>
                </div>

                <button
                    v-if="furniture && furniture.length > 0"
                    @click="scrollRight"
                    class="absolute -right-4 top-1/2 z-10 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-slate-800 text-2xl text-white shadow-lg transition hover:bg-slate-700"
                >
                    →
                </button>

            </div>
        </section>
    </MainLayout>
</template>

<style>
/* hide scrollbar in Webkit (Chrome/Safari) */
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
</style>
