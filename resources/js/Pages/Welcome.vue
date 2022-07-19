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
})
</script>

<template>
    <Head title="Mbaikyu Pepper Thrift " />

    <h1 class="mb-8 text-4xl text-center">MBAIKYU PEPPER THRIFT & LOANS</h1>

    <div class="grid grid-cols-4">
        <div  class="grid  divide-y w-64 p-4 py-8 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Total Payments</p>
            <div class="text-4xl pt-3">₦ {{ totalPayments }}</div>
            <p class="text-xs">All savings + all loan payments</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Grand Total Savings</p>
            <div class="text-4xl pt-3">₦ {{ totalSaving }}</div>
            <p class="text-xs">Total from savings only</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Total Loan Lended</p>
            <div class="text-4xl pt-3">₦ {{ totalLoan }}</div>
            <p class="text-xs">Total money borrowed out</p>
        </div>

        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Total Loan Payment</p>
            <div class="text-4xl pt-3">{{ totalLoanPayment }}</div>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Treasurer Balance</p>
            <div class="text-4xl pt-3">{{ treasurer_balance }}</div>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Total Members</p>
            <div class="text-4xl pt-3">{{ totalMembers }}</div>
            <p class="text-xs">All registered members</p>
        </div>
        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Pending Loans</p>
            <div class="text-4xl pt-3">{{ pendingloans }}</div>
            <p class="text-xs">Loans not yet approved</p>
        </div>
    </div>

</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>
