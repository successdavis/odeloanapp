<template>
    <h2 class="md:text-3xl my-6 font-bold text-center">{{$page.props.auth.user.name}} - {{$page.props.auth.user.account_number}}</h2>
    <user-cards :borrowedfunds="borrowedfunds" :savingsbalance="savingsbalance"></user-cards>
</template>

<script>
import UserCards from "@/Components/UserCards.vue";
import Layout from '@/Layouts/Guest.vue';

export default {
    layout: Layout,

    components: {UserCards},

    props: {
        borrowedfunds: String,
        savingsbalance: String,
        member: Object,
    }
}
</script>
