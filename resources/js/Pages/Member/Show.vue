<template>
    <div class="flex justify-center gap-6 items-center mb-4 bg-gray-900 text-white">
        <img :src="member.avatar_path" class="m-3 w-12 h-12 rounded-lg shadow-lg" alt="User Avatar">
        <Link :href="'/members/' + member.id + '/profile'" class="text-2xl font-bold uppercase">{{member.title + ' ' + member.name}} -
            {{ member.account_number }}</Link>
    </div>
    <div class="grid ">
        <user-cards :member="member" :nextpaymentdue="nextpaymentdue" :nextpayment="nextpayment" :borrowedfunds="borrowedfunds" :savingsbalance="savingsbalance"></user-cards>

    </div>
    <div class="mt-4">
        <Link :href="'/account/' + member.id + '/view-account'" type="button" class="text-white bg-green-400 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View Savings</Link>
        <Link :href="'/fine/member-fine/' + member.id + ''" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Fines</Link>
        <!--        <Link :href="'/fine/view-loans/' + member.id + ''" type="button" class="text-white bg-gray-700 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View Loans</Link>-->
        <form @submit.prevent="submit">
            <div class="flex gap-6 items-center mt-4">
                <div>Assign Position</div>
                <select v-model="form.position" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Select A role</option>
                    <option v-for="role in roles">{{ role.name }}</option>
                </select>
                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2">Appoint Position</button>
            </div>
            <div class="text-red-600 mt-4" v-if="form.errors.position">{{ form.errors.position }}</div>
        </form>

        <div class="mt-4 ">{{member.name}} is currently an <span class="font-bold">{{user_role}}</span></div>

        <div class="mt-4 font-extrabold">
            <h3>Set New Password</h3>

            <form @submit.prevent="changePassword(member)">
                <div class="mb-6">
                    <input v-model="passwordForm.newPassword" type="password" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5">
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Update Password</button>

                    <div class="text-red-600" v-if="passwordForm.errors.newPassword">{{ passwordForm.errors.newPassword }}</div>

            </form>

            <p>{{message}}</p>
        </div>
    </div>
</template>

<script>
import {Link, useForm} from '@inertiajs/inertia-vue3'
import moment from 'moment'
import { Inertia } from '@inertiajs/inertia';
import AvatarForm from "@/Components/AvatarForm.vue";
import UserCards from "@/Components/UserCards.vue";
export default {
    components: {UserCards, AvatarForm, Link},
    props: {
        borrowedfunds: String,
        savingsbalance: String,
        member: Object,
        nextpaymentdue: String,
        nextpayment: String,
        roles: String,
        user_role: String,
    },

    data() {
      return {
          message: ''
      }
    },

    setup(){
        const form = useForm({
            position: '',
        });

        const passwordForm = useForm({
            newPassword: ''
        })

        return {form, passwordForm};
    },

    methods: {
        dateTime(value) {
            return moment(value).fromNow();
        },

        submit() {
            this.form.post(`/positions/${this.member.id}/appoint-position`, {
                preserveState: true,
                preserveScroll: true
            })
        },

        changePassword(member) {
            this.passwordForm.post('/admin/' + member.id + '/update-user-password', {
                preserveScroll: true,
                onSuccess: () => this.message = 'Completed Successfully',
            })
        }
    }
}
</script>
