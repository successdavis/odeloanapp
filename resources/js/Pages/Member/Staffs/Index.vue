<template>
    <div class="bg-green-400 py-4 text-center font-bold text-2xl">
        <h2>ACTIVE STAFFS</h2>
    </div>

    <div>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Staff Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Position
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="staff in staffs.data" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ staff.name }}
                    </th>
                    <td class="px-6 py-4">
                        {{  staff.position[0] }}
                    </td>
                    <td class="px-6 py-4">
                        <Link :href="'/dismiss/' + staff.id + '/dismiss-staff'" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Dismissed as Admin</Link>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {Link},
    props: ['staffs'],
}
</script>
