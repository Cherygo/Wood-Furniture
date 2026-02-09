<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import Navbar from '@/components/Navbar.vue';
</script>

<template>
    <div class="min-h-screen flex flex-col font-sans bg-gray-50">
        <Navbar />

        <main class="flex-1">
            <slot />
        </main>

        <Footer />
    </div>
</template>
