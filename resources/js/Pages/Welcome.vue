<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
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
})
</script>

<template>
    <Head title="Mbaikyu Pepper Thrift " />

    <h1 class="mb-8 text-4xl text-center">STECHMAX</h1>

    <div class="grid grid-cols-4 mb-4">
        <div  class="grid  divide-y w-64 p-4 py-8 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Grand Total Payments</p>
            <div class="text-3xl pt-3">₦ {{ totalPayments }}</div>
            <p class="text-xs">All savings + all loan payments</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Grand Total Savings</p>
            <div class="text-3xl pt-3">₦ {{ totalSaving }}</div>
            <p class="text-xs">Total from savings only</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Total Loan Lended</p>
            <div class="text-3xl pt-3">₦ {{ totalLoan }}</div>
            <p class="text-xs">Total money borrowed out</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Total Loan Payment</p>
            <div class="text-3xl pt-3">{{ totalLoanPayment }}</div>
            <p class="text-xs">Total received from loan payment</p>
        </div>
    </div>
    <div class="grid grid-cols-4">
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Treasurer Balance</p>
            <div class="text-3xl pt-3">{{ treasurer_balance }}</div>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Total Members</p>
            <div class="text-3xl pt-3">{{ totalMembers }}</div>
            <p class="text-xs">All registered members</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Pending Loans</p>
            <div class="text-3xl pt-3">{{ pendingloans }}</div>
            <p class="text-xs">Loans not yet approved</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Grand Total Interest</p>
            <div class="text-3xl pt-3">{{ totalInterestFromAllLoan }}</div>
            <p class="text-xs">Grand Total Interest</p>
        </div>
    </div>

</template>

