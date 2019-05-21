<?php
$conn = mysqli_connect("localhost","root","","group") or die(mysqli_error($conn));
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $adm_no = $_POST['adm_no'];
    $class = $_POST['class'];
    $passport = $_FILES['image']['name'];

    if($_FILES['image']['name']!=''){
        $path='uploads/';
        $location = $path.$passport;
        if(move_uploaded_file($_FILES['image']['tmp_name'],$location)){
          //insert into database
          $query = mysqli_query($conn,"insert into student(id, adm_no, name, class, passport) 
          values(null,'$adm_no','$name','$class','$passport')")or die(mysqli_error($conn));
          if($query){
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
        window.location.href="add_student.php";
    </script>
    <?php
    
}

}


}

}
?>











