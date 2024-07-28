<template>
    <Head title="Admin Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl leading-tight page_title mb-0">
                <i class="fa-solid fa-chart-line"></i>
                /Skils</h2>
        </template>
        <div class="contain_admin">
            <div class="historique_statistique frame_original pt-10 pb-4 ">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">List Skils</span>
                    <button class="button button_acount"  @click="add_skils_vars_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i>Create Skil
                    </button>
                </div>
                <div class="table_frame">
                    <DataTable class="table_edit DataTable1">
                        <thead>
                            <tr class="text-center font-bold">
                                <th class="pb-4 pt-6 px-6 text-start">skil</th>
                                <th class="pb-4 pt-6 px-6 text-start">value</th>
                                <th class="pb-4 pt-6 px-6 text-start">edit</th>
                                <th class="pb-4 pt-6 px-6 text-start">delete</th>
                            </tr>
                        </thead>
                        <tbody class="text-right">
                            <tr v-for="skil in skils">
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ skil.skil }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ skil.value }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    <button @click="change_skils_vars_frame_fun(skil.id,skil.skil,skil.value)">
                                        <i class="fa-solid fa-pen-to-square text-green-500"></i>edit
                                    </button>
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start  ">
                                    <Link :href="`/skill_admin/${skil.id}/skildestroy`">
                                        <i class="fa-solid fa-trash text-red-500"></i>delete
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </DataTable>
                </div>
            </div>
            <div class="historique_statistique frame_original pt-10 pb-4 ">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">List Education parcour</span>
                    <button class="button button_acount"  @click="add_education_vars_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i>Create Account
                    </button>
                </div>
                <div class="table_frame">
                    <DataTable class="table_edit DataTable1">
                        <thead>
                            <tr class="text-center font-bold">
                                <th class="pb-4 pt-6 px-6 text-start">title</th>
                                <th class="pb-4 pt-6 px-6 text-start">start year</th>
                                <th class="pb-4 pt-6 px-6 text-start">end year</th>
                                <th class="pb-4 pt-6 px-6 text-start">univercety</th>
                                <th class="pb-4 pt-6 px-6 text-start">edit</th>
                                <th class="pb-4 pt-6 px-6 text-start">delete</th>
                            </tr>
                        </thead>
                        <tbody class="text-right">
                            <tr v-for="educ in education">
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ educ.title }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ educ.start_year }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ educ.end_year }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ educ.univercety }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    <button @click="change_education_vars_frame_fun(educ.id,educ.title,educ.start_year,educ.end_year,educ.univercety)">
                                        <i class="fa-solid fa-pen-to-square text-green-500"></i>edit
                                    </button>
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start  ">
                                    <Link :href="`/skill_admin/${educ.id}/educdestroy`">
                                        <i class="fa-solid fa-trash text-red-500"></i>delete
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </DataTable>
                </div>
            </div>
            <!-- add skil -->
            <div class="limit_frame" v-if="add_skils_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_skils_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="add_skils_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="skil" class="col-form-label ">skil</label>
                                <input type="text" class="form-control" id="skil" v-model="skils_vars.skil" required :error="skils_vars.errors.skil">
                            </div>
                            <div class="form-group">
                                <label for="value" class="col-form-label ">value</label>
                                <div class="range">
                                    <div class="sliderValue">
                                        <span 
                                            :class="{ show: isValueVisible }" 
                                            :style="{ left: (skils_vars.value) + '%' }"
                                            >
                                            {{ skils_vars.value }}
                                        </span>
                                    </div>
                                    <div class="field">
                                        <div class="value left">0</div>
                                        <input 
                                            type="range" 
                                            v-model="skils_vars.value" 
                                            @input="showValue" 
                                            @blur="hideValue"
                                            min="0" 
                                            max="100"
                                        />
                                        <div class="value right">100</div>
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
            </div>
            <!-- change skil -->
            <div class="limit_frame" v-if="change_skils_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_skils_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_skils_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="skil" class="col-form-label ">skil</label>
                                <input type="text" class="form-control" id="skil" v-model="skils_vars.skil" required :error="skils_vars.errors.skil">
                            </div>
                            <div class="form-group">
                                <label for="value" class="col-form-label ">value</label>
                                <div class="range">
                                    <div class="sliderValue">
                                        <span 
                                            :class="{ show: isValueVisible }" 
                                            :style="{ left: (skils_vars.value) + '%' }"
                                            >
                                            {{ skils_vars.value }}
                                        </span>
                                    </div>
                                    <div class="field">
                                        <div class="value left">0</div>
                                        <input 
                                            type="range" 
                                            v-model="skils_vars.value" 
                                            @input="showValue" 
                                            @blur="hideValue"
                                            min="0" 
                                            max="100"
                                        />
                                        <div class="value right">100</div>
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
            </div>
            <!-- add educ -->
            <div class="limit_frame" v-if="add_education_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_education_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="add_education_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="title" class="col-form-label ">title</label>
                                <input type="text" class="form-control" id="title" v-model="education_vars.title" required :error="education_vars.errors.title">
                            </div>
                            <div class="form-group">
                                <label for="start_year" class="col-form-label ">start year</label>
                                <input type="number" class="form-control" id="start_year" v-model="education_vars.start_year" required :error="education_vars.errors.start_year">
                            </div>
                            <div class="form-group">
                                <label for="end_year" class="col-form-label ">end year</label>
                                <input type="number" class="form-control" id="end_year" v-model="education_vars.end_year" required :error="education_vars.errors.end_year">
                            </div>
                            <div class="form-group">
                                <label for="univercety" class="col-form-label ">univercety</label>
                                <input type="text" class="form-control" id="univercety" v-model="education_vars.univercety" required :error="education_vars.errors.univercety">
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
            <!-- change educ -->
            <div class="limit_frame" v-if="change_education_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_education_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_education_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="title" class="col-form-label ">title</label>
                                <input type="text" class="form-control" id="title" v-model="education_vars.title" required :error="education_vars.errors.title">
                            </div>
                            <div class="form-group">
                                <label for="start_year" class="col-form-label ">start year</label>
                                <input type="number" class="form-control" id="start_year" v-model="education_vars.start_year" required :error="education_vars.errors.start_year">
                            </div>
                            <div class="form-group">
                                <label for="end_year" class="col-form-label ">end year</label>
                                <input type="number" class="form-control" id="end_year" v-model="education_vars.end_year" required :error="education_vars.errors.end_year">
                            </div>
                            <div class="form-group">
                                <label for="univercety" class="col-form-label ">univercety</label>
                                <input type="text" class="form-control" id="univercety" v-model="education_vars.univercety" required :error="education_vars.errors.univercety">
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
        skils: Object,
        education: Object,
    },

    data() {
        return {
            add_skils_vars_frame: false,
            change_skils_vars_frame: false,
            skils_vars: this.$inertia.form({
                id: null,
                skil: null,
                value: 60,
            }),

            add_education_vars_frame: false,
            change_education_vars_frame: false,
            education_vars: this.$inertia.form({
                id: null,
                title: null,
                start_year: null,
                end_year: null,
                univercety: null,
            }),

            sliderValue: 0,
            isValueVisible: false
        }
    },
    computed: {
        total: function () {
        return this.value * 10
        }
    },
    mounted() {

    },
    methods: {
        showValue() {
            this.isValueVisible = true;
        },
        hideValue() {
            this.isValueVisible = false;
        },
        // skils
        change_skils_vars_frame_fun(id,skil,value){
            this.change_skils_vars_frame?
                this.change_skils_vars_frame=false:
                [
                    this.change_skils_vars_frame=true,
                    this.skils_vars.id=id,
                    this.skils_vars.skil=skil,
                    this.skils_vars.value=value,  
                ]
        },
        change_skils_vars_db() {
            this.skils_vars.get(`/skill_admin/${this.skils_vars.id}/editSkil`, {
                onSuccess: () => {
                this.change_skils_vars = false;
                this.skils_vars.reset();
                },
            });
        },
        add_skils_vars_frame_fun(){
            this.add_skils_vars_frame?
                this.add_skils_vars_frame=false:
                [
                    this.add_skils_vars_frame=true,
                    this.skils_vars.id=null,
                    this.skils_vars.skil=null,
                    this.skils_vars.value=60,  
                ]
        },
        add_skils_vars_db() {
            this.skils_vars.get(`/skill_admin/addSkil`, {
                onSuccess: () => {
                this.add_skils_vars = false;
                this.skils_vars.reset();
                },
            });
        },

        // education
        change_education_vars_frame_fun(id,title,start_year,end_year,univercety){
            this.change_education_vars_frame?
                this.change_education_vars_frame=false:
                [
                    this.change_education_vars_frame=true,
                    this.education_vars.id=id,
                    this.education_vars.title=title,
                    this.education_vars.start_year=start_year, 
                    this.education_vars.end_year=end_year,
                    this.education_vars.univercety=univercety,  
                ]
        },
        change_education_vars_db() {
            this.education_vars.get(`/skill_admin/${this.education_vars.id}/editEducation`, {
                onSuccess: () => {
                this.change_education_vars_frame = false;
                this.education_vars.reset();
                },
            });
        },
        add_education_vars_frame_fun(){
            this.add_education_vars_frame?
                this.add_education_vars_frame=false:
                [
                    this.add_education_vars_frame=true,
                    this.education_vars.id=null,
                    this.education_vars.title=null,
                    this.education_vars.start_year=null, 
                    this.education_vars.end_year=null,
                    this.education_vars.univercety=null,  
                ]
        },
        add_education_vars_db() {
            this.education_vars.get(`/skill_admin/addEducation`, {
                onSuccess: () => {
                this.add_education_vars_frame = false;
                this.education_vars.reset();
                },
            });
        },
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>