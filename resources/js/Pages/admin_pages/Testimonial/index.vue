<template>
    <Head title="Admin Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl leading-tight page_title mb-0">
                <i class="fa-solid fa-chart-line"></i>
                /Testimonial</h2>
        </template>
        <div class="contain_admin">
            <div class="historique_statistique frame_original pt-10 pb-4 ">
                <div class="w-100 mt-2 mb-4 flex flex-row items-center justify-between">
                    <span class="h3">List Testimonial</span>
                    <button class="button button_acount"  @click="add_testimonials_vars_frame_fun()">
                        <i class="fa-solid fa-user-plus"></i>Create Testimonial
                    </button>
                </div>
                <div class="UsersCards">
                    <div class="card" v-for="Testimonial in Testimonials">
                        <Link :href="`/testimonial_admin/${Testimonial.id}/destroy`" class="delete">
                            <i class="fa-solid fa-trash"></i>
                        </Link>
                        <div class="profile-pic">
                            <img :src="'/'+Testimonial.img">
                        </div>
                        <div class="bottom">
                            <div class="content">
                                <span class="name">{{ Testimonial.name }}</span>
                                <span class="about-me">{{ Testimonial.description }}</span>
                            </div>
                        <div class="bottom-bottom">
                            <button class="button" @click="change_testimonials_vars_frame_fun(Testimonial.id,Testimonial.name,Testimonial.img,Testimonial.description)">
                                edite
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add skil -->
            <div class="limit_frame" v-if="add_testimonials_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="add_testimonials_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="add_testimonials_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="name" class="col-form-label ">name</label>
                                <input type="text" class="form-control" id="name" v-model="testimonials_vars.name" required :error="testimonials_vars.errors.name">
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-form-label ">description</label>
                                <textarea v-model="testimonials_vars.description" cols="30" rows="10" required placeholder="Type your text here ... "></textarea>
                            </div>
                            <div class="form-group">
                                <label for="logo" class="col-form-label ">personel image</label>
                                <div class="under_group">
                                    <file-input
                                        v-model="testimonials_vars.img"
                                        :error="testimonials_vars.errors.img"
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
            <!-- change skil -->
            <div class="limit_frame" v-if="change_testimonials_vars_frame">
                <div class="limit_panel">
                    <div class="header">
                        <div class="logo"></div>
                        <div class="exite" id="exit_popup" @click="change_testimonials_vars_frame_fun"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
                    </div>
                    <form @submit.prevent="change_testimonials_vars_db" class="body_fram">
                        <div class="small_panel">
                            <div class="form-group">
                                <label for="name" class="col-form-label ">name</label>
                                <input type="text" class="form-control" id="name" v-model="testimonials_vars.name" required :error="testimonials_vars.errors.name">
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-form-label ">description</label>
                                <textarea v-model="testimonials_vars.description" cols="30" rows="10" required placeholder="Type your text here ... "></textarea>
                            </div>
                            <div class="form-group">
                                <label for="logo" class="col-form-label ">personel image</label>
                                <div class="under_group">
                                    <img :src="this.testimonials_vars.img" alt="">
                                    <file-input
                                        v-model="testimonials_vars.img"
                                        :error="testimonials_vars.errors.img"
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
        FileInput,
    },
    props: {
        Testimonials: Object
    },

    data() {
        return {
            add_testimonials_vars_frame: false,
            change_testimonials_vars_frame: false,
            testimonials_vars: this.$inertia.form({
                id: null,
                name: null,
                img: null,
                description: null,
            }),
        }
    },
    mounted() {

    },
    methods: {
        change_testimonials_vars_frame_fun(id,name,img,description){
            this.change_testimonials_vars_frame?
                this.change_testimonials_vars_frame=false:
                [
                    this.change_testimonials_vars_frame=true,
                    this.testimonials_vars.id=id,
                    this.testimonials_vars.name=name,
                    this.testimonials_vars.img=img, 
                    this.testimonials_vars.description=description, 
                ]
        },
        change_testimonials_vars_db() {
            this.testimonials_vars.post(`/testimonial_admin/${this.testimonials_vars.id}/edit`, {
                onSuccess: () => {
                this.change_testimonials_vars_frame = false;
                this.testimonials_vars.reset();
                },
            });
        },
        add_testimonials_vars_frame_fun(){
            this.add_testimonials_vars_frame?
                this.add_testimonials_vars_frame=false:
                [
                    this.add_testimonials_vars_frame=true,
                    this.testimonials_vars.id=null,
                    this.testimonials_vars.name=null,
                    this.testimonials_vars.img=null, 
                    this.testimonials_vars.description=null, 
                ]
        },
        add_testimonials_vars_db() {
            this.testimonials_vars.post(`/testimonial_admin/store`, {
                onSuccess: () => {
                this.add_testimonials_vars_frame = false;
                this.testimonials_vars.reset();
                },
            });
        },
    },
}
</script>
<style>
@import 'datatables.net-dt';
</style>