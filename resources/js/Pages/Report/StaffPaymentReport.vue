<template>
    <h2 class="font-bold text-3xl text-center my-8">Staff Payment Report</h2>

    <div class="flex gap-6 items-center">
        <div>Pick a date to view Record</div>
        <input @change="getData" v-model="date" type="date">
    </div>

    <div class="mt-8">

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Staff Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Savings
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Long Term Loan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Short Term Loan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fines
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="collection in collection_loop" :key="collection.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ collection.name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ collection.saving }}
                    </td>
                    <td class="px-6 py-4">
                        {{ collection.long_term_loan }}
                    </td>
                    <td class="px-6 py-4">
                        {{ collection.short_term_loan }}
                    </td>
                    <td class="px-6 py-4">
                        {{collection.total_fines }}
                    </td>
                    <td class="px-6 py-4">
                        {{collection.grand_total_collections}}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>

<script>
export default {
    props: ['collections'],
    data () {
        return {
            date: new Date(),
            collection_loop: this.collections.data
        }
    },

    methods: {
        getData() {
            axios.get('/view/payments-collections-by-staff', {params: {date: this.date}})
            .then((data) => {
                this.collection_loop = data.data.data
            })
        }
    }
}
</script>
