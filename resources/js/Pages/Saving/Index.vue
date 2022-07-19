<template>
    <div class="grid grid-cols-3">
        <div  class="grid  divide-y w-64 p-4 py-8 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
            <p class="text-base mb-4">Grand Total Savings</p>
            <div class="text-4xl pt-3">₦ {{ totalSaving }}</div>
        </div>
<!--        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">-->
<!--            <p class="text-base mb-4">Grand Total Interest</p>-->
<!--            <div class="text-4xl pt-3">₦ 55000</div>-->
<!--        </div>-->
<!--        <div  class="grid  divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">-->
<!--            <p class="text-base mb-4">Total + Interest</p>-->
<!--            <div class="text-4xl pt-3">₦ 55000</div>-->
<!--        </div>-->
    </div>
</template>

<script>
export default {
    props: {
        totalSaving: String
    }
}
</script>
