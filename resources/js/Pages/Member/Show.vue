<template>
    <div class="flex justify-center gap-6 items-center mb-4 bg-gray-900 text-white">
        <img :src="member.avatar_path" class="mb-3 w-16 h-16 rounded-lg shadow-lg" alt="User Avatar">
        <Link :href="'/members/' + member.id + '/profile'" class="text-2xl font-bold uppercase">{{member.title + ' ' + member.name}}</Link>
    </div>
    <div class="grid ">
        <user-cards></user-cards>
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
