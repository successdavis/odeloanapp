<template>
  <h3 class="text-center font-bold text-2xl mt-8 bg-green-400 py-3">My Today's Collection -
    <span>{{ currentDate }}</span></h3>
  <div class="flex flex-wrap gap-6 mb-4 mt-8">
    <div
        class="grid mb-4 divide-y w-64 p-4 py-8 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
      <p class="text-base mb-4"> Savings </p>
      <div class="text-2xl pt-3">₦ {{ total_savings }}</div>
      <p class="text-xs">Total Savings Collected</p>
    </div>
    <div
        class="grid mb-4 divide-y w-64 p-4 py-8 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
      <p class="text-base mb-4"> Long Term Loan </p>
      <div class="text-2xl pt-3">₦ {{ total_LT_Loan }}</div>
      <p class="text-xs">Total collected for long term loan</p>
    </div>
    <div
        class="grid mb-4 divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
      <p class="text-base mb-4">Short Term Loan </p>
      <div class="text-2xl pt-3">₦ {{ total_ST_Loan }}</div>
      <p class="text-xs">Total collected for short term loan</p>
    </div>
    <div
        class="grid mb-4 divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
      <p class="text-base mb-4">Total Fine Payment</p>
      <div class="text-2xl pt-3">₦ {{ total_fine }}</div>
      <p class="text-xs">Total received from fine payment</p>
    </div>
    <div
        class="grid mb-4 divide-y w-64 p-4 py-8  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
      <p class="text-base mb-4">Grand Total Collections</p>
      <div class="text-2xl pt-3">₦ {{ total_collection }}</div>
      <p class="text-xs">All money received today</p>
    </div>
  </div>
</template>
<script>
export default {
  name: 'collections',
  props: {
    currentDate: {},
    total_LT_Loan: {},
    total_ST_Loan: {},
    total_collection: {},
    total_fine: {},
    total_savings: {}
  }
}
</script>