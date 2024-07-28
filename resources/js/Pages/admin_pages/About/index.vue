<template>
    <Head title="Admin Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl leading-tight page_title mb-0">
                <i class="fa-solid fa-chart-line mb-0"></i>
                /About</h2>
        </template>
        <div class="formFrame py-12 lg:px-8">
                    <form @submit.prevent="change_about_vars_db" class="p-4 body_fram">
                        <div class="small_panel">
                            <div class="group flex justify-between">
                                <div class="form-group mr-2">
                                    <label for="projects" class="col-form-label mb-2">projects</label>
                                    <input type="number" class="form-control" id="projects" v-model="change_about_vars.projects" required :error="change_about_vars.errors.projects">
                                </div>
                                <div class="form-group mr-2">
                                    <label for="happy_client" class="col-form-label mb-2">happy client</label>
                                    <input type="number" class="form-control" id="happy_client" v-model="change_about_vars.happy_client" required :error="change_about_vars.errors.happy_client">
                                </div>
                                <div class="form-group mr-2">
                                    <label for="cups_of_coffee" class="col-form-label mb-2">cups of coffee</label>
                                    <input type="number" class="form-control" id="cups_of_coffee" v-model="change_about_vars.cups_of_coffee" required :error="change_about_vars.errors.cups_of_coffee">
                                </div>
                            </div>
                            <div class="group flex justify-between">
                                <div class="form-group mr-2">
                                    <label for="name" class="col-form-label mb-2">name</label>
                                    <input type="text" class="form-control" id="name" v-model="change_about_vars.name" required :error="change_about_vars.errors.name">
                                </div>
                                <div class="form-group ml-2">
                                    <label for="ExpYears" class="col-form-label mb-2">working experience</label>
                                    <input type="number" class="form-control" id="ExpYears" v-model="change_about_vars.ExpYears" required :error="change_about_vars.errors.ExpYears">
                                </div>
                            </div>
                            <div class="group flex group_photo">
                                <div class="form-group">
                                    <label for="name" class="col-form-label mb-2">description</label>
                                    <textarea v-model="change_about_vars.description" cols="30" rows="10" required placeholder="Type your text here ... "></textarea>
                                </div>
                                <div class="form-group ml-2">
                                    <label for="image" class="col-form-label mb-2">personnel photo</label>
                                    <div class="under_group">
                                        <img :src="this.About[0].image" alt="">
                                        <file-input
                                            v-model="change_about_vars.image"
                                            :error="change_about_vars.errors.image"
                                            class="File_shoer"
                                            type="file"
                                            accept="image/*"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="save">
                            <button type="submit">
                                save
                            </button>
                        </div>
                    </form>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import FileInput from "@/Components/FileInput.vue";
</script>

<script>
export default {
    name: 'App',
    components: {
        Head,
        FileInput,
    },
    props: {
        About: Object,
    },

    data() {
        return {
            change_about_vars: this.$inertia.form({
                name: this.About[0].name,
                description: this.About[0].description,
                ExpYears: this.About[0].ExpYears,
                projects: this.About[0].projects,
                happy_client: this.About[0].happy_client,
                cups_of_coffee: this.About[0].cups_of_coffee,
                image: null,
            }),
        }
    },
    mounted() {

    },
    methods: {
        change_about_vars_db() {
            this.change_about_vars.post(`/about_admin/edit`, {
            });
        },
    },
}
</script>