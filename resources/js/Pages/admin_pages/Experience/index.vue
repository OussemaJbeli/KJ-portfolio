<template>
    <Head title="Admin Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl leading-tight page_title mb-0">
                <i class="fa-solid fa-chart-line"></i>
                /Experience</h2>
        </template>
        <div class="contain_admin">
            <div class="historique_statistique frame_original pt-10 pb-4 ">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">List Experience</span>
                    <button class="button button_acount"  @click="add_experience_vars_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i>Create Experience
                    </button>
                </div>
                <div class="table_frame">
                    <DataTable class="table_edit DataTable1">
                        <thead>
                            <tr class="text-center font-bold">
                                <th class="pb-4 pt-6 px-6 text-start">title</th>
                                <th class="pb-4 pt-6 px-6 text-start">poste</th>
                                <th class="pb-4 pt-6 px-6 text-start">entreprice</th>
                                <th class="pb-4 pt-6 px-6 text-start">discription</th>
                                <th class="pb-4 pt-6 px-6 text-start">StartYear</th>
                                <th class="pb-4 pt-6 px-6 text-start">EndYear</th>
                                <th class="pb-4 pt-6 px-6 text-start">edit</th>
                                <th class="pb-4 pt-6 px-6 text-start">delete</th>
                            </tr>
                        </thead>
                        <tbody class="text-right">
                            <tr v-for="Experience in Experiences">
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ Experience.title }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ Experience.poste }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ Experience.entreprice }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ Experience.discription }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ Experience.StartYear }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ Experience.EndYear }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    <button @click="change_experience_vars_frame_fun(Experience.id,Experience.title,Experience.poste,Experience.entreprice,Experience.discription,Experience.StartYear,Experience.EndYear)">
                                        <i class="fa-solid fa-pen-to-square text-green-500"></i>edit
                                    </button>
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start  ">
                                    <Link :href="`/experience_admin/${Experience.id}/destroy`">
                                        <i class="fa-solid fa-trash text-red-500"></i>delete
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </DataTable>
                </div>
            </div>
            <!-- add skil -->
            <div class="limit_frame" v-if="add_experience_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_experience_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="add_experience_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="title" class="col-form-label ">title</label>
                                <input type="text" class="form-control" id="title" v-model="experience_vars.title" required :error="experience_vars.errors.title">
                            </div>
                            <div class="form-group">
                                <label for="poste" class="col-form-label ">poste</label>
                                <input type="text" class="form-control" id="poste" v-model="experience_vars.poste" required :error="experience_vars.errors.poste">
                            </div>
                            <div class="form-group">
                                <label for="entreprice" class="col-form-label ">entreprice</label>
                                <input type="text" class="form-control" id="entreprice" v-model="experience_vars.entreprice" required :error="experience_vars.errors.entreprice">
                            </div>
                            <div class="group flex justify-between">
                                <div class="form-group mr-2">
                                    <label for="StartYear" class="col-form-label mb-2">Start Year</label>
                                    <input type="number" class="form-control" id="StartYear" v-model="experience_vars.StartYear" required :error="experience_vars.errors.StartYear">
                                </div>
                                <div class="form-group mr-2">
                                    <label for="EndYear" class="col-form-label mb-2">End Year</label>
                                    <input type="number" class="form-control" id="EndYear" v-model="experience_vars.EndYear" required :error="experience_vars.errors.EndYear">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="discription" class="col-form-label ">discription</label>
                                <textarea v-model="experience_vars.discription" cols="30" rows="10" required placeholder="Type your text here ... "></textarea>
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
            <div class="limit_frame" v-if="change_experience_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_experience_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_experience_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="title" class="col-form-label ">title</label>
                                <input type="text" class="form-control" id="title" v-model="experience_vars.title" required :error="experience_vars.errors.title">
                            </div>
                            <div class="form-group">
                                <label for="poste" class="col-form-label ">poste</label>
                                <input type="text" class="form-control" id="poste" v-model="experience_vars.poste" required :error="experience_vars.errors.poste">
                            </div>
                            <div class="form-group">
                                <label for="entreprice" class="col-form-label ">entreprice</label>
                                <input type="text" class="form-control" id="entreprice" v-model="experience_vars.entreprice" required :error="experience_vars.errors.entreprice">
                            </div>
                            <div class="group flex justify-between">
                                <div class="form-group mr-2">
                                    <label for="StartYear" class="col-form-label mb-2">Start Year</label>
                                    <input type="number" class="form-control" id="StartYear" v-model="experience_vars.StartYear" required :error="experience_vars.errors.StartYear">
                                </div>
                                <div class="form-group mr-2">
                                    <label for="EndYear" class="col-form-label mb-2">End Year</label>
                                    <input type="number" class="form-control" id="EndYear" v-model="experience_vars.EndYear" required :error="experience_vars.errors.EndYear">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="discription" class="col-form-label ">discription</label>
                                <textarea v-model="experience_vars.discription" cols="30" rows="10" required placeholder="Type your text here ... "></textarea>
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
        Experiences: Object
    },

    data() {
        return {
            add_experience_vars_frame: false,
            change_experience_vars_frame: false,
            experience_vars: this.$inertia.form({
                id: null,
                title: null,
                poste: null,
                entreprice: null,
                discription: null,
                StartYear: null,
                EndYear: null,
            }),
        }
    },
    mounted() {

    },
    methods: {
        change_experience_vars_frame_fun(id,title,poste,entreprice,discription,StartYear,EndYear){
            this.change_experience_vars_frame?
                this.change_experience_vars_frame=false:
                [
                    this.change_experience_vars_frame=true,
                    this.experience_vars.id=id,
                    this.experience_vars.title=title,
                    this.experience_vars.poste=poste, 
                    this.experience_vars.entreprice=entreprice,
                    this.experience_vars.discription=discription,  
                    this.experience_vars.StartYear=StartYear,
                    this.experience_vars.EndYear=EndYear,  
                ]
        },
        change_experience_vars_db() {
            this.experience_vars.get(`/experience_admin/${this.experience_vars.id}/edit`, {
                onSuccess: () => {
                this.change_experience_vars = false;
                this.experience_vars.reset();
                },
            });
        },
        add_experience_vars_frame_fun(){
            this.add_experience_vars_frame?
                this.add_experience_vars_frame=false:
                [
                    this.add_experience_vars_frame=true,
                    this.experience_vars.id=id,
                    this.experience_vars.title=title,
                    this.experience_vars.pricePerHoure=pricePerHoure, 
                    this.experience_vars.discription=discription,
                    this.experience_vars.logo=logo,  
                ]
        },
        add_experience_vars_db() {
            this.experience_vars.get(`/experience_admin/store`, {
                onSuccess: () => {
                this.add_experience_vars = false;
                this.experience_vars.reset();
                },
            });
        },
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>