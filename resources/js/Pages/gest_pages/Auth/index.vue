<template>
  <GuestLayout>
    <ul class="nav">
            <Link
                :href="'/blog/List'"
                type="button"
                class="bg-white text-center w-36 rounded-2xl h-10 absolute left-0 top-0 font-sans text-black text-x font-semibold group flex items-center justify-center"
                >
                <div
                    class="bg-yellow-400 rounded-xl h-8 w-1/4 flex items-center justify-center absolute left-1 top-[4px] group-hover:w-full z-10 duration-500"
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
            <div class="radio-inputs">
              <label class="radio" @click="showLogin">
                <input type="radio" name="radio" checked="">
                <span class="name">Login</span>
              </label>
              <label class="radio" @click="showSignup">
                <input type="radio" name="radio">
                <span class="name">Sign up</span>
              </label>
                  
              <label class="radio" @click="showForgotPassword">
                <input type="radio" name="radio">
                <span class="name">Forgot password</span>
              </label>
            </div>
        </ul>
        <div class="wrapper">
            <div class="rec-prism">

                <div class="face face-top">
                    <ForgotPasswordFrame/>
                </div>

                <div class="face face-front">
                    <LoginFrame/>
                </div>

                <div class="face face-back">
                </div>

                <div class="face face-right">
                    <RegisterFrame/>
                </div>


                <div class="face face-left">
                </div>

                <div class="face face-bottom">
                </div>

            </div>
            <div class="image1">
              <img src="/img/login/—Pngtree—cartoon cartoon building building construction_3922770.png" alt="">
            </div>
        </div>
  </GuestLayout>
</template>


<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { ref, onMounted } from 'vue';
import { Link } from '@inertiajs/vue3';
import LoginFrame from '@/Pages/gest_pages/Auth/Login.vue';
import RegisterFrame from '@/Pages/gest_pages/Auth/Register.vue';
import ForgotPasswordFrame from '@/Pages/gest_pages/Auth/ForgotPassword.vue';
const prism = ref(null);

const showSignup = () => {
  if (prism.value) {
    prism.value.style.transform = 'translateZ(-100px) rotateY(-90deg)';
  }
};

const showLogin = () => {
  if (prism.value) {
    prism.value.style.transform = 'translateZ(-100px)';
  }
};

const showForgotPassword= () => {
  if (prism.value) {
    prism.value.style.transform = 'translateZ(-100px) rotateX(-90deg)';
  }
};

const showSubscribe = () => {
  if (prism.value) {
    prism.value.style.transform = 'translateZ(-100px) rotateY(-180deg)';
  }
};

const showContactUs = () => {
  if (prism.value) {
    prism.value.style.transform = 'translateZ(-100px) rotateY(90deg)';
  }
};

const showThankYou = () => {
  if (prism.value) {
    prism.value.style.transform = 'translateZ(-100px) rotateX(90deg)';
  }
};

onMounted(() => {
  prism.value = document.querySelector('.rec-prism');
});
</script>

<style scoped>
.rec-prism {
  transition: transform 0.5s;
}
</style>