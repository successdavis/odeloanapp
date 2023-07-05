<template>
    <div>

        <section class="bg-gray-50">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

                <div class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                    <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Change Password
                    </h2>
                    <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" @submit.prevent="form.submit('post', '/update-my-password')">
                        <div>
                            <label for="c_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                            <input v-model="form.c_password" type="password" name="c_password" id="c_password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                            <input v-model="form.password" type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>
                        <div>
                            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                            <input v-model="form.password_confirmation" type="password" name="confirm-password" id="confirm-password"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>

                        <button type="submit" class="w-full text-white bg-gray-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Reset passwod</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import {useForm} from "@inertiajs/inertia-vue3";

export default {
    setup() {
        const form = useForm({
            c_password: '',
            password: '',
            password_confirmation: ''
        });

        return {form}
    }
}
</script>
