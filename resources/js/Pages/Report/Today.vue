<template>
    <Head title="Mbaikyu Pepper Thrift " />

<!--    <h1 class="mb-3 text-4xl text-center">MBAIKYU PEPPER THRIFT & LOANS</h1>-->
    <h1 class="mb-8 text-4xl text-center">TODAY'S REPORT</h1>

    <div class="grid grid-cols-4 mb-4">
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
            <p class="text-base mb-4">Today's Loan Payment</p>
            <div class="text-3xl pt-3">₦ {{ totalLoanPayment }}</div>
            <p class="text-xs">Total pay of Loaned for the day</p>
        </div>
    </div>
    <div class="grid grid-cols-4">
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">New Loans Application</p>
            <div class="text-3xl pt-3">{{ pendingloans }}</div>
            <p class="text-xs">New Loans Application</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Today's Total Interest</p>
            <div class="text-3xl pt-3">₦ {{ totalInterestFromAllLoan }}</div>
<!--            <span>13</span>-->
            <p class="text-xs">Residues + Long Term</p>
        </div>
<!--        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">-->
<!--            <p class="text-base mb-4">Total Residues Interest</p>-->
<!--            <div class="text-3xl pt-3"></div>-->
<!--            <p class="text-xs"></p>-->
<!--        </div>-->
<!--        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">-->
<!--            <p class="text-base mb-4">Total Residues Interest</p>-->
<!--            <div class="text-3xl pt-3"></div>-->
<!--            <p class="text-xs">New Loans Application</p>-->
<!--        </div>-->
    </div>
</template>

<script>
export default {
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
        totalSaving: String,
        totalLoan: String,
        totalMembers: String,
        treasurer_balance: String,
        totalLoanPayment: String,
        totalPayments: String,
        pendingloans: String,
        totalInterestFromAllLoan: String,
    }
}
</script>
