<template>
    <div class="blogs_frame">
        <!-- Navbar Start -->
        <nav class="bg-white navbar-light fixed-top shadow flex items-center justify-between z-10">
            <a href="/">
                <h2 class="fw-bold m-0">Kais</h2>
            </a>
            <div class="ms-auto py-0 flex items-center justify-between">
                <Link href="/login" class="button buttonLog">join us</Link>
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