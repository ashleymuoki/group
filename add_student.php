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
                                <form name="product-form" action="process_add_student.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Upload photo</label>
                                                <input type="file" name="image"class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Admission number</label>
                                                <input type="integer" class="form-control"  name="adm_no">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Student name</label>
                                                <input type="text" class="form-control"  name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Class</label>
                                                <input type="text" class="form-control"  name="class">
                                            </div>
                                        </div>
                                        
                                        
                                        
                                    </div>

        

                                    <input type="submit" name="submit" value="add"class="btn btn-info btn-fill pull-right" >
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

<?php include('footer.php')?>
