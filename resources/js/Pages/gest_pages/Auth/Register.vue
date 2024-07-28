<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
        <Head title="Register" />
        <div class="form_login form_register">
            <form @submit.prevent="submit">
                <div class="input-group">
                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full input"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    <label class="user-label">Name</label>
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="input-group">
                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full input"
                        v-model="form.email"
                        required
                        autocomplete="username"
                    />
                    <label class="user-label">Email</label>
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="input-group">
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

                <div class="input-group">
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

                <div class="flex items-center">
                    <PrimaryButton class="login_button register_button" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Register
                    </PrimaryButton>
                </div>
            </form>
        </div>
</template>
