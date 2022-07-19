<template>
    <div class="grid-cols-3 grid">
        <div class="w-64 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-end px-2 pt-2">
            </div>
            <div class="flex flex-col items-center pb-10">
                <img class="mb-3 w-24 h-24 rounded-full shadow-lg" :src="account.member.avatar_path" alt="Bonnie image">
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ account.member.name }}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ account.member.mobile }}</span>
                <div class="flex mt-4 space-x-3 lg:mt-6">
                    <Link :href="'/account/' + account.id + '/addtransaction'" class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Transaction</Link>
                </div>
            </div>
        </div>

        <div  class="grid  divide-y w-64 p-4  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <div class="flex justify-center items-center">
                <div>
                    <p class="text-2xl">Total Savings</p>
                    <div class="text-4xl">₦ {{ totalSaving }}</div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div>
                    <p class="text-2xl">Total Interest</p>
                    <div class="text-4xl">₦ {{ totalInterest }}</div>
                </div>
            </div>
        </div>
        <div  class="grid  divide-y w-64 p-4  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <div class="flex justify-center items-center">
                <div>
                    <p class="text-2xl">Interest</p>
                    <div class="text-4xl">{{ account.interest }}%</div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div>
                    <p class="text-2xl">Grand Total</p>
                    <div class="text-4xl">{{grandTotal}}</div>
                </div>
            </div>
        </div>

    </div>
    <div class="mt-9">
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
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
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
                        ₦{{ }}
                    </td>
                    <td class="py-4 px-6 text-right">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {Link},
    props: {
        payments: Object,
        account: Object,
        totalSaving: String,
        totalInterest: String,
        grandTotal: String,
    }
}
</script>
