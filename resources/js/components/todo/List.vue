<template>
    <div class="d-flex justify-content-center"></div>
    <div class="row">
        <div class="col-12 input-group mb-2 text-end">
            <input
                type="text"
                class="form-control"
                placeholder="Task name."
                v-model="todo.title"
            />
            <button type="submit" @click="createTodo()" class="btn btn-primary">
                Add New Task
            </button>
        </div>
    </div>
    <div v-if="isLoading" class="d-flex justify-content-center">
        <MDBSpinner />
    </div>
    <div v-if="todos.length > 0 && !isLoading" class="row row-cols-1 row-cols-md-4 g-4">
        <div v-for="(todo, index) in todos"
        :key="index" class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ todo.title }}</h5>
                    <p class="card-text">{{ todo.created_at }}</p>
                </div>
                <div class="card-body">
                    <div class="actions justify-content-between">
                        <button
                            v-if="!todo.completed"
                            @click="updateTodo(todo.id)"
                            class="btn btn-success"
                        >
                            Mark Done
                        </button>
                        <button
                            @click="deleteTodo(todo.id)"
                            class="btn btn-danger"
                        >
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div v-else>
        <p>No Todos Found.</p>
    </div>
</template>
<script>
export default {
    name: "todos",
    data() {
        return {
            todos: [],
            todo: {
                title: "",
            },
            isLoading: false,
        };
    },
    mounted() {
        this.getTodos();
    },
    methods: {
        async getTodos() {
            this.isLoading = true;
            await this.axios
                .get("/api/todo")
                .then((response) => {
                    this.todos = response.data;
                    this.isLoading = false;
                })
                .catch((error) => {
                    console.log(error);
                    this.todos = [];
                });
        },
        async createTodo() {
            await this.axios
                .post("/api/todo", this.todo)
                .then((response) => {
                    this.$router.push({ name: "todoList" });
                    this.getTodos();
                    this.todo.title="";
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        updateTodo(id) {
            if (confirm("Mark this task done ?")) {
                this.axios
                    .patch(`/api/todo/${id}`, { completed: true })
                    .then((response) => {
                        this.getTodos();
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            }
        },
        deleteTodo(id) {
            if (confirm("Are you sure to delete this task ?")) {
                this.axios
                    .delete(`/api/todo/${id}`)
                    .then((response) => {
                        this.getTodos();
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            }
        },
    },
};
</script>
