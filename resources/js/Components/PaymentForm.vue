<template>
    <!--    Payment Form -->
    <div class="flex w-full justify-center mt-8">
        <div class="max-w-2xl md:w-full">
            <form @submit.prevent="form.post(url)">
                    <div v-if="form.errors.transaction_ref" class="text-red-600 mb-6">Payment Error: This payment has been added</div>

                <div class="relative z-0 mb-6 w-full group">
                    <input v-model ="form.amount" type="number" name="principal_amount" id="principal_amount" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="principal_amount" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Payment Amount</label>
                    <p v-if="form.errors.amount" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.amount }}.</p>
                </div>

                <label for="underline_select" class="sr-only">Payment method</label>
                <select  v-model="form.payment_method" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option selected="">Choose Payment Method</option>
                    <option value="Cash">Cash</option>
                    <option value="ATM">ATM</option>
                    <option value="Cheque">Cheque</option>
                    <option value="Transfer">Transfer</option>
                </select>
                <p v-if="form.errors.payment_method" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.payment_method }}.</p>


                <p class="text-xs py-2 mb-4">If payment date is left blank, it will default to today's date</p>
                    <div class="relative z-0 mb-6 w-full group">
                        <input v-model ="form.payment_date" type="date" name="maturity" id="maturity" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <label for="maturity" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Payment Date</label>
                        <p v-if="form.errors.payment_date" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.payment_date }}.</p>
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
export default  {
    components: {MemberSearch},
    props: {
        url: String,
        transaction_ref: String,
    },

    setup(props) {
        const form = useForm({
            payment_method: 'Choose Payment Method',
            amount: null,
            payment_date: '',
            transaction_ref: props.transaction_ref,
        })
        return {form}
    },

    methods: {
        setUser(user) {
            this.form.user_id = user.id
        }
    }
}
</script>
