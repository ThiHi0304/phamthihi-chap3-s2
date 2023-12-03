<?php require_once('templates/header.php'); ?>
<?php
    // YOUR CODE HERE 
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> 
        <span>
            <?php 
            if (isset($_POST['color'])){
                $color = $_POST['color'];
                echo $color;
            }
            ?>
        </span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong>
        <span>
            <?php 
            if (isset($_POST['range'])){
            $range = $_POST['range'];
            echo $range;
            }
            ?>
        </span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> 
        <span>
            <?php 
            if (isset($_POST['date'])){
                $date = $_POST['date'];
                echo $date;
                }
            ?>
        </span>
    </div>

<?php require_once('templates/footer.php');//FOOTER ?>