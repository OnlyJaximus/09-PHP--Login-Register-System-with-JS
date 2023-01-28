<?php require "header.php"; ?>

<main>

    <?php
    if (isset($_SESSION['userId'])) {
        header("Location: mainpage.php");
    } ?>

</main>

<?php require "footer.php"; ?>