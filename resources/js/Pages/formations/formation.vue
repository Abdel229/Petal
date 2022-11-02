<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps(['formations'])
const formations = computed(() => {
    this.formations = formations
})

</script>

<template>

    <Head title="Formations" />

    <AppLayout>

        <div>

            <p v-for="formations in this.formation" v-bind:key="formations.id">{{ formations.title }}</p>
        </div>

    </AppLayout>
</template>



