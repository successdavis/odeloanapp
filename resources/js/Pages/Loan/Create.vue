<template>
    <div class="text-center bg-blue-200 py-6 mb-6 font-semibold text-xl ">Add Loan</div>

    <div class="flex w-full justify-center">
        <div class="max-w-2xl md:w-full">
            <form @submit.prevent="form.post('/loans/create')">

                <label for="underline_select" class="sr-only">Loan Type</label>
                <select v-model="form.loancategory_id" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option selected="">Choose a loan type</option>
                    <option v-for="(category, index) in loancategory" :value="category.id">{{category.name}}}</option>
                </select>

                <member-search @member="setMember" title="Member" url="/getsponsors"></member-search>
                <div class="relative z-0 mb-6 w-full group">
                    <input v-model ="form.principal_amount" type="number" name="principal_amount" id="principal_amount" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="principal_amount" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Principal Amount</label>
                    <p v-if="form.errors.principal_amount" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.principal_amount }}.</p>

                </div>
                <p class="text-xs py-2 mb-4">These two fields can be left blank</p>
                <div class="grid gap-6 grid-cols-2">
                    <div class="relative z-0 mb-6 w-full group">
                        <input v-model ="form.maturity" type="date" name="maturity" id="maturity" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <label for="maturity" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Maturity Date</label>
                        <p v-if="form.errors.maturity" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.maturity }}.</p>

                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input v-model ="form.release_date" type="date" name="release_date" id="release_date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <label for="release_date" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Release Date</label>
                        <p v-if="form.errors.release_date" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.release_date }}.</p>

                    </div>
                </div>

                <!--                See Advance Settings-->
                <div class="text-center bg-gray-100 p-3 mb-6 font-semibold text-xl ">
                    <div class="flex items-center">
                        <input v-model="advancesettings" id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">See Advance Settings </label>
                    </div>
                </div>
                <div v-show="advancesettings">
                    <div class="relative z-0 mb-6 w-full group">
                        <input v-model="form.duration" type="number" name="floating_duration" id="floating_duration" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <label for="floating_duration" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Duration</label>
                        <p v-if="form.errors.duration" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.duration }}.</p>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="number" v-model="form.loan_interest" name="interest" id="floating_interest" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" >
                        <label for="floating_interest" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Loan Interest</label>
                        <p v-if="form.errors.loan_interest" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.loan_interest }}.</p>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input v-model="form.grace_period" type="text" name="floating_grace_period" id="floating_grace_period" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <label for="floating_grace_period" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Grace Period</label>
                            <p v-if="form.errors.grace_period" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.grace_period }}.</p>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input v-model ="form.payment_date" type="date" name="payment_date" id="payment_date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <label for="payment_date" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Release Date</label>
                            <p v-if="form.errors.payment_date" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.payment_date }}.</p>
                        </div>
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

    props: {loancategory: Object},
    data () {
        return {
            sponsorsearch: '',
            members: [],
            advancesettings: false,
        }
    },

    setup() {
        const form = useForm({
            member_id: null,
            principal_amount: null,
            duration: null,
            grace_period: null,
            loan_interest: null,
            loancategory_id: 'Choose a loan type',
            maturity: '',
            release_date: '',
            payment_date: '',
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
