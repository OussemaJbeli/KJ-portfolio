<script setup>
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
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
        <Head title="Forgot Password" />
        <div class="form_email_verify form_login">
            <div class="forget_paragraph">
                    Forgot your password? No problem. Just let us know your email address and we will email you a password reset
                    link that will allow you to choose a new one.
                </div>

                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>

                <form @submit.prevent="submit" class="form_forget">
                    <div class="input-group">
                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block input"
                            v-model="form.email"
                            required
                            autofocus
                            autocomplete="username"
                        />
                        <label class="user-label">Email</label>
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
                    <PrimaryButton class="login_button" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Email Password Reset Link
                    </PrimaryButton>
                </form>
        </div>
</template>
