<template>
    <div class="text-center bg-blue-200 py-6 mb-6 font-semibold text-xl ">Add Loan</div>

    <div class="flex w-full justify-center">
        <div class="max-w-2xl md:w-full">
            <form @submit.prevent="form.post('/loans/create')">


            <member-search @member="setMember" title="Member"></member-search>
                <div class="relative z-0 mb-6 w-full group">
                    <input v-model ="form.principal_amount" type="number" name="principal_amount" id="principal_amount" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="principal_amount" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Principal Amount</label>
                   <p v-if="form.errors.principal_amount" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.sponsorid }}.</p>

                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input v-model="form.duration" type="number" name="floating_duration" id="floating_duration" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="floating_duration" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Duration</label>
                    <p v-if="form.errors.duration" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.duration }}.</p>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="number" v-model="form.loan_interest" name="interest" id="floating_interest" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="floating_interest" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Loan Interest</label>
                    <p v-if="form.errors.loan_interest" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.loan_interest }}.</p>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input v-model="form.grace_period" type="text" name="floating_grace_period" id="floating_grace_period" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                        <label for="floating_grace_period" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Grace Period</label>
                        <p v-if="form.errors.grace_period" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.grace_period }}.</p>
                    </div>
                </div>

                <button v-show="!form.processing" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>

</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3';
import {watch, ref} from "vue";
import { Inertia } from '@inertiajs/inertia';
import debounce from "lodash/throttle";
import MemberSearch from "@/Components/MemberSearch.vue";
export default {
    components: {MemberSearch},
    data () {
        return {
            sponsorsearch: '',
            members: [],
        }
    },

    setup() {
        const form = useForm({
            member_id: null,
            principal_amount: null,
            duration: null,
            grace_period: null,
            loan_interest: null,
        })
        return {form}
    },

    methods: {
        setMember(member){
            this.form.member_id = member.id;
        }
    }

}
</script>
