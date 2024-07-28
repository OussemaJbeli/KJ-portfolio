<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';
const form = useForm({
    password: '',
});

const submit = () => {
    form.post(route('password.confirm'), {
        onFinish: () => form.reset(),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Confirm Password" />
        <div class="wrapper">
            <div class="rec-prism">
                <div class="face">
                    <div class="form_login">
                        <div class="mb-4 text-sm text-gray-600">
                        This is a secure area of the application. Please confirm your password before continuing.
                        </div>

                        <form @submit.prevent="submit">
                            <div class="input-group" @mouseenter="mouthaction(2,0)" @mouseleave="mouthaction(1,0)">
                                <TextInput
                                    id="password"
                                    type="password"
                                    class="mt-1 block w-full"
                                    v-model="form.password"
                                    required
                                    autocomplete="current-password"
                                    autofocus
                                />
                                <label class="user-label">Password</label>
                                <InputError class="mt-2" :message="form.errors.password" />
                            </div>
                            <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Confirm
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
