<template>
    <Head title="Admin Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl leading-tight page_title mb-0">
                <i class="fa-solid fa-chart-line"></i>
                /Services</h2>
        </template>
        <div class="contain_admin">
            <div class="historique_statistique frame_original pt-10 pb-4 ">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">List Service</span>
                    <button class="button button_acount"  @click="add_service_vars_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i>Create Service
                    </button>
                </div>
                <div class="table_frame">
                    <DataTable class="table_edit DataTable1">
                        <thead>
                            <tr class="text-center font-bold">
                                <th class="pb-4 pt-6 px-6 text-start">logo</th>
                                <th class="pb-4 pt-6 px-6 text-start">title</th>
                                <th class="pb-4 pt-6 px-6 text-start">pricePerHoure</th>
                                <th class="pb-4 pt-6 px-6 text-start">discription</th>
                                <th class="pb-4 pt-6 px-6 text-start">edit</th>
                                <th class="pb-4 pt-6 px-6 text-start">delete</th>
                            </tr>
                        </thead>
                        <tbody class="text-right">
                            <tr v-for="Service in Services">
                                <td class="pb-4 pt-6 px-6 border-t text-start" id="logoService">
                                    <p v-html="Service.logo"></p>
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ Service.title }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ Service.pricePerHoure }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ Service.discription }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    <button @click="change_service_vars_frame_fun(Service.id,Service.title,Service.pricePerHoure,Service.discription,Service.logo)">
                                        <i class="fa-solid fa-pen-to-square text-green-500"></i>edit
                                    </button>
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start  ">
                                    <Link :href="`/service_admin/${Service.id}/destroy`">
                                        <i class="fa-solid fa-trash text-red-500"></i>delete
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </DataTable>
                </div>
            </div>
            <!-- add skil -->
            <div class="limit_frame" v-if="add_service_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_service_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="add_service_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="title" class="col-form-label ">title</label>
                                <input type="text" class="form-control" id="title" v-model="service_vars.title" required :error="service_vars.errors.title">
                            </div>
                            <div class="form-group">
                                <label for="pricePerHoure" class="col-form-label ">price Per Houre (USD)</label>
                                <input type="number" class="form-control" id="pricePerHoure" v-model="service_vars.pricePerHoure" required :error="service_vars.errors.pricePerHoure">
                            </div>
                            <div class="form-group">
                                <label for="discription" class="col-form-label ">discription</label>
                                <textarea v-model="service_vars.discription" cols="30" rows="10" required placeholder="Type your text here ... "></textarea>
                            </div>
                            <div class="form-group">
                                <label for="logo" class="col-form-label ">logo</label>
                                <input type="text" class="form-control" id="logo" v-model="service_vars.logo" required :error="service_vars.errors.logo">
                            </div>
                        </div>
                        <div class="save">
                            <button type="submit">
                                save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- change skil -->
            <div class="limit_frame" v-if="change_service_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_service_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_service_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="title" class="col-form-label ">title</label>
                                <input type="text" class="form-control" id="title" v-model="service_vars.title" required :error="service_vars.errors.title">
                            </div>
                            <div class="form-group">
                                <label for="pricePerHoure" class="col-form-label ">price Per Houre (USD)</label>
                                <input type="number" class="form-control" id="pricePerHoure" v-model="service_vars.pricePerHoure" required :error="service_vars.errors.pricePerHoure">
                            </div>
                            <div class="form-group">
                                <label for="discription" class="col-form-label ">discription</label>
                                <textarea v-model="service_vars.discription" cols="30" rows="10" required placeholder="Type your text here ... "></textarea>
                            </div>
                            <div class="form-group">
                                <label for="logo" class="col-form-label ">logo</label>
                                <input type="text" class="form-control" id="logo" v-model="service_vars.logo" required :error="service_vars.errors.logo">
                            </div>
                        </div>
                        <div class="save">
                            <button type="submit">
                                save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head , Link} from '@inertiajs/vue3';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';

DataTable.use(DataTablesCore);
</script>

<script>
export default {
    name: 'App',
    components: {
        Head,
        Link,
        DataTable,
    },
    props: {
        Services: Object
    },

    data() {
        return {
            add_service_vars_frame: false,
            change_service_vars_frame: false,
            service_vars: this.$inertia.form({
                id: null,
                title: null,
                pricePerHoure: null,
                discription: null,
                logo: null,
            }),
        }
    },
    mounted() {

    },
    methods: {
        change_service_vars_frame_fun(id,title,pricePerHoure,discription,logo){
            this.change_service_vars_frame?
                this.change_service_vars_frame=false:
                [
                    this.change_service_vars_frame=true,
                    this.service_vars.id=id,
                    this.service_vars.title=title,
                    this.service_vars.pricePerHoure=pricePerHoure, 
                    this.service_vars.discription=discription,
                    this.service_vars.logo=logo,  
                ]
        },
        change_service_vars_db() {
            this.service_vars.get(`/service_admin/${this.service_vars.id}/edit`, {
                onSuccess: () => {
                this.change_service_vars = false;
                this.service_vars.reset();
                },
            });
        },
        add_service_vars_frame_fun(){
            this.add_service_vars_frame?
                this.add_service_vars_frame=false:
                [
                    this.add_service_vars_frame=true,
                    this.service_vars.id=id,
                    this.service_vars.title=title,
                    this.service_vars.pricePerHoure=pricePerHoure, 
                    this.service_vars.discription=discription,
                    this.service_vars.logo=logo,  
                ]
        },
        add_service_vars_db() {
            this.service_vars.get(`/service_admin/store`, {
                onSuccess: () => {
                this.add_service_vars = false;
                this.service_vars.reset();
                },
            });
        },
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>