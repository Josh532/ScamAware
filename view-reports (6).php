 <?php

session_start(); // Start or resume the session
require __DIR__ . "/data.php"; // Include your database connection

$sql = "SELECT scammer_username, scam_link, scam_type, reported_at FROM scam_reports ORDER BY reported_at DESC";
$result = $mysqli->query($sql);
if (!$result) {
    die("Database query failed: " . $mysqli->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scam Reports</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        body { 
            font-family: Arial, sans-serif; 
            margin: 20px; 
            background-image: url("backgroundimg.jpg");
            background:cover;
            background-color: black;
        }
        h1 { margin-bottom: 10px; }
        .report-list {
            display: grid;
            gap: 15px;
            margin-top: 20px;
        }
        .report-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            opacity: 0.8;
        }
        .report-field {
            margin: 5px 0;
        }
        .report-field strong {
            display: inline-block;
            width: 140px;
            color: #333;
        }
        .report-link a {
            color: #0066cc;
            text-decoration: none;
        }
        .report-link a:hover {
            text-decoration: underline;
        }
        .center{
            text-align: center;
            color:white;
        }
    </style>
</head>
<link rel="stylesheet" href="combine-style.css?v=?php echo filemtime('combine-style.css'); ?>">
<body>
    <div class="center">
        <h1>All Scam Reports</h1>
        <p>For legal reasons, currerntly this is dummy data</p>
       <input type="text" name="text" id="text" placeholder="I don't work yet, try cntrl f for now :D">
        <div class="links">
            <a href="home.php">Home</a>
        </div>
    </div>
    <div class="report-list">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="report-card">
                <div class="report-field"><strong>Scammer Username:</strong> <?php echo htmlspecialchars($row['scammer_username']); ?></div>
                <div class="report-field report-link"><strong>Scam Link:</strong> <a href="<?php echo htmlspecialchars($row['scam_link']); ?>" target="_blank"><?php echo htmlspecialchars($row['scam_link']); ?></a></div>
                <div class="report-field"><strong>Type of Scam:</strong> <?php echo htmlspecialchars($row['scam_type']); ?></div>
                <div class="report-field"><strong>Reported At:</strong> <?php echo htmlspecialchars($row['reported_at']); ?></div>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>