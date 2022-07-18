<template>
    <div class="relative z-10 mt-2 mb-6 w-full group">
        <input v-model="search" type="text" name="search" id="search" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
        <label for="search" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ title }}</label>
        <div class="absolute w-full ">
            <ul class="z-40 w-full text-sm font-medium text-gray-900 bg-gray-300 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li @click="setSponsor(member)" v-for="(member, index ) in members" class="hover:bg-gray-50 cursor-pointer py-2 px-4 w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                    {{ member.name }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
import {watch, ref} from "vue";
import { Inertia } from '@inertiajs/inertia';
import debounce from "lodash/throttle";
export default {
    props: {
        title: String,
        url: String
    },
    data () {
        return {
            search: '',
            members: [],
        }
    },
     watch: {
        search: _.debounce(function(query) {
            axios.get(this.url, {params: {search: query}})
            .then((data) => {
                this.members = data.data
            })
        }, 300)
    },

    methods: {
        setSponsor(member) {
            this.search = member.name;
            this.members = [];
            this.$emit('member', member);
        }
    }
}
</script>
