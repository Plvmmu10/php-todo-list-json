<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>PHP ToDo List JSON</title>
</head>

<body>
    <div id="app">
        <div class="container my-5">
            <div class="text-center p-2">
                <h1>{{title}}</h1>
            </div>


            <div class="row py-5">
                <div class="col-6">
                    <h3>Aggiungi una cosa da fare</h3>
                    <input type="text" class="me-4" v-model="newTodo">
                    <button class="btn btn-warning" @click="addTodo">Invia</button>
                </div>

                <div class="col-6 d-flex flex-column align-items-center">
                    <h3>La tua lista:</h3>
                    <ul class="list-group">
                        <li v-for="(item, index) in todoList" :key="index"
                            class="list-group-item bg-transparent text-white border-0 fw-bold">

                            <span class="me-3">{{item.name}}</span>

                            <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <script src="./js/script.js"></script>
</body>

</html>