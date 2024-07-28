<template>
    <div class="overflow-hidden">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
        </svg>
        <div class="min-h-screen main_frame">
<!-- ////////////////////////////////////nave barre//////////////////////// -->
            <nav class=" border-b side_barre"
                :style="{ width: (sid_bar || test_side)? '' : '70px' ,left:sid_bar_second?'0': ''}"
                @mouseover="hover_side_bar" @mouseout="out_side_bar"
                >
                <div class="back_block_transparent"></div>
                <div class="side_color_picture" id="side_color_picture" :style="{ width: (sid_bar || test_side)? '' : '250px',opacity: $page.props.auth.user.sid_img? '0.2' : '1'}">
                    <img :src="'/'+$page.props.auth.user.sid_img " v-if="$page.props.auth.user.sid_img">
                    <div class="dont_have_side_pic" v-else></div>
                </div>
                    <div class="flex justify-between h-16 nave_liste">
                        <!-- **************nave option*************** -->
                        <div class="flex nave_options">
                            <div class="close_sid_bar" @click="min_sid_bar_second"><i class="fa-solid fa-x"></i></div>
                            <!-- Logo -->
                            <div class="Logo_app">
                                <Link :href="route('Dashboard_admin')">
                                    <span class="app_logo" :style="{ height: (sid_bar || test_side)? '' : '60px',width: (sid_bar || test_side)? '' : '60px' }" >kj</span>
                                    <span class="app_name_logo" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">-portfolio</span>       
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="options_nave">
                                <div class="dark_sidbar" v-if="edit_favorit"></div>

                                <div class="between_links" v-if="$page.props.auth.user.admin" >
                                    <p class="title" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">admin panel</p>
                                    <div class="line" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }"></div>
                                </div>
                                <NavLink v-if="$page.props.auth.user.admin" :href="route('Dashboard_admin')" :active="route().current('Dashboard_admin')" class="NavLink">
                                    <i class="fa-solid fa-chart-line" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">Dashboard</p>
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.admin" :href="route('user_manegement_admin')" :active="route().current('user_manegement_admin')" class="NavLink">
                                    <i class="fa-solid fa-users" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">user manegement</p>
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.admin || $page.props.auth.user.about_control" :href="route('about_admin')" :active="route().current('about_admin')" class="NavLink">
                                    <i class="fa-solid fa-newspaper" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">about</p>
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.admin || $page.props.auth.user.skils_control" :href="route('skill_admin')" :active="route().current('skill_admin')" class="NavLink">
                                    <i class="fa-solid fa-newspaper" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">skill & education</p>
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.admin || $page.props.auth.user.service_control" :href="route('service_admin')" :active="route().current('service_admin')" class="NavLink">
                                    <i class="fa-solid fa-newspaper" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">service</p>
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.admin || $page.props.auth.user.exp_control" :href="route('experience_admin')" :active="route().current('experience_admin')" class="NavLink">
                                    <i class="fa-solid fa-newspaper" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0"  :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">experience</p>
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.admin || $page.props.auth.user.projects_control" :href="route('project_admin')" :active="route().current('project_admin')" class="NavLink">
                                    <i class="fa-solid fa-newspaper" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">project</p>
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.admin || $page.props.auth.user.blogs_control" :href="route('Blogs_admin')" :active="route().current('Blogs_admin')" class="NavLink">
                                    <i class="fa-solid fa-newspaper" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">blogs</p>
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.admin || $page.props.auth.user.testimonial_control" :href="route('testimonial_admin')" :active="route().current('testimonial_admin')" class="NavLink">
                                    <i class="fa-solid fa-newspaper" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">testimonial</p>
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.admin || $page.props.auth.user.contact_control" :href="route('contact_admin')" :active="route().current('contact_admin')" class="NavLink">
                                    <i class="fa-solid fa-newspaper" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">contact</p>
                                </NavLink>

                                <div class="between_links">
                                    <p class="title" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">account</p>
                                    <div class="line" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }"></div>
                                </div>
                                <NavLink :href="route('profile.edit')" :active="route().current('profile.edit')" class="NavLink">
                                    <i class="fa-solid fa-user" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">my account</p>
                                </NavLink>
                                <NavLink :href="route('logout')" method="post" :active="route().current('logout')" class="NavLink">
                                    <i class="fa-solid fa-arrow-right-from-bracket" :style="{ left: (sid_bar || test_side)? '' : '25px' }"></i>
                                    <p class="mb-0" :style="{ visibility: (sid_bar || test_side)? '' : 'hidden' }">logout</p>
                                </NavLink>
                            </div>
                        </div>
                    </div>
                <!-- Responsive Navigation Menu -->
                <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('Dashboard_admin')" :active="route().current('Dashboard_admin')">
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t ">
                        <div class="px-4">
                            <div class="font-medium text-base">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.edit')"> Profile </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>
<!-- ////////////////////////////////////main_content//////////////////////// -->
            <div class="main_content" :style="{ width: (sid_bar || test_side )? '' : 'calc(100% - 80px)' }">
                <!-- header -->
                <header class="shadow header" v-if="$slots.header">
                    <!-- **************name_page*************** -->
                    <div class="title_session">
                        <i class="fa-solid fa-bars" id="sid_show1" @click="min_sid_bar"
                            :style="{transform: (sid_bar || test_side)? '' : 'rotateZ(90deg)' }">
                        </i>
                        <i class="fa-solid fa-bars" id="sid_show2" @click="min_sid_bar_second"
                            :style="{transform: (sid_bar || test_side)? '' : 'rotateZ(90deg)' }">
                        </i>
                        <slot name="header" />
                    </div>
                    <!-- **************profile*************** -->
                    <div class="side_but_secsion">
                        <NavLink :href="`/profile/${$page.props.auth.user.id}/${$page.props.auth.user.darkMode}/darcktheme`">
                            <label class="theme-switch">
                                <input type="checkbox" class="theme-switch__checkbox"  v-model="darckMode">
                                <div class="theme-switch__container">
                                    <div class="theme-switch__clouds"></div>
                                    <div class="theme-switch__stars-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144 55" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M135.831 3.00688C135.055 3.85027 134.111 4.29946 133 4.35447C134.111 4.40947 135.055 4.85867 135.831 5.71123C136.607 6.55462 136.996 7.56303 136.996 8.72727C136.996 7.95722 137.172 7.25134 137.525 6.59129C137.886 5.93124 138.372 5.39954 138.98 5.00535C139.598 4.60199 140.268 4.39114 141 4.35447C139.88 4.2903 138.936 3.85027 138.16 3.00688C137.384 2.16348 136.996 1.16425 136.996 0C136.996 1.16425 136.607 2.16348 135.831 3.00688ZM31 23.3545C32.1114 23.2995 33.0551 22.8503 33.8313 22.0069C34.6075 21.1635 34.9956 20.1642 34.9956 19C34.9956 20.1642 35.3837 21.1635 36.1599 22.0069C36.9361 22.8503 37.8798 23.2903 39 23.3545C38.2679 23.3911 37.5976 23.602 36.9802 24.0053C36.3716 24.3995 35.8864 24.9312 35.5248 25.5913C35.172 26.2513 34.9956 26.9572 34.9956 27.7273C34.9956 26.563 34.6075 25.5546 33.8313 24.7112C33.0551 23.8587 32.1114 23.4095 31 23.3545ZM0 36.3545C1.11136 36.2995 2.05513 35.8503 2.83131 35.0069C3.6075 34.1635 3.99559 33.1642 3.99559 32C3.99559 33.1642 4.38368 34.1635 5.15987 35.0069C5.93605 35.8503 6.87982 36.2903 8 36.3545C7.26792 36.3911 6.59757 36.602 5.98015 37.0053C5.37155 37.3995 4.88644 37.9312 4.52481 38.5913C4.172 39.2513 3.99559 39.9572 3.99559 40.7273C3.99559 39.563 3.6075 38.5546 2.83131 37.7112C2.05513 36.8587 1.11136 36.4095 0 36.3545ZM56.8313 24.0069C56.0551 24.8503 55.1114 25.2995 54 25.3545C55.1114 25.4095 56.0551 25.8587 56.8313 26.7112C57.6075 27.5546 57.9956 28.563 57.9956 29.7273C57.9956 28.9572 58.172 28.2513 58.5248 27.5913C58.8864 26.9312 59.3716 26.3995 59.9802 26.0053C60.5976 25.602 61.2679 25.3911 62 25.3545C60.8798 25.2903 59.9361 24.8503 59.1599 24.0069C58.3837 23.1635 57.9956 22.1642 57.9956 21C57.9956 22.1642 57.6075 23.1635 56.8313 24.0069ZM81 25.3545C82.1114 25.2995 83.0551 24.8503 83.8313 24.0069C84.6075 23.1635 84.9956 22.1642 84.9956 21C84.9956 22.1642 85.3837 23.1635 86.1599 24.0069C86.9361 24.8503 87.8798 25.2903 89 25.3545C88.2679 25.3911 87.5976 25.602 86.9802 26.0053C86.3716 26.3995 85.8864 26.9312 85.5248 27.5913C85.172 28.2513 84.9956 28.9572 84.9956 29.7273C84.9956 28.563 84.6075 27.5546 83.8313 26.7112C83.0551 25.8587 82.1114 25.4095 81 25.3545ZM136 36.3545C137.111 36.2995 138.055 35.8503 138.831 35.0069C139.607 34.1635 139.996 33.1642 139.996 32C139.996 33.1642 140.384 34.1635 141.16 35.0069C141.936 35.8503 142.88 36.2903 144 36.3545C143.268 36.3911 142.598 36.602 141.98 37.0053C141.372 37.3995 140.886 37.9312 140.525 38.5913C140.172 39.2513 139.996 39.9572 139.996 40.7273C139.996 39.563 139.607 38.5546 138.831 37.7112C138.055 36.8587 137.111 36.4095 136 36.3545ZM101.831 49.0069C101.055 49.8503 100.111 50.2995 99 50.3545C100.111 50.4095 101.055 50.8587 101.831 51.7112C102.607 52.5546 102.996 53.563 102.996 54.7273C102.996 53.9572 103.172 53.2513 103.525 52.5913C103.886 51.9312 104.372 51.3995 104.98 51.0053C105.598 50.602 106.268 50.3911 107 50.3545C105.88 50.2903 104.936 49.8503 104.16 49.0069C103.384 48.1635 102.996 47.1642 102.996 46C102.996 47.1642 102.607 48.1635 101.831 49.0069Z" fill="currentColor"></path>
                                    </svg>
                                    </div>
                                    <div class="theme-switch__circle-container">
                                    <div class="theme-switch__sun-moon-container">
                                        <div class="theme-switch__moon">
                                        <div class="theme-switch__spot"></div>
                                        <div class="theme-switch__spot"></div>
                                        <div class="theme-switch__spot"></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </label>
                        </NavLink>
                        <div class="ml-3 relative">
                            <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button
                                                    type="button"
                                                    class="inline-flex items-center px-3 py-2 border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150"
                                                >
                                                <img class="user_logo" :src="'/'+$page.props.auth.user.avatar ">
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                            <DropdownLink :href="route('logout')" method="post" as="button">Log Out</DropdownLink>
                                        </template>
                            </Dropdown>
                        </div>
                    </div>
                </header>
                <!-- company add and create popups -->
                <!-- Page Content -->
                <main>
                    <!-- ************************ thems congig *********************** -->
                    <div class="theme_edit_button" @click="openedit">
                        <i class="fa-solid fa-gear" style="color: #ffffff;"></i>
                    </div>
                    <div class="theme_edit_frame" v-if="openedit_frame">
                        <div class="sid_img">
                            <p>images</p>
                            <div class="img_list list">
                                <Link class="img_option" id="sid_img_0" :href="`/profile/${$page.props.auth.user.id}/${img0}/sid_img`" tabindex="-1">
                                    <i class="fa-solid fa-ban"></i>
                                </Link>  
                                <Link class="img_option" id="sid_img_1" :href="`/profile/${$page.props.auth.user.id}/${img1}/sid_img`" tabindex="-1"></Link>  
                                <Link class="img_option" id="sid_img_2" :href="`/profile/${$page.props.auth.user.id}/${img2}/sid_img`" tabindex="-1"></Link>  
                                <Link class="img_option" id="sid_img_3" :href="`/profile/${$page.props.auth.user.id}/${img3}/sid_img`" tabindex="-1"></Link>  
                                <Link class="img_option" id="sid_img_4" :href="`/profile/${$page.props.auth.user.id}/${img4}/sid_img`" tabindex="-1"></Link>  
                                <Link class="img_option" id="sid_img_5" :href="`/profile/${$page.props.auth.user.id}/${img5}/sid_img`" tabindex="-1"></Link>  
                                <Link class="img_option" id="sid_img_6" :href="`/profile/${$page.props.auth.user.id}/${img6}/sid_img`" tabindex="-1"></Link>  
                                <Link class="img_option" id="sid_img_7" :href="`/profile/${$page.props.auth.user.id}/${img7}/sid_img`" tabindex="-1"></Link>  
                                <Link class="img_option" id="sid_img_8" :href="`/profile/${$page.props.auth.user.id}/${img8}/sid_img`" tabindex="-1"></Link>  
                                <Link class="img_option" id="sid_img_9" :href="`/profile/${$page.props.auth.user.id}/${img9}/sid_img`" tabindex="-1"></Link>   

                            </div>
                        </div>
                        <div class="filters">
                            <p>filters</p>
                            <div class="filter_list list">

                                <Link class="filter_option" id="sid_filter_1" :href="`/profile/${$page.props.auth.user.id}/${color1}/theme`" tabindex="-1"></Link> 
                                <Link class="filter_option" id="sid_filter_2" :href="`/profile/${$page.props.auth.user.id}/${color2}/theme`" tabindex="-1"></Link> 
                                <Link class="filter_option" id="sid_filter_3" :href="`/profile/${$page.props.auth.user.id}/${color3}/theme`" tabindex="-1"></Link> 
                                <Link class="filter_option" id="sid_filter_4" :href="`/profile/${$page.props.auth.user.id}/${color4}/theme`" tabindex="-1"></Link> 
                                <Link class="filter_option" id="sid_filter_5" :href="`/profile/${$page.props.auth.user.id}/${color5}/theme`" tabindex="-1"></Link> 
                                <Link class="filter_option" id="sid_filter_6" :href="`/profile/${$page.props.auth.user.id}/${color6}/theme`" tabindex="-1"></Link> 
                                <Link class="filter_option" id="sid_filter_7" :href="`/profile/${$page.props.auth.user.id}/${color7}/theme`" tabindex="-1"></Link>  

                            </div>
                        </div>
                    </div>
                    <FlashMessages />
                    <FlashMessages_favorit />
                    <slot />
                </main>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref } from 'vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ToggleCheckbox from "@/Components/ToggleCheckbox.vue";
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import FlashMessages from "@/Components/FlashMessages.vue";
import FlashMessages_favorit from "@/Components/FlashMessages_favorit.vue";

const showingNavigationDropdown = ref(false);
</script>
<script>
import axios from 'axios';
export default {
    components: {
        Link,
        FlashMessages,
        ToggleCheckbox,
    },
    props: {

    },
    data() {
        return {
            search_run: false,
            searchQuery: '',
            sid_bar : true,
            test_side: false,
            openedit_frame : false,
            sid_bar_second: false,
            img0: 'without_pict',
            img1: 'img_1.jpg',
            img2: 'img_2.jpg',
            img3: 'img_3.jpg',
            img4: 'img_4.jpg',
            img5: 'img_5.jpg',
            img6: 'img_6.jpg',
            img7: 'img_7.jpg',
            img8: 'img_8.jpg',
            img9: 'img_9.jpg',
            color1: 'ffc502',
            color2: 'ff5602',
            color3: '8b1bd2',
            color4: '02bf09',
            color5: '02ff1b',
            color6: '02e1ff',
            color7: '020aff',
            darckMode: false,
            Categorie_form: this.$inertia.form({
                name: null,
                description: null,
            }),

            need_subscription_popup:false,
            subs_level: null,
        }
    },
    methods: {
        need_subscription_popup_fun(prum,pro,free){
            if(this.need_subscription_popup)
                this.need_subscription_popup = false
            else{
                if(prum)
                    this.subs_level = 'Premium';
                else if(pro)
                    this.subs_level = 'Pro';
                else
                    this.subs_level = 'Standard';

               this.need_subscription_popup = true;
            }
        },
        openedit() {
            this.openedit_frame ? 
                this.openedit_frame=false : 
                this.openedit_frame=true;
        },
        min_sid_bar(){
            if(this.sid_bar){
                this.sid_bar=false 
                this.test_side=false;
            }
            else{
                this.sid_bar=true 
                this.test_side=true;
            }
        },
        min_sid_bar_second(){
            if(this.sid_bar_second){
                this.sid_bar_second=false;
                this.sid_bar = true;
                this.test_side = false;
            }
            else{
                this.sid_bar_second=true;
                this.sid_bar = true;
                this.test_side = false;
            }
        },
        hover_side_bar(){
            this.sid_bar ? 
                this.test_side=true : 
                this.test_side=true;
        },
        out_side_bar(){
            this.sid_bar ? 
                this.test_side=true : 
                this.test_side=false;
        },
        updateRootCSSVariable(color) {
            document.documentElement.style.setProperty('--action_color', this.$page.props.auth.user.filter);
        },
        updateRootCSSMODE() {
            if (this.$page.props.auth.user.darkMode) {
                // Apply dark mode variables
                document.documentElement.style.setProperty('--bg1', 'var(--bg1-dark)');
                document.documentElement.style.setProperty('--bg2', 'var(--bg2-dark)');
                document.documentElement.style.setProperty('--title1', 'var(--title1-dark)');
                document.documentElement.style.setProperty('--title2', 'var(--title2-dark)');
                document.documentElement.style.setProperty('--title3', 'var(--title3-dark)');
                document.documentElement.style.setProperty('--hover_sid', 'var(--hover_sid-dark)');
                document.documentElement.style.setProperty('--sid_filter', 'var(--sid_filter-dark)');
                document.documentElement.style.setProperty('--opacity', 'var(--opacity-dark)');
                this.darckMode = true;
            } else {
                // Apply light mode variables
                document.documentElement.style.setProperty('--bg1', 'var(--bg1-light)');
                document.documentElement.style.setProperty('--bg2', 'var(--bg2-light)');
                document.documentElement.style.setProperty('--title1', 'var(--title1-light)');
                document.documentElement.style.setProperty('--title2', 'var(--title2-light)');
                document.documentElement.style.setProperty('--title3', 'var(--title3-light)');
                document.documentElement.style.setProperty('--hover_sid', 'var(--hover_sid-light)');
                document.documentElement.style.setProperty('--sid_filter', 'var(--sid_filter-light)');
                document.documentElement.style.setProperty('--opacity', 'var(--opacity-light)');
                this.darckMode = false;
            }
        },

    },
    mounted() {
        const color = this.color;
        this.updateRootCSSVariable(color);
        this.updateRootCSSMODE();
    },
    computed: {

    }
}
</script>

                                            
                                            