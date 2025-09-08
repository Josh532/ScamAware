 <?php 
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/data-base.php";

    $sql = sprintf("SELECT * FROM user 
            WHERE email = '%s'",
            $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {
            session_start();
            $_SESSION["user_id"] = $user["id"];

            header("Location: home.php"); // corrected

            exit;
        }
    }

    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="combine-style.css?v=?php echo filemtime('combine-style.css'); ?>">
</head>
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
<body>
    <div class="container">
    <h1>Login</h1>
    <?php if ($is_invalid): ?>
        <em>Invalid Login</em>
    <?php endif; ?>

    <form method="post">
        <div>
        <input type="email" name="email" id="email" placeholder="email" 
        value="<?= htmlspecialchars($_POST["email"] ?? " " )?>">
        </div>

           <div>
        <input type="password" name="password" id="password" placeholder="password">
</div>
<div class="links">
<div><a href="signup.php">Sign up</a></div>
</div>
        <div><button>Login</button></div>
    </form>
    </div>
</body>
</html>