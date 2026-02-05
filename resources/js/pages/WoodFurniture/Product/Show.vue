<script setup>
import WoodFurnitureLayout from '@/layouts/WoodFurnitureLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Folding Sofa" />

    <WoodFurnitureLayout>

        <div class="productp mt120">
            <div class="container">
                <div class="productp-items">
                    <div class="productp-img">
                        <img src="/assets/woodfurniture/assets/imgs/p1.jpg" alt="">
                    </div>
                    <div class="productp-text">
                        <p class="prodp-p">Folding Sofa</p>
                        <div class="productp-info">
                            <p>Country: Russia</p>
                            <p>Category: Sofas</p>
                            <p>Color: Smoky Gray</p>
                        </div>
                        <h2>12999 ₽</h2>
                        <div class="productp-functions">
                            <a href="#" class="orbtn">Add to Cart</a>
                            <Link href="/woodfurniture/product/edit" class="redbtn">Edit</Link>
                            <Link href="/woodfurniture/product/delete" class="delbtn">Delete</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </WoodFurnitureLayout>
</template>
