<template>
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="small_size">Small file input</label>
    <input  accept="image/*" @change="onChange" name="resume" class="block mb-5 w-full text-xs text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
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
                this.persist(avatar);
            }
        }
    }
</script>
