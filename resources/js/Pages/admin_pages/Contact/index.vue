<template>
    <Head title="Admin Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl leading-tight page_title mb-0">
                <i class="fa-solid fa-chart-line"></i>
                /Contact</h2>
        </template>
        <div class="formFrame py-12 lg:px-8">
                    <form @submit.prevent="change_contact_vars_db" class="p-4 body_fram">
                        <div class="small_panel">
                            <div class="form-group mr-2">
                                <label for="location" class="col-form-label mb-2">location</label>
                                <input type="text" class="form-control" id="location" v-model="change_contact_vars.location" required :error="change_contact_vars.errors.location">
                            </div>
                            <div class="form-group mr-2">
                                <label for="phone" class="col-form-label mb-2">phone</label>
                                <input type="text" class="form-control" id="phone" v-model="change_contact_vars.phone" required :error="change_contact_vars.errors.phone">
                            </div>
                            <div class="form-group mr-2">
                                <label for="email" class="col-form-label mb-2">email</label>
                                <input type="email" class="form-control" id="email" v-model="change_contact_vars.email" required :error="change_contact_vars.errors.email">
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
</script>

<script>
export default {
    name: 'App',
    components: {
        Head,
    },
    props: {
        Contact: Object,
    },

    data() {
        return {
            change_contact_vars: this.$inertia.form({
                location: this.Contact[0].location,
                phone: this.Contact[0].phone,
                email: this.Contact[0].email,
            }),
        }
    },
    mounted() {

    },
    methods: {
        change_contact_vars_db() {
            this.change_contact_vars.post(`/contact_admin/edit`, {
            });
        },
    },
}
</script>