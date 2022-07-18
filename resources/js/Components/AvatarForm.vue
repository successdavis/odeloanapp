<template>
    <div>
        <img :src="avatar" class="is-rounded">
        <form v-if="canUpdate" method="POST" enctype="multipart/form-data">
            <image-upload name="avatar" class="is-rounded none" @loaded="onLoad"></image-upload>
        </form>
    </div>
</template>

<script>
    import ImageUpload from './ImageUpload.vue';
    export default {
        props: ['member'],

        components: {ImageUpload},

        data() {
            return {
                avatar: this.member.avatar_path
            };
        },

        computed: {
            canUpdate() {
                return true;
                // return this.authorize(user => user.id === this.user.id, 'isAdmin')
            }
        },

        methods: {
            onLoad(avatar) {
                this.avatar = avatar.src;

                this.persist(avatar.file);
            },
        persist(avatar) {
                let data = new FormData();

                data.append('avatar', avatar);

                axios.post(`/memberpassport/${this.member.id}/avatar`, data)
                    .then(() => {
                        console.log('Successful');
                    });
            }
        }
    }

</script>
