<?php
    require 'includes/common.php';
?>


<?php
    // Checking for active user session, or else goto login
    if (isset($_SESSION['email'])) 
        header('location:index.php');
?>



<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        
        <title>Sign Up</title>
    </head>
    
    
    <body>
        <?php
            include 'includes/header.php';
        ?>
        
        
        <div class="bg">
            <div class="container">
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2 col-sm-5 col-sm-offset-3">
                        <div class="panel panel-default">
                            <div class="pannel-header">
                                <center>
                                    <h2>Sign Up</h2>
                                </center>
                                <hr>
                            </div>
                            
                            <div class="panel-body">
                                <form method="POST" action="signup_script.php" autocomplete="off">
                                    <div class="form-group">
                                        <lable for="Name"><b>Name:</b></lable>
                                        <input type="text" class="form-control" placeholder="Name" name="Name" required="true" autocomplete="off">
                                    </div>
                            
                                    <div class="form-group">
                                        <lable for="email"><b>Email:</b></lable>
                                        <input type="email" class="form-control" placeholder="Enter Valid Email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title=" Email entered is invalid." autocomplete="off">
                                    </div>
                                
                                    <div class="form-group">
                                        <lable for="password"><b>Password:</b></lable>
                                        <input type="password" class="form-control" placeholder="Password (Min. 6 characters)" name="password" required="true" title="Password length mustbe greater than or equal to 6 characters.">
                                    </div>

                                    <div class="form-group">
                                        <lable for="conact"><b>Phone Number:</b></lable>
                                        <input type="number" class="form-control" placeholder="Enter Valid Phone Number (ex-8448444853)" name="contact" required="true" title="The Contact Number is invalid." autocomplete="off">
                                    </div>
                                
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <?php
            include 'includes/footer.php';
        ?>


    </body>
</html>
