 <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="combine-style.css?v=?php echo filemtime('combine-style.css'); ?>">



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
<style>
     body{
         background-image: url("backgroundimg.jpg");
        background:cover;
        overflow-y: hidden;
     }

     html, body {
  margin: 0;
  padding: 0;
  height: 100%;
}
</style>
</head>
<body>
    <div class="container">
        <div class="intercontainer">
    <h1>Signup</h1>
    <form action="process-signup.php" method="post" novalidate>
        <div>
            <input type="text" id="name" name="name" placeholder="username" >
        </div>

        <div>
            <input type="email" id="email" name="email" placeholder="email">
        </div>

        <div>
            <input type="password" id="password" name="password" placeholder="password">
        </div>

        <div>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="confirm password">
        </div>
        
        <div class="links">
        <div><a href="https://www.scamaware.site/login.php">Login</a></div>
        </div>

        <button>Sign up</button>
        </div>
    </form>
    </div>
</body>
</html