<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({
    formation: Array
})


</script>

<template>

    <Head title="Formation" />

    <AppLayout>

        <!-- formation -->
        <div class="transition rounded-2xl bg-slate-200 shadow-md hover:shadow-lg p-4">
            <p
                class="transition text-blue-600 font-regular text-xs mt-1 cursor-pointer hover:underline hover:underline-offset-2">
                {{ formation.categorie.nom }}</p>
            <Link :href="route('formations.show', { formation: formation.id })" method="get"
                class="transition text-2xl font-bold cursor-pointer hover:underline hover:underline-offset-4">
            {{ formation.title }}</Link>
            <p class="text-center mt-1 text-gray-600 text-sm">{{ formation.content.slice(0, 80) }}...</p>
            <!-- Price and date -->
            <div class="flex justify-between mt-8 mx-3 items-center">
                <!-- price -->
                <div class="flex text-blue-600">
                    <p class="text-2xl font-bold">{{ formation.price }}</p>
                    <p class="relative bottom-2">fcfa</p>
                </div>
                <!-- Date -->
                <p class="relative top-1 font-mono font-medium">{{ formation.date }}</p>
            </div>
        </div>

    </AppLayout>
</template>



