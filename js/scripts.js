const { createApp } = Vue;

createApp({
      data() {
            return {
                  todoList: [],
                  newTodo: ''
            };
      },
      methods: {

            addTodo() {

                  axios
                        .post('./create.php', {
                              newTask: this.newTodo
                        }, {
                              headers: {
                                    'Content-Type': 'multipart/form-data'
                              }
                        })
                        .then((response) => {
                              console.log(response)
                              this.todoList = response.data.todoList
                              console.log(this.todoList)
                        });

                  this.newTodo = '';
            },

            updateTodo(index) {

                  axios
                        .post('./update.php', {
                              index: index
                        }, {
                              headers: {
                                    'Content-Type': 'multipart/form-data'
                              }
                        })
                        .then((response) => {
                              console.log(response)
                              this.todoList = response.data.todoList
                        });
            },

            deleteTodo(index) {

                  axios
                        .post('./delete.php', {
                              index: index
                        }, {
                              headers: {
                                    'Content-Type': 'multipart/form-data'
                              }
                        })
                        .then((response) => {
                              console.log(response)
                              this.todoList = response.data.todoList
                        });
            }
      },
      created() {

            axios
                  .get('./read.php')
                  .then((response) => {
                        console.log(response);
                        this.todoList = response.data;
                        console.log(this.todoList);
                  });
      }
}).mount('#app');