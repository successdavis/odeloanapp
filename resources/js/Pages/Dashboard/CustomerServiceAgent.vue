<template>
    <div class="mx-4">
        <collections :current-date="currentDate" :total_-l-t_-loan="total_LT_Loan" :total_-s-t_-loan="total_ST_Loan"
                     :total_collection="total_collection" :total_fine="total_fine" :total_savings="total_savings"/>

    </div>
</template>

<script>
import Collections from "@/Pages/Dashboard/Collections.vue";

export default {
    components: {Collections},
    props: ['total_savings', 'total_LT_Loan', 'total_ST_Loan', 'total_fine', 'total_collection'],
    data () {
        return {
            currentDate: new Date().toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' }),
        }
    }
}
</script>
