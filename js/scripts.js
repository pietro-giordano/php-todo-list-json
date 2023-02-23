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

                  if (this.todoList[index].completed == true) {
                        this.todoList[index].completed = false
                  } else {
                        this.todoList[index].completed = true
                  }
            },

            deleteTodo(index) {

                  this.todoList.splice(index, 1);

                  axios
                        .post('./delete.php', {
                              newTodolist: this.todoList
                        }, {
                              headers: {
                                    'Content-Type': 'multipart/form-data'
                              }
                        })
                        .then((response) => {
                              console.log(response)
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