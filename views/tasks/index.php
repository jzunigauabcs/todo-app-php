<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TODO App</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <main>
            <header>
                <h1>TODO App</h1>
            </header>
            <div class="todo">
                <div class="todo-form">
                    <form action="?controller=task&action=create" method="POST">
                        <input type="text" class="todo-input" placeholder="Nueva tarea" name="task">
                    <button id="btnAdd" class="btn btn-add">+ Nueva Tarea</button>
                    </form>
                </div>
                <ul class="todo-list">
                    <?php 
                    foreach($tasks as $task): ?>
                    <li><?php echo $task['task']; ?><a href="?controller=task&action=delete&task=<?php echo $task['id'];?>"></a></li>
                    <?php 
                    endforeach;?>
                </ul>
            </div>
        </main>
    </body>
</html>
