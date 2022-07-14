
<template>
    <Head title="Members" />

    <BreezeAuthenticatedLayout>
        <div>
            Welcome to Members Forum

            <table class="table-fixed">
                  <thead>
                    <tr>
                      <th>Full Name</th>
                      <th>Gender</th>
                      <th>Mobile</th>
                      <th>Business</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(member, index) in members">
                      <td>{{ member.name }}</td>
                      <td>{{ member.gender }}</td>
                      <td>{{ member.mobile }}</td>
                      <td>{{ member.business_name }}</td>
                    </tr>
                  </tbody>
                </table>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
export default {
    props: {
        members: Object,
    }
}
</script>
