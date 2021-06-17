<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alice</title>
  <!-- Links -->
  <!-------------------- Fancybox ---------------------->
  <link rel="stylesheet" href="/assects/fancybox-master/dist/jquery.fancybox.css">

  <!-- Social media -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- Fonts -->
  <link rel="stylesheet" href="/assects/fonts/font-awesome.min.css">
  <!-- font 1 'Poppins', sans-serif -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <!----font 2  'Montserrat', sans-serif-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="style.css">  
</head>

<body>

<?php

$sucess=false;
$fail=false;
include 'db.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
  $name= $_POST['name'];
  $email= $_POST['email'];
  $subject= $_POST['subject'];
  $message= $_POST['message'];

  $query= "INSERT INTO `form` (`sno`, `name`, `email`, `subject`, `message`, `time`) VALUES ('', '$name', '$email', '$subject', '$message', current_timestamp());";
$result = mysqli_query($conn,$query);
if($result)
{
  echo 'sucess'; 
  $sucess=true;
   
}
else
{
  echo 'fail';
    $fail=true;
   
} //result if else closed



}

?>

  <div class="menu">

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand"  href="#"><img src="assects/img/animal-2028258_640.png" alt="Logo" width="60px"
              height="50px"></a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">Screenshots</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Downloads</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <!-----menu end-->
  <div class="section1">
    <table style="width: 100%;height: 100%;">
      <tr>
        <td style="width:60%;height:100%;">
          <div class="data" style="margin-left:100px;">
            <h1 style="color: white;">No Complexity,<br>Easy Integrate<br></h1>
            <p style="display: block;color: white;"><b>Quality control of your data including read
                length distribution and uniformity assessment in a few clicks
                and choose your favorite technology.</b></p>
            <br>
            <a class="btn btn-primary"
              style="border-radius: 20px;width:200px;background-color: #25c6fd;border-color:#25c6fd;" href="#"
              role="button">Download Now</a>

          </div>

        </td>
        <td style="width: 40%;height:100%;text-align: right;">
          <img src="assects/img/iphone_img.jpg" style="margin-top:140px;" width="260px" height="360px"
            alt="iphone image">
        </td>
      </tr>

    </table>
    <!----table close-->
  </div>
  <!-----section1 close-->
  <!---------------------section 2 -------->
  <div class="section2">
    <div class="data"
      style="height:300px;width:100%;text-align: center; display: flex;justify-content: center;align-items: center;">
      <p style="font-size: x-large;">Dummy is a clean app landing page ideal for promoting your Android
        apps, as well as web services and software. The features and sections let
        you present the App.
      </p>
    </div>
    <!-------data close-->
    <div class="container-fluid" style="text-align: center; color: #fff; display: flex;justify-content:space-around;">
      <!-- ITEMS -->
      <div class="items" style="background-color:#0da3fa;">
        <p style="font-size: x-large;margin-top:30%;">Data in cloud</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
      </div>
      <div class="items" style="background-color: #0f3460;">
        <p style="font-size: x-large;margin-top:30%;">Data in cloud</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
      </div>
      <div class="items" style="background-color:#2ba46e;">
        <p style="font-size: x-large;margin-top:30%;">Data in cloud</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
      </div>
      <div class="items" style="background-color:#f54391;">
        <p style="font-size: x-large;margin-top:30%;">Data in cloud</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
      </div>
    </div>
    <!-- ITEMS CLOSED -->
  </div>
  <br>
  <!----section2 close-->
  <!-- Section 3 -->
  <div class="section3">
    <table style="width: 100%;height: 500px;">
      <tr>
        <td style="width:50%;height:100%;">
          <div class="data" style="margin-left:100px;">
            <h1>Simplest way to build tools.<br></h1>
            <p style="display: block;"><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore.
                <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                labore.</b></p>
            <br>
            <a class="btn btn-primary"
              style="border-radius: 20px;width:200px;background-color: #25c6fd;border-color:#25c6fd;" href="#"
              role="button">Download Now</a>

          </div>
          <!----data close-->

        </td>
        <td style="width:50%;height:100%; background-image: url('assects/img/mockup3-phone.png');
        background-position:center;
        background-repeat: no-repeat;
        background-size:cover;">


        </td>
      </tr>
    </table>
  </div>
  <!------section3 closed-->
  <div class="section4">
    <div class="head-content" style="display: inline-flex; position: absolute;margin-top:-420px;">
      <p style="font-size: x-large;">Amazing </p>
      <p style="font-size: x-large;color:#0da3fb">&nbsp; Features </p>
    </div>
    <div class="other-content" style="width:100%; text-align: center; display:flex;justify-content:space-around;">
      <div class="items">
        <p style="font-size: x-large;margin-top:30%;">Made With Love</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
      </div>
      <div class="items">
        <p style="font-size: x-large;margin-top:30%;">Powerful</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
      </div>
      <div class="items">
        <p style="font-size: x-large;margin-top:30%;">Send Messages</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
      </div>
      <div class="items">
        <p style="font-size: x-large;margin-top:30%;">Save Money</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
      </div>
    </div>
    <!------other-content closed-->

  </div>
  <!-------section4 end-->
  <!---------Section 5 start-->
  <div class="section5">
    <table style="width:100%;height:500px;">
      <tr>
        <td style=" width:50%;height:100%;text-align: center; background-image: url('assects/img/data_7.png');
    background-position:center;
    background-repeat: no-repeat;
    background-size:contain;">
        </td>
        <td style="width:50%;height:100%;background-color:#0c8ed6;">
          <!--  flickity Slider -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-left:10%;display: flex;align-items: center; width:500px;height:500px ;text-align: center;">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" > 
              <div class="carousel-item active" style="border:solid silver 1px;height:200px;">
                <!-- <img class="d-block w-100" src="..." alt="First slide"> -->
                <p style="margin-top:50px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, corrupti! Fugiat, incidunt.</p>
              </div>
              <div class="carousel-item" style="border:solid silver 1px;height:200px;">
                <!-- <img class="d-block w-100" src="..." alt="Second slide"> -->
                <p style="margin-top:50px;">Lorem ipsum dolor sit amet consectetur.</p>
              </div>
              <div class="carousel-item" style="border:solid silver 1px;height:200px;">
                <!-- <img class="d-block w-100" src="..." alt="Third slide"> -->
                <p style="margin-top:50px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, corrupti! Fugiat.</p>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators"  role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </td>
      </tr>
    </table>
  </div>
  <!--------section 5 end-->
  <!-----section 6 start-->
  <div class="section6" style="width: 100%;text-align: center;">
    <div class="head-content" style="display: inline-flex; position:relative;">
      <p style="font-size: x-large;">App</p>
      <p style="font-size: x-large;color:#0da3fb">&nbsp; Screenshots </p>
    </div>
    <br>
    <br>
    <div class="img-slot">
      <img src="assects/img/screenshot/interface_1.png" style="margin-left: 20px;" width="300px" height="500px"
        alt="screenshot">
      <img src="assects/img/screenshot/interface_1.png" style="margin-left: 20px;" width="300px" height="500px"
        alt="screenshot">
      <img src="assects/img/screenshot/interface_1.png" style="margin-left: 20px;" width="300px" height="500px"
        alt="screenshot">
    </div>
    <!----img-slot end-->
  </div>
  <!---section 6 end -->
  <br>
  <br>
  <!-- Section 7 start -->
  <div class="section7" style="width: 100%;height:600px;">
    <table style="width: 100%;">
      <tr>
        <td style="width:60%;text-align: center;">
          <img src="assects/img/video.jpg" width="400px" height="400px" alt="Video" />
        </td>
        <td style="width:40%;">
          <p style="font-size: xx-large;">Watch Video for company overview</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod.
            Curabitur accumsan vitae augue vitae eleifend. Nam nisl massa, malesuada id imperdiet ac.</p>
          <p>Cras interdum ante vel aliquet euismod. Curabitur accumsan vitae augue vitae eleifend. Nam nisl
            massa, malesuada id imperdiet ac.</p>
          <br>
          <a data-fancybox href="https://www.youtube.com/watch?v=Tk31OcyQRN0">
            <img src="assects/img/player.png" width="30px" height="30px" alt="player">
            <p style="color: #000;display: inline-block;">Watch Video</p>
          </a>
        </td>
      </tr>
    </table>

  </div>
  <!-- Section 7 end -->

  <!---------------------Section8 -----Start-->

  <div class="section8" style=" background-color: #1d293e;width: 100%;height:500px;">
    <p style="margin-top:20px; text-align: center; font-size: xx-large;color: #fff;">Affordable Pricing for All</p>
    <div class="lower" style="margin-top:30px; display: flex;align-items: center;">
      <div class="items"
        style="text-align: center; background-color: #fff; margin-left:15%;margin-right:10px;height:400px;">
        <p style="font-size:x-large;">Starter</p> <br>
        <p style="font-size:xx-large;">$29</p> <br>
        <p><b>MONTHLY</b></p> <br>
        <p>15 website <br>
          50GB Disk Space <br>
          50 Email Accounts<br>
        </p>
      </div>
      <!---item end-->
      <div class="items" style="text-align: center; background-color: #fff;margin-right:10px;height: 400px;">
        <p style="font-size:x-large;">Popular</p> <br>
        <p style="font-size:xx-large;">$49</p> <br>
        <p><b>MONTHLY</b></p> <br>
        <p>15 website <br>
          50GB Disk Space <br>
          50 Email Accounts<br>
        </p>
      </div>
      <!---item end-->
      <div class="items"
        style="text-align: center;color: #fff; background-color:#0da3fb;margin-right: 10%; height:400px;">
        <p style="font-size:x-large;">Advance</p> <br>
        <p style="font-size:xx-large;">$69</p> <br>
        <p><b>MONTHLY</b></p> <br>
        <p>15 website <br>
          50GB Disk Space <br>
          50 Email Accounts<br>
        </p>
      </div>
      <!---item end-->

    </div>
    <!--lower end-->

  </div>
  <!----- Section8 End ----->
  <!-- Section9 -->

<div class="section9" style=" background-image: url('assects/img/bg/testimonial-bg.jpg');
background-position:top;
background-repeat: no-repeat;
background-size:cover;width: 100%;height:500px;">

    <table style="width:100%;text-align: center; height: 100%;">
      <tr>
        <td style="width:50%;height: 100%;">
          <p style=" font-size: xx-large; color:#fff;">Check what our client say</p>
          <p style="color:#fff;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint perferendis non officia.
          </p>
        </td>
        <td style="width:50%;height:100%;text-align: center;display: flex;align-items: center;margin-left:10%;">
          <!--  flickity Slider -->
       
          <div id="carouselExampleControls" class="carousel slide" style=" border: solid 1px silver;background-color:#0f3460;width: 500px;height:300px;" data-ride="carousel">
            <div class="carousel-inner" style="color: #fff;">
              <div class="carousel-item active" style="margin-top:50px;">
                <p><u><b>COMMENTS</b></u></p>
                <p>Rohit Sharma</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, cumque?</p>
              </div>
              <div class="carousel-item" style="margin-top:50px;">
                <p><u><b>COMMENTS</b></u></p>
                <p>Nikhil Malik</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, cumque?</p>
              </div>
              <div class="carousel-item" style="margin-top:50px;">
                <p><u><b>COMMENTS</b></u></p>
                <p>Anushka Zaid</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, cumque?</p>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </td>
      </tr>
    </table>

  </div>
  <!-----section 9 end-->

  <div class="section10" style="width: 100%;height:400px;text-align: center;">
<div class="head" style="margin-top: 20px; display: inline-flex;font-size: xx-large;">
<p>Frequently Asked</p><p style="color:#0c8ed6;">&nbsp; Questions</p>
</div>
<table style="width:100%;margin-top:6%; text-align: center;">

    <tr><td style="width:50%; display: inline-block;text-align: left; ">
<button class="btn1" style="width:50px;height: 50px;" onclick="myFunction()">+</button>
<p style="display:inline-flex;font-size:x-large;">&nbsp;Clean code</p><br>
<div id="myDIV">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, aliquam.</p>
</div> <!----DiV End-->
</td></tr>
  <tr><td style="width:50%; display: inline-block;text-align: left;">
    <button class="btn2" style="width:50px;height: 50px;" onclick="myFunction()">+</button>
<p style="display:inline-flex;font-size:x-large;">&nbsp;Great design out of box</p><br>
<div id="myDIV2">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, aliquam.</p>
</div> <!----DiV End-->


  </td></tr>
  <tr><td style="width:50%; display: inline-block;text-align: left;">
    <button class="btn3" style="width:50px;height:50px;" onclick="myFunction()">+</button>
<p style="display:inline-flex;font-size:x-large;">&nbsp;Fit on all devices</p><br>
<div id="myDIV3">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, aliquam.</p>
</div> <!----DiV End-->


  </td></tr>
  <tr><td style="width:50%; display: inline-block;text-align: left;">
    <button class="btn4" style="width:50px;height:50px;" onclick="myFunction()">+</button>
<p style="display:inline-flex;font-size:x-large;">&nbsp;Made with passion</p><br>
<div id="myDIV4">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, aliquam.</p>
</div> <!----DiV End-->



  </td></tr>
</table>

  </div> <!-----section 10 end-->
<hr>
<div class="section11" style="width: 100%;height: 500px;">
<table style="width: 100%; ">
  <tr>
    <td style="width:60%;height: 500px;">
      <p style="font-size:xxx-large;">Get In Touch</p>
      <br>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Available, in</p>
      <br>
      <div class="social" style="display: flex;">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
      </div>
  
    </td>
    <td style="width:40%;">
      <form action="index.php" method="POST">
<input type="text" width="200px" height="50px" placeholder="Name" id="name" name="name" >
<input type="email" width="200px" height="50px" placeholder="email" name="email" id="email" >
<br><br> 
<input type="text" width="200px" height="50px" placeholder="Subject" name="subject" id="subject">
<br><br>
<input type="text" width="200px" height="50px" placeholder="Your Message" name="message" id="message" >
<br>
<br>
<button type="submit"  style="border:none;height:50px;background-color:#004e8e;color:#fff;width:100px;" >Submit</button>

</form>
    </td>
  </tr> 

</table>


</div>  <!-------section closed-->

         <!-----------Footer section----------->
         
              <footer>
                <table style="width: 100%;">
                  <tr>
                    <td style="width: 50%;">
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="background-color: transparent;border:none;">
                        Links
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Destination&#8594</a>
                          <a class="dropdown-item" href="#">Group booking form&#8594</a>
                          <a class="dropdown-item" href="#">Lost and found&#8594</a>
                          <a class="dropdown-item" href="#">Agent login&#8594</a>
                          <a class="dropdown-item" href="#">About Us&#8594</a>
                        </div>
                      </div>
    &nbsp;
                    
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" style="background-color: transparent;border:none;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Privacy and Policy
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Onboard Policy&#8594</a>
                          <a class="dropdown-item" href="#">Healthy Waves Policy&#8594</a>
                          <a class="dropdown-item" href="#">Lost and found&#8594</a>
                          <a class="dropdown-item" href="#">FAQ&#8594</a>
                          <a class="dropdown-item" href="#">Terms and Condition&#8594</a>
                        </div>
                      </div>
                     
                    </td>
               
                  
    
                <td style="width:50%;text-align: right;">
                    <h6>Stay Tuned</h6>
    
                  <a href="#">  <img src="assects/img/Social Media Icon/whatsapp.png" style="margin-right: 5px;" width="20px" height="20px" alt="whatsapp" /></a>
                  <a href="#"><img src="assects/img/Social Media Icon/facebook.png" style="margin-right: 5px;" width="20px" height="20px" alt="facebook"  /></a>
                    <a href="#"><img src="assects/img/Social Media Icon/instagram.png" style="margin-right: 5px;" width="20px" height="20px" alt="instagram" /></a>
                        <a href="#"><img src="assects/img/Social Media Icon/twitter.png" style="margin-right: 5px;" width="20px" height="20px" alt="twitter"  /></a>
                            <a href="#"><img src="assects/img/Social Media Icon/linkedin.png" style="margin-right: 5px;" width="20px" height="20px" alt="LinkedIn" /></a>
                                <a href="#"><img src="assects/img/Social Media Icon/youtube.png" style="margin-right: 5px;" width="20px" height="20px" alt="Youtube"  /></a>


                    <h6>Contact Us</h6>
                   <a href="#"><p>Have question for us ? </p></a>
                   <a href="#"> <img src="assects/img/Social Media Icon/message.png"  width="20px" style="margin-right: 5px;" height="20px" alt="message"/></a>
                    <a href="#"><img src="assects/img/Social Media Icon/call.png"  width="20px" height="20px" alt="call"/></a>
                    

                </td>
            </tr>
            </table>

            </footer>

                </footer>




 <!-----------------------------------------------SCRIPT BELOW----------------------------------------------------->

<script>
  $(document).ready(function(){

    $('#myDIV,#myDIV2,#myDIV3,#myDIV4').hide();
$('.btn1').click(function(){

  $('#myDIV').toggle();
 

});

$('.btn2').click(function(){

$('#myDIV2').toggle();

});

$('.btn3').click(function(){

$('#myDIV3').toggle();

});

$('.btn4').click(function(){

$('#myDIV4').toggle();

});

  });
</script>

  <!-------------Fancybox jquery links-->

  <script src="/assects/fancybox-master/dist/jquery.fancybox.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>