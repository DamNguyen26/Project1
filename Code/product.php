<?php
include 'includes/html/header.php';
require_once("includes/userLogin/connection.php");
?>

<body>
    <?php
    $sql = "SELECT id, title, note, image FROM product";
    $result = $con->query($sql);
    ?>
    <div class="w3-content w3-container w3-padding-64" id="about">
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <h3 class="w3-center"><?php echo $row['title'] ?></h3>
            <div class="w3-row">
                <div class="w3-col m6 w3-center w3-padding-large">
                    <img src='images/product/<?= $row["image"] ?>' class="w3-round w3-image w3-hover-opacity-off" alt="Catchment area" width="100%" height="100%">
                </div>
                <div class="w3-col m6 w3-padding-large">
                    <p><?php echo $row['note'] ?></p>
                </div>
            </div>
            <hr>
        <?php
        }
        ?>
        <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px"><a style="text-decoration: none" href="index.php #TheWay">Back.</a></button>
    </div>
</body>

<?php
include 'includes/html/footer.php'
?>