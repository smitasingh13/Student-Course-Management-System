<?php
session_start();
error_reporting(0);
include('includes/config.php');?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Course Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="login-bg-color bg-black-300">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>Student Course Management System</h4>
                                </div>
                            </div>
                            <div class="panel-body p-20">

                           

                                <form action="result.php" method="post">
                                	<div class="form-group">
                                		<label for="rollid">Enter Your Exam Roll Number</label>
                                        <input type="text" class="form-control" id="rollid" placeholder="Enter Your Roll Number" autocomplete="off" name="rollid">
                                	</div>
                               <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Class</label>
 <select name="class" class="form-control" id="default" required="required">
<option value="">Select Course Enrolled</option>
<?php $sql = "SELECT * from tblclasses";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->Section); ?>&nbsp;-<?php echo htmlentities($result->ClassNameNumeric); ?></option>
<?php }} ?>
 </select>
</div>

    
                                    <div class="form-group mt-20">
                                        <div class="">
                                      
                                            <button type="submit" class="btn btn-success btn-labeled pull-right">Search<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                       <div class="col-sm-6">
                                                               <a href="index.php">Back to Home</a>
                                                            </div>
                                </form>

                                <hr>

                            </div>
                        </div>
                        
                    </div>
                   
                </div>
              
            </div>
          

        </div>
       
    </body>
</html>
