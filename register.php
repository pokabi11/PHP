<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body style="background-color: black;color:white">
    <div class="container text-primary">
        <h1>register <?php echo $_SESSION['username'];?></h1>
        <form action="registerCTRL.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input value="<?php echo isset($_SESSION["username"])?$_SESSION["username"]:""?>" type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input value="<?php echo isset($_SESSION["email"])?$_SESSION["email"]:""?>" type="text" name="email" class="form-control" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="cfpwd" class="form-control" placeholder="Confirm Password" required>
            </div>
            <?php if(isset($_SESSION["error"])):?>
            <div class="form-group">
                <p class ="text-bg-danger"><?php echo $_SESSION["error"];?></p>
            </div>
            <?php unset
                ($_SESSION["error"]);
                ($_SESSION["username"]);
                ($_SESSION["email"]);

                ?>
            <?php endif;?>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</body>
</html>
