<template>
    <div>
        <label class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
               for="small_size">Change Photo</label>
        <input  accept="image/*" @change="onChange" name="resume" class="block hidden w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="small_size" type="file">
    </div>

</template>

<script>
export default {
    methods: {
        onChange(e) {
            if(! e.target.files.length) return;
            let file = e.target.files[0];

            let reader = new FileReader();

            reader.readAsDataURL(file);

            reader.onload = e => {
                let src = e.target.result;

                this.$emit('loaded', {src, file});
            };

            // Persis to the server
            // this.persist(file);
        }
    }
}
</script>
