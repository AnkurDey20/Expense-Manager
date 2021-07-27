<!-- Handling FORM inputs from 'change_password.php' -->
<?php
    require 'includes/common.php';
?>


<?php
// Checking for active users else goto login
    if (!isset($_SESSION['email'])) 
        header('location:index.php');
?>


<?php
    // Hashing FORM inputs
    $oldpass = md5($_POST['oldpassword']);
    $newpass = md5($_POST['newpassword']);
    $re_type_new_pass = md5($_POST['retypenewpassword']);

    // Matching the password
    if ($newpass != $re_type_new_pass) {
        echo"<script> 
            alert('Password not matched.')
        </script>";
        
        echo"<script>
            location.href='change_password.php'
        </script>";
    } 

    else {
        // Checking password length
        if (strlen($_POST['newpassword']) >= 6) {
            $user_id = $_SESSION['user_id'];
            $select_query = "SELECT * FROM users WHERE users.id='$user_id'";
            $result = mysqli_query($con, $select_query) or die(mysqli_error($con));
            $row = mysqli_fetch_array($result)or die(mysqli_error($con));
            
            // If old password matches, then updating the new password for the user
            if ($row['password'] == $oldpass) {
                $update_query = "UPDATE users SET password='$newpass' WHERE users.id='$user_id'";
                $update_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
                
                echo"<script> 
                    alert('Password Updated.')
                </script>";
                
                echo"<script>
                    location.href='home.php'
                </script>";
            } 
            
            else {
                echo"<script> 
                    alert('Wrong Old Password.')
                </script>";
                
                echo"<script>
                    location.href='change_password.php'
                </script>";
            }
        } 
        
        else {
            echo"<script> 
                alert('Password length must be greater than 6 characters.')
            </script>";
            
            echo"<script>
                location.href='change_password.php'
            </script>";
        }
    }
?>