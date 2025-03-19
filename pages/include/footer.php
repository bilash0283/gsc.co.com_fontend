<footer id="footer" class="footer">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6">
          <h2><strong>Subscribe to our Newsletter</strong></h2>

          <p>Get all the latest updates, announcements, and special offers directly to your inbox!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" placeholder="example@gmail.com" name="email"><input
                type="submit" value="Subscribe">
            </div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6 text-start">
          <h2><strong>Most comprehensive Education Consultancy Agency</strong></h2>
        </div>
        <div class="col-lg-6">
          <button class=" border-none fw-semibold reg_btn"><a href="https://ci-gsc.com/">LOGIN</a></button>
          <button class=" border-none text-white fw-semibold reg_btn_hover p-2 m-3"><a href="https://ci-gsc.com/"
              class="text-white">REGISTATION</a></button>
        </div>
      </div>
    </div>
  </div>

  <div class="container footer-top">
    <div class="row gy-4">

      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.php" class="d-flex align-items-center">
          <img src="./assets/src_gsc/favicon2.png" alt="" class="img-fluid mx-auto" style="width:120px;height: 120px;">
        </a>
        <div class="row">
          <div class="col-md-6 my-2">
            <div class="footer-contact">
              <p><strong class="text-info">Bangladesh</strong></p>
              <p href="#"><i class="bi bi-geo-alt-fill text-info"></i> House-54/A(1st Floor), Road-132,<br>
                Gulshan-1, Dhaka
              </p>
              <p><i class="bi bi-envelope-fill text-info"></i> info@ci-gsc.com</p>
              <p><i class="bi bi-telephone-fill text-info mr-2"></i>+880 1990225993</p>
            </div>
          </div>
          <div class="col-md-6 my-2">
            <div class="footer-contact">
              <p><strong class="text-info">Switzerland</strong></p>
              <p href="#"><i class="bi bi-geo-alt-fill text-info"></i> Av de travail 19,<br>
                1007 Lausanne
              </p>
              <p><i class="bi bi-envelope-fill text-info"></i> swiss@ci-gsc.com</p>
              <p><i class="bi bi-telephone-fill text-info mr-2"></i>+41 079 471 95 92 </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="student.php">Students</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="institute.php">Institutes</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="agent.php">Agents</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="institute.php">Service Providers</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Countries</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="australia.php" class="text-uppercase">AUSTRALIA</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="canada.php" class="text-uppercase">CANADA</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="denmark.php" class="text-uppercase">DENMARK</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="usa.php" class="text-uppercase">USA</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="uk.php" class="text-uppercase">UK</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12">
        <h4>Follow Us</h4>
        <p>Follow us on social media for updates, news, and more!</p>
        <div class="social-links d-flex">
          <a href="https://twitter.com/StudyContacts" target="_blank"><i class="bi bi-twitter-x"></i></a>
          <a href="https://www.facebook.com/GSCStudyAbroad/" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/gsc_study_abroad/" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/company/global-study-contacts-gsc/" target="_blank"><i
              class="bi bi-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>
<!-- Preloader -->
<div id="preloader"></div>
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<!-- script for copy and inspact disabled  -->
<script>
  // Right Click Disable
  document.addEventListener('contextmenu', event => event.preventDefault());

  // Prevent Keyboard Shortcuts
  document.addEventListener("keydown", function (event) {
    if (
      event.ctrlKey &&
      (event.key === "u" || event.key === "U" ||  // Ctrl + U
        event.key === "c" || event.key === "C" ||  // Ctrl + C
        event.key === "x" || event.key === "X" ||  // Ctrl + X
        event.key === "v" || event.key === "V" ||  // Ctrl + V
        event.key === "p" || event.key === "P" ||  // Ctrl + P
        event.key === "s" || event.key === "S")    // Ctrl + S
    ) {
      event.preventDefault();
      alert("Copying and inspecting elements are disabled.");
    }
  });

  // Prevent Developer Tools (F12, Ctrl+Shift+I, Ctrl+Shift+J)
  document.addEventListener("keydown", function (event) {
    if (event.key === "F12" ||
      (event.ctrlKey && event.shiftKey && (event.key === "I" || event.key === "i" || event.key === "J" || event.key === "j"))
    ) {
      event.preventDefault();
      alert("Developer tools are disabled.");
    }
  });

  // Prevent Dragging (for image and text selection)
  document.addEventListener("dragstart", event => event.preventDefault());
</script>

</body>

</html>