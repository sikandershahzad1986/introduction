<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sikander Shahzad's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-danger bg-opacity-25">



  <section id="head" class="gradient-background">
    <?php include("header.php"); ?>


    <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 pt-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="./images/web1.png" class="d-block mx-lg-auto img-fluid" alt="Full Stack Developer" width="300" height="300" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">I'm Sikander Shahzad</h1>
        <p class="h3">A Full Stack Web Developer</p>
        <p class="lead text-light"><em>Crafting Digital Experiences from Front-end Finesse to Back-end Mastery..</em></p>
       
      </div>
    </div>
  </div>
  </section>



	<section id="features">
    <?php include("features.php"); ?> 
  </section>


  <section id="testimonial">
    
<div class="container px-4 py-5 card mt-5 container  border  border-start-0 rounded-end" id="icon-grid">
    <h2 class="pb-2 border-bottom">My Expertise</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
      <img src="./images/filetype-html.svg" height="30">
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">HTML</h3>
          <p>HyperText Markup Language, is the standard language used to create and design documents on Web.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
      <img src="./images/filetype-css.svg" height="30">
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">CSS</h3>
          <p>CSS, or Cascading Style Sheets, is a language used to control  and style the layout of HTML documents.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
       <img src="./images/bootstrap.svg" height="30">
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Bootstrap</h3>
          <p>A front-end framework / collection of pre-designed and reusable components designed in CSS.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
       <img src="./images/filetype-js.svg" height="30">
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">JavaScript</h3>
          <p>JavaScript is a programming language that makes websites interactive.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
         <img src="./images/jquery.svg" height="30">
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Jquery</h3>
          <p>jQuery is a fast and lightweight JavaScript library. It simplifies things you can do with JavaScript on websites.</p>
        </div>
      </div>


      <div class="col d-flex align-items-start">
        <img src="./images/php.svg" height="30">
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">PHP</h3>
          <p>PHP is a server-side scripting language used for web development to create dynamic web pages and applications.</p>
        </div>
      </div>

      <div class="col d-flex align-items-start">
        <img src="./images/wordpress.svg" height="30">
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">WordPress</h3>
          <p>WordPress is a popular and user-friendly content management system (CMS) that helps you create and manage websites easily.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img src="./images/joomla.svg" height="30">
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Joomla</h3>
          <p>Joomla is a content management system (CMS) that enables you to build and manage websites.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
    </div>
  </div>



  </section>


<section id="footer">
      <?php include("footer.php") ?>

</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>



