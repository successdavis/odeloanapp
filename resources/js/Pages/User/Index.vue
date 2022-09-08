<template>
    <user-cards :borrowedfunds="borrowedfunds" :savingsbalance="savingsbalance"></user-cards>
</template>

<script>
import UserCards from "@/Components/UserCards.vue";
export default {

    components: {UserCards},

    props: {
        borrowedfunds: String,
        savingsbalance: String,
        member: Object,
    }
}
</script>
