<?php
    if(isset($_POST['submitLoginFormBtn'])){
        $loginEmail = $_POST['loginEmail'];
        $loginPassword = $_POST['loginPassword'];

        $isgenuine = $account->login($loginEmail, $loginPassword);

        if($isgenuine){
            $output = mysqli_query($con, "SELECT username FROM register WHERE email='$loginEmail'");
            // echo 'yes';
            $_SESSION["userLoggedIn"] = $output->fetch_object()->username;
            header("Location: index.php");
        }

    }
?>