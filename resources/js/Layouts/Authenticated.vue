<script>
import Sidebar from "@/Components/Sidebar.vue";
import treasurer_sidebar from "@/Layouts/Partials/Treasurer_Sidebar.vue";
import cs_sidebar from "@/Layouts/Partials/Cs_Sidebar.vue";
import secretary from "@/Layouts/Partials/Secretary_Sidebar.vue";

export default {
    components: {
        treasurer_sidebar,
        Sidebar,
        secretary,
        cs_sidebar
    },

    data() {
        return {
            userRole: this.$page.props.auth.role[0]
        }
    },
    computed: {
        componentToRender() {
            switch (this.userRole) {
                case 'cs_agent':
                    return 'cs_sidebar';
                case 'secretary':
                    return 'secretary';
                case 'treasurer':
                    return 'treasurer';
                case 'chairman':
                    return 'chairman';
                case 'director':
                    return 'sidebar';
                default:
                    return 'GuestComponent'; // fallback component if role is not recognized
            }
        }
    }
}
</script>

<template>
<!--    <navbar></navbar>-->
    <div class="flex">
        <div class="w-80 hidden md:block" aria-label="Sidebar">
<!--            <Sidebar></Sidebar>-->
            <component :is="componentToRender"></component>
        </div>
        <div class="py-4 px-3 w-full overflow-y-scroll">
            <slot />
        </div>
    </div>
</template>
