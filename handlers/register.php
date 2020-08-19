<?php
    if(isset($_POST['submitregisterFormBtn'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $isSuccessfullyRegistered = $account->register($username, $email, $password);

        if($isSuccessfullyRegistered){
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php");
        }
    }
?>