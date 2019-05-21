<?php
$conn = mysqli_connect("localhost","root","","group") or die(mysqli_error($conn));
$query=mysqli_query($conn , "select * from student")or die(mysqli_error($conn));

?>



<html>
<head>
<title>School</title>
<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
<link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">


</head>
<div class="row" style="height:100px" ></div>
<div class="row">
    <div class="col-md-3"></div>                                                                                                                                                                                                                        
    <div class="col-sm-9">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                
                                                <th>Passport</th>
                                                <th>admission number</th>
                                                <th>name</th>
                                                <th>class</th>
                                                
                                                <th>action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($query as $record){?>

                                        
                                            <tr>
                                                <td><img src="uploads/<?php echo$record ['passport']?>" style="width:100px;height:50px"></td>
                                                <td><?php echo$record['adm_no']?></td>
                                                <td><?php echo$record['name']?></td>
                                                <td><?php echo$record['class']?></td>
                                                
                                                <td>
                                                <a href="view_student.php?id=<?php echo$record['id']?>" class="btn btn-primary">view</a>
                                                <a href="update_student.php?id=<?php echo$record['id']?>" class="btn btn-success">update</a>
                                                <a href="delete_student.php?id=<?php echo$record['id']?>" class="btn btn-danger">delete</a>
                                                </td>
                                                
                                            </tr>
                                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        </div>

</html>