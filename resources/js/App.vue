<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import PageTree from './components/PageTree.vue';

const pages = ref([]);

onMounted(async () => {
    try {
        const response = await axios.get('/api/pages'); // Laravel API
        pages.value = response.data;
    } catch (error) {
        console.error('Error fetching pages:', error);
    }
});
</script>

<template>
    <div>
        <h1>CMS Page Structure</h1>
        <PageTree :pages="pages" />
    </div>
</template>

<style scoped>
h1 {
    text-align: center;
    font-family: Arial, sans-serif;
}
</style>
 