<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP ToDo List</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
</head>

<body>

      <div id="app" class="d-flex justify-content-center">

            <div class="box">
                  <h1 class="text-white">Todo list</h1>

                  <ul class="list-group">
                        <li v-for="todo in todoList" class="list-group-item">
                              {{ todo.to_do }}
                        </li>
                  </ul>
            </div>

      </div>

      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
      <script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>