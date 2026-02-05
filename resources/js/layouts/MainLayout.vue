<script setup>
import Navbar from '@/components/Navbar.vue';
import Footer from '@/components/Footer.vue';
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
