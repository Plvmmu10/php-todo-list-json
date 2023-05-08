const { createApp } = Vue;

createApp({
    data() {
        return {
            title: 'Todo List',
            urlAPI: './server.php',
            todoList: [],
            newTodo: '',
        }
    },
    methods: {
        createList() {
            axios.get(this.urlAPI).then((res) => {
                this.todoList = res.data;
                console.log(this.todoList)
            })
        },
        addTodo() {
            const data = {
                todoItem: {
                    name: this.newTodo,
                    completed: false
                }
            }

            axios.post(this.urlAPI, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((res) => {
                console.log(res);
                this.todoList = res.data;

                todoItem = '';
            })
        }
    },
    mounted() {
        this.createList();
    }
}).mount('#app');