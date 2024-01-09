<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-danger bg-opacity-25">



  <section id="head" class="gradient-background">
    <?php
    include("header.php");
    ?>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 pt-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./images/portfolio.png" class="d-block mx-lg-auto img-fluid" alt="Portfolio" width="300" height="300" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Portfolio</h1>
       

      <p class="lead text-light"><em>My portfolio is not just a collection of projects; it's a testament to my dedication, a visual chronicle of challenges conquered, and a showcase of the relentless pursuit of excellence that defines my commitment to making an impact through innovation and creativity.</em></p>
       
      </div>
    </div>
  </div>


    
  </section>




	<section id="content">
    
   <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Projects</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('./images/bac2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-dark">An Educational Website for College</h3>
            <ul class="d-flex list-unstyled mt-auto">
             
              <li class="d-flex align-items-center me-3">
                
                <h2 class="text-dark">www.bac.edu.pk</h2>
            
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
            <ul class="d-flex list-unstyled mt-auto">
          
              <li class="d-flex align-items-center me-3">
              
                <small>Pakistan</small>
              </li>
            
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
            <ul class="d-flex list-unstyled mt-auto">
                           <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>California</small>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


 
   

  </section>



	<?php

include("footer.php")
?>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>



