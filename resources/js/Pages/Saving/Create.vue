<template>
        <div class="text-center bg-blue-200 py-6 mb-0 font-semibold text-xl ">Add Savings to <span>{{account.user.name}}</span></div>
        <payment-form :url="'/account/' + account.id + '/savetransaction'"></payment-form>
</template>
<script>
import PaymentForm from "@/Components/PaymentForm.vue";
export default {
    components: {PaymentForm},
    props: {
        account: Object,
    }
}
</script>
