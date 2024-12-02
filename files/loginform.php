<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styles.css">
     <!-- google font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Ga+Maamli&family=Jaro:opsz@6..72&display=swap" rel="stylesheet">
 
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Ga+Maamli&family=Jaro:opsz@6..72&family=Lilita+One&display=swap" rel="stylesheet">
 
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Anton&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
     
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Anton&family=Courgette&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
 
     
     <!-- font awesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="container">
          
            <form  action="" method="post">
              
            <?php
            if (isset($_POST["submit"])) {
                // Fetch user inputs from the form
                $username = $_POST["username"];
                $password = $_POST["password"];
                $accounttype = $_POST["accounttype"];

                // Admin login
                if ($accounttype == "Admin") {
                 
                    $sql ="SELECT * FROM admintable WHERE username ='$username'";
                    $result = mysqli_query($conn, $sql);
                    $admin = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
                   if($admin){
                    if(password_verify($password, $admin["password"])){
                      header("location: admin.php");
                      die();
                    }
                    else{
                      echo"<div class='alert alert-danger'>Password does not Match.</div>";
  
                    }
  
                   }
                   else{
                    echo"<div class='alert alert-danger'>Username does not exist.</div>";
                   }
                }

                // Event Viewer login
                elseif ($accounttype == "Event Viewer") {
                   
                    $sql ="SELECT * FROM viewertable WHERE username ='$username'";
                    $result = mysqli_query($conn, $sql);
                    $viewer = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
                   if($viewer){
                    if(password_verify($password, $viewer["password"])){
                      header("location: viewer.php");
                      die();
                    }
                    else{
                      echo"<div class='alert alert-danger'>Password does not Match.</div>";
  
                    }
  
                   }
                   else{
                    echo"<div class='alert alert-danger'>Username does not exist.</div>";
                    echo"<div class='alert alert-danger'>Please Sign Up to view Events.</div>";
                   }
                }

                // Event Organizer login
                elseif ($accounttype == "Event Organizer") {
                   
                    $sql ="SELECT * FROM organizertable WHERE username ='$username'";
                    $result = mysqli_query($conn, $sql);
                    $organizer = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
                   if($organizer){
                    if(password_verify($password, $organizer["password"])){
                      header("location: organizer.php");
                      die();
                    }
                    else{
                      echo"<div class='alert alert-danger'>Password does not Match.</div>";
                     
  
                    }
  
                   }
                   else{
                    echo"<div class='alert alert-danger'>Username does not exist.</div>";
                   }
                }
            }
        ?>
    
                <h2>NairobiEventsClub</h2>
              
                <!-- Name -->
                 
                <button class="fb"><i class="fa-brands fa-facebook"></i>Log in with facebook</button>
                
              
    
              
               
                <input type="text" id="username" name="username"  placeholder="User Name">
    
               
                
               
                
                
                <select  name="accounttype">
                    
                         <option value="" disabled selected>Account Type</option>
                            <option value="Event Viewer">Event Viewer</option>
                            <option value="Event Organizer">Event Organizer</option>  
                            <option value="Admin">Admin</option>
                </select>

                <input type="password" id="" name="password" placeholder="Password">
                
                
    
                <!-- Submit Button -->
                <button type="submit" name="submit">SIGN IN</button>
                <p>have account? <a href="regestrationform.php">SIGN UP</a></p>
                
            </form>
        </div>

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .container{
               
                width: 100%;
                height: 100vh;
                justify-content: center;
                align-items: center;
                text-align: center;
                display: flex;
                
              
            }
            form{
               
                
                background: white;
                box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
                padding: 2vh;
               width: 27%;
               height: 100vh;
                justify-content: center;
                align-items: center;
                text-align: center;
                display: flex;
                flex-direction: column;
                
            }
            form h2{
                background: linear-gradient(to right, #1E90FF, #000000, #FF0000);
                -webkit-background-clip: text;
                color: transparent;
                font-family: "Lilita One", sans-serif;
                font-weight: 400;
                font-style: normal;
                font-size: 32px;
            }
            form .fb{
                border-radius: 0px;
                width: 90%;
                background-color: rgb(79, 79, 249);
                justify-content: center;
                align-items: center;
                text-align: center;
                display: flex;
            }
            form .fb i{
                font-size: 20px;
                margin-right: 10px;
            }
            form input{
                outline: none;
                border: none;
                padding: 9px;
                width: 70%;
                margin: 5px;
                outline: navajowhite;
                background: rgb(227, 227, 227);
                box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
                
            }
            form select{
                outline: none;
                border: none;
                padding: 9px;
                width: 70%;
                background: rgb(227, 227, 227);
                box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            }
           
            form button{
                padding: 8px;
                margin: 20px;
                width: 90%;
                border-radius: 8px;
                border: none;
                color: white;
                background-color: rgb(255, 1, 1);
            }

            @media (max-width: 900px){
              
                form{
                   
                   
                    padding: 2vh;
                   width: 100%;
                   height: 100vh;
                   
                    
                }
                form h2{
                  
                    font-size: 32px;
                }
                form .fb{
                  
                    width: 80%;
                  
                }
                form .fb i{
                    font-size: 20px;
                    margin-right: 10px;
                }
                form input{
                    
                    padding: 10px;
                    width: 70%;
                    margin: 5px;
                   
                    
                }
                form select{
                  
                    padding: 10px;
                    width: 70%;
                    
                }
               
                form button{
                    padding: 8px;
                    margin: 20px;
                    width: 80%;
                   
                }
    

            }
    
          
        </style>
    

    </div>
    

    
</body>
</html>
