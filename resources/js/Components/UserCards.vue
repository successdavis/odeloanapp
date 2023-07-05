<template>
    <div class="md:grid grid-cols-3 gap-14">
        <div class="md:col-span-2">
            <div class="md:grid mb-3 grid-cols-2 gap-6">
                <a href="#" class="mb-3 block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xs	 font-bold tracking-tight text-gray-900 dark:text-white">BORROWED FUNDS</h5>
                    <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">₦ {{ borrowedfunds }}</h5>
                    <p class="font-normal text-sm text-gray-700 dark:text-gray-400">Disbursed: 9 Jul, 00:36 PM</p>
                    <Link :href="'/view-data/' + member.id" type="button" class="w-full mt-2 py-3 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-gray-900 text-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">View Loans</Link>
                </a>
                <a href="#" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xs font-bold tracking-tight text-gray-900 dark:text-white">NEXT LOAN PAYMENT</h5>
                    <p class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white flex justify-between">
                        <span>₦ {{ nextpayment }}</span>
                        <span class="font-sm">{{ nextpaymentdue }}</span>
                    </p>
                    <p class="mb-4 text-sm tracking-tight text-red-600 dark:text-white flex justify-between">
<!--                        <span class="border-2 px-2 rounded-md">₦82,000 early discount</span>-->
<!--                        <span class="font-sm">Due 3 Oct</span>-->
                    </p>
                    <div class="flex">
                        <button type="button" class="w-full py-3 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 ">Extend Time</button>
                        <button type="button" class="w-full focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:focus:ring-yellow-900">Repay Loan</button>
                    </div>
                </a>

            </div>
        </div>

        <div class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <p>Total Saving Balance</p>
            <div class="bg-blue-700 px-3 py-6 mt-2 rounded-xl">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">₦ {{ savingsbalance }}</h5>
                <p class="font-normal text-white dark:text-gray-400">Active Balance</p>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'

export default {
    components: {Link},

    props: {
        borrowedfunds: String,
        savingsbalance: String,
        nextpayment: String,
        nextpaymentdue: String,
        member: Object,
    }
}
</script>
