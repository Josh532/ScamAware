 <?php
session_start(); // MUST be first

// Redirect if not logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}

// Optional: fetch logged-in user info
$mysqli = require __DIR__ . "/data-base.php";
$sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";
$result = $mysqli->query($sql);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="combine-style.css?v=<?php echo filemtime('combine-style.css'); ?>">
</head>
    <style>
    #imageback {
        width: 100%;
    }

    .sickofscam {
        position: absolute;
        top: 250px;
        left: 100px;
        margin: 0;
        color: white;
        font-size: 2rem;
        font-weight: bold;
        text-align: left; /* makes sure text isn't centered */
    }

    /* Responsive adjustments for smaller screens */
    @media (max-width: 768px) {
        .sickofscam {
            top: 150px;    /* move up a bit */
            left: 40px;    /* closer to edge */
            font-size: 1.5rem; /* smaller text */
        }
    }

    @media (max-width: 480px) {
        .sickofscam {
            top: 100px;
            left: 20px;
            font-size: 1.2rem;
        }
    }
</style>
<body>
    <nav>
        <h1><a href="#">$cam Aware</a></h1>
        <ul>
            <li><a href="http://scamaware.site/view-reports.php">Reports</a></li>
            <li><a href="http://scamaware.site/reportascammer.html">Report</a></li>
            <li><a href="http://scamaware.site/account.php">Account</a></li>
        </ul>
    </nav>
    <header>
    <img id="imageback" src="https://images.pexels.com/photos/1647962/pexels-photo-1647962.jpeg?cs=srgb&dl=pexels-valdemaras-d-784301-1647962.jpg&fm=jpg" alt="">

       <div class="sickofscam">
        <h2>Sick of being scammed?</h2>
        <p>Try Scam aware</p>
       </div>

  <!-- <div class="support">
        <p>$cam aware nz is a non profit website, to help New Zealanders avoid being scammed. Donations are welcome thankyou
            <a href="#">Paypal</a>
        </p>
    </div>--> 
    </main>
    </header>

       
</body>
</html>
    
</body>
</html>