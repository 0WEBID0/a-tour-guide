<?php
require '../../functions/connection.php';

session_start();

// افتراض أنك قد قمت بإعداد اتصال بقاعدة البيانات بالفعل
// $conn = mysqli_connect("localhost", "اسم المستخدم", "كلمة المرور", "اسم_قاعدة_البيانات");

if ($conn) {
  // تحقق مما إذا كان المستخدم قد سجل دخوله
  if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];

    // تحقق من حالة التسجيل في قاعدة البيانات
    $query = "SELECT user FROM create_user WHERE id = $userId";
    $result = mysqli_query($conn, $query);

    if ($result) {
      $row = mysqli_fetch_assoc($result);

      // إذا كان المستخدم قد سجل دخوله وهو مسجل، يعرض رسالة ويتوقف
      if ($row['user'] == 1) {
        echo "لقد سجلت دخولك بالفعل!";
        exit;
      }
    } else {
      // خطأ في استعلام قاعدة البيانات
      echo "خطأ في استعلام قاعدة البيانات: " . mysqli_error($conn);
      exit;
    }
  }

  // استمرار عملية التسجيل...
} else {
  // خطأ في الاتصال بقاعدة البيانات
  echo "خطأ في الاتصال بقاعدة البيانات: " . mysqli_connect_error();
  exit;
}

// قم ببقية عملية التسجيل...
?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<!---------------------------------------------------------------------->
<!------------------------------- Head --------------------------------->
<!---------------------------------------------------------------------->

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Legal Services
Accounting Solutions
Transportation Services
Engineering Consultations
Professional Advice
Secure Access
Client Portal
Legal Counsel
Financial Expertise
Logistics Solutions
Engineering Solutions
Client Dashboard
Secure Login
Account Management
Expert Consultations
Law and Finance Hub
Multifaceted Solutions
Client Support
Seamless Access
Personalized Services">
  <meta name="description"
    content="Welcome to our comprehensive platform, where expertise converges seamlessly to cater to your diverse needs. Navigate through a spectrum of professional services encompassing legal counsel, accounting precision, transportation solutions, engineering consultations, and a myriad of problem-solving resources. Our dedicated team of seasoned professionals stands ready to provide unparalleled support, ensuring your peace of mind and success in every endeavor. Explore a world of possibilities with our integrated approach, where excellence meets efficiency. Trust us to be your one-stop destination for unparalleled service, where the realms of law, finance, logistics, engineering, and solutions converge seamlessly for your benefit. Elevate your experience, simplify complexities, and embark on a journey of success with our multifaceted offerings.">
  <title>Login</title>
  <link rel="stylesheet" href="../../../Layout/Default/CSS/Login.css" media="screen">
  <link rel="stylesheet" href="../../../Docs/CSS/Bootstrap.css" media="screen">
  <script class="u-script" type="text/javascript" src="../../../Docs/JS/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../../../Docs/JS/Bootstrap.js" defer=""></script>
  <meta name="referrer" content="origin">
  <meta property="og:title" content="Login">
  <meta property="og:description"
    content="Welcome to our comprehensive platform, where expertise converges seamlessly to cater to your diverse needs. Navigate through a spectrum of professional services encompassing legal counsel, accounting precision, transportation solutions, engineering consultations, and a myriad of problem-solving resources. Our dedicated team of seasoned professionals stands ready to provide unparalleled support, ensuring your peace of mind and success in every endeavor. Explore a world of possibilities with our integrated approach, where excellence meets efficiency. Trust us to be your one-stop destination for unparalleled service, where the realms of law, finance, logistics, engineering, and solutions converge seamlessly for your benefit. Elevate your experience, simplify complexities, and embark on a journey of success with our multifaceted offerings.">
  <link rel="canonical" href="resolutions hub group">
  <meta name="theme-color" content="#478ac9">
  <meta property="og:url" content="resolutions hub group">
  <meta property="og:type" content="website">

</head>

<!---------------------------------------------------------------------->
<!------------------------------- Body --------------------------------->
<!---------------------------------------------------------------------->

<body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"
  style="background-color: #202047;">

  <!---------------------------------------------------------------------->
  <!--------------------------- Login Section ---------------------------->
  <!---------------------------------------------------------------------->

  <section class="u-clearfix u-custom-color-3 u-section-1" id="carousel_b48b">
    <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-effect-hover-zoom u-image-contain u-layout-cell u-size-28 u-layout-cell-1"
            data-image-width="141" data-image-height="150" data-animation-name="customAnimationIn"
            data-animation-duration="1000">
            <div class="u-background-effect u-expanded">
              <div class="u-background-effect-image u-expanded u-image u-image-contain u-image-1" data-image-width="141"
                data-image-height="150">
              </div>
            </div>
            <div class="u-background-effect u-expanded">
              <div class="u-background-effect-image u-expanded u-image u-image-contain u-image-1" data-image-width="141"
                data-image-height="150">
              </div>
            </div>
            <div class="u-container-layout u-valign-middle u-container-layout-1">
            </div>
          </div>
          <div class="u-align-left u-container-style u-layout-cell u-size-32 u-white u-layout-cell-2"
            data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
            <div class="u-container-layout u-container-layout-2">
              <p class="u-align-center u-custom-font u-font-roboto-slab u-text u-text-grey-40 u-text-1"
                data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X"><span
                  class="u-file-icon u-icon"><img src="../../../Layout/Default/images/190411.png" alt=""></span>&nbsp;No
                credit card needed
              </p>
              <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-2" data-animation-name="flipIn"
                data-animation-duration="1000" data-animation-direction="X">Login</h2>
              <div class="custom-expanded u-align-left u-form u-form-1">
                <!---------------------------------------------------------------------->
                <!------------------------------- Form --------------------------------->
                <!---------------------------------------------------------------------->

                <form action="#" class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form" style="padding: 0px;"
                  source="email" name="form">
                  <div class="u-form-group u-form-name u-label-top">
                    <label for="name-5a14" class="u-label" wfd-invisible="true">Email</label>
                    <input type="text" placeholder="Enter your Email" id="Email-5a14" name="Email"
                      class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-1" required="">
                  </div>
                  <div class="u-form-email u-form-group u-label-top">
                    <label for="email-5a14" class="u-label" wfd-invisible="true">Password</label>
                    <input type="Password" placeholder="Enter a valid Password" id="Password-5a14" name="Password"
                      class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-2" required="">
                  </div>
                  <div class="u-align-right u-form-group u-label-top">
                    <a href="#" \\use button for PHP ,not link a
                      class="u-active-black u-border-none u-btn u-btn-submit u-btn-round u-button-style u-hover-black u-palette-3-base u-radius-7 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1">Login</a>
                    <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                  </div>
                  <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has
                    been sent. </div>
                  <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message.
                    Please fix errors then try again. </div>
                  <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                </form>

              </div>
              <h6 class="u-align-center u-text u-text-3">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-4 u-text-hover-palette-2-base u-btn-2"
                  data-href="CreateAccount.html" href="CreateAccount.php"> Create account</a>
              </h6>
              <h6 class="u-align-center u-text u-text-grey-25 u-text-4"> By creating an account you accept our<br>
              </h6>
              <h6 class="u-align-center u-text u-text-grey-25 u-text-5">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-3"
                  data-href="#"> Terms of service</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





</body>

</html>