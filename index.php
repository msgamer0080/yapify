<?php 
    include 'core/init.php' ;
    if (isset($_SESSION['user_id'])) {
      header('location: home.php');
    }
?>
<html>
	<head>
		<title>YAPIFY</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
        <!-- <link rel="stylesheet" href="assets/css/style-complete.css"/> -->
        <link rel="stylesheet" href="assets/css/index_style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="shortcut icon" type="image/png" href="assets/images/icon.png"> 
	</head>
<body>
<main class="twt-main">
            <section class="twt-login">
                <?php include 'includes/login.php';  ?>
                    <div class="slow-login">
                        <img class="login-bird" src="assets/images/logo.png" alt="bird">
                        <button class="login-small-display signin-btn pri-btn">Log in</button>
                        <span class="front-para">SEE WHAT'S HAPPENING IN YOUR COLLEGE</span>
                        <span class="join">JOIN YAPIFY TODAY.</span>
                        <button type="button" id="auto" onclick="" class="signup-btn pri-btn" data-toggle="modal" data-target="#exampleModalCenter">
                            SIGN UP</button>
                            
                             
                            <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="font-weight: 700;" class="modal-title" id="exampleModalLongTitle">SIGN UP FOR FREE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    
         <?php  include 'includes/signup-form.php' ?>
      </div>
      
    </div>
  </div>
</div>


                    </div>
            </section>
            <section class="twt-features">
                <div class="features-div">
                    <p>SHARE YOUR OPINION.</p>
                    <p>HEAR WHAT PEOPLE ARE TALKING ABOUT.</p>
                    <p>JOIN CONVERSATION.</p>
                </div>
            </section>
        </main>
        
        <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/mine.js"></script>
        
</body>
</html>
