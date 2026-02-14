<script setup lang="ts">
import { reactive, ref, watch } from 'vue';
import { debounce } from 'lodash';
import { router, Link } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';
import ProductCard from '@/pages/cat/products/ProductCard.vue';

const props = defineProps({
    furniture: Object,
    categories: Array,
    filters: Object,
});

const showFilters = ref(false);

const form = reactive({
    category: props.filters.category || '',
    max_price: props.filters.max_price || '',
    min_price: props.filters.min_price || '',
    sort_price: props.filters.sort_price || '',
});

watch(form, debounce(() => {
    router.get('/catalog', form, {
        preserveState: true,
        preserveScroll: true,
    });
}, 500));
</script>

<template>
    <MainLayout>
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row gap-8 text-black">

                <button
                    @click="showFilters = !showFilters"
                    class="md:hidden w-full bg-blue-600 text-white py-3 rounded-lg font-bold mb-4 flex justify-center items-center gap-2"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    {{ showFilters ? 'Hide Filters' : 'Show Filters' }}
                </button>

                <aside
                    class="w-full md:w-64 flex-shrink-0 transition-all duration-300 ease-in-out"
                    :class="showFilters ? 'block' : 'hidden md:block'"
                >
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <h3 class="font-bold text-lg mb-4 text-gray-800">Categories</h3>
                        <ul class="space-y-3"> <li>
                            <label class="flex items-center space-x-3 cursor-pointer py-1"> <input type="radio" v-model="form.category" value="" @change="updateFilters" class="w-5 h-5 text-blue-600"> <span>All Furniture</span>
                            </label>
                        </li>
                            <li v-for="category in categories" :key="category">
                                <label class="flex items-center space-x-3 cursor-pointer py-1">
                                    <input type="radio" v-model="form.category" :value="category" @change="updateFilters" class="w-5 h-5 text-blue-600">
                                    <span>{{ category }}</span>
                                </label>
                            </li>
                        </ul>

                        <div class="border-t border-gray-200 my-6"></div>

                        <h3 class="font-bold text-lg mb-4 text-gray-800">Price Range</h3>
                        <div class="flex items-center space-x-2 mb-4">
                            <input
                                type="number"
                                inputmode="numeric"
                                v-model="form.min_price"
                                placeholder="Min"
                                class="w-full px-3 py-3 border rounded text-gray-600 text-lg"
                            >
                            <span>-</span>
                            <input
                                type="number"
                                inputmode="numeric"
                                v-model="form.max_price"
                                placeholder="Max"
                                class="w-full px-3 py-3 border rounded text-gray-600 text-lg"
                            >
                        </div>
                        <button @click="updateFilters" class="w-full bg-gray-900 text-white py-3 rounded-lg hover:bg-gray-800 font-medium">
                            Apply Filter
                        </button>
                    </div>
                </aside>

                <main class="flex-grow">
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 bg-white p-4 rounded-lg shadow-sm border text-black gap-4">
                        <p class="text-gray-600">Showing <span class="font-bold">{{ furniture.total }}</span> results</p>

                        <select v-model="form.sort_price" @change="updateFilters" class="w-full sm:w-auto border-gray-300 rounded-md py-2">
                            <option value="">Newest Arrivals</option>
                            <option value="low_high">Price: Low to High</option>
                            <option value="high_low">Price: High to Low</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                        <ProductCard
                            v-for="item in furniture.data"
                            :key="item.id"
                            :product="item"
                        />
                    </div>

                    <div v-if="furniture.links.length > 3" class="mt-8 flex flex-wrap justify-center gap-1">
                        <component
                            :is="link.url ? Link : 'span'"
                            v-for="(link, index) in furniture.links"
                            :key="index"
                            :href="link.url"
                            class="px-3 py-2 border rounded-md text-sm font-medium transition-colors"
                            :class="{
                               'bg-blue-600 text-white border-blue-600': link.active,
                               'bg-white text-gray-700 hover:bg-gray-50 border-gray-300': !link.active && link.url,
                               'text-gray-400 border-gray-200 cursor-not-allowed': !link.url
                            }"
                        >
                            <span v-html="link.label"></span>
                        </component>
                    </div>
                </main>
            </div>
        </div>
    </MainLayout>
</template>
