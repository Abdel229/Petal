<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

    defineProps(setup(() => {
    const form = reactive({
        title: null,
        price: null,
        content: null
    })

    function submit() {
        Inertia.post('');
    }

    return { form, submit }
}));
</script>

<template>

    <form @submit.prevent="submit">
        <p>
            <label for="title">Nom:</label>
            <input type="text" id="title" v-model="title">
        </p>
        <p>
            <label for="title">Prix:</label>
            <input type="number" id="price" v-model="price">
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
            <input type="submit" value="Créer">
        </p>
    </form>

</template>
