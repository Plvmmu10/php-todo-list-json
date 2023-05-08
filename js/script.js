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
                todoItem: this.newTodo
            }

            axios.post(this.urlAPI, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((res) => {
                todoItem = '';
            })

            console.log(data)
        }
    },
    mounted() {
        this.createList();
    }
}).mount('#app');