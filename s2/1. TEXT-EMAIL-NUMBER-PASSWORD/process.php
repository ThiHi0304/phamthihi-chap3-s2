<?php require_once('templates/header.php')// HEADER  ?>
<ul class="list-group">
    <li class="list-group-item">
        <?php if (isset($_POST["name"])) {
        echo $_POST["name"];}
        ?>
    </li>
    <li class="list-group-item">
        <?php 
        if (isset($_POST["email"])) {
            echo $_POST["email"];}
        ?>
    </li>
    <li class="list-group-item">
        <?php 
            if (isset($_POST["number"])){
                echo $_POST["number"];
            }
        ?>
    </li>
    <li class="list-group-item">
        <?php 
            if (isset($_POST["password"])){
            echo $_POST["password"];
            }
        ?>
    </li>
    <li class="list-group-item">
        <?php 
            if (isset($_POST["message"])){
                echo $_POST["message"];
            }
        ?>
    </li>
</ul>
<?php require_once('templates/footer.php')// FOOTER ?>