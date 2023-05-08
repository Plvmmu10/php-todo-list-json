const { createApp } = Vue;

createApp({
    data() {
        return {
            title: 'Todo List',
            urlAPI: './server.php',
            todoList: []
        }
    },
    methods: {
        createList() {
            axios.get(this.urlAPI).then((res) => {
                this.todoList = res.data;
                console.log(todoList);
            })
        }
    },
    mounted() {
        this.createList();
    }
}).mount('#app');