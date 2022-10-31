<script>
import { Head } from '@inertiajs/inertia-vue3';
export default {
    props: [formations],
    data() {
        return {
            'formations': this.formations,
        }
    }
}
</script>

<template>
    <div>
        rfj
        <Head :title="formations"></Head>
        <p v-for="formations in formation" v-bind:key="formation.id">{{ formations.title }}</p>
    </div>
</template>


