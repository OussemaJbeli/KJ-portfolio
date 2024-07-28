<template>
    <BlogsFrame>
        <!-- blogs Start -->
        <div class="container-xxl py-6 pt-5 blog-section">
            <div class="container">
                <div class="row g-5 mb-5 align-items-center wow fadeInUp header_search_tools" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0 text-black">My Blogs</h1>
                    </div>
                    <label :style="{ width: search_run? '50%' : '20%' }" class="label_for_search">
                        <i class="fa-solid fa-circle-xmark" v-if="search_run" @click="start_searsh()" ></i>
                        <i class="fa-solid fa-magnifying-glass" v-else @click="start_searsh()" ></i>
                        <input 
                            class="search ml-2" type="search" 
                            v-model="searchQuery" 
                            placeholder="search ..." 
                            :style="{ display: search_run? 'flex' : 'none' }"
                        />
                    </label>
                </div>
                <div class="blogs_cards blogs_cards_list">
                    <div class="ftco-animate wow fadeInUp" data-wow-delay="0.1s">
                        <a href="single.html" class="block-20">
                        <img src="/img/portfolio-1.jpg" alt="">
                        </a>
                        <div class="blog_discription">
                        <div class="date">
                            <p>
                            <span class="mr-2">July 03, 2020</span>
                            </p>
                        </div>
                        <h3 class="heading">title1</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <a  href="/blog/blog" class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Learn More</span>
                        </a>
                        </div>
                    </div>
                    <div class="ftco-animate wow fadeInUp" data-wow-delay="0.2s">
                        <a href="single.html" class="block-20">
                        <img src="/img/portfolio-3.jpg" alt="">
                        </a>
                        <div class="blog_discription">
                        <div class="date">
                            <p>
                            <span class="mr-2">July 03, 2020</span>
                            </p>
                        </div>
                        <h3 class="heading">title1</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <a  href="/blog/blog" class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Learn More</span>
                        </a>
                        </div>
                    </div>
                    <div class="ftco-animate wow fadeInUp" data-wow-delay="0.3s">
                        <a href="single.html" class="block-20">
                        <img src="/img/portfolio-5.jpg" alt="">
                        </a>
                        <div class="blog_discription">
                        <div class="date">
                            <p>
                            <span class="mr-2">July 03, 2020</span>
                            </p>
                        </div>
                        <h3 class="heading">title1</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <a  href="/blog/blog" class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Learn More</span>
                        </a>
                        </div>
                    </div>
                    <div class="ftco-animate wow fadeInUp" data-wow-delay="0.1s">
                        <a href="single.html" class="block-20">
                        <img src="/img/portfolio-1.jpg" alt="">
                        </a>
                        <div class="blog_discription">
                        <div class="date">
                            <p>
                            <span class="mr-2">July 03, 2020</span>
                            </p>
                        </div>
                        <h3 class="heading">title1</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <a  href="/blog/blog" class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Learn More</span>
                        </a>
                        </div>
                    </div>
                    <div class="ftco-animate wow fadeInUp" data-wow-delay="0.2s">
                        <a href="single.html" class="block-20">
                        <img src="/img/portfolio-3.jpg" alt="">
                        </a>
                        <div class="blog_discription">
                        <div class="date">
                            <p>
                            <span class="mr-2">July 03, 2020</span>
                            </p>
                        </div>
                        <h3 class="heading">title1</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <a  href="/blog/blog" class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Learn More</span>
                        </a>
                        </div>
                    </div>
                    <div class="ftco-animate wow fadeInUp" data-wow-delay="0.3s">
                        <a href="single.html" class="block-20">
                        <img src="/img/portfolio-5.jpg" alt="">
                        </a>
                        <div class="blog_discription">
                        <div class="date">
                            <p>
                            <span class="mr-2">July 03, 2020</span>
                            </p>
                        </div>
                        <h3 class="heading">title1</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <a  href="/blog/blog" class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Learn More</span>
                        </a>
                        </div>
                    </div>
                    <div class="ftco-animate wow fadeInUp" data-wow-delay="0.1s">
                        <a href="single.html" class="block-20">
                        <img src="/img/portfolio-1.jpg" alt="">
                        </a>
                        <div class="blog_discription">
                        <div class="date">
                            <p>
                            <span class="mr-2">July 03, 2020</span>
                            </p>
                        </div>
                        <h3 class="heading">title1</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <a  href="/blog/blog" class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Learn More</span>
                        </a>
                        </div>
                    </div>
                    <div class="ftco-animate wow fadeInUp" data-wow-delay="0.2s">
                        <a href="single.html" class="block-20">
                        <img src="/img/portfolio-3.jpg" alt="">
                        </a>
                        <div class="blog_discription">
                        <div class="date">
                            <p>
                            <span class="mr-2">July 03, 2020</span>
                            </p>
                        </div>
                        <h3 class="heading">title1</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <a  href="/blog/blog" class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Learn More</span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blogs Start -->
    </BlogsFrame>
</template>
<script setup>
import BlogsFrame from '@/Layouts/BlogsAuth.vue';
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
            search_run: false,
            searchQuery: '',
        }
    },
    methods: {
        start_searsh(){
            this.search_run?
                [
                    this.search_run=false,
                    this.searchQuery='',
                ]:
                this.search_run=true;
        },
    }
}
</script>