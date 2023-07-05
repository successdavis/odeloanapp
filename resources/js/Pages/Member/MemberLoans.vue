<template>
    <h3>Member Loans</h3>

    <div class="my-6 py-4 bg-green-400 px-4 text-center font-extrabold">Member Long Term Loan</div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Member
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    Principal Amount
                </th>
                <th scope="col" class="py-3 px-6">
                    Duration
                </th>
                <th scope="col" class="py-3 px-6">
                    Loan Interest
                </th>
<!--                <th scope="col" class="py-3 px-6">-->
<!--                    Grace Period-->
<!--                </th>-->
                <th scope="col" class="py-3 px-6">
                    Due
                </th>
                <th scope="col" class="py-3 px-6">
                    Paid
                </th>
                <th scope="col" class="py-3 px-6">
                    Balance
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(loan, index) in long_term_loans.data" key="index" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
<!--                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">-->
                    <div class="pl-3">
                        <div class="text-sm	 font-semibold">{{ loan.member_name }}</div>
<!--                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>-->
                    </div>
                </th>
                <td class="text-sm py-4 px-6">
                    ₦ {{ loan.principal_amount }}
                </td>
                <td class="text-xs py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> shows a small orange circle-->
                        {{ loan.duration }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                        {{ loan.loan_interest }}
                    </div>
                </td>
<!--                <td class="py-4 px-6">-->
<!--                    <div class="flex items-center">-->
<!--                        {{ loan.grace_duration }}-->
<!--                    </div>-->
<!--                </td>-->
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                        ₦{{ loan.due }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                        ₦{{ loan.paid }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                        ₦{{ loan.balance }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <!-- Modal toggle -->
                    <Link :href="'/loans/view_loan_details/' + loan.id" type="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</Link>
                </td>
            </tr>

        </tbody>
    </table>

        <div class="my-6 py-4 bg-gray-600 text-white px-4 text-center font-extrabold">Member Short Term Loan</div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Member
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    Principal Amount
                </th>
                <th scope="col" class="py-3 px-6">
                    Duration
                </th>
                <th scope="col" class="py-3 px-6">
                    Loan Interest
                </th>
<!--                <th scope="col" class="py-3 px-6">-->
<!--                    Grace Period-->
<!--                </th>-->
                <th scope="col" class="py-3 px-6">
                    Due
                </th>
                <th scope="col" class="py-3 px-6">
                    Paid
                </th>
                <th scope="col" class="py-3 px-6">
                    Balance
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(loan, index) in short_term_loans.data" key="index" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
<!--                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">-->
                    <div class="pl-3">
                        <div class="text-sm	 font-semibold">{{ loan.member_name }}</div>
<!--                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>-->
                    </div>
                </th>
                <td class="text-sm py-4 px-6">
                    ₦ {{ loan.principal_amount }}
                </td>
                <td class="text-xs py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> shows a small orange circle-->
                        {{ loan.duration }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                        {{ loan.loan_interest }}
                    </div>
                </td>
<!--                <td class="py-4 px-6">-->
<!--                    <div class="flex items-center">-->
<!--                        {{ loan.grace_duration }}-->
<!--                    </div>-->
<!--                </td>-->
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                        ₦{{ loan.due }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                        ₦{{ loan.paid }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                        ₦{{ loan.balance }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <!-- Modal toggle -->
                    <Link :href="'/loans/view_loan_details/' + loan.id" type="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</Link>
                </td>
            </tr>

        </tbody>
    </table>

</template>

<script>
import {Link, useForm} from '@inertiajs/inertia-vue3'

export default {
    components: {Link},
    props: ['long_term_loans', 'short_term_loans']
}
</script>
