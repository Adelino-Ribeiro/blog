<?php require "includes/header.php"; ?>

<?php require "config.php"; ?>


<?php

  if (isset($_POST['submit'])) {

    if (empty($_POST['title']) or  empty($_POST['body'])) {
      
      echo 'some input are empty <br>';

    } else {

      $title = $_POST['title'];
      $body = $_POST['body'];
      $user_id = $_SESSION['id'];

      $insert = $conn -> prepare("INSERT INTO posts (user_id, title, body) VALUES (:user_id, :title, :body)");

      $insert -> execute([
        ':user_id' => $user_id,
        ':title' => $title,
        ':body' => $body,
      ]);

      header('location: index.php');
      
    }

  }

?>


<main class="form-signin w-25 m-auto">
  <form method="post" action="create.php">
    <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mt-5 fw-normal text-center">Create post</h1>

    <div class="form-floating">
      <input name="title" type="text" class="form-control" id="floatingInput" placeholder="title">
      <label for="floatingInput">Title</label>
    </div>

    <div class="form-floating mt-4">
      <textarea class="form-control" name="body" id="body" rows="9" placeholder="body"></textarea>
      <label for="floating"></label>
    </div>

    <button name="submit" class="w-00 btn btn-lg btn-primary mt-5" type="submit">Create post</button>
    
  
</form>
</main>


<?php require "includes/footer.php"; ?>
