<template>
    <div>
        <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <!--            <img class="object-cover w-full h-full rounded-t-lg md:h-auto  md:w-48 md:rounded-none md:rounded-l-lg" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">-->

            <div class="flex flex-col justify-between p-4 leading-normal">
                <div class="grid w-full md:grid-cols-4 md:gap-6">
                    <div>
                        <avatar-form :member="user"></avatar-form>
                    </div>
                    <div class="md:col-span-3 mt-4 md:mt-0">
                        <h5 class="mb-1 text-xl md:text-4xl font-bold text-gray-900 dark:text-white"><Link :href="'/members/' + user.id">{{user.title + ' ' + user.name}}</Link></h5>

                        <div class="md:grid grid-cols-2 gap-12">
                            <div class="w-full">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="font-semibold">Gender:</div>
                                    <div class="col-span-2">{{ user.gender }}</div>
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="font-semibold">State:</div>
                                    <div class="col-span-2">{{ user.state }}</div>
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="font-semibold">LGA:</div>
                                    <div class="col-span-2">{{ user.lga }}</div>
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="font-semibold">Address:</div>
                                    <div class="col-span-2">{{ user.r_address }}</div>
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="font-semibold">Email:</div>
                                    <div class="col-span-2">{{ user.email }}</div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="font-semibold">Date of Birth:</div>
                                    <div>{{  dateTime(user.dob) }}</div>
                                </div>
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="font-semibold">Phone Number:</div>
                                    <div>{{ user.mobile }}</div>
                                </div>

                                <div class="grid grid-cols-2 gap-6">
                                    <div class="font-semibold">Working Status:</div>
                                    <div>{{ user.working_status }}</div>
                                </div>
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="font-semibold">Sponsor:</div>
                                    <div>{{ sponsor.name }}</div>
                                </div>
                            </div>
                        </div>
                        <Link :href="`/member/${user.id}/update`" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 mt-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                              <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                  Edit Member Information
                              </span>
                        </Link>
                        <Link v-if="$page.props.auth.account_number === '1000001003'"  method="delete" as="button" :href="`/member/${user.id}/delete`" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 mt-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-800 to-red-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">

                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">

                                  Delete Member
                              </span>
                        </Link>
                    </div>
                </div>
            </div>

        </a>
        <!--        Next of Kin Information -->
        <div class="mb-4 mt-4 bg-white rounded-lg border shadow-md md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
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


        <Link v-show="!nextofkin" :href="'/nextofkin/create/' + user.id" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Next of Kin</Link>


    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import moment from 'moment'
import { Inertia } from '@inertiajs/inertia';
import AvatarForm from "@/Components/AvatarForm.vue";
import UserCards from "@/Components/UserCards.vue";
export default {
    components: {UserCards, AvatarForm, Link},
    props: {
        user: Object,
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
