<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <?php 
    include_once __DIR__."/Partials/navigation.php"; 
?>

</head>
<body>
    <section class="justify-content-center mt-4" style="margin-left: 30%;">
    <div class="container d-md-flex justify-content-between text-algin-center" style="display: block;">
        <div class="d-md-flex justify-content-between m-5 p-5 " style="background-color: white; border-radius: 20px;">
        <form>
            <h1> login form</h1>
        <div class="form-group mt-3">
                <label for="emali">Email:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group mt-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mt-3">
                <label for="booktitle"><input type="checkbox">Remember me</label>
                <a href="#" style="text-decoration:none;">Forgot Password?</a>
            </div >
            <input type="submit" value="login" class="btn btn-secondary mt-3" style="background-color: green;">
        </form>
    </div>
    </div>
    </section>
</body>
</html>

