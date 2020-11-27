
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> This system is cuurently not available so you can use this site without registeration , but you should do sigin for Future.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<!--
<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    include '_dbconnect.php';
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];

    $sql = "SELECT * FROM `user` where user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if ($numRows==1) {
        $row = mysqli_fetch_assoc($result);
            if (password_verify($pass, $row['user_password'])) {
                session_start();
                $_SESSION['loggedin'] = "true";
                $_SESSION['useremail'] = $email;
                
                header("Location: /zdiscuss/index.php");



                
            }
            else{
                echo "unable to login";
            }

        }
        
    }




?>-->