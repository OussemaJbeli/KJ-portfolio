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
                    <span class="h3">List Sections</span>
                    <button class="button button_acount"  @click="add_project_section_vars_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i>Create Sections
                    </button>
                </div>
                <div class="sections">
                    <div class="card" v-for="Project_section in Project_sections">
                        <div class="buttons">
                            <button class="button"  @click="change_project_section_vars_frame_fun(Project_section.id,Project_section.title,Project_section.content)">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <Link class="button" :href="`/project_admin/${Project_section.id}/destroySections`">
                                <i class="fa-solid fa-trash "></i>
                            </Link>
                        </div>
                        <div class="bg">
                            <div class="title">{{ Project_section.title }}</div>
                            <div class="discription" v-if="Project_section.content">
                                <p v-html="Project_section.content"></p>
                            </div>
                            <div class="emptySection" v-else>empty</div>
                        </div>
                    </div>
                </div>
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">List Images</span>
                    <button class="button button_acount"  @click="add_project_image_vars_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i>Create Images
                    </button>
                </div>
                <div class="images">
                    <div class="card" v-for="image in Project_image">
                        <img :src="image.imagePath" alt="">
                        <div class="managment">
                            <Link :href="`/project_admin/${image.id}/destroyImage`"><i class="fa-solid fa-trash" ></i></Link>
                        </div>
                    </div>
                </div>
            </div>

            <div class="limit_frame" v-if="add_project_section_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_project_section_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="add_project_section_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="title" class="col-form-label ">title</label>
                                <input type="text" class="form-control" id="title" v-model="project_section_vars.title" required :error="project_section_vars.errors.title">
                            </div>
                            <div class="text_editor_vue" ref="content">
                                <label for="logo" class="col-form-label ">content</label>
                                <ckeditor :editor="editor" v-model="project_section_vars.content"></ckeditor>
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

            <div class="limit_frame" v-if="change_project_section_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_project_section_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_project_section_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="title" class="col-form-label ">title</label>
                                <input type="text" class="form-control" id="title" v-model="project_section_vars.title" required :error="project_section_vars.errors.title">
                            </div>
                            <div class="text_editor_vue" ref="content">
                                <label for="logo" class="col-form-label ">content</label>
                                <ckeditor :editor="editor" v-model="project_section_vars.content"></ckeditor>
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
            <div class="limit_frame" v-if="add_project_image_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_project_image_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="add_project_image_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="logo" class="col-form-label ">image</label>
                                <div class="under_group">
                                    <file-input
                                        v-model="project_image_vars.imagePath"
                                        :error="project_image_vars.errors.imagePath"
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
import FileInput from "@/Components/FileInput.vue";
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import CKEditor from "@ckeditor/ckeditor5-vue"
</script>

<script>
export default {
    name: 'App',
    components: {
        Head,
        Link,
        FileInput,
        ckeditor: CKEditor.component,
    },
    props: {
        id_Project: Object,
        Project_image: Object,
        Project_sections: Object
    },

    data() {
        return {
            add_project_section_vars_frame: false,
            change_project_section_vars_frame: false,
            project_section_vars: this.$inertia.form({
                id: null,
                title: null,
                content: null,
            }),
            editor: ClassicEditor,

            add_project_image_vars_frame: false,
            project_image_vars: this.$inertia.form({
                id: null,
                imagePath: null,
            }),
        }
    },
    mounted() {

    },
    methods: {
        add_project_section_vars_frame_fun(){
            this.add_project_section_vars_frame?
                this.add_project_section_vars_frame=false:
                [
                    this.add_project_section_vars_frame=true,
                    this.project_section_vars.id=null,
                    this.project_section_vars.title=null,
                    this.project_section_vars.content=null, 
                ]
        },
        add_project_section_vars_db() {
            this.project_section_vars.post(`/project_admin/${this.id_Project.id}/addSections`, {
                onSuccess: () => {
                this.add_project_section_vars_frame = false;
                this.project_section_vars.reset();
                },
            });
        },

        change_project_section_vars_frame_fun(id,title,content){
            this.change_project_section_vars_frame?
                this.change_project_section_vars_frame=false:
                [
                    this.change_project_section_vars_frame=true,
                    this.project_section_vars.id=id,
                    this.project_section_vars.title=title,
                    this.project_section_vars.content=content, 
                ]
        },
        change_project_section_vars_db() {
            this.project_section_vars.post(`/project_admin/${this.project_section_vars.id}/editSections`, {
                onSuccess: () => {
                this.change_project_section_vars_frame = false;
                this.project_section_vars.reset();
                },
            });
        },

        add_project_image_vars_frame_fun(id,imagePath){
            this.add_project_image_vars_frame?
                this.add_project_image_vars_frame=false:
                [
                    this.add_project_image_vars_frame=true,
                    this.project_image_vars.id=id,
                    this.project_image_vars.imagePath=imagePath,
                ]
        },
        add_project_image_vars_db() {
            this.project_image_vars.post(`/project_admin/${this.id_Project.id}/addImageProject`, {
                onSuccess: () => {
                this.add_project_image_vars_frame = false;
                this.project_image_vars.reset();
                },
            });
        },
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>