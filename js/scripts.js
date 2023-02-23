const { createApp } = Vue;

createApp({
      data() {
            return {
                  readUrl: './read.php',
                  createUrl: './create.php',
                  todoList: [],
                  newTodo: ''
            };
      },
      methods: {

            addTodo() {

                  axios
                        .post(this.createUrl, {
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
            }
      },
      created() {

            axios
                  .get(this.readUrl)
                  .then((response) => {
                        console.log(response);
                        this.todoList = response.data;
                        console.log(this.todoList);
                  });
      }
}).mount('#app');