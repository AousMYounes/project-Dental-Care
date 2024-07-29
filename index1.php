

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment list</title>
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
             <a class="nav-link" href="index.php#home">Home</a>
             <a class="nav-link" href="index.php#about">About</a>
             <a class="nav-link" href="index.php#services">Services</a>
             <a class="nav-link" href="index.php#reviews">Reviews</a>
             <a class="nav-link" href="index.php#contact">Contact Us</a>
            </nav>
        </div>
      
             <a href="#contact" class="link-btn">make appointment</a>
        <div id="menu-btn" class="fas fa-bars"></div>
    </div>
</header>
<section></section>
<h1 class="heading">appointment list</h1>
<table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
        <?php
         include('connection.php');
         try{
    $sql = "SELECT * FROM contact_form ORDER BY date";   
    $result = $conn->query($sql);
    if($result->rowCount() > 0){
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['telephone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        }
        // Free result set
        unset($result);
        } else{
        echo "No records matching your query were found.";
        }
        } catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
// Close connection
        ?>
        </tbody>
        
   </table>


   <?php


// $params=array(
// 'to' => '',
// 'body' => ''
// );
// $curl = curl_init();
// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://api.alvochat.com/instance1/messages/chat",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_SSL_VERIFYHOST => 0,
//   CURLOPT_SSL_VERIFYPEER => 0,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => http_build_query($params),
//   CURLOPT_HTTPHEADER => array(
//     "content-type: application/x-www-form-urlencoded"
//   ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }

?>





















<section></section>
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