<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
    <link rel="stylesheet" href="CSS/Bootstrap/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div>
            <nav class="navbar navbar-expand-lg p-0">
                <ul class="navbar nav">
                    <li class="navbar-item">
                        <a href="<?php echo '__DIR__'?>/../login.php" class="nav-link text-white">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo '__DIR__'?>/../" class="nav-link text-white">Add Book</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo '__DIR__'?>/../viewbook.php" class="nav-link text-white">View Books</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo '__DIR__'?>/../addcategory.php" class="nav-link text-white">Add Category</a>
                    </li>
                    <li class="navbar-item">
                        <a href="<?php echo '__DIR__'?>/../viewcategory.php" class="nav-link text-white">Categories</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link text-white">Administrator</a>
                    </li>
                    
                </ul>
                <div class="navbar-item ms-auto">
                    <a href="<?php echo '__DIR__'?>/../logout.php" class="btn btn-outline-dark  ">Logout</a>
                </div>
            </nav>
    </div>
    
</body>
</html>