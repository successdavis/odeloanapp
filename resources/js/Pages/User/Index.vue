<template>
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
