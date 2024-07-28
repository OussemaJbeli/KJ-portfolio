<template>
    <Head title="Admin Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl mb-0 leading-tight page_title">
                <i class="fa-solid fa-chart-line"></i>
                /Dashboard</h2>
        </template>

    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import VueApexCharts from "vue3-apexcharts";
</script>

<script>
export default {
    name: 'App',
    components: {
        Head,
        VueApexCharts
    },
    props: {
        
    },

    data() {
        return {
        }
    },
    mounted() {

    },
    methods: {
        
    },
}
</script>