
<template>
<!--    <Head title="Members" />-->


    <div class="overflow-x-auto px-4 relative shadow-md sm:rounded-lg">
    <div class="flex justify-between items-center py-4 bg-white dark:bg-gray-800">
        <div>
            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                <span class="sr-only">Action button</span>
                Action
                <svg class="ml-2 w-3 h-3" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownAction" class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 hidden" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(65px, 82px);">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                    <li>
                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate account</a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete User</a>
                </div>
            </div>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input v-model="search" type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
        </div>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Member
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    Principal Amount
                </th>
                <th scope="col" class="py-3 px-6">
                    Duration
                </th>
                <th scope="col" class="py-3 px-6">
                    Loan Interest
                </th>
                <th scope="col" class="py-3 px-6">
                    Grace Period
                </th>
                <th scope="col" class="py-3 px-6">
                    Due
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(loan, index) in loans.data" key="index" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
<!--                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">-->
                    <div class="pl-3">
                        <div class="text-base font-semibold">{{ loan.member_name }}</div>
<!--                        <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>-->
                    </div>
                </th>
                <td class="py-4 px-6">
                    ₦ {{ loan.principal_amount }}
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> shows a small orange circle-->
                        {{ loan.duration }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                        {{ loan.loan_interest }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                        {{ loan.grace_duration }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center">
<!--                        <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>-->
                        ₦{{ loan.due }}
                    </div>
                </td>
                <td class="py-4 px-6">
                    <!-- Modal toggle -->
                    <Link :href="'/loans/view_loan_details/' + loan.id" type="button" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</Link>
                </td>
            </tr>

        </tbody>
    </table>

    <nav class="flex justify-between items-center py-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500">Showing <span class="font-semibold text-gray-900">{{loans.meta.from}}-{{loans.meta.to}}</span> of <span class="font-semibold text-gray-900">{{loans.meta.total}}</span></span>
        <div class="inline-flex mt-2 xs:mt-0">
            <!-- Buttons -->
            <Link :href="loans.prev_page_url" class="inline-flex items-center py-2 px-4 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg aria-hidden="true" class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
                Prev
            </Link>
            <Link :href="loans.next_page_url" class="inline-flex items-center py-2 px-4 text-sm font-medium text-white bg-gray-800 rounded-r border-0 border-l border-gray-700 hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
                <svg aria-hidden="true" class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </Link>
          </div>
    </nav>
</div>

</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import {ref, watch} from "vue";
import {Inertia} from "@inertiajs/inertia";
import debounce from "lodash/throttle";


defineProps({loans: Object});
let search = ref('');

watch(search, debounce(function (value) {
    Inertia.get('/loans', {search: value}, {preserveState: true});
},500));
</script>
