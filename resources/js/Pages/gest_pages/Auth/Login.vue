<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login.store'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
<script>
export default {
    data() {
        return {
            eye_state: 'fa-solid fa-eye-slash',
            input_type: 'password',
        }
    },
    methods:{
        password_visibility(){
            if(this.input_type == 'password'){
                this.input_type = 'text';
                this.eye_state = 'fa-solid fa-eye';
            }
            else{
                this.input_type = 'password';
                this.eye_state = 'fa-solid fa-eye-slash';
            }
        },
    },
    computed: {

    },
    mounted() {

    },
}

</script>


<!-- ////////////////// temlate///////////// -->
<template>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <div class="form_login">
            <form @submit.prevent="submit" @mouseenter="mouthaction(1,0)" @mouseleave="mouthaction(0,0)">
                <p class="title"> Login </p>

                <div class="input-group" @mouseenter="mouthaction(2,0)" @mouseleave="mouthaction(1,0)">
                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full input"
                        v-model="form.email"
                        @input="mouthaction(2,0)" @blur="mouthaction(1,0)"
                        required
                        autofocus
                        autocomplete="username"
                    />
                    <label class="user-label">Email</label>
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>
                <div class="input-group" @mouseenter="mouthaction(2,1)" @mouseleave="mouthaction(1,0)">
                    <TextInput
                        id="password"
                        :type=input_type
                        class="mt-1 block w-full input"
                        v-model="form.password"
                        @input="mouthaction(2,1)" @blur="mouthaction(1,0)"
                        required
                        autocomplete="current-password"
                    />
                    <div class="eye_pass">
                        <i :class=eye_state @click="password_visibility"></i>
                    </div>
                    <label class="user-label">Password</label>
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
                <PrimaryButton class="login_button" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Log in
                </PrimaryButton>
            </form>
        </div>
</template>
