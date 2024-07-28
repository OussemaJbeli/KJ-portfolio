<template>
    <Head title="Admin Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl leading-tight page_title mb-0">
                <i class="fa-solid fa-chart-line"></i>
                /Project</h2>
        </template>
        <div class="contain_admin">
            <div class="historique_statistique frame_original pt-10 pb-4 ">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">List Project</span>
                    <button class="button button_acount"  @click="add_project_vars_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i>Create Project
                    </button>
                </div>
                <div class="table_frame">
                    <DataTable class="table_edit DataTable1">
                        <thead>
                            <tr class="text-center font-bold">
                                <th class="pb-4 pt-6 px-6 text-start">imageCover</th>
                                <th class="pb-4 pt-6 px-6 text-start">title</th>
                                <th class="pb-4 pt-6 px-6 text-start">categorie</th>
                                <th class="pb-4 pt-6 px-6 text-start">edit</th>
                                <th class="pb-4 pt-6 px-6 text-start">delete</th>
                                <th class="pb-4 pt-6 px-6 text-start">show</th>
                            </tr>
                        </thead>
                        <tbody class="text-right">
                            <tr v-for="Project in Projects">
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    <img :src="Project.imageCover" alt="" class="h-6">
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ Project.title }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    {{ Project.categorie }}
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    <button @click="change_project_vars_frame_fun(Project.id,Project.title,Project.imageCover,Project.categorie)">
                                        <i class="fa-solid fa-pen-to-square text-green-500"></i>edit
                                    </button>
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start  ">
                                    <Link :href="`/project_admin/${Project.id}/destroy`">
                                        <i class="fa-solid fa-trash text-red-500"></i>delete
                                    </Link>
                                </td>
                                <td class="pb-4 pt-6 px-6 border-t text-start">
                                    <Link :href="`/project_admin/${Project.id}/show`">
                                        <i class="fa-solid fa-angle-right"></i>show
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </DataTable>
                </div>
            </div>

            <div class="limit_frame" v-if="add_project_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_project_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="add_project_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="title" class="col-form-label ">title</label>
                                <input type="text" class="form-control" id="title" v-model="project_vars.title" required :error="project_vars.errors.title">
                            </div>
                            <div class="form-group">
                                <label for="categorie" class="col-form-label ">categorie</label>
                                <input type="text" class="form-control" id="categorie" v-model="project_vars.categorie" required :error="project_vars.errors.categorie">
                            </div>
                            <div class="form-group">
                                <label for="logo" class="col-form-label ">image cover</label>
                                <div class="under_group">
                                    <file-input
                                        v-model="project_vars.imageCover"
                                        :error="project_vars.errors.imageCover"
                                        class="File_shoer"
                                        type="file"
                                        accept="image/*"
                                    />
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

            <div class="limit_frame" v-if="change_project_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_project_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_project_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="title" class="col-form-label ">title</label>
                                <input type="text" class="form-control" id="title" v-model="project_vars.title" required :error="project_vars.errors.title">
                            </div>
                            <div class="form-group">
                                <label for="categorie" class="col-form-label ">categorie</label>
                                <input type="text" class="form-control" id="categorie" v-model="project_vars.categorie" required :error="project_vars.errors.categorie">
                            </div>
                            <div class="form-group">
                                <label for="logo" class="col-form-label ">image cover</label>
                                <div class="under_group">
                                    <file-input
                                        v-model="project_vars.imageCover"
                                        :error="project_vars.errors.imageCover"
                                        class="File_shoer"
                                        type="file"
                                        accept="image/*"
                                    />
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
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head , Link} from '@inertiajs/vue3';
import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';
import FileInput from "@/Components/FileInput.vue";
DataTable.use(DataTablesCore);
</script>

<script>
export default {
    name: 'App',
    components: {
        Head,
        Link,
        DataTable,
        FileInput
    },
    props: {
        Projects: Object
    },

    data() {
        return {
            add_project_vars_frame: false,
            change_project_vars_frame: false,
            project_vars: this.$inertia.form({
                id: null,
                title: null,
                imageCover: null,
                categorie: null,
            }),
        }
    },
    mounted() {

    },
    methods: {
        add_project_vars_frame_fun(){
            this.add_project_vars_frame?
                this.add_project_vars_frame=false:
                [
                    this.add_project_vars_frame=true,
                    this.project_vars.id=null,
                    this.project_vars.title=null,
                    this.project_vars.imageCover=null, 
                    this.project_vars.categorie=null, 
                ]
        },
        add_project_vars_db() {
            this.project_vars.post(`/project_admin/store`, {
                onSuccess: () => {
                this.add_project_vars_frame = false;
                this.project_vars.reset();
                },
            });
        },

        change_project_vars_frame_fun(id,title,imageCover,categorie){
            this.change_project_vars_frame?
                this.change_project_vars_frame=false:
                [
                    this.change_project_vars_frame=true,
                    this.project_vars.id=id,
                    this.project_vars.title=title,
                    this.project_vars.imageCover=imageCover, 
                    this.project_vars.categorie=categorie, 
                ]
        },
        change_project_vars_db() {
            this.project_vars.post(`/project_admin/${this.project_vars.id}/edit`, {
                onSuccess: () => {
                this.change_project_vars_frame = false;
                this.project_vars.reset();
                },
            });
        },
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>