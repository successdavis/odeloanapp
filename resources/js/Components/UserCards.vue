<template>
    <div class="grid grid-cols-3 gap-14">
        <div class="md:col-span-2">
            <div class="grid grid-cols-2 gap-6">
                <a href="#" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xs	 font-bold tracking-tight text-gray-900 dark:text-white">BORROWED FUNDS</h5>
                    <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">₦ {{ borrowedfunds }}</h5>
                    <p class="font-normal text-sm text-gray-700 dark:text-gray-400">Disbursed: 9 Jul, 00:36 PM</p>
                    <button type="button" class="w-full mt-2 py-3 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-gray-900 text-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Manage Loan</button>
                </a>
                <a href="#" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-xs font-bold tracking-tight text-gray-900 dark:text-white">NEXT LOAN PAYMENT</h5>
                    <p class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white flex justify-between">
                        <span>₦ 2,000,000</span>
                        <span class="font-sm">Due 3 Oct</span>
                    </p>
                    <p class="mb-4 text-sm tracking-tight text-red-600 dark:text-white flex justify-between">
                        <span class="border-2 px-2 rounded-md">₦8,000 early discount</span>
                        <span class="font-sm">Due 3 Oct</span>
                    </p>
                    <div class="flex">
                        <button type="button" class="w-full py-3 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Extend Time</button>
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
export default {
    props: {
        borrowedfunds: String,
        savingsbalance: String,
    }
}
</script>
