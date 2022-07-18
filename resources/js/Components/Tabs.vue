<template>
    <div class="border-b border-gray-200 dark:border-gray-700 w-full">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
            <li v-for="tab in tabs" class="mr-2">
                <a :href="tab.href" @click="selectTab(tab)" v-text="tab.name" class=" inline-flex p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                </a>
            </li>
        </ul>
    </div>

    <tab ref="tab"></tab>

    <div>
<!--        <slot></slot>-->
    </div>
</template>

<script>
import Tab from "@/Components/Tab.vue";

	export default {
		props: {
			vertical: {default: false}
		},
		data () {
			return {
				tabs: [],
			}
		},
		created () {
		    console.log(this.$refs.child);
			// this.tabs = this.$children
		},

		methods: {
			selectTab(selectedTab) {
				this.tabs.forEach(tab => {
					tab.isActive = (tab.name  == selectedTab.name);
				});
			}
		}
	};
</script>

<style scoped>
	.tab-details {
		color: black;
	}

	.vertical {
		flex-direction: column;
		align-items: flex-start;
	}
</style>
