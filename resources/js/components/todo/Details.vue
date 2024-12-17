<template>
    <div>
        <h1>Todo Details</h1>
        <p><strong>ID:</strong> {{ todo.id }}</p>
        <p><strong>Title:</strong> {{ todo.title }}</p>
        <p><strong>Completed:</strong> {{ todo.completed ? 'Yes' : 'No' }}</p>
        <router-link to="/todo">Back to List</router-link>
    </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            todo: {},
        };
    },
    mounted() {
        this.$axios.get(`/api/todo/${this.id}`).then((response) => {
            this.todo = response.data;
        });
    },
};
</script>
