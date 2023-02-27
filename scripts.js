const { createApp } = Vue;

createApp( {
    data() {
        return {
            todos: [],
            newTask: {
                taskName:'',
                done: false
            }
        }
    },
    methods: {
        addTask() {
            axios 
                .post('./create.php', {
                    task: this.newTask
                }, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then((response) => {
                    console.log(response);
                    this.todos = response.data.todos;
                    this.newTask.taskName = '';
                });
        }
    },
    created() {
        axios
         .get('./api.php')
         .then((response) => {
            this.todos = response.data
            console.log(this.todos);
         });
    }    
}).mount('#app');