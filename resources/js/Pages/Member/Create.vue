<template>
    <div class="px-8">
        <div class="mb-4">
            <h1 class="text-4xl	">Add Member</h1>
        </div>

        <div class="mb-3 bg-gray-100 p-2 text-center font-semibold">
            Personal Information
        </div>
        <form  @submit.prevent="submit">
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mt-2 mb-6 w-full group">
                    <input v-model="form.name" type="text" name="fullname" id="fullname" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="fullname" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fullname</label>
                    <p v-if="form.errors.name" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.name }}.</p>
                </div>
                <member-search v-if="!this.user" @member="member" url="/getsponsors" title="Sponsor"></member-search>

                <p v-if="form.errors.sponsorid" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.sponsorid }}.</p>
            </div>

            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="flex relative z-0 mb-6 w-full group">
                    <div class="flex items-center mr-4">
                        <input v-model="form.gender" id="inline-radio" type="radio" value="M" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input v-model="form.gender" id="inline-2-radio" type="radio" value="F" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                    </div>
                    <p v-if="form.errors.gender" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.gender }}.</p>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="title" class="sr-only">title select</label>
                    <select v-model="form.title" id="title" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected value=" ">Choose a title</option>
                        <option value="Mr">Mr.</option>
                        <option value="Mrs">Mrs.</option>
                        <option value="Miss">Miss.</option>
                        <option value="Miss">Ms.</option>
                        <option value="Dr">Dr.</option>
                        <option value="Prof">Prof.</option>
                        <option value="Rev">Rev.</option>
                    </select>
                    <p v-if="form.errors.title" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.title }}.</p>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input v-model="form.mobile" type="text" name="mobile" id="mobile" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="mobile" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone</label>
                    <p v-if="form.errors.mobile" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.mobile }}.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <select v-model="form.country" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option value=" ">Choose a country</option>
                        <option v-for="country in countries" :value="country">{{ country }}</option>
                    </select>
                    <p v-if="form.errors.country" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.country }}.</p>
                </div>

                <div class="relative z-0 mb-6 w-full group">
                    <select v-model="form.state" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option value=" ">Choose a State</option>
                        <option v-for="(state, index) in states" :key="index" :value="state.state.name">{{ state.state.name }}</option>
                    </select>
                    <p v-if="form.errors.state" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.state }}.</p>
                </div>

                <div class="relative z-0 mb-6 w-full group">
                    <select v-model="form.lga" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option value=" ">Choose a Local Government</option>
                        <option v-for="(lga, index) in lgas[0]" :key="index" >{{ lga.name }}</option>
                    </select>
                    <p v-if="form.errors.lga" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.lga }}.</p>
                </div>

            </div>

            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <input v-model="form.email" type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" ">
                    <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    <p v-if="form.errors.email" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.email }}.</p>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input v-model="form.dob" type="date" name="dob" id="dob" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="dob" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date of Birth</label>
                    <p v-if="form.errors.dob" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.dob }}.</p>
                </div>

            </div>

            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <input v-model="form.business_name" type="text" name="business_name" id="business_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="business_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Business Name</label>
                    <p v-if="form.errors.business_name" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.business_name }}.</p>

                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <label for="working_status" class="sr-only">Working Status</label>
                    <select v-model="form.working_status" id="working_status" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option disabled selected="">Working Status</option>
                        <option value="student">Student</option>
                        <option value="employee">Employee</option>
                        <option value="civil servant">Civil Servant</option>
                        <option value="self employed">Self Employed</option>
                        <option value="pensioner">Pensioner</option>
                        <option value="unemployed">Unemployed</option>
                    </select>

                    <p v-if="form.errors.working_status" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.working_status }}.</p>

                </div>
            </div>
            <div class="grid grid-cols-2 gap-6">

                <div class="relative z-0 mb-6 w-full group">
                    <input v-model="form.r_address" type="text" name="r_address" id="r_address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="r_address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Residential Address</label>
                    <p v-if="form.errors.r_address" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.r_address }}.</p>

                </div>

                <div class="relative z-0 mb-6 w-full group">
                    <input v-model="form.p_address" type="text" name="p_address" id="p_address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="p_address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Permanent Address</label>
                    <p v-if="form.errors.p_address" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.p_address }}.</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-6" v-if="!this.user">

                <div class="relative z-0 mb-6 w-full group">
                    <input v-model="form.password" type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    <p v-if="form.errors.password" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.password }}.</p>

                </div>

                <div class="relative z-0 mb-6 w-full group">
                    <input v-model="form.password_confirmation" type="password" name="password_confirmation" id="password_confirmation" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                    <label for="password_confirmation" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm Password</label>
                    <p v-if="form.errors.password_confirmation" class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ form.errors.password_confirmation }}.</p>
                </div>
            </div>

            <button type="submit" v-show="!form.processing"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                {{ this.user ? 'Update' : 'Submit' }}</button>
        </form>

    </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3';
import {watch, ref} from "vue";
import { Inertia } from '@inertiajs/inertia';
import debounce from "lodash/throttle";
import MemberSearch from "@/Components/MemberSearch.vue";
import states from '@/json/States.json'


export default {
    props: {user: Object},
    components: {MemberSearch},
    data () {
        return {
            sponsorsearch: '',
            states: states,
            countries: ['Nigeria','Ghana','Cameroon']
        }
    },

    setup(props) {
        const form = useForm({
            name: props.user ? props.user.name : '',
            email: props.user ? props.user.email : '',
            country: props.user ? props.user.country : 'Nigeria',
            state: props.user ? props.user.state : 'Benue State',
            lga: props.user ? props.user.lga : ' ',
            gender: props.user ? props.user.gender : '',
            title: props.user ? props.user.title : ' ',
            mobile: props.user ? props.user.mobile : '',
            business_name: props.user ? props.user.business_name : '',
            dob: props.user ? props.user.dob : '',
            serial_no: props.user ? props.user.serial_no : '',
            r_address: props.user ? props.user.r_address : '',
            p_address: props.user ? props.user.p_address : '',
            working_status: props.user ? props.user.working_status : 'Working Status',
            description: props.user ? props.user.description : '',
            sponsorid: props.user ? props.user.sponsorid : '',
            password: null,
            password_confirmation: null,
        })
        return {form}
    },

    computed: {
      lgas() {
          let local = this.states.filter((s) => {
              return s.state.name === this.form.state
          })

          return local.map((local) => {
              return local.state.locals;
          })
      }
    },

    methods: {
        member(member) {
            this.form.sponsorid = member.id;
        },

        submit() {
            if (this.user) {
                this.form.patch(`/member/${this.user.id}/update`)
            }else {
                this.form.post('/members/register')
            }
        }
    }
}



</script>
