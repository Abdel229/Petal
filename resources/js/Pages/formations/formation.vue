<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({
    formations: Array
})


</script>

<template>

    <Head title="Formations" />

    <AppLayout>
        <!-- Formations -->
        <div class="grid lg:grid-cols-4 w-10/12 mx-auto gap-4">
            <!-- formation -->
            <div class="transition rounded-2xl bg-slate-100 shadow-md hover:shadow-lg p-4" v-for="formation in props.formations">
                <p v-for="categorie in formation.categorie"
                    class="transition text-blue-600 font-regular text-xs mt-1 cursor-pointer hover:underline hover:underline-offset-2">
                    {{ categorie.nom }}</p>
                <p class="transition text-2xl font-bold cursor-pointer hover:underline hover:underline-offset-4">
                    {{ formation.title }}</p>
                <p class="text-center mt-1 text-gray-600 text-sm">{{ formation.content }}</p>
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

        </div>


    </AppLayout>
</template>



