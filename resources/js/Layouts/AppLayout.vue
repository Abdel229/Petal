<script setup>
import { Head,Link } from '@inertiajs/inertia-vue3';
import HeaderComponentVue from '@/Components/HeaderComponent.vue';

</script>

<template>
    <HeaderComponentVue/>
    <div class="w-2">

        <slot/>
    </div>
</template>
