<?php
include('connection.php');
$conn=mysqli_connect('localhost','root','','contact_db') or die('connection failed');
if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn,$_POST['name']);
   $telephone = mysqli_real_escape_string($conn,$_POST['telephone']); 
   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $age= $_POST['number'];
   $date= $_POST['date'];

   $insert=mysqli_query($conn, "INSERT INTO `contact_form`(name,telephone,email,age,date)VALUES('$name','$telephone','$email','$age','$date')") or die('query failed');

   if($insert){
    $message[]='appointment made is successful!';
   }else{
    $message[]='appointment made is failed!!!?';
   }
}
// ////////////////////////////////////////////////////////////
// $params=array(
//     'to' => '$telephone',
//     'body' => ''
//     );
//     $curl = curl_init();
//     curl_setopt_array($curl, array(
//       CURLOPT_URL => "https://api.alvochat.com/instance1/messages/chat",
//       CURLOPT_RETURNTRANSFER => true,
//       CURLOPT_ENCODING => "",
//       CURLOPT_MAXREDIRS => 10,
//       CURLOPT_TIMEOUT => 30,
//       CURLOPT_SSL_VERIFYHOST => 0,
//       CURLOPT_SSL_VERIFYPEER => 0,
//       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//       CURLOPT_CUSTOMREQUEST => "POST",
//       CURLOPT_POSTFIELDS => http_build_query($params),
//       CURLOPT_HTTPHEADER => array(
//         "content-type: application/x-www-form-urlencoded"
//       ),
//     ));
    
//     $response = curl_exec($curl);
//     $err = curl_error($curl);
    
//     curl_close($curl);
    
//     if ($err) {
//       echo "cURL Error #:" . $err;
//     } else {
//       echo $response;
//     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Care</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header fixed-top ">
    <div class="container ">
         <div class="row  ">
             <a href="#home" class="logo">Dental <span>Care</span></a>
             <nav class="nav1">
             <a class="nav-link" href="#home">Home</a>
             <a class="nav-link" href="#about">About</a>
             <a class="nav-link" href="#services">Services</a>
             <a class="nav-link" href="#reviews">Reviews</a>
             <a class="nav-link" href="#contact">Contact Us</a>
            </nav>
        </div>
      
             <a href="#contact" class="link-btn">make appointment</a>
        <div id="menu-btn" class="fas fa-bars"></div>
    </div>
</header>
<!-- //header -->
<section class="home" id="home">
<div class="container">
    <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
           <h3 class="hh">let brighten your smile</h3>
           <p class="hh">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero quaerat corrupti harum reiciendis alias?</p>
           <a href="#contact" class="link-btn b1 hh1">make appointment</a>
         </div>
    </div>
</div>

</section>
<section></section>
<section class="s1"></section>
<section class="s1"></section>
<section class="s1"></section>
<!-- //section -->
<section class="about" id="about">
     <div class="container1">
        <div class="row1">
             <div class="col-md-6 image">
                 <img src="images/Choosing-a-dentist3.jpeg" class="w-100 mb-3 mb-md-0" alt="">
             </div>
             <div class="col-md-6 content">
                 <span>about us</span>
                 <h3>True Healthcare For Your Family</h3>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium ex a, doloribus dolor magnam repellat. Aut repellat recusandae distinctio tempore ipsam molestiae quo beatae sed qui, debitis accusantium magni? Nulla!</p>
                 <a href="#contact" class="link-btn">make appointment</a>
             </div>
        </div>
     </div>

</section>
<!-- //section -->
<section class="services" id="services">
    <h1 class="heading">our services</h1>   
    <div class="box-container container">
       <div class="box">
           <img src="images/11111.png" width="100" height="100" alt="">
           <h3>Caries Treatment</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia molestias quos nisi, voluptatum ex aperiam esse vero</p>
       </div>
       <div class="box">
           <img src="images/Cosmetic Specialist.png" width="100" height="100" alt="">
           <h3>Cosmetic Specialist</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia molestias quos nisi, voluptatum ex aperiam esse vero</p>
       </div>
       <div class="box">
           <img src="images/oral.png" width="100" height="100" alt="">
           <h3>Oral Hygiene Experts</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia molestias quos nisi, voluptatum ex aperiam esse vero</p>
       </div>
       <div class="box">
           <img src="images/root.png" width="100" height="100" alt="">
           <h3>Root Canal Specialist</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia molestias quos nisi, voluptatum ex aperiam esse vero</p>
       </div>
       <div class="box">
           <img src="images/live.png" width="100" height="100" alt="">
           <h3>Live Dental Advisory</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia molestias quos nisi, voluptatum ex aperiam esse vero</p>
       </div>
       <div class="box">
           <img src="images/cravity.png" width="100" height="100" alt="">
           <h3>Cavity Inspection</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia molestias quos nisi, voluptatum ex aperiam esse vero</p>
       </div>
       <div class="box">
           <img src="images/Specialist123.webp" width="100" height="100" alt="" class="oo">
           <h3>Orthodontics</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia molestias quos nisi, voluptatum ex aperiam esse vero</p>
       </div>
       <div class="box">
           <img src="images/Jaw and gum surgery.png" width="100" height="100" alt="">
           <h3>Jaw & Gum Surgery</h3>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia molestias quos nisi, voluptatum ex aperiam esse vero</p>
       </div>
    </div>
</section>
<!-- //section -->
<section class="process">
    <h1 class="heading">work process</h1>
    <div class="box-container container">
        <div class="box">
           <img src="images/dentist1.webp" width="400" height="350" alt="">
           <h3>Cosmetic Dentistry</h3>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, tempore?</p> 
        </div>
        <div class="box">
           <img src="images/dentist in jamaica.jpg" width="400" height="350" alt="">
           <h3>Pediatric Dentistry</h3>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, tempore?</p> 
        </div>
        <div class="box">
           <img src="images/shutterstock6.jpg" width="400" height="350" alt="">
           <h3>Dental Implants</h3>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, tempore?</p> 
        </div>
    </div>
</section>
<!-- //section -->
<section class="reviews" id="reviews">
    <h1 class="heading">Satisfied Clients</h1>
     <div class="box-container container">
         <div class="box">
            <img src="images/aous1.jpg" width="100" height="100" alt="">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptates eum quos possimus quis, temporibus accusamus delectus beatae dolorum animi!</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Eng.Aous Younes</h3>
             <span>Satisfied Client</span>
         </div>
         <div class="box">
            <img src="images/lala.jpg" width="100" height="100" alt="">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptates eum quos possimus quis, temporibus accusamus delectus beatae dolorum animi!</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Lamitta Odae Zoghby</h3>
             <span>Satisfied Client Kids</span>
         </div>
         <div class="box">
            <img src="images/aous2.jpg" width="100" height="100" alt="">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptates eum quos possimus quis, temporibus accusamus delectus beatae dolorum animi!</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Aous Mohammad Younes</h3>
             <span>Satisfied Client</span>
         </div>
     </div>
</section>
<!-- //section -->
<section class="contact" id="contact">
   <h1 class="heading">make appointment</h1> 
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<p class="message">'.$message.'</p>';
         }
      }
   ?>
     <span>Your Full-Name:</span>
     <input type="text" name="name" placeholder="Enter Your Name" class="box" required/>
     <span>Your Whatsapp:</span>
     <input type="tel" name="telephone" placeholder="090 000 0000"  maxlength="12"  class="box" required/>  
     <span>Your E-Mail:</span>
     <input type="email" name="email" placeholder="Enter Your Email" class="box" required/>
     <span>Your Age:</span>
     <input type="number" name="number" placeholder="Enter Your Number" class="box" required/>
     <span>Appointment Date:</span>
     <input type="datetime-local" name="date" class="box">
     <input type="submit" name="submit" value="make appointment" class="link-btn" required/>
     <input type="submit" name="submit" value="Appointment list " class="b3" id="button_list" required/>
   </form>
</section>
<!-- //section -->
<section class="footer">
    <div class="box-container container">
         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>phone number</h3>
            <p>+963 985 517 031</p>
         </div>
         <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>Al-Ghadeer,Tartous, Syria</p>
         </div>
         <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hours</h3>
            <p>9:00 Am to 9:00 Pm</p>
         </div>
         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email address</h3>
            <p>aousyounes78@gmail.com</p>
         </div>
    </div>
    <div class="credit">&copy; Copyright <?php echo date('Y');?> By <span>Eng.Aous Younes</span></div>
</section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
