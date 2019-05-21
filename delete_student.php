<?php
$conn =mysqli_connect("localhost","root","","group")or die(mysqli_error($conn));
$id=$_GET['id'];
//delete query
$delete = mysqli_query($conn,"delete from student where id='$id'")or die(mysqli_error($conn));
    if($delete){
        ?>
        <script>
        window.alert("success");
        window.location.href="content.php";
        </script>
        <?php
        
     }else{
        ?>
        <script>
        window.alert("failed");
        window.location.href="content.php";
        </script>
        <?php
     }
?>