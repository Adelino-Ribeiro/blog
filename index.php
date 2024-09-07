<?php require "includes/header.php"; ?>

<?php require "config.php"; ?>

<?php 

    $select = $conn -> query('SELECT * FROM posts JOIN users ON posts.user_id = users.id');

    $select -> execute();

    $rows = $select -> fetchAll(PDO::FETCH_OBJ);



?>
<main class="form-signin w-50 m-auto mt-2">

    <?php foreach($rows as $row): ?>

        <div class="card mt-2">
            <div class="card-header">
                <?php echo $row -> username ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row -> title ?></h5>
                <p class="card-text"><?php echo substr($row -> body, 0, 80) ?></p>
                <a href="fullPost.php?id=<?php echo $row -> id ?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    <?php endforeach; ?>

</main>

<?php require "includes/footer.php"; ?>
