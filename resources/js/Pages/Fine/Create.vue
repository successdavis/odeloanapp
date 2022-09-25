<template>
    <div class="text-center bg-blue-200 py-6 mb-0 font-semibold text-xl ">Create Fine for <span>{{Member.name}}</span></div>

     <div class="flex w-full justify-center mt-8">
        <div class="max-w-2xl md:w-full">
            <form @submit.prevent="form.post('/fine/create-fine/' + Member.id)">
                <div class="relative z-0 mb-6 w-full group">
                    <input v-model ="form.amount" type="number" name="amount" id="amount" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="amount" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Fine Amount</label>
                    <p v-if="form.errors.amount" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.amount }}.</p>
                </div>

                <label for="underline_select" class="sr-only">Purpose</label>
                <select  v-model="form.name" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option selected="">Choose Fine</option>
                    <option value="Long Term Loan Saving Fine">Absent From Meeting</option>
                    <option value="Short Term Loan Saving Fine">Late Coming to Meeting</option>
                    <option value="Short Term Loan Saving Fine">Noise</option>
                    <option value="Short Term Loan Saving Fine">Quarrel or Fight</option>
                </select>
                <p v-if="form.errors.name" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.name }}.</p>

                <button v-show="!form.processing" type="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>


</template>
<script>
import { useForm } from '@inertiajs/inertia-vue3';
import {watch, ref} from "vue";
import { Inertia } from '@inertiajs/inertia';
export default {
    props: {
        Member: Object,
        transaction_ref: String,
    },
    setup(props) {
        const form = useForm({
            name: 'Choose Fine',
            amount: null,
        })
        return {form}
    },
}
</script>
