<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer class="bg-slate-800 text-slate-300 py-10 mt-auto">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-6">

            <div class="text-center md:text-left">
                <Link href="/" class="block text-xl font-bold text-white mb-2">
                    WoodFurniture Project
                </Link>
                <nav class="flex flex-wrap justify-center md:justify-start gap-6 text-sm">
                    <Link href="/catalog" class="hover:text-white transition">Catalog</Link>
                    <Link href="/" class="hover:text-white transition">About Us</Link>
                    <Link href="/" class="hover:text-white transition">Where to find us</Link>
                </nav>
            </div>

            <div class="text-sm">
                Created by: <span class="font-bold text-orange-500">Cherygo</span>
            </div>

        </div>
    </footer>
</template>
