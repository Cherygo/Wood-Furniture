<script setup>
import WoodFurnitureLayout from '@/layouts/WoodFurnitureLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const scrollContainer = ref(null);

const scrollRight = () => {
    if (scrollContainer.value) {
        scrollContainer.value.scrollBy({ left: 300, behavior: 'smooth' });
    }
};
</script>

<template>
    <Head title="Home" />

    <WoodFurnitureLayout>
        <div class="banner">
            <div class="container">
                <div class="banner-items">
                    <h1 class="mt360">Furniture for every home!</h1>
                    <a href="" class="catalbtn">To Catalog</a>
                </div>
            </div>
        </div>

        <div class="catalogue mt120">
            <div class="container">
                <div class="products-text">
                    <p class="bbtext">New Products</p>
                    <a href="#" class="ortext">Show all</a>
                </div>
                <!-- Scrollable product section -->
                <div class="catalog-wrapper mt40">
                    <div class="catalog-items" ref="scrollContainer">
                        <div v-for="i in 8" :key="i" class="product">
                            <Link href="/woodfurniture/product"><img src="/assets/woodfurniture/assets/imgs/p1.jpg" alt=""></Link>
                            <div class="prodtext">
                                <Link href="/woodfurniture/product" class="prodtext"><p>Sofas</p></Link>
                                <Link href="/woodfurniture/product" class="prodtext"><h3>Folding Sofa Description</h3></Link>
                            </div>
                            <div class="prodprice">
                                <h4>12999 ₽</h4>
                                <a href="" class="cart"><svg fill="#ffffff" version="1.1" id="Capa_1" width="26px" height="26px" viewBox="0 0 902.86 902.86" xml:space="preserve" transform="matrix(1, 0, 0, 1, 0, 0)" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                    <g id="SVGRepo_iconCarrier"> <g> <g> <path d="M671.504,577.829l110.485-432.609H902.86v-68H729.174L703.128,179.2L0,178.697l74.753,399.129h596.751V577.829z M685.766,247.188l-67.077,262.64H131.199L81.928,246.756L685.766,247.188z"/> <path d="M578.418,825.641c59.961,0,108.743-48.783,108.743-108.744s-48.782-108.742-108.743-108.742H168.717 c-59.961,0-108.744,48.781-108.744,108.742s48.782,108.744,108.744,108.744c59.962,0,108.743-48.783,108.743-108.744 c0-14.4-2.821-28.152-7.927-40.742h208.069c-5.107,12.59-7.928,26.342-7.928,40.742 C469.675,776.858,518.457,825.641,578.418,825.641z M209.46,716.897c0,22.467-18.277,40.744-40.743,40.744 c-22.466,0-40.744-18.277-40.744-40.744c0-22.465,18.277-40.742,40.744-40.742C191.183,676.155,209.46,694.432,209.46,716.897z M619.162,716.897c0,22.467-18.277,40.744-40.743,40.744s-40.743-18.277-40.743-40.744c0-22.465,18.277-40.742,40.743-40.742 S619.162,694.432,619.162,716.897z"/> </g> </g> </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                    <button @click="scrollRight" class="scroll-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 18l6-6-6-6" />
                        </svg>
                    </button>
            </div>
        </div>
        </div>
    </WoodFurnitureLayout>
</template>
