<?php
include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="viewer.css">
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

    <title>viewerprofile</title>
</head>
<body>
    
      <div class="heading">
        <div class="logo">
        <?php
                  $lookfordata = mysqli_query($conn,"SELECT * FROM viewertable ");
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
      
    </div>

  
       
          <!-- events -->
      <section class="ourevents">
            <div class="eventshed">
                <h1>Our Events</h1>
            </div>
            
            <div class="events">
                <div class="event">
                    <div class="eventimage">

                    </div>
                    <div class="eventcontent">
                        <p>Location:</p>
                        <p>Date:</p>
                        <p>Time:</p>
                      

                    </div>
                    <div class="buy">
                      <button>BUY TICKET</button>
                    </div>

                </div>

                <div class="event">
                    <div class="eventimage">

                    </div>
                    <div class="eventcontent">
                        <p>Location:</p>
                        <p>Date:</p>
                        <p>Time:</p>
                      

                    </div>
                    <div class="buy">
                      <button>BUY TICKET</button>
                    </div>

                </div>

                <div class="event">
                    <div class="eventimage">

                    </div>
                    <div class="eventcontent">
                        <p>Location:</p>
                        <p>Date:</p>
                        <p>Time:</p>
                      

                    </div>
                    <div class="buy">
                      <button>BUY TICKET</button>
                    </div>

                </div>

                <div class="event">
                    <div class="eventimage">

                    </div>
                    <div class="eventcontent">
                        <p>Location:</p>
                        <p>Date:</p>
                        <p>Time:</p>
                      

                    </div>
                    <div class="buy">
                      <button>BUY TICKET</button>
                    </div>

                </div>

                <div class="event">
                    <div class="eventimage">

                    </div>
                    <div class="eventcontent">
                        <p>Location:</p>
                        <p>Date:</p>
                        <p>Time:</p>
                      

                    </div>
                    <div class="buy">
                      <button>BUY TICKET</button>
                    </div>

                </div>

                <div class="event">
                    <div class="eventimage">

                    </div>
                    <div class="eventcontent">
                        <p>Location:</p>
                        <p>Date:</p>
                        <p>Time:</p>
                      

                    </div>
                    <div class="buy">
                      <button>BUY TICKET</button>
                    </div>

                </div>




            </div>
            <div class="buttons">
                <a href="../index.html"><button> <i class="fa-solid fa-backward"></i>previous</button></a>
              <p></p>

            </div>
        

      </section>
    <!-- end of events -->

    
    
     <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
    
   
  
    <!-- Section: Links  -->
    <section class="ft">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>NAIROBIEVENTSHUB
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Concert</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Conference</a>
            </p>
            
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Nairobi, KENYA</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@nairobieventshub.com
            </p>
         
            <p><i class="fas fa-print me-3"></i> + 254 114437661</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="">nairobieventshub.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->




    
    </div>

   

</body>
</html>
