<?php

session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Effective To-do List</title>

    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
  <h1 class="hello">Hello

<?php 

echo $_SESSION["user"]['username'].'  !'; 

?>

</h1>
    <header>
      <h1>Effective To-do List</h1>
      <form id="new-task-form">
        <input
          type="text"
          name="new-task-input"
          id="new-task-input"
          placeholder="Write your tasks here."
        />
        <input type="submit" id="new-task-submit" value="Add task" />
      </form>
    </header>
    <main>
      <section class="task-list">
        <h2>Tasks</h2>

        <div id="tasks">
          <!-- 
            reference div for adding div for new tasks later on using JavaScript
            <div class="task">
                    <div class="content">
                        <input 
                            type="text" 
                            class="text" 
                            value="A new task"
                            readonly>
                    </div>
                    <div class="actions">
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </div>
                </div> -->
        </div>
      </section>
    </main>
    <footer>
      <a href="logout.php">Log Out </a>
    </footer>

    <script src="main.js"></script>
  </body>
</html>
