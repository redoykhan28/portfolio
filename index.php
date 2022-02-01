<?php
include 'db_connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Animation Cdn -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css" class="css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kirang+Haerang&display=swap" rel="stylesheet">  
    <script src="https://kit.fontawesome.com/407693bec6.js" crossorigin="anonymous"></script>    
  
    <title>Welcome to my Portfolio</title>
  </head>
 
  <body>

      <nav class="navbar navbar-expand-lg  nvm">
      <div class="container">
        <a class="navbar-brand text-dark mx-1 hd" href="index.php"><i class="fas fa-user-tie"></i> Portfolio</a>
        
       
        <div class="d-flex">
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon btn-dark"></span>
    </button>
    <div class="collapse navbar-collapse mx-3" id="navbarNav">
          <ul class="navbar-nav  d-flex justify-content-end ">
            <li class="nav-item">
              <a class="nav-link active nv1 " aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-1  nv1" href="#aboutme">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-1  nv1" href="#skill">Skill</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-1  nv1" href="#education">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-1  nv1" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-1  nv1" href="#portfolio">portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-1  nv1" href="#contact">Contact</a>
            </li>

          </ul>
        </div>
        </div>
       
      </div>
    </nav>
      
 
  <div class="container">

    <div class="row" id="home">

    
    <!-- Social section Start -->
   <div class="col-lg-2 col-md-2">
  

    <ul class="list_style">
    <li>
      <a href="https://www.facebook.com/Redoyv"><span><i class="fab fa-facebook-f sl1"></i></span></a>
    </li>
    <li>
      <a href="https://www.instagram.com/redoy_khan_rk/"><span><i class="fab fa-instagram sl1"></i></span></a>
    </li>
    <li>
      <a href=""><span><i class="fab fa-whatsapp sl1"></i></span></a>
    </li>
    <li>
      <a href=""><span><i class="fab fa-linkedin-in sl1"></i></span></a>
    </li>

    </ul>

  </div>
<!-- Social section End -->
   

<!-- info section Start -->

   <div class="col-lg-5 col-md-10 texted"> 

<h2>Hello I am,</h2>
<h4 class="anim txtm"><span></span></h4>

<p class="mt-2 anm">Decent Experience in web designing and development knowladge, producing and quality Work. </p>
<a class="text-decoration-none text-white btn text-center bt1 anm" href="#contact">Contact Me <i class="fas fa-arrow-right"></i></a>
<a href="#aboutme" class="sm anm2"><i class="fas fa-mouse sl1 anm2"></i><span class="sp"> Scroll Down</span> <i class="fas fa-arrow-down sl1 anm2"></i></a>

   </div>

   
    <!-- info section End -->

     <!-- dp section Start -->

     <div class="col-lg-4">

     <img src="picture/cover6.jpeg" class="img-thumbnail img1" alt="Logo">

     </div>

          <!-- dp section End -->

          </div>

       
       
       
          <!-- About section Start -->

        <div class="row r1" id="aboutme">

        <h1 class="d-flex justify-content-center mt-5">About Me</h1>
        <h6 class="d-flex justify-content-center text-muted">My Introduction</h6>

        <div class="col-lg-6" data-aos="fade-right">

        <img src="picture/dp.jpeg" class="img-thumbnail float-end img2" alt="Logo">

        </div>

        <div class="col-lg-6" data-aos="fade-left">

        <h6 class=" justify-content-Start t1 text-muted">Hello,I am Sezan Ahmed. I recently complete my</br>B.Sc from Varendra University and  I am also a </br>web developer with a decent knowladge and </br> years of experience, working in web technologies </br> and designing, delivering quality work.</h6>

        <div class="row">
          <div class="col-2 mt-4 t2">
            <span class="d-flex justify-content-center fs-2 fw-bold">02+</span>
            <Span class="d-flex justify-content-center text-muted">Years</Span>
            <Span class="d-flex justify-content-center text-muted">Experience</Span>

          </div>

          <div class="col-2 mt-4 t2">
            <span class="d-flex justify-content-center fs-2 fw-bold">10+</span>
            <Span class="d-flex justify-content-center text-muted">Completed</Span>
            <Span class="d-flex justify-content-center text-muted">Projects</Span>

          </div>

          <div class="col-2 mt-4 t2">
            <span class="d-flex justify-content-center fs-2 fw-bold">05+</span>
            <Span class="d-flex justify-content-center text-muted">University</Span>
            <Span class="d-flex justify-content-center text-muted">Work</Span>

          </div>
    
        </div>


        <a class="text-decoration-none text-white btn text-center mt-3 bt2 ani" href="#">Download CV <i class="fas fa-arrow-down ban" ></i></a>


        </div>

        

        </div>
      
        <!-- About section end -->
        
        
        
        
        
        <!-- Skill section Start -->

        <div class="row  mt-5" id="skill">
        
        <h1 class="d-flex justify-content-center mt-5">Skill</h1>
        <h6 class="d-flex justify-content-center text-muted">My Technical Level</h6>
        
        <div class="col-lg-6" data-aos="zoom-in">
       
        <h5 class="txt2 d-flex justify-content-center ">
          <a class="sk1" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
          <i class="fas fa-fill-drip sl1"></i><Span class="sp"> Front-end Developer </Span><i class="fas fa-sort-down sl1"></i>
          </a>
        </h5>
        <h6 class="d-flex justify-content-center text-muted">More Than 2 Years</h6>

        
        <div class="collapse " id="collapseExample3">
          <div class="card card-body d-flex justify-content-center">
          
          <div class="hd d-flex justify-content-between">
          <p class="my-2">HTML</p>
          <p class="my-2">95%</p>
          </div>
          <div class="progress pr">
          <div class="progress-bar cl" role="progressbar" style="width:95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          
          <div class="hd d-flex justify-content-between">
          <p class="my-2">CSS</p>
          <p class="my-2">80%</p>
          </div>
          <div class="progress pr">
            <div class="progress-bar cl" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          
          <div class="hd d-flex justify-content-between">
          <p class="my-2">Bootstrap</p>
          <p class="my-2">90%</p>
          </div>
          <div class="progress pr">
            <div class="progress-bar cl" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
         
          <div class="hd d-flex justify-content-between">
          <p class="my-2">JavaScript</p>
          <p class="my-2">50%</p>
          </div>
          <div class="progress pr">
            <div class="progress-bar cl" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          </div>
        </div>
       
      </div>

        <div class="col-lg-6" data-aos="zoom-in">

        <h5 class="txt2 d-flex justify-content-center ">
          <a class="sk1" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
          <i class="fas fa-align-right sl1"></i><Span class="sp"> Back-end Developer </Span><i class="fas fa-sort-down sl1"></i>
          </a>
        </h5>
        <h6 class="d-flex justify-content-center text-muted">More Than 1 Years</h6>

        <div class="collapse " id="collapseExample5">
          <div class="card card-body d-flex justify-content-center">
          
          <div class="hd d-flex justify-content-between">
          <p class="my-2">PHP</p>
          <p class="my-2">60%</p>
          </div>
          <div class="progress pr">
          <div class="progress-bar cl" role="progressbar" style="width:60%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          
          <div class="hd d-flex justify-content-between">
          <p class="my-2">MYSQL</p>
          <p class="my-2">70%</p>
          </div>
          <div class="progress pr">
            <div class="progress-bar cl" role="progressbar" style="width: 70%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
         
          </div>
        </div>

        </div>

        </div>

   <!-- Skill section End -->


   <!-- Education section Start -->
   
 <div class="row mt-5" id="education">
   
   <h1 class="d-flex justify-content-center mt-5">Education</h1>
   <h6 class="d-flex justify-content-center text-muted">My Personal journey</h6>
        
   <div class="col-lg-4" data-aos="fade-left">

   <span class="d-flex justify-content-center ed1"><i class="fas fa-school sl1 fs-1"></i></span>

   <h5 class="d-flex justify-content-center mt-4">School(2005-2015)</h5>
   <h6 class="d-flex justify-content-center text-muted"><i class="fas fa-vial mx-1"></i>  Science Group GPA:5.00(SSC)</h6>
   <h6 class="d-flex justify-content-center text-muted">Masjid Mission Academy,Rajshahi,Bangladesh</h6>

  
  </div>

  <div class="col-lg-4" data-aos="zoom-in">

    <span class="d-flex justify-content-center ed1"><i class="fas fa-university sl1 fs-1"></i></span>

    <h5 class="d-flex justify-content-center mt-4">College(2016-1017)</h5>
    <h6 class="d-flex justify-content-center text-muted"><i class="fas fa-vial mx-1"></i>  Science Group GPA:4.50(HSC)</h6>
    <h6 class="d-flex justify-content-center text-muted">Varenda University,Rajshahi,Bangladesh</h6>


    </div>

    <div class="col-lg-4" data-aos="fade-right">

    <span class="d-flex justify-content-center ed1"><i class="fas fa-graduation-cap sl1 fs-1"></i></span>

    <h5 class="d-flex justify-content-center mt-4">University(2018-2022)</h5>
    <h6 class="d-flex justify-content-center text-muted"><i class="fas fa-desktop mx-1"></i>B.Sc in Computer Science And Engineering GPA:3.43</h6>
    <h6 class="d-flex justify-content-center text-muted">Varendra University,Rajshahi,Bangladesh</h6>


  </div>


   </div>

      <!-- Education section End -->




      <!-- Services section Start -->

      <div class="row mt-5" id="services">
      
      <h1 class="d-flex justify-content-center mt-5">Services</h1>
      <h6 class="d-flex justify-content-center text-muted">What I offer</h6>
        
     
      <div class="col-lg-4" data-aos="fade-left">

                    <div class="cardm" style="width: 20rem;"data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <div class="card-body">
                    <span class="d-flex justify-content-center my-5"><i class="fas fa-code sl2 fs-1"></i></span>
                          <h5 class="fw-bold d-flex justify-content-center crdtxt text-light">Front-end Development</h5>
                      </div>
                    </div>
      
                             <div class="collapse" id="collapseExample">
                            <div class="card card-body card1">
                            <p class="card-title mt-1">Build your website with responsive design materials like the bootstrap</p>
                                <a href="#contact" class="btn btt my-3">Contact</a>                          
                              </div>
                            </div>
      

      </div>

      <div class="col-lg-4" data-aos="zoom-out">
      
      <div class="cardm" style="width: 20rem;"data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                    <div class="card-body">
                    <span class="d-flex justify-content-center my-5"><i class="fas fa-align-left sl2 fs-1"></i></span>
                          <h5 class="fw-bold d-flex justify-content-center crdtxt text-light">Back-end Development</h5>
                      </div>
                    </div>
      
                             <div class="collapse" id="collapseExample1">
                            <div class="card card-body card1">
                            <p class="card-title mt-1">Build your website with dynamic Functionality using materials like Php & MYSQl</p>
                                <a href="#contact" class="btn btt my-3">Contact</a>                          
                              </div>
                            </div>
      

      </div>

      <div class="col-lg-4"data-aos="fade-right">
     
      <div class="cardm d-flex justify-content-center" style="width: 20rem;"data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                    <div class="card-body">
                    <span class="d-flex justify-content-center my-5"><i class="fas fa-star sl2 fs-1"></i></span>
                          <h5 class="fw-bold d-flex justify-content-center crdtxt text-light">Full Stack Development</h5>
                      </div>
                    </div>
      
                             <div class="collapse" id="collapseExample2">
                            <div class="card card-body card1 d-flex justify-content-center">
                            <p class="card-title mt-1">Build your website with responsive design with dynamic functionality </p>
                                <a href="#contact" class="btn btt my-3">Contact</a>                          
                              </div>
                            </div>
      

      </div>

      </div>



    
     
    </div>

     <!-- Services section End -->

     <!-- Portfolio section Start -->

     <div class="row mt-5" id="portfolio">

     <h1 class="d-flex justify-content-center mt-5">Portfolio</h1>
     <h6 class="d-flex justify-content-center text-muted">Most recent work</h6>
    
    <div class="col-lg-12">

     <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators btc">
          <button type="button " data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button " data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button " data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          
        <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-6" data-aos="zoom-out">
              <img src="picture/modern.jpg" class="img-thumbnail float-end img2" alt="Logo">
              </div>
              <div class="col-lg-4 mt-5" data-aos="fade-left">
              <h4 class="d-flex justify-content-start mt-5 mx-4">Modern Website</h4>
              <p class="d-flex justify-content-start mx-4">Website adaptable to all devices with,ui components and animated interaction</p>
              <a class="text-decoration-none text-white btn text-center bt1 ani mx-4" href="#">Demo <i class="fas fa-arrow-right"></i></a>
             </div>
            </div>
          </div>
          
          <div class="carousel-item">
              <div class="row">
              <div class="col-lg-6" data-aos="zoom-out">
              <img src="picture/brand.jpg" class="img-thumbnail float-end img2" alt="Logo">
              </div>
              <div class="col-lg-4 mt-5 " data-aos="fade-left">
              <h4 class="d-flex justify-content-start mt-5 mx-4">Brand design</h4>
              <p class="d-flex justify-content-start mx-4">Website adaptable to all devices with,ui components and animated interaction</p>
              <a class="text-decoration-none text-white btn text-center bt1 ani mx-4" href="#">Demo <i class="fas fa-arrow-right"></i></a>
             </div>
            </div>
          </div>
         
          <div class="carousel-item">
          <div class="row">
              <div class="col-lg-6" data-aos="zoom-out">
              <img src="picture/ecommerce.jpg " class="img-thumbnail float-end img2" alt="Logo">
              </div>
              <div class="col-lg-4 mt-5" data-aos="fade-left">
              <h4 class="d-flex justify-content-start mt-5 mx-4">Ecommerce Website </h4>
              <p class="d-flex justify-content-start mx-4">Website adaptable to all devices with,ui components and animated interaction</p>
              <a class="text-decoration-none text-white btn text-center bt1 ani mx-4" href="#">Demo <i class="fas fa-arrow-right"></i></a>
             </div>
            </div>
          </div>
        </div>
     </div>

     </div>
    <!-- Portfolio section End -->


    <!-- Contact section Start -->

    <div class="row mt-5" id="contact">

    <h1 class="d-flex justify-content-center mt-5">Contact Me</h1>
    <h6 class="d-flex justify-content-center text-muted">Get in touch</h6>

    <div class="col-lg-5" data-aos="fade-right">
    <ul class="list_style2">
    <li>
      <i class="fas fa-phone-alt sl1 fs-5 d-flex justify-content-end mx-4 mt-5">&nbsp Call Me</i>
      <h6 class="d-flex justify-content-end text-muted mx-4 my-2">01313443910</h6>
    </li>
    <li>
    <i class="fas fa-envelope sl1 fs-5 d-flex justify-content-end mx-4 mt-5">&nbsp Email</i>
      <a href="#"class="d-flex justify-content-end text-muted fs-6 mx-4 my-2">redoyk2015@gmail.com</a>
    </li>
    <li>
    <i class="fas fa-map-marker-alt sl1 fs-5 d-flex justify-content-end mx-4 mt-5">&nbsp Location</i>
      <h6 class="d-flex justify-content-end text-muted mx-4 my-2">TeroKhadia,Rajshahi</h6>
    </li>

    </ul>
    </div>

    <div class="col-lg-7 mt-5" data-aos="fade-left">


    <?php

      if (isset($_POST['submit'])) {        //get/post connection

          $email=$_POST['email'];
          $project= $_POST['project'];
          $message= $_POST['message'];



        $sql= "INSERT INTO `user` ( `email`, `project`, `message`) VALUES ( '$email', '$project','$message')";     // insertion
        $result=mysqli_query($conn,$sql);

        if(!$result){
          
          echo"insert failed ..this is error".mysqli_error($conn);

         
        }
        else{
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Your Note is successfully Added to the list!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
       
      }
    
   

    ?>

    <form action="" method="post">
           
            <div class="mb-3 co3 my-4">
              <label for="Email" class="form-label text-dark">Email</label>
              <input type="text" class="  form-control  border  tx1  text-dark" id="email" name="email" required aria-describedby="emailHelp">
             </div>
           

            <div class="mb-3 co3">
              <label for="project" class="form-label text-dark">Project</label>
              <input type="text" class=" form-control  border  tx2  text-dark" id="project" name="project"  required aria-describedby="emailHelp">
             </div>


            <div class="mb-3 co3">
                 <label for="message" class="form-label text-dark">Message</label>
                <textarea class="  form-control border   text-dark tx2" required id="message"  name="message" rows="3"></textarea>
            </div>
            
            <button type="submit" name="submit" class="btn btn bt3 my-2">Send Massage &nbsp<i class="fas fa-arrow-right"></i></button>
          </form>

          <a href="#home" class="sm2 d-flex justify-content-center"><i class="fas fa-arrow-circle-up sl1 fs-3"data-aos="zoom-in" ></i></a>



        </div>



    </div>

    </div>

        <!-- Contact section End -->
</div>


   <!-- Footer section Start -->

<footer class=" my-0">

<div class="row mt-5  r1f">

    <div class="col-lg-4 mt-5">

    <h4 class="d-flex justify-content-center text-white mt-5">Sezan Ahmed</h4>
    <h6 class="d-flex justify-content-center text-white">Front-end Developer</h6>

   
    </div>

    <div class="col-lg-4 mt-3" data-aos="fade-left">

    <div class="snv d-flex justify-content-center mt-3 mx-4">
    <ul class="navbar-nav ">
     <li class="nav-item">
              <a class="nav-link mx-1 nvf" href="#services"><i class="fas fa-cog sl2"></i>&nbsp Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-1 nvf" href="#portfolio"><i class="fas fa-user sl2"></i> &nbsp portfolio </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-1 nvf" href="#contact"><i class="fas fa-address-book sl2"></i>&nbsp Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-1  nvf" href="#skill"><i class="fas fa-brain sl2"></i> &nbsp Skill</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-1  nvf" href="#education"><i class="fas fa-user-graduate sl2"></i> &nbsp Education</a>
            </li>
      </ul>
      </div>

    
    </div>

    <div class="col-lg-4" data-aos="fade-left">
    
    <ul class="list_style2 d-flex justify-content-center  ">
    <li>
      <a href=""><span><i class="fab fa-facebook-f mx-3 sl2"></i></span></a>
    </li>
    <li>
      <a href=""><span><i class="fab fa-instagram mx-3 sl2"></i></span></a>
    </li>
    <li>
      <a href=""><span><i class="fab fa-whatsapp mx-3 sl2"></i></span></a>
    </li>
    <li>
      <a href=""><span><i class="fab fa-linkedin-in mx-3 sl2"></i></span></a>
    </li>

    </ul>
    
</div>
<hr class="bg-light my-4">
<p class="text-center text-light  mt-2">© Copyright 2022 Sezan Ahmed | Developed by Sezan Ahmed, Portfolio.</p>

</div>


</footer>


    <!-- Footer section End! -->


  

 

  



       
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    
    <!-- Animation Cdn -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 300,
        duration: 1000
    });
  </script>

    

  </body>
</html>