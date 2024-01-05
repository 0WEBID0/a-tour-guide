<?php
require '../../functions/connection.php';

if (isset($_POST["submit"])) {
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $phone = $_POST["phone"];
  $country = $_POST["country"];
  $city = $_POST["city"];
  $street = $_POST["street"];
  $type_user = $_POST["radiobutton"];

  header("location:../../../index.html");

  $query = "INSERT INTO create_user VALUES ('','$first_name','$last_name','$email','$password','$phone','$country','$city','$street','$type_user')";
  mysqli_query($conn, $query);
}

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

?>





<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<!---------------------------------------------------------------------->
<!------------------------------- Head --------------------------------->
<!---------------------------------------------------------------------->

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Create Account</title>
  <link rel="stylesheet" href="../../../Layout/Default/CSS/CreateAccountForAdviser.css" media="screen">
  <link rel="stylesheet" href="../../../Docs/CSS/Bootstrap.css" media="screen">
  <script class="u-script" type="text/javascript" src="../../../Docs/JS/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="../../../Docs/JS/Bootstrap.js" defer=""></script>
  <meta name="referrer" content="origin">
  <meta property="og:title" content="Create Account">
  <meta property="og:description"
    content="Welcome to our comprehensive platform, where expertise converges seamlessly to cater to your diverse needs. Navigate through a spectrum of professional services encompassing legal counsel, accounting precision, transportation solutions, engineering consultations, and a myriad of problem-solving resources. Our dedicated team of seasoned professionals stands ready to provide unparalleled support, ensuring your peace of mind and success in every endeavor. Explore a world of possibilities with our integrated approach, where excellence meets efficiency. Trust us to be your one-stop destination for unparalleled service, where the realms of law, finance, logistics, engineering, and solutions converge seamlessly for your benefit. Elevate your experience, simplify complexities, and embark on a journey of success with our multifaceted offerings.">
  <link rel="canonical" href="Resolutions Hub Group">
  <meta name="theme-color" content="#478ac9">
  <meta property="og:url" content="Resolutions Hub Group">
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
          <div class="u-container-style u-image u-image-contain u-layout-cell u-size-27 u-image-1"
            data-image-width="1500" data-image-height="1600">
            <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
          </div>
          <div class="u-align-left u-container-style u-layout-cell u-size-33 u-white u-layout-cell-2"
            data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
            <div class="u-container-layout u-valign-top u-container-layout-2">
              <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-grey-80 u-text-1"
                data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X"> Create your
                free account</h2>
              <p class="u-align-center u-custom-font u-font-roboto-slab u-text u-text-grey-40 u-text-2"
                data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X"><span
                  class="u-file-icon u-icon"><img src="../../../Layout/Default/images/190411.png" alt=""></span>&nbsp;No
                credit card needed
              </p>
              <div class="custom-expanded u-align-left u-form u-form-radios-spacing-0 u-form-1">
                <!---------------------------------------------------------------------->
                <!------------------------------- Form --------------------------------->
                <!---------------------------------------------------------------------->

                <form action="" method="POST" class="u-clearfix u-form-spacing-14 u-inner-form" style="padding: 0px;"
                  source="email" name="form">
                  <div class="u-form-group u-form-name u-form-partition-factor-2 u-label-top u-form-group-1">

                    <label for="name-934b" class="u-label">First Name</label>
                    <input type="text" placeholder="Enter your First Name" id="name-934b" name="first_name"
                      class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-1" required=""
                      maxlength="20">

                  </div>
                  <div class="u-form-group u-form-name u-form-partition-factor-2 u-label-top u-form-group-2">

                    <label for="name-934b" class="u-label">Last Name</label>
                    <input type="text" placeholder="Enter your Last Name" id="name-934b" name="last_name"
                      class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-2" required=""
                      maxlength="20">

                  </div>
                  <div class="u-form-email u-form-group u-label-top">
                    <label for="email-5a14" class="u-label" wfd-invisible="true">Email</label>
                    <input type="email" placeholder="Enter a valid email address" id="email-5a14" name="email"
                      class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-3" required=""
                      maxlength="50">
                  </div>
                  <div class="u-form-group u-label-top u-form-group-4">
                    <label for="text-63ef" class="u-label">Password</label>
                    <input type="text" placeholder="Enter Your Password" id="text-63ef" name="password"
                      class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-4" required="required"
                      maxlength="20">
                  </div>
                  <div class="u-form-group u-form-phone u-label-top u-form-group-5">
                    <label for="phone-92f7" class="u-label">Phone</label>
                    <input type="tel" placeholder="Enter your phone (e.g. +14155552675)" id="phone-92f7" name="phone"
                      class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-5" required="">
                  </div>
                  <div class="u-form-country u-form-group u-label-top u-form-group-6">
                    <label for="country-cc6d" class="u-label">Country</label>
                    <div class="u-form-select-wrapper">
                      <select id="country-cc6d" name="country"
                        class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-6"></select>
                      <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px"
                        viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve">
                        <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                      </svg>
                    </div>
                  </div>
                  <div class="u-form-group u-form-partition-factor-2 u-label-top u-form-group-7">
                    <label for="name-cc6d" class="u-label">Street</label>
                    <input type="text" placeholder="Enter your street" id="name-cc6d" name="street"
                      class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-7">
                  </div>
                  <div class="u-form-group u-form-partition-factor-2 u-label-top u-form-group-8">
                    <label for="name-cc6d" class="u-label u-label-8">City</label>
                    <input type="text" placeholder="Enter your city" id="name-cc6d" name="city"
                      class="u-border-none u-grey-5 u-input u-input-rectangle u-radius-7 u-input-8">
                  </div>
                  <div class="u-form-group u-form-input-layout-vertical u-form-radiobutton u-label-top u-form-group-9">
                    <label class="u-form-control-hidden u-label"></label>
                    <div class="u-form-radio-button-wrapper">
                      <div class="u-input-row">
                        <input id="field-0b32" type="radio" name="radiobutton" value="user" class="u-field-input"
                          checked="checked" data-calc="user">
                        <label class="u-field-label" for="field-0b32">user</label>
                      </div>
                      <div class="u-input-row">
                        <input id="field-7a9d" type="radio" name="radiobutton" value="tour" class="u-field-input"
                          data-calc="Tour">
                        <label class="u-field-label" for="field-7a9d">Tour guide</label>
                      </div>
                    </div>
                  </div>
                  <div class="u-align-right u-form-group u-form-submit u-label-top">
                    <button
                      class="u-active-black u-border-none u-btn u-btn-round u-button-style u-hover-black u-palette-3-base u-radius-7 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1"
                      type="submit" name="submit">submit</button>
                  </div>


                  <!-- <div class="u-align-right u-form-group u-label-top">
                    <a href="#"
                      class="u-active-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-black u-palette-3-base u-radius-7 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1">Create
                      Account</a>
                    <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                  </div> -->

                  <!-- <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has
                    been sent. </div>
                  <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message.
                    Please fix errors then try again. </div> -->
                  <!-- <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true"> -->

                </form>

              </div>
              <h6 class="u-align-center u-text u-text-custom-color-4 u-text-3">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-4 u-text-hover-palette-2-base u-btn-2"
                  data-href="login.php" href="login.php"> Already have an account? Login</a>
              </h6>
              <h6 class="u-align-center u-text u-text-grey-25 u-text-5"> By creating an account you accept our<br>
              </h6>
              <h6 class="u-align-center u-text u-text-grey-25 u-text-6">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-hover-palette-2-base u-text-palette-1-base u-btn-4"
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