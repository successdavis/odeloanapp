<template>
    <div class="flex justify-center gap-6 items-center mb-4 bg-gray-900 text-white">
        <img :src="member.avatar_path" class="m-3 w-12 h-12 rounded-lg shadow-lg" alt="User Avatar">
        <Link :href="'/members/' + member.id + '/profile'" class="text-2xl font-bold uppercase">{{member.title + ' ' + member.name}}</Link>
    </div>
    <div class="grid ">
        <user-cards :borrowedfunds="borrowedfunds" :savingsbalance="savingsbalance"></user-cards>
    </div>
    <div class="mt-4">
         <Link :href="'/account/' + member.id + '/view-account'" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View Savings</Link>
        <Link :href="'/fine/member-fine/' + member.id + ''" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Fines</Link>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import moment from 'moment'
import { Inertia } from '@inertiajs/inertia';
import AvatarForm from "@/Components/AvatarForm.vue";
import UserCards from "@/Components/UserCards.vue";
export default {
    components: {UserCards, AvatarForm, Link},
    props: {
        borrowedfunds: String,
        savingsbalance: String,
        member: Object,
        sponsor: '',
        nextofkin: Object,
    },

    methods: {
        dateTime(value) {
            return moment(value).fromNow();
        },
    }
}
</script>
