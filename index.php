<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP ToDo List JSON</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div id="app">

            <div class="container">
                <div class="row text-center">
                    <div class="col fw-bold my-5 my-text">
                        TODO LIST
                    </div>
                </div>
            
                <div class="row">
                    <div class="col">
                        <div class="list-cnt py-4">
                            <ul class="list">
                                <li v-for="(todo, index) in todos" class="list-item">
                                    <span :class="{ done: todo.done }">{{ todo.taskName }}</span>
                                </li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mx-3">
                            <form action="" method="POST" class="d-flex my-4 justify-content-center" @submit.prevent="addTask()">
                                <div>
                                    <label for="newTask"></label>
                                    <input v-model="newTask.taskName" class="my-input" type="text" name="task" id="newTask" placeholder="Inserisci un nuovo task..." required>
                                </div>
                                <button type="submit" class="my-btn">
                                    Aggiungi
                                </button>
                            </form>
                    </div>
                </div>
            </div>
            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script type="text/javascript" src="scripts.js"></script>
    </body>
</html>