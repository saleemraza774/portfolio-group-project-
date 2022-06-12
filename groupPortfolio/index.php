<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
  

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://facebook.com/fitsaleem" class="fab fa-facebook-f"></a>
      <a href="https://twitter.com/Saleemraza774" class="fab fa-twitter"></a>
      <a href="https://instagram.com/fitsaleem" class="fab fa-instagram"></a>
      <a href="https://linkedin.com/saleemraza774" class="fab fa-linkedin"></a>
      <a href="https://github.com/saleemraza774" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/saleem.jpg" alt="profile">
   
      <img src="images/samreen.jpeg" alt="profile" >
   
      <img src="images/junaid.jpeg" alt="profile">
   
    
      
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Automata Project</h3>
      <span data-aos="fade-up">computer science student's of smi university</span>
      <p data-aos="fade-up"><b>group members</b> </p>
      <p data-aos="fade-up">saleem raza(csc-20f-151)</p>
      <p data-aos="fade-up">Muhammad Junaid(csc-20f-106)</p>
      <p data-aos="fade-up">Samreen virk(csc-20f-153)</p>


      <a data-aos="fade-up" href="#about" class="btn">about us</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">membar: 1</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> saleem raza </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> sr.saleem774@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> karachi,pakistan </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +923-4733-60853 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 20 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> fresh </h3>
      </div>

      <!-- <a href="#" class="btn" data-aos="fade-up">download CV</a> -->

   </div>

   <!-- //junaid -->

   <div class="biography">

      <p data-aos="fade-up">membar: 2</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Muhammad junaid </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> mjunaid110@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> karachi,pakistan </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +923-4773-60853 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 21 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 1 years </h3>
      </div>

      <!-- <a href="#" class="btn" data-aos="fade-up">download CV</a> -->

   </div>

   <!-- samreen -->

   <div class="biography">

      <p data-aos="fade-up">membar: 3</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> samreen virk </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> samreenvrk12@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> karachi,pakistan </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +923-4673-60753 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2 years </h3>
      </div>

      <!-- <a href="#" class="btn" data-aos="fade-up">download CV</a> -->

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2020 )</span>
               <h3>web designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2021 )</span>
               <h3>web developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>graphic designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2019 - 2020 )</span>
               <h3>front-end developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2021 )</span>
               <h3>back-end developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>full-stack developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>digital marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span> our projects</span> </h1>

   <div class="box-container">

     <a href="/digitalClock/index.html" target="-blank"><div class="box" data-aos="zoom-in">
      <img src="images/img-1.jpg" alt="digital clock">
      <h3>digital clock</h3>
      <span>( made by: Saleem Raza )</span>
   </div></a> 

     <a href="/analogClock/analog.html" target="-blank"> <div class="box" data-aos="zoom-in">
      <img src="images/img-2.jpg" alt="analog clock">
      <h3>analog clock</h3>
      <span>( made by: Muhammad Junaid )</span>
   </div></a> 

     <a href="/converter/converter.html" target="-blank"> <div class="box" data-aos="zoom-in">
      <img src="images/img-3.jpg" alt="">
      <h3>converter </h3>
      <span>( made by: Samreen Malik )</span>
   </div></a>

     <a href="/food/html/index.html" target="-blank"> <div class="box" data-aos="zoom-in">
      <img src="images/img-4.jpg" alt="">
      <h3>food delevary Website</h3>
      <span>( made by: Saleem Raza )</span>
   </div></a>

    <a href="/gym/html/index.html" target="-blank"><div class="box" data-aos="zoom-in">
      <img src="images/img-5.jpg" alt="">
      <h3>gym Website front page</h3>
      <span>( made by: Muhammad Junaid )</span>
   </div></a>  

     <a href="/bootstrap/project1/index.html" target="-blank" > <div class="box" data-aos="zoom-in">
      <img src="images/img-6.jpg" alt="">
      <h3>bootstrap website</h3>
      <span>( made by: Samreen Malik )</span>
   </div>
</a>
   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact us</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+92-3473360853</p>
         <p>+92-3473360889</p>
         <p>+92-3473360889</p>

      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>sr.saleem774@gmail.com</p>
         <p>mjunaid110@gmail.com</p>
         <p>samreenMalik@gmail.com</p>

      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Smi University</p>
         <p>near-habib plaza-karachi</p>
         <p> pakistan</p>


      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>automata project</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>