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
        <div class="grid lg:grid-cols-4 w-10/12 mx-auto gap-4 py-4">
            <!-- formation -->
            <div class="transition rounded-2xl bg-slate-200 shadow-md hover:shadow-lg p-4" v-for="oneformation in props.formations">
                <p
                    class="transition text-blue-600 font-regular text-xs mt-1 cursor-pointer hover:underline hover:underline-offset-2">
                    {{ oneformation.categorie.nom }}</p>
                <Link :href="route('formations.show',{formation:oneformation.id})" method="get" class="transition text-2xl font-bold cursor-pointer hover:underline hover:underline-offset-4">
                    {{ oneformation.title }}</Link>
                <p class="text-center mt-1 text-gray-600 text-sm">{{ oneformation.content.slice(0,80) }}...</p>
                <!-- Price and date -->
                <div class="flex justify-between mt-8 mx-3 items-center">
                    <!-- price -->
                    <div class="flex text-blue-600">
                        <p class="text-2xl font-bold">{{ oneformation.price }}</p>
                        <p class="relative bottom-2">fcfa</p>
                    </div>
                    <!-- Date -->
                    <p class="relative top-1 font-mono font-medium">{{ oneformation.date }}</p>
                </div>
            </div>

        </div>


    </AppLayout>
</template>



