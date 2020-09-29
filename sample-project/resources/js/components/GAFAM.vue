<template>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="gafam in gafams" :key="gafam.id">
                    <td>{{gafam.id}}</td>
                    <td>{{gafam.name}}</td>
                </tr>
            </tbody>

        </table>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                gafams: []
            };
        },
        mounted() {
            axios
                .get('/api/gafams')
                .then(response => console.log(response)),
            axios
                .get('/api/gafams')
                .then(response => this.gafams =response.data)

        }
    }
</script>