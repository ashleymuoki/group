<?php
  $id=$_GET['id'];
  $conn=mysqli_connect("localhost", "root", "", "group")or die(mysqli_error($conn));
  $query=mysqli_query($conn, "select * from student where id='$id'")or die(mysqli_error($conn));
  foreach($query as $record){
      $name=$record['name'];
      $adm_no=$record['adm_no'];
      $class=$record['class'];
      $passport=$record['passport'];

  }
?>
<?php include('sidebar.php')?>
<?php include('navbar.php')?>
<div class="content">
            <div class="container">
            <div class="row" style="height:100px"></div>
                <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form name="product-form" action="" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Upload photo</label>
                                                <input type="file" name="image"class="form-control" value="<?php echo$passport;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Admission number</label>
                                                <input type="integer" class="form-control"  name="adm_no" value="<?php echo$adm_no;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Student name</label>
                                                <input type="text" class="form-control"  name="name" value="<?php echo$name;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Class</label>
                                                <input type="text" class="form-control"  name="class" value="<?php echo$class;?>">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <input type="submit" name="submit" value="update"class="btn btn-info btn-fill pull-right" >
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

<?php include('footer.php')?>
<?php
if(isset($_POST['submit'])){
    $upname=$_POST['name'];
    $upclass=$_POST['class'];
    $uppassport=$_POST['image'];
    $upadm_no=$_POST['adm_no'];
    $update=mysqli_query($conn,"update student set name='$upname',class='$upclass', passport='$uppassport',adm_no='$upadm_no' 
    where id='$id' ")or die(mysqli_error($conn));
     if($update){
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
        window.location.href="update_student.php";
        </script>
        <?php
     }

}



?>
