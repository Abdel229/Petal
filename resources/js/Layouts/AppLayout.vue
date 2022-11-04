<script setup>
import { Head,Link } from '@inertiajs/inertia-vue3';
import HeaderComponentVue from '@/Components/HeaderComponent.vue';
import FooterComponentVue from '@/Components/FooterComponent.vue';
const props=defineProps(['myclass']);
</script>

<template>
    <HeaderComponentVue/>
    <div  v-bind:class="myclass" class="bg-slate-100" style="z-index:-10;">

        <slot/>

    </div>
    <FooterComponentVue/>

</template>
