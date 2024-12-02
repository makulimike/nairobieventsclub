
<?php

include 'connection.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
     
     
    <title>organizerprofile</title>
</head>
<body>
    
    <div class="container">
        
        <div class="header">
            <div class="logo">
                <?php
                  $lookfordata = mysqli_query($conn,"SELECT * FROM organizertable ");
                  if(mysqli_num_rows($lookfordata)>0){
                   while($rowdata = mysqli_fetch_assoc($lookfordata)){
                    ?>
                     <marquee behavior="" direction="">welcome <?php echo ($rowdata["username"]); ?> happy to see you  back</marquee>
                    <?php

                   }
                }
                ?>
          
               
                <h2> <h2>NairobiEventsClub</h2></h2>
            </div>
          
           <span class="open"  onclick="openNav()">  <h1><i class="fa-solid fa-bars"></i></h1></span>

            <!-- end of menus for small screen -->
            
            
                
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="../index.html">Official Site</a>
                    <a href="">My Events</a>
               
                    
                   
            </div>
            
           
            

        
            
            <!-- scripts codes for closing and opening of javascript -->
            <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "300px";
            }
            
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
            </script>
            <style>
                
#mySidenav,.open{
    display: block;
}

 /* small screen nav bar */
             
                
.sidenav {
    text-align: left;
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
    
  padding: 8px 8px 8px 32px;
 
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
  margin: 30px;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
            </style>
       



        </div>
        <style>
            .header{
                width: 100%;
                padding-left: 3%;
                padding-right: 3%;
                border: 1px solid white;
                background-color: white;
                height: 12vh;
                margin-bottom: 1vh;

                justify-content: space-between;
                align-items: center;
                text-align: center;
                display: flex;
            }
         
            .header .logo h2{
                background: linear-gradient(to right, #1E90FF, #000000, #FF0000);
                -webkit-background-clip: text;
               
                color: transparent;
                font-family: "Lilita One", sans-serif;
                font-weight: 400;
                font-style: normal;
                font-size: 32px;
            }

            .header h1{
                color: black;
                background: linear-gradient(to right, #1E90FF, #000000, #FF0000);
                -webkit-background-clip: text;
                color: transparent;
                cursor: pointer;
                border: 1px solid black;
                padding: 5px;
               
                border-radius: 6px;
            }
        </style>
        
        <form id="event-form" method="POST">
            <h2>Post Your Event</h2>
            
            
            <label for="event-image">Event Image</label>
            <input type="file" id="event-image" name="event-image" required>
        
            <label for="event-name">Event Name</label>
            <input type="text" id="event-name" name="event-name" required>
        
           
        
            <label for="event-date">Event Date and Time</label>
            <input type="datetime-local" id="event-date" name="event-date" required>
        
            <label for="event-location">Event Location</label>
            <input type="text" id="event-location" name="event-location" required>
        
        
            <label for="ticket-link">External Ticket Link</label>
            <input type="url" id="ticket-link" name="ticket-link" required>
    
            <label for="event-description">Event Description</label>
            <textarea id="event-description" name="event-description" required></textarea>
        
           
        
            <button type="submit">Post Event</button>
        </form>
        
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
                flex-direction: column;
                background: linear-gradient(to right, #1E90FF, #000000);
              
            }
           
            form{
               
                background: white;
               width: 45%;
                justify-content: center;
                align-items: center;
                text-align: center;
                display: flex;
                flex-direction: column;


                background: white;
                box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
              
             
             
                
            }
            form h2{
                background: linear-gradient(to right, #1E90FF, #000000, #FF0000);
                -webkit-background-clip: text;
                color: transparent;
                font-family: "Lilita One", sans-serif;
                font-weight: 400;
                font-style: normal;
                font-size: 32px;
                font-family: "Lilita One", sans-serif;
                font-weight: 400;
                font-style: normal;
                font-size: 32px;
            }
            form input{
                padding: 6px;
                width: 90%;


                padding: 9px;
                
                margin: 5px;
                border: none;
                outline: none;
                background: rgb(227, 227, 227);
                box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;


            }
            form textarea{
               max-width: 90%;
               max-height: 15vh;

                width: 90%;


                padding: 9px;
                
                margin: 5px;
                border: none;
                outline: none;
                background: rgb(227, 227, 227);
                box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            }
            form button{
                padding: 8px;
                margin: 20px;
                width: 130px;
                border-radius: 15px;
                border: none;
                color: white;
                background-color: rgb(255, 1, 1);
            }

            @media (max-width: 800px){
                .container{
               
                    width: 100%;
                    height: auto;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                    display: flex;
                    background: linear-gradient(to right, #1E90FF, #000000);
                  
                }
                form{
                   
                    background: white;
                    
                   width: 100%;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                    display: flex;
                    flex-direction: column;
    
    
                    background: white;
                    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
                  
                 
                 
                    
                }
                form h2{
                    background: linear-gradient(to right, #1E90FF, #000000, #FF0000);
                    -webkit-background-clip: text;
                    padding-top: 2vh;
                    color: transparent;
                    font-family: "Lilita One", sans-serif;
                    font-weight: 400;
                    font-style: normal;
                    font-size: 32px;
                    font-family: "Lilita One", sans-serif;
                    font-weight: 400;
                    font-style: normal;
                    font-size: 32px;
                }
                form input{
                    padding: 6px;
                    width: 90%;
    
    
                    padding: 9px;
                    
                    margin: 5px;
                    border: none;
                    outline: none;
                    background: rgb(227, 227, 227);
                    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    
    
                }
                form textarea{
                   max-width: 90%;
                   max-height: 20vh;
    
                    width: 90%;
    
    
                    padding: 9px;
                    
                    margin: 5px;
                    border: none;
                    outline: none;
                    background: rgb(227, 227, 227);
                    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
                }
                form button{
                    padding: 8px;
                    margin: 20px;
                    width: 130px;
                    border-radius: 15px;
                    border: none;
                    color: white;
                    background-color: rgb(255, 1, 1);
                }
        
            }
    
          
        </style>
    
    </div>
   

</body>
</html>
