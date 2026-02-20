<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer class="mt-auto bg-slate-800 py-10 text-slate-300">
        <div
            class="container mx-auto flex flex-col items-center justify-between gap-6 px-4 md:flex-row"
        >
            <div class="text-center md:text-left">
                <Link href="/" class="mb-2 block text-xl font-bold text-white">
                    WoodFurniture Project
                </Link>
                <nav
                    class="flex flex-wrap justify-center gap-6 text-sm md:justify-start"
                >
                    <Link href="/catalog" class="transition hover:text-white"
                        >Catalog</Link
                    >
                    <Link href="/about-us" class="transition hover:text-white"
                        >About Us</Link
                    >
                    <Link href="/location" class="transition hover:text-white"
                        >Where to find us</Link
                    >
                </nav>
            </div>

            <div class="text-sm">
                Created by:
                <span class="font-bold text-orange-500">Cherygo</span>
            </div>
        </div>
    </footer>
</template>
