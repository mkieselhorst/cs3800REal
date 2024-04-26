<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="navbar bg-success  d-flex flex-wrap justify-content-center py-3 mb-0 border-bottom">
        <a href="index.html" class=" navbar-brand d-flex align-items-center mb-3 mb-md-0 me-md-auto ">
            
            <span class=" navbar text-white fs-4 font-weight-bold">Wright State Students </span>
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item border bg-dark m-2 text-white">
                <a href="../index.html" class="nav-link active text-white" aria-current="page">Home</a>
            </li>
            <li class="nav-item border bg-dark m-2 text-white">
                <a href="Scripts/postPage.php" class="nav-link text-white">Posts</a>
            </li>
            
          </ul>
    </header>
    <div class="jumbotron jumbotron-fluid">
        <h1 class=" mt-0 text-center">Hello, there!</h1>
        <p class="lead text-center">This page is a simple blog for wright state students to post about their life on and off campus!</p>
        <hr class="my-4">
    <p class="text-center">This is the Posts page where you can see all posts!.</p>
    </div>
    <div class="postContainer">
        <?php
        include "display.php";


        ?>
    </div>
    <div class="container">
        <h2>Create a Post</h2>
        <form action="scripts/insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="userName">Username:</label>
                <input type="text" class="form-control" id="userName" name="userName" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" required rows="4" cols="50"></textarea>
            </div>
            
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" >
            </div>
            <button type="submit" class="btn bg-dark m-2 text-white">Post</button> 
        </form>
        
    </div>

</body>
</html>
