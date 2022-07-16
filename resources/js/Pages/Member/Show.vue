<template>
    <div>
        <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full h-full rounded-t-lg md:h-auto  md:w-48 md:rounded-none md:rounded-l-lg" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
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
                            <div class="font-semibold">Status:</div>
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

    </div>
</template>

<script>
import moment from 'moment'
export default {

    props: {
        member: Object,
        sponsor: '',
    },

    methods: {
        dateTime(value) {
          return moment(value).fromNow();
        },
    }
}
</script>
