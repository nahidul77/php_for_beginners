<?php

$db_host = "localhost";
$db_name = "cake_auth";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT *
        FROM users
        ORDER BY created;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>My User</title>
    <meta charset="utf-8">
</head>
<body>

    <header>
        <h1>My User</h1>
    </header>

    <main>
        <?php if (empty($users)): ?>
            <p>No users found.</p>
        <?php else: ?>

            <ul>
                <?php foreach ($users as $user): ?>
                    <li>
                        <article>
                            <h2><?= $user['email']; ?></h2>
                            <p><?= $user['phone']; ?></p>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>

        <?php endif; ?>
    </main>
</body>
</html>
