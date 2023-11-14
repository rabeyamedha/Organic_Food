<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why ORGANIC FOOD?</h3>
         <p>Organi FOOD for their organic food needs because it offers a diverse range of certified organic products, ensuring consumers access wholesome, chemical-free options that prioritize both health and environmentally conscious choices. </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Our organic food-related website offers a comprehensive platform providing valuable information on the benefits 
            of organic farming,and a curated selection of organic products to support a healthy and environmentally conscious lifestyle.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Incredible variety and freshness! This organic food website transformed
             my approach to healthy living top notch quality and prompt delivery</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aurora Grace</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>A delightful find for organic enthusiasts! The website's user-friendly interface, 
            coupled with the finest organic products, has made it my go-to source for wholesome nutrition.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sebastian Wilde</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>
         Impressed by the eco-conscious choices! This website not only offers premium organic foods, making it a truly enriching experience
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Isabella Ember</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Exceptional service and quality! From farm to table, this organic food website 
            exceeds expectations. Highly recommended!Making conscious living effortlessly enjoyable.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rabeya Rahman</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>A haven for organic goodness! The website's commitment to purity
             and transparency in sourcing ensures I can trust the origins of every product I buy. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Seraphina Quinn</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>. Highly recommended!This organic food website combines a visually 
            appealing layout with a diverse selection of high-quality products."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Atticus Ivory</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>