<template>
    <BlogsFrame>
        <div class="blogShowPanel" data-spy="scroll" data-target=".site-navbar-target" data-offset="100">
            <Link
                :href="'/blog/List'"
                type="button"
                class="bg-gray-100 text-center w-48 rounded-2xl h-10 relative font-sans text-black text-xl font-semibold group flex items-center justify-center"
                >
                <div
                    class="bg-yellow-400 rounded-xl h-8 w-1/4 flex items-center justify-center absolute left-1 top-[4px] group-hover:w-[184px] z-10 duration-500"
                >
                    <svg
                    width="20px"
                    height="20px"
                    viewBox="0 0 1024 1024"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        fill="#000000"
                        d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"
                    ></path>
                    <path
                        fill="#000000"
                        d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"
                    ></path>
                    </svg>
                </div>
                <p class="translate-x-2 m-0 p-0">Go Back</p>
            </Link>


            <div class="untree_co-section pb-0" id="home-section">
                <div class="container title_blog">
                    <div class="row justify-content-center text-center">
                    <div class="col-md-7">
                        <h1 class="mb-3"><strong>Minimal<span class="text-primary">.</span> Portfolio</strong></h1>
                        <h4 class="mb-4 ">
                        A minimal, clean, and AJAX driven free portfolio template created by the fine folks at. Read our here.
                        </h4>
                    </div>
                    </div>
                    
                </div>
            </div>

            <div class="untree_co-section untree_co-section-4 pb-0"  id="portfolio-section">
                <div class="container">
                    <div class="relative"><div class="loader-portfolio-wrap"><div class="loader-portfolio"></div></div> </div>
                    <div id="portfolio-single-holder"></div>

                    <div class="portfolio-wrapper">
                        <div class="gallery">
                            <img @click="imageShowFun(image)" :src="image" alt="Gallery image" class="gallery-item" v-for="(image, index) in images" :key="index"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blog_text_frame">
                <div class="container title_blog">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-7">
                            <h1 class="mb-3"><strong>Minimal<span class="text-primary">.</span> Portfolio</strong></h1>
                            <h4 class="mb-4">
                            A minimal, clean, and AJAX driven free portfolio template created by the fine folks at here.
                            </h4>
                        </div>
                    </div>
                    <p class="blog_content">
                        A minimal, clean, and AJAX driven free portfolio template created by the fine folks at  A minimal, clean, and AJAX driven free portfolio template created by the fine folks at  A minimal, clean, and AJAX driven free portfolio template created by the fine folks at 
                        A minimal, clean, and AJAX driven free portfolio template created by the fine folks at 
                        A minimal, clean, and AJAX driven free portfolio template created by the fine folks at 
                        A minimal, clean, and AJAX driven free portfolio template created by the fine folks at  A minimal, clean, and AJAX driven free portfolio template created by the fine folks at  A minimal, clean, and AJAX driven free portfolio template created by the fine folks at 
                        A minimal, clean, and AJAX driven free portfolio template created by the fine folks at 
                        A minimal, clean, and AJAX driven free portfolio template created by the fine folks at 
                        A minimal, clean, and AJAX driven free portfolio template created by the fine folks at  A minimal, clean, and AJAX driven free portfolio template created by the fine folks at  A minimal, clean, and AJAX driven free portfolio template created by the fine folks at  A minimal, clean, and AJAX driven free portfolio template created by the fine folks at  A minimal, clean, and AJAX driven free portfolio template created by the fine folks at 
                    </p>
                    <div class="action">
                        <button>
                            <label class="btn-label" for="like-checkbox">
                                <span class="like-text-content">123</span>
                                <input class="input-box" id="like-checkbox" type="checkbox">
                                <svg class="svgs" id="icon-like-solid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"></path></svg>
                                <svg class="svgs" id="icon-like-regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z"></path></svg>
                                <div class="fireworks">
                                    <div class="checked-like-fx"></div>
                                </div>
                            </label>
                        </button>
                        <button @click="commentsShow">
                            <label class="btn-label">
                                <span class="like-text-content">123</span>
                                <i class="fa-regular fa-comment svgs"></i>
                            </label>
                        </button>
                    </div>
                </div>

                <div class="frame_comment" v-if="comment">
                    <div class="overall" @click="commentsShow"></div>
                    <div class="panel_comment">
                        <div class="close" @click="commentsShow">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="UsersComments">
                            <comment-component v-for="(comment, index) in comments" :key="index" :comment="comment" @reply-added="updateComments"></comment-component>
                        </div>
                        <div class="messageBox">
                            <textarea required="" placeholder="write a public comment..." type="text" id="messageInput"  cols="30" rows="10"></textarea>
                            <div class="footer">
                                <button id="sendButton">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 664 663">
                                    <path
                                        fill="none"
                                        d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888"
                                    ></path>
                                    <path
                                        stroke-linejoin="round"
                                        stroke-linecap="round"
                                        stroke-width="33.67"
                                        stroke="#6c6c6c"
                                        d="M646.293 331.888L17.7538 17.6187L155.245 331.888M646.293 331.888L17.753 646.157L155.245 331.888M646.293 331.888L318.735 330.228L155.245 331.888"
                                    ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="frame_image" v-if="imageShow">
                    <div class="overall" @click="imageShowFun"></div>
                    <div class="image_comment">
                        <div class="close" @click="imageShowFun">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <img :src="imagePath" alt="">
                    </div>
                </div>
            </div>
        </div>
    </BlogsFrame>
</template>
<script setup>
import BlogsFrame from '@/Layouts/BlogsAuth.vue';
import CommentComponent from '@/Components/CommentComponent.vue';
import { Head , Link} from '@inertiajs/vue3';
</script>
<script>
export default {
    components: {
        Head,
        Link,
        CommentComponent
    },
    props: {

    },
    mounted() {

    },
    data() {
        return {
            comment: false,
            imageShow: false,
            imagePath: '',
            comments: [
                {
                text: 'This is the first comment',
                name: 'user name',
                time: '20m',
                likes: '7',
                repliesNum: '2',
                replies: [
                    {
                    text: 'This is a reply to the first comment',
                    name: 'user name',
                    time: '20m',
                    likes: '7',
                    repliesNum: '2',
                    replies: [
                        {
                        text: 'This is a nested reply',
                        name: 'user name',
                        time: '20m',
                        likes: '7',
                        repliesNum: '2',
                        replies: []
                        }
                    ]
                    }
                ]
                },
                {
                text: 'This is the second comment',
                name: 'user name',
                time: '20m',
                likes: '7',
                repliesNum: '2',
                replies: [
                    {
                    text: 'This is a reply to the second comment',
                    name: 'user name',
                    time: '20m',
                    likes: '7',
                    repliesNum: '2',
                    replies: []
                    }
                ]
                },
                {
                text: 'This is the third comment',
                name: 'user name',
                time: '20m',
                likes: '7',
                repliesNum: '2',
                replies: [
                    {
                    text: 'This is a reply to the third comment',
                    name: 'user name',
                    time: '20m',
                    likes: '7',
                    repliesNum: '2',
                    replies: [
                        {
                        text: 'This is a nested reply to the third comment',
                        name: 'user name',
                        time: '20m',
                        likes: '7',
                        repliesNum: '2',
                        replies: []
                        },
                        {
                        text: 'Another nested reply',
                        name: 'user name',
                        time: '20m',
                        likes: '7',
                        repliesNum: '2',
                        replies: []
                        }
                    ]
                    }
                ]
                },
                {
                text: 'This is the fourth comment with no replies',
                name: 'user name',
                time: '20m',
                likes: '7',
                repliesNum: '2',
                replies: []
                }
            ],
            images: [
                '/img/img_1.jpg',
                '/img/img_2.jpg',
                '/img/img_3.jpg',
                '/img/img_4.jpg',
                '/img/img_5.jpg',
                '/img/img_6.jpg',
                '/img/img_7.jpg',
                '/img/img_8.jpg',
                '/img/img_9.jpg',
                '/img/img_1.jpg',
                '/img/img_6.jpg',
                '/img/img_7.jpg',
                '/img/img_8.jpg',
                '/img/img_9.jpg',
                '/img/img_1.jpg',
            ]
        }
    },
    methods: {
        commentsShow(){
            this.comment?
                this.comment=false:
                this.comment=true;
        },
        imageShowFun(src){
            this.imageShow?
                this.imageShow=false:
                [
                    this.imageShow = true,
                    this.imagePath = src,
                ];
        },
    }
}
</script>