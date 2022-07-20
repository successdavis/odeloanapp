<template>
    <div>
        <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!--            <img class="object-cover w-full h-full rounded-t-lg md:h-auto  md:w-48 md:rounded-none md:rounded-l-lg" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">-->
            <avatar-form :member="member"></avatar-form>

            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{member.title + ' ' + member.name}}}</h5>
                <div class="grid w-full md:grid-cols-3 md:gap-6">
                    <div class="w-full">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="font-semibold">Gender:</div>
                            <div>{{ member.gender }}</div>
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="font-semibold">State:</div>
                            <div>{{ member.state }}</div>
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="font-semibold">LGA:</div>
                            <div>{{ member.lga }}</div>
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="font-semibold">Address:</div>
                            <div>{{ member.r_address }}</div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="font-semibold">Date of Birth:</div>
                            <div>{{  dateTime(member.dob) }}</div>
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="font-semibold">Phone Number:</div>
                            <div>{{ member.mobile }}</div>
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="font-semibold">Email:</div>
                            <div>{{ member.email }}</div>
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="font-semibold">Working Status:</div>
                            <div>{{ member.working_status }}</div>
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="font-semibold">Sponsor:</div>
                            <div>{{ sponsor.name }}</div>
                        </div>
                    </div>
                </div>
            </div>

        </a>
<!--        Next of Kin Information -->
        <div class="mb-4 bg-white rounded-lg border shadow-md md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="mt-3">

            <div class="mb-3 bg-gray-100 p-2 text-center font-semibold">Next of Kin</div>

            <table v-if="nextofkin" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ nextofkin.name }}
                    </th>
                    <td class="py-4 px-6">
                        {{ nextofkin.Relationship }}
                    </td>
                    <td class="py-4 px-6">
                        {{ nextofkin.gender }}
                    </td>
                    <td class="py-4 px-6">
                        {{ nextofkin.mobile }}
                    </td>
                    <td class="py-4 px-6">
                        {{ nextofkin.address }}
                    </td>
                </tr>
            </table>
                    </div>
        </div>


        <Link v-show="!nextofkin" :href="'/nextofkin/create/' + member.id" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Next of Kin</Link>
        <Link :href="'/account/' + member.id + '/view-account'" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View Savings</Link>
        <Link :href="'/fine/member-fine/' + member.id + ''" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Fines</Link>


    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import moment from 'moment'
import { Inertia } from '@inertiajs/inertia';
import AvatarForm from "@/Components/AvatarForm.vue";
export default {
    components: {AvatarForm, Link},
    props: {
        member: Object,
        sponsor: '',
        nextofkin: Object,
    },

    methods: {
        dateTime(value) {
            return moment(value).fromNow();
        },
    }
}
</script>
