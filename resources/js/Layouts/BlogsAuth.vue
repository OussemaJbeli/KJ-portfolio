<template>
    <div class="blogs_frame">
        <!-- Navbar Start -->
        <nav class="bg-white navbar-light fixed-top shadow flex items-center justify-between z-10">
            <a href="/">
                <h2 class="fw-bold m-0">Kais</h2>
            </a>
            <div class="ms-auto py-0 flex items-center justify-between">
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
        </nav>
        <!-- Navbar End -->
         <div class="frame">
            <slot />
         </div>
    </div>
</template>
<script setup>
import { Head , Link} from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
</script>
<script>
export default {
    components: {
        Head,
        Link,
    },
    props: {

    },
    mounted() {

    },
    data() {
        return {
        }
    }
}
</script>