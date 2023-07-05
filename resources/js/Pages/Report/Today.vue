<template>
    <Head title="Mbaikyu Pepper Thrift " />

<!--    <h1 class="mb-3 text-4xl text-center">MBAIKYU PEPPER THRIFT & LOANS</h1>-->
    <h1 class="mb-8 text-4xl text-center">TODAY'S REPORT</h1>

    <div class="flex flex-wrap gap-6 mb-4">
        <div  class="grid  divide-y w-64 p-4 py-8 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Today's Total Payments</p>
            <div class="text-3xl pt-3">₦ {{totalPayments}} </div>
            <p class="text-xs">All savings + all loan payments</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Today's Total Savings</p>
            <div class="text-3xl pt-3">₦ {{ totalSaving }} </div>
            <p class="text-xs">Total from savings only</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Today's Money Lended</p>
            <div class="text-3xl pt-3">₦ {{ totalLoan }} </div>
            <p class="text-xs">Total money borrowed out</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Long Term Loan Payment</p>
            <div class="text-3xl pt-3">₦ {{ total_lt_Loan }}</div>
            <p class="text-xs">Total pay of Loaned for the day</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Short Term Loan Payment</p>
            <div class="text-3xl pt-3">₦ {{ total_st_loan }}</div>
            <p class="text-xs">Total pay of Loaned for the day</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Total Fine Payment</p>
            <div class="text-3xl pt-3">₦ {{ fines }}</div>
            <p class="text-xs">Total pay of Loaned for the day</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">New Loans Application</p>
            <div class="text-3xl pt-3">{{ pendingloans }}</div>
            <p class="text-xs">New Loans Application</p>
        </div>
    </div>
    <Link href="/view/payments-collections-by-staff" type="button" class="text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">View Payment Collection By Staffs</Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {Link},
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
        totalSaving: String,
        totalLoan: String,
        totalMembers: String,
        treasurer_balance: String,
        total_lt_Loan: String,
        total_st_loan: String,
        fines: String,
        totalPayments: String,
        pendingloans: String,
        totalInterestFromAllLoan: String,
    }
}
</script>
