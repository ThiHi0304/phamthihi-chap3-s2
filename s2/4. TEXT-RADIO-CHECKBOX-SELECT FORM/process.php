<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
  
    ?>
        <tr>
            <td><?php if (isset($_POST["name"])) {
                echo $_POST["name"];}?> 
            </td>
            <td><?php if (isset($_POST['email'])){
                echo $_POST['email'];}
            ?></td>
            <td><?php if (isset($_POST['password'])){
                echo $_POST['password'];}
             ?></td>
            <td><?php if (isset($_POST['number'])){
                echo $_POST['number'];} 
            ?></td>
            <td><?php if (isset($_POST['password'])){
                echo $_POST['password'];
            } ?></td>
            <td><?php if (isset($_POST['province'])){
                echo $_POST['province'];
            } ?></td>
            <td>
                <?php 
                    $subjects = $_POST['subject'];
                    foreach ($subjects as $subject) : 
                        echo $subject."|"; 
                        endforeach;
                 ?>
            </td>
            <td><?php 
                    if (isset($_POST['gender'])){
                        echo $_POST['gender'];}
                ?>
             </td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>