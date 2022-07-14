<template>
    <div>
        <h1>Welcome to member show page</h1>
        <h2>{{member.name}}}</h2>
        <h2>{{member.gender}}</h2>
    </div>
</template>

<script>
export default {

    props: {
        member: Object,
    }
}
</script>
