<template>
    <div>
        <div class="text-center bg-blue-200 py-6 mb-6 font-semibold text-xl ">Add Guarantor <span></span></div>
        <div class="flex w-full justify-center">
            <div class="max-w-2xl md:w-full">
                <form @submit.prevent="form.post('/guarantor/'+loan.id+'/register')">

                    <div class="relative z-0 mb-6 w-full group">
                        <input v-model="form.name" type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                        <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                        <div v-if="form.errors.name">{{ form.errors.name }}</div>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input v-model="form.address" type="text" name="address" id="floating_address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                        <label for="floating_address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                        <div v-if="form.errors.address">{{ form.errors.address }}</div>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input v-model="form.working_address" type="text" name="working_address" id="working_address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                        <label for="working_address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Working Address</label>
                        <div v-if="form.errors.working_address">{{ form.errors.working_address }}</div>
                    </div>
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input v-model="form.mobile" type="tel"  name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                            <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
                            <div v-if="form.errors.mobile">{{ form.errors.mobile }}</div>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <label for="working_status" class="sr-only">Working Status</label>
                            <select v-model="form.occupation" id="working_status" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option disabled selected="">Working Status</option>
                                <option value="student">Student</option>
                                <option value="employee">Employee</option>
                                <option value="civil servant">Civil Servant</option>
                                <option value="self employed">Self Employed</option>
                                <option value="pensioner">Pensioner</option>
                                <option value="unemployed">Unemployed</option>
                            </select>

                            <p v-if="form.errors.occupation" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.occupation }}.</p>

                        </div>
                        <div>
                            <div class="flex">
                                <div class="flex items-center mr-4">
                                    <input v-model="form.gender" id="inline-radio" type="radio"  value="Male" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>

                                </div>
                                <div class="flex items-center mr-4">
                                    <input v-model="form.gender" id="inline-2-radio" type="radio" value="Female"  name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                                </div>
                                <div v-if="form.errors.gender">{{ form.errors.gender }}</div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" v-show="!form.processing" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </div>

</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3';

export default {

    props: {
        loan: Object,
    },

    setup (props) {

        const form = useForm({
            name: null,
            occupation: 'Working Status',
            working_address: '',
            address: '',
            gender: '',
            loan_id: props.loan.id,
            mobile: '',
        })

        return { form }
    },
}
</script>
