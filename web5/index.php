<?php

session_start();

if (isset($_GET['reset'])) {
    session_destroy();
    header('Location: index.php');
} else {
    $visits = $_SESSION['visits'] ?? 1;
    if ($visits >= 5 && $visits <= 9) {
        echo "Thank you for visiting the page a lot.</br>";
    } else if ($visits >= 10) {
        header('Location: congratulations.php');
    }
    $_SESSION['visits'] = $visits + 1;
}

?>

<h1>Hello</h1>
<p>You have visited this page <?= $visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>
