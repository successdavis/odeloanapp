<template>
    <div class="px-3">
        <h2 class="md:text-3xl mb-3 text-xl font-bold text-center">{{$page.props.auth.user.name}} - {{$page.props.auth.user.account_number}}</h2>

        <user-cards :nextpaymentdue="nextpaymentdue" :nextpayment="nextpayment" :borrowedfunds="borrowedfunds" :savingsbalance="savingsbalance"></user-cards>
    </div>
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
        nextpaymentdue: String,
        nextpayment: String,
        member: Object,
    }
}
</script>
