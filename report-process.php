 <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (empty($_POST["scammerName"]) || empty($_POST["scamLink"]) || empty($_POST["scamType"])) {
        die("All fields are required.");
    }

    // Just require the DB connection, don't assign it
    require __DIR__ . "/data.php";

    $sql = "INSERT INTO scam_reports (scammer_username, scam_link, scam_type)
            VALUES (?, ?, ?)";

    $stmt = $mysqli->stmt_init();

    if (! $stmt->prepare($sql)) {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("sss",
        $_POST["scammerName"],
        $_POST["scamLink"],
        $_POST["scamType"]
    );

    if ($stmt->execute()) {
        // Redirect after success
        header("Location: success.html");
        exit;
    } else {
        die("Database error: " . $mysqli->error);
    }
}
