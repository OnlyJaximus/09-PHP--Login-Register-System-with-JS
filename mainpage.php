<?php require "header.php"; ?>

<main>

    <?php if (isset($_SESSION['userId'])) : ?>
        <div class="container">
            <div class="popup" id="popup">
                <img src="img/404-tick.png" alt="">
                <h2>Thank You, <strong><?php echo  $_SESSION['userUid'] ?></strong>!</h2>
                <p>Welcome to our website!</p>
                <button type="button" onclick="closePopup()">Close</button>
            </div>
        </div>
    <?php endif; ?>

</main>

<?php require "footer.php"; ?>