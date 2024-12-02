
<?php
include 'connection.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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

     <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="container">



                
        <form action="" method="post">

                        <?php
                        if (isset($_POST["submit"])) {
                            $username = $_POST["username"];
                            $phone = $_POST["phone"];
                            $accounttype = $_POST["accounttype"];
                            $password = $_POST["password"];
                            $confirmpassword = $_POST["confirmpassword"];


                            $passwordhash = password_hash($password,PASSWORD_DEFAULT);

                            //  confirm password match
                            if ($password != $confirmpassword) {
                                echo "<div class='alert alert-danger'>Passwords do not match.</div>";
                            } else {
                                if ($accounttype == "Admin") {
                                    // Check if admin already exists
                                    $checkadmin = mysqli_query($conn, "SELECT * FROM admintable LIMIT 1");
                                    if (mysqli_num_rows($checkadmin) > 0) {
                                        // Admin already exists
                                        echo "<div class='alert alert-danger'>An admin account already exists.</div>";
                                    } else {
                                        // Insert admin data into the database
                                        $addadmin = mysqli_query($conn, "INSERT INTO admintable(username, phone, accounttype, password) VALUES ('$username', '$phone', '$accounttype', '$passwordhash')");
                                        echo "<div class='alert alert-success'>Registered Successfully as Admin.</div>";
                                    }

                                } elseif ($accounttype == "Event Organizer") {
                                    // Insert event organizer data into the database
                                    $addorganizer = mysqli_query($conn, "INSERT INTO organizertable(username, phone, accounttype, password) VALUES ('$username', '$phone', '$accounttype', '$passwordhash')");
                                    echo "<div class='alert alert-success'>Registered Successfully as Event Organizer.</div>";

                                } elseif ($accounttype == "Event Viewer") {
                                    // Insert event viewer data into the database
                                    $addviewer = mysqli_query($conn, "INSERT INTO viewertable(username, phone, accounttype, password) VALUES ('$username', '$phone', '$accounttype', '$passwordhash')");
                                    echo "<div class='alert alert-success'>Registered Successfully as Event Viewer.</div>";
                                } else {
                                    echo "<div class='alert alert-danger'>Please select a valid account type.</div>";
                                }
                            }
                        }
                        ?>

                        <h2>NairobiEventsClub</h2>
                        <p>Sign up to see events in the city.</p>

                        <!-- Login with Facebook -->
                        <button class="fb"><i class="fa-brands fa-facebook"></i>Log in with Facebook</button>

                        <!-- User Name -->
                        <input type="text" id="username" name="username" required placeholder="User Name">

                        <!-- Phone Number -->
                        <input type="tel" id="phone" name="phone" required placeholder="Phone Number">

                        <!-- Account type -->
                        <select id="accounttype" name="accounttype" required>
                            <option value="" disabled selected>Account Type</option>
                            <option value="Event Viewer">Event Viewer</option>
                            <option value="Event Organizer">Event Organizer</option>  
                            <option value="Admin">Admin</option>
                        </select>

                        <!-- Password -->
                        <input type="password" id="password" name="password" minlength="6" required placeholder="Password">

                        <!-- Confirm Password -->
                        <input type="password" id="confirmpassword" name="confirmpassword" minlength="6" required placeholder="Confirm Password">

                        <!-- Submit Button -->
                        <button type="submit" name="submit">SIGN UP</button>

                        <p>Have an account? <a href="loginform.php">SIGN IN</a></p>

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
                   
                   
                    
                   box-shadow: none;
                   padding: 0;
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
