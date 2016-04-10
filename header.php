<?php 
session_start();
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="FundMyVenture.co">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/rsz_arrow5-up-512.png" type="image/x-icon">

  <meta name="description" content="Making Angel Investments Easy. For Everyone.">
  <title>FundMyVenture | Angel Investing</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/fundmyventure/css/style.css">
  <link rel="stylesheet" href="assets/fundmyventure-slider/style.css">
  <link rel="stylesheet" href="assets/fundmyventure-gallery/style.css">
  <link rel="stylesheet" href="assets/fundmyventure/css/mbr-additional.css" type="text/css">
  <script src="assets/jquery/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
 

function go_to_companies_page()
{
window.location = 'companies.php'; // Members Area
}
</script>

</head>

  <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">x</button>
          <script type="text/javascript">
          function pleaserun(){
            
  //console.log(document.getElementById("email").value);
  //console.log(document.getElementById("password").value);



$.post('server/checkcredentials.php', { 
  email: document.getElementById("email").value,
  password:document.getElementById("password").value
}) 
.done(function( data ) {
  //alert("yo");
  console.log(data);

//alert(data);
  try{
    if(data == "OK") // LOGIN OK?
 {   
  document.getElementById('status').innerHTML="Login successful. ";
setTimeout('go_to_companies_page()', 3000); 
 }  
 else if (data=='failed')// ERROR?
 {  
  document.getElementById('status').innerHTML="Login credentials not found. Please try again.";
 } 
 else  {
      document.getElementById('status').innerHTML="Server under heavy load. Please try again.";  
   }
 }
 catch (e) {
      console.log(e);
      alert("Something went wrong! We are working hard to fix it!")
        console.log("failed");
    }
 

})

.fail(function() {
    alert( "error" );
  });

}
          </script>
          <center><h4 class="modal-title">Login</h4></center>
        </div>
        <div class="modal-body">
          
              <label for="email">Username</label>
              <p><input type="text" name="eid" id="email" placeholder="Enter your email "></p>
              <label for="password">FundMyVenture Password</label>
              <p><input type="password"  id="password" name="password" placeholder="Password"></p>
              <div id="status"></div>
              <button id="loginsubmit" class="btn btn-primary" onclick="pleaserun()">Sign in</button><br>
                <p>
                <a data-toggle="modal" href="#forgotpassword">Forgot Password?</a>
              </p>
            
        </div>
        <div class="modal-footer">
          New To FundMyVenture?
            <a href="#" class="btn btn-default">Register</a>
        </div>
      </div>
      
    </div>
  </div>


  <div class="modal fade" id="forgotpassword" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">x</button>
           <?php 
// <div class="dropdown">    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example    <span class="caret"></span></button>    <ul class="dropdown-menu">      <li><a href="#">HTML</a></li>      <li><a href="#">CSS</a></li>      <li><a href="#">JavaScript</a></li>    </ul>  </div>

           ?>
          <center><h4 class="modal-title">Reset your account password</h4></center>
        </div>
        <div class="modal-body">
           <form method="post" action='' name="forgotpasswordform">
              <label for="reset_email">Username</label>
              <p><input type="text" name="eid" id="reset_email" placeholder="E-mail ID "></p>
             
              <div id="forgotpasswordstatus"></div>
              <p><button type="submit" id="reset_submit" class="btn btn-primary">Reset password</button><br>
                
              </p>
            </form>

        </div>
        <div class="modal-footer">
          New To FundMyVenture?
            <a href="#" class="btn btn-default">Register</a>
        </div>
      </div>
      
    </div>
  </div>



  <div class="modal fade" id="windowloadmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">We are currently in Public Beta!</h4></center>
        </div>
        <div class="modal-body">
          <p>We are working on building on a next-gen service for bridge the gap between startups / SME's and individual investors. We are currently working to improve our platform and have opened up this website to give everyone a sneak peek for investments of the future. 
            <br><br>
            We appreciate your interest and promise to deliver a first version of the platform by 20th February.

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
    


  <div class="modal fade" id="joinus" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Openings with FundMyVenture.co</h4></center>
        </div>
        <div class="modal-body">
          <p>We are working on building on a next-gen service for bridge the gap between startups / SME's and individual investors. We are currently a very small team and look forward to hearing back from people with diverse backgrounds. <br> <br>Please reach out to us if you:
            <ul>
                <li>Have an active interest in Private Equity Investments (or a very strong desire to learn about it).</li>


                <li>Have a background with the working of debt instruments.</li>

                <li>Belive in being brutally honest towards your work and the people you do deal with.</li>

                 <li>Are willing to put in good amount of hard work for practically little pay (we are a completely <a href="http://www.investopedia.com/terms/b/bootstrap.asp" target="_blank">bootstrapped company</a> ). </li>
            </ul>
            As our team size is small, we can also discuss about equity partnership depending upon your expertise, skills and experience.<br><br>
            You can find our openings <a href="https://medium.com/fund-my-venture/fundmyventure-current-openings-485885479aec#.o6n5ml8g1" target="_blank">here</a>. We have a slight preference towards people who are currently based out of Bangalore or are willing to relocate. We have <strong>no bias</strong> towards CPI (Cumulative Performance Index) or your current work position. If working with private equity solutions excite you, we should have an opening for you.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="announcement" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Did you know?</h4></center>
        </div>
        <div class="modal-body">
            We will be working on a not-for-profit model for first 5 deals closed by our platform. <br><br>We understand that we are new to the market, and will take time to establish ourselves in the market. But don't worry, this doesn't undermine our understanding of the market in any way and we will still work in the most diligent way possible to make your fundraise as smooth as possible!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<body>

<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--relative mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-20">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="index.php"><img class="mbr-navbar__brand-img mbr-brand__img" src="assets/images/rsz_arrow5-up-512.png" alt="FundMyVenture"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="index.php">FundMyVenture</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#investor">Investors</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#startup">Startups</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#about">About</a></li>
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#contact">Contact</a></li>
                            <li class="mbr-navbar__item">
                              <?php 
                              if (isset($_SESSION['username'])) {
    // ...
                                 echo '<div class="dropdown"> <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Welcome '.'Arpit' .'<span class="caret"></span></button> <ul class="dropdown-menu"> <li><a href="profile.php">Profile</a></li> <li><a href="learn.php" target="_blank">Learn</a></li> <li><a href="#">Logout</a></li> </ul> </div>'; 
//$_SESSION["username"] 
                           }      
                               
                               else echo '<div class="mbr-buttons  mbr-buttons--left"><center><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-warning" data-toggle="modal" href="#loginmodal">Login</a></center>';
                              ?>

                              
                            </li>

                          </ul></div>
                
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>