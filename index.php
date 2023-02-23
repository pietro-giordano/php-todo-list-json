<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP ToDo List</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
      <link rel="stylesheet" href="css/style.css">
</head>

<body>

      <div id="app" class="d-flex justify-content-center">

            <form action="" method="POST" class="box mt-3" @submit.prevent="addTodo()">
                  <h1 class="display-1 text-secondary-emphasis text-center text-uppercase">Todo list</h1>

                  <ul class="list-group">
                        <li v-for="todo in todoList" class="list-group-item list-group-item-action d-flex justify-content-between" :class="todo.completed ? 'text-decoration-line-through' : '' ">
                              {{ todo.to_do }}
                              <button class="btn btn-danger" type="button" id="delete-button">
                                    <i class="bi bi-trash-fill"></i>
                              </button>
                        </li>
                  </ul>

                  <div class="input-group mt-3">
                        <input v-model="newTodo" type="text" name="newTask" class="form-control" placeholder="Inserisci elemento...">
                        <button class="btn btn-outline-warning" type="submit" id="add-button">Inserisci</button>
                  </div>
            </form>

      </div>

      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
      <script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>