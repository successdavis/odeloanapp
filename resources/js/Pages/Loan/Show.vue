<template>
    <div class="text-center bg-blue-200 py-6 mb-0 font-semibold text-xl ">View Loan Details</div>
    <a href="#" class="flex flex-col items-center bg-white  border shadow-md md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full h-full rounded-t-lg md:h-auto  md:w-48 md:rounded-none md:rounded-l-lg" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{member.title + ' ' + member.name}}}</h5>
            <div class="grid w-full md:grid-cols-3 md:gap-6">
                <div class="w-full">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="font-semibold">Gender:</div>
                        <div>{{ member.gender }}</div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="font-semibold">Address:</div>
                        <div>{{ member.r_address }}</div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="font-semibold">Phone Number:</div>
                        <div>{{ member.mobile }}</div>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="font-semibold">Email:</div>
                        <div>{{ member.email }}</div>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="font-semibold">Status:</div>
                        <div>{{ member.working_status }}</div>
                    </div>
                </div>
            </div>
        </div>

    </a>

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

        <div class="text-center bg-blue-200 py-2 mb-0 font-semibold text-xl ">Guarantors</div>

        <Link :href="'/guarantor/' + loan.data.id + '/add'" type="button" class="mt-3 text-white bg-slate-400 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Guarantor</Link>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Address
                </th>
                <th scope="col" class="py-3 px-6">
                    Mobile
                </th>
                <th scope="col" class="py-3 px-6">
                    Gender
                </th>
                <th scope="col" class="py-3 px-6">
                    Occupation
                </th>
                <th scope="col" class="py-3 px-6">
                    Working Address
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(guarantor, index) in guarantors" :key="index" class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ guarantor.name }}
                </th>
                <td class="py-4 px-6">
                    {{ guarantor.address }}
                </td>
                <td class="py-4 px-6">
                    {{ guarantor.mobile }}
                </td>
                <td class="py-4 px-6">
                    {{ guarantor.gender }}
                </td>
                <td class="py-4 px-6">
                    {{ guarantor.occupation }}
                </td>
                <td class="py-4 px-6">
                    {{ guarantor.working_address }}
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>




    <div class="border-b border-gray-200 dark:border-gray-700 w-full">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="mr-2">
                <a href="#" class="border-blue-600 active inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <svg class="mr-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Repayment
                </a>
            </li>
        </ul>
    </div>

    <div>
        <Link :href="'/repayment/' + loan.data.id" type="button" class="mt-3 text-white bg-slate-400 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Repayment</Link>

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Payment Date
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                            Collected By
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                            Method
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <div class="flex items-center">
                            Amount
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path></svg></a>
                        </div>
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">Delete</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(payment, index) in payments.data" :key="index" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ payment.payment_date }}
                    </th>
                    <td class="py-4 px-6">
                        {{ payment.collected_by }}
                    </td>
                    <td class="py-4 px-6">
                        {{ payment.method }}
                    </td>
                    <td class="py-4 px-6">
                       {{ payment.amount }}
                    </td>
                    <td class="py-4 px-6 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                    </th>
                    <td class="py-4 px-6">

                    </td>
                    <td class="py-4 px-6">

                    </td>
                    <td class="py-4 px-6 font-bold">
                        ₦{{ loan.data.paid }}
                    </td>
                    <td class="py-4 px-6 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import moment from 'moment'
import { Inertia } from '@inertiajs/inertia';
import Tabs from "@/Components/Tabs.vue";
import Tab from "@/Components/Tab.vue";
export default {
    components: {Tab, Tabs, Link},
    props: {
        loan: Object,
        member: Object,
        payments: Object,
        guarantors: Object
    },

    methods: {
        dateTime(value) {
            return moment(value).fromNow();
        },
    }
}
</script>
