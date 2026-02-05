<script setup>
import { Link, Head } from '@inertiajs/vue3';
</script>

<template>
    <Head>
        <link rel="stylesheet" href="/assets/woodfurniture/assets/css/css.css">
    </Head>

    <div>
        <header>
            <div class="container">
                <div class="header-items">
                    <Link href="/woodfurniture" class="logo">WoodFurniture</Link>
                    <nav>
                        <a href="#" class="link">About Us</a>
                        <a href="#" class="link">Catalog</a>
                        <a href="#" class="link">Where to find us?</a>
                    </nav>
                    <nav>
                        <Link href="/woodfurniture/login" class="loginbtn">Login</Link>
                        <Link href="/woodfurniture/register" class="regbtn">Register</Link>
                    </nav>
                </div>
            </div>
        </header>

        <div class="categories">
            <div class="container">
                <div class="category-items">
                    <a href="" class="category-item">All Products</a>
                    <a href="" class="category-item">Tables</a>
                    <a href="" class="category-item">Chairs</a>
                    <a href="" class="category-item">Wardrobes</a>
                    <a href="" class="category-item">Armchairs</a>
                    <a href="" class="category-item">Beds</a>
                    <a href="" class="category-item">Sofas</a>
                    <a href="" class="category-item">Dressers</a>
                    <a href="" class="category-item">Stools</a>
                </div>
            </div>
        </div>

        <slot />

        <footer class="mt120">
            <div class="container">
                <div class="footer-items">
                    <Link href="/woodfurniture" class="logo">WoodFurniture</Link>
                    <p>Designed by Cherygo</p>
                </div>
            </div>
        </footer>
    </div>
</template>
