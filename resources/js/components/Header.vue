<template>
    <div class="jumbotron">
        <h4>Generate PIN CODE</h4>
        <p>
            <button class="btn btn-success btn-lg" href="#" @click="generate">
                Generate !
            </button>
            <button class="btn btn-danger btn-lg float-right" @click="empty">
                Empty
            </button>
        </p>
    </div>

    <table class="table">
        <thead>
            <th>#</th>
            <th>Code</th>
        </thead>
        <tbody>
            <tr v-for="(code, index) in  codes">
                <td>{{ index + 1 }}</td>
                <td>{{ code }}</td>
            </tr>
        </tbody>
    </table>

</template>

<script>
import axios from 'axios'
export default {
    name: "Header",
    data(){
        return {
            codes: [],
        }
    },
    created() {
    },
    methods: {
        generate() {
            axios.post('http://localhost:8000/bin_code')
                .then(res => {
                    this.codes.unshift(res.data);
                });
        },
        empty(){
            this.codes.splice(0);
        }
    },
}
</script>

<style scoped>
.jumbotron {
    max-height: 200px;
}
</style>
