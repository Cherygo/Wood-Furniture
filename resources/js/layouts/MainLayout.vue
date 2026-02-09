<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import Navbar from '@/components/Navbar.vue';
</script>

<template>
    <div class="flex min-h-screen flex-col bg-gray-50 font-sans">
        <Navbar />

        <main class="flex-1">
            <slot />
        </main>

        <Footer />
    </div>
</template>
