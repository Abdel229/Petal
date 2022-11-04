<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({
    formations:Array
})


</script>

<template>

    <Head title="Formations" />

    <AppLayout>

        <div>

            <p v-for="formation in formations">{{ formation.title }}</p>
        </div>

    </AppLayout>
</template>



