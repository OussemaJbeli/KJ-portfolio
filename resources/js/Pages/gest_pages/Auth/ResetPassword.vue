<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

const props = defineProps({
    email: {
        type: String,
        required: true,
    },
    token: {
        type: String,
        required: true,
    },
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.store'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Reset Password" />
        <div class="wrapper">
            <div class="rec-prism">
                <div class="face">
                    <div class="form_login">
                        <form @submit.prevent="submit">
                            <div class="input-group" @mouseenter="mouthaction(2,0)" @mouseleave="mouthaction(1,0)">
                                <TextInput
                                    id="email"
                                    type="email"
                                    class="mt-1 block w-full input"
                                    v-model="form.email"
                                    required
                                    autofocus
                                    autocomplete="username"
                                />
                                <label class="user-label">Email</label>
                                <InputError class="mt-2" :message="form.errors.email" />
                            </div>

                            <div class="input-group" @mouseenter="mouthaction(2,0)" @mouseleave="mouthaction(1,0)">
                                <TextInput
                                    id="password"
                                    type="password"
                                    class="mt-1 block w-full input"
                                    v-model="form.password"
                                    required
                                    autocomplete="new-password"
                                />
                                <label class="user-label">Password</label>
                                <InputError class="mt-2" :message="form.errors.password" />
                            </div>

                            <div class="input-group" @mouseenter="mouthaction(2,0)" @mouseleave="mouthaction(1,0)">
                                <TextInput
                                    id="password_confirmation"
                                    type="password"
                                    class="mt-1 block w-full input"
                                    v-model="form.password_confirmation"
                                    required
                                    autocomplete="new-password"
                                />
                                <label class="user-label">Confirm Password</label>
                                <InputError class="mt-2" :message="form.errors.password_confirmation" />
                            </div>
                            <PrimaryButton class="login_button" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Reset Password
                            </PrimaryButton>
                        </form>
                    </div>
                </div>
            </div>
            <div class="image1">
              <img src="/img/login/—Pngtree—cartoon cartoon building building construction_3922770.png" alt="">
            </div>
        </div>
    </GuestLayout>
</template>
