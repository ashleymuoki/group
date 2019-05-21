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
<?php include('navbar.php')?>
<?php include('sidebar.php')?>
<div class="container">
<div class="row" style="height:100px"></div>
        <div class="row">
        <div class="col-sm-4"></div>
            <?php foreach($query as $record){?>
            <div class="col-sm-3" style="width:250px">
                <div class="card">
                    <img class="card-img-top" src="/group/uploads/<?php echo $record['passport']?>" alt="product" >
                    <div class="card-body">
                        <h4 class="card-title">Student nname: <?php echo $record['name']?><h4>
                        <p class="card-text">Adm no: <?php echo $record['adm_no']?></p>
                        <p class="card-text">Class: <?php echo $record['class']?></p>
                        
                    </div>
                    
                </div>
            </div>
            <?php } ?>
            </div>
    </div>
<?php include('footer.php')?>

