<template>
<!-- Loan Details-->
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="py-3 px-2">
                Released
            </th>
            <th scope="col" class="py-3 px-2">
                Maturity
            </th>
            <th scope="col" class="py-3 px-2">
                Principal Amount
            </th>
            <th scope="col" class="py-3 px-2">
                Duration
            </th>
            <th scope="col" class="py-3 px-2">
                Interest %
            </th>
            <th scope="col" class="py-3 px-2">
                Interest
            </th>
            <!--                <th scope="col" class="py-3 px-2">-->
            <!--                    Grace Period-->
            <!--                </th>-->
            <th scope="col" class="py-3 px-2">
                Due
            </th>
            <th scope="col" class="py-3 px-2">
                Paid
            </th>
            <th scope="col" class="py-3 px-2">
                Balance
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="text-sm py-4 px-2">
                {{ loan.data.release }}
            </td>
            <td class="text-sm py-4 px-2">
                {{ loan.data.maturity }}
            </td>
            <td class="text-sm py-4 px-2">
                ₦{{ loan.data.principal_amount }}
            </td>
            <td class="text-xs py-4 px-2">
                <div class="flex items-center">
                    <!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> shows a small orange circle-->
                    {{ loan.data.duration }}
                </div>
            </td>
            <td class="py-4 px-2">
                <div class="flex items-center">
                    <!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                    {{ loan.data.loan_interest }}
                </div>
            </td>
            <td class="py-4 px-2">
                <div class="flex items-center">
                    <!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                    ₦{{ loan.data.interest_maturity }}
                </div>
            </td>
            <!--                <td class="py-4 px-2">-->
            <!--                    <div class="flex items-center">-->
            <!--                        {{ loan.grace_duration }}-->
            <!--                    </div>-->
            <!--                </td>-->
            <td class="py-4 px-2">
                <div class="flex items-center">
                    <!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                    ₦{{ loan.data.due }}
                </div>
            </td>
            <td class="py-4 px-2">
                <div class="flex items-center">
                    <!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                    ₦{{ loan.data.paid }}
                </div>
            </td>
            <td class="py-4 px-2">
                <div class="flex items-center">
                    <!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                    ₦{{ loan.data.balance }}
                </div>
            </td>
        </tr>

        </tbody>
    </table>

    <div class="text-center bg-blue-200 py-6 mb-0 font-semibold text-xl ">Add Loan Payment</div>

<!--    Payment Form -->
    <div class="flex w-full justify-center mt-8">
        <div class="max-w-2xl md:w-full">
            <form @submit.prevent="form.post('/repayment/' + loan.data.id + '/addpayment')">

                <div class="relative z-0 mb-6 w-full group">
                    <input v-model ="form.amount" type="number" name="principal_amount" id="principal_amount" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="principal_amount" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Repayment Amount</label>
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

                <div class="mt-5">
                    <member-search url="/getusers" title="Collected By"  @member="setUser"></member-search>
                </div>

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
        loan: Object,
    },

    setup() {
        const form = useForm({



            payment_method: 'Choose Payment Method',
            amount: null,
            payment_date: '',
            user_id: 'hello',
            transaction_ref: 'hello',
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
