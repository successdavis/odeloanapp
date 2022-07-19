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

    <payment-form :url="'/repayment/' + loan.data.id + '/addpayment'"></payment-form>

</template>
<script>
import { useForm } from '@inertiajs/inertia-vue3';
import {watch, ref} from "vue";
import { Inertia } from '@inertiajs/inertia';
import debounce from "lodash/throttle";
import MemberSearch from "@/Components/MemberSearch.vue";
import PaymentForm from "@/Components/PaymentForm.vue";
export default  {
    components: {PaymentForm, MemberSearch},
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
