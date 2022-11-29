<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import adminLayout from '@/Layouts/adminLayout.vue';

//     defineProps(setup(() => {
//     const form = reactive({
//         title: null,
//         price: null,
//         content: null
//     })

//     function submit() {
//         Inertia.post('/formations',form);
//     }

//     return { form, submit }
// }));
</script>

<template>
<adminLayout>
    <div class="w-full h-full flex justify-center items-center">
        <form @submit.prevent="submit" class="">
        <p>
            <label for="title">Nom:</label>
            <input type="text" id="title" v-model="title" class=" pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
        </p>
        <p>
            <label for="title">Prix:</label>
            <input type="number" id="price" v-model="price" class="border-2 border-blue-700 pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
        </p>
        <p>
            <label for="content">Content:</label>
            <textarea name="content" id="content" cols="30" rows="10" v-model="content"></textarea>
        </p>
        <p>
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" onclick="">
        </p>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
    </div>

</adminLayout>

</template>
