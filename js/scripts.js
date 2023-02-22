const { createApp } = Vue;

createApp({
      data() {
            return {
                  apiUrl: './api.php',
                  todoList: [],
            };
      },
      methods: {

      },
      created() {
            axios
                  .get(this.apiUrl)
                  .then((response) => {
                        console.log(response);
                        this.todoList = response.data;
                        console.log(this.todoList);
                  });
      }
}).mount('#app');