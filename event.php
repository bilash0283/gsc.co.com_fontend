<?php include "./pages/include/header.php"; ?>

<main class="main">
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action dark-background" style="margin-top: 98px;">
        <img src="assets/src_gsc/image/l3/event.jpg" alt="">
        <div class="container">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-9 text-center text-xl-center mx-auto">
                    <h1 class="text-white display-5 fw-semibold"><strong>GSC Events in 2025</strong></h1>
                    <p class="text-white">World’s Unique Educational Experience</p>
                    <div class="col-xl-3 cta-btn-container text-center mx-auto mt-5">
                        <a href="#event_register"
                            class=" border-none  fw-semibold reg_btn_hover text-white px-5 py-3 cursor-pointer">REGISTATION</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Call To Action Section -->

    <!-- business model  -->
    <section id="b2b_section">
        <div class="container">
            <h1 class="text-uppercase text-center"><strong>our business model</strong></h1>
            <div class="row  text-center pt-4">
                <div class="col-md-4 gap-5">
                    <i class="bi bi-people fs-3 "
                        style="padding: 10px 15px;border-radius: 50%;border: 3px solid #47b2e4;"></i>
                    <h5 class="my-3"><strong>B2B</strong></h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-globe fs-3"
                        style="padding: 10px 15px;border-radius: 50%;border: 3px solid #47b2e4;"></i>
                    <h5 class="my-3"><strong>B2C</strong></h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-bullseye fs-3 "
                        style="padding: 10px 15px;border-radius: 50%;border: 3px solid #47b2e4;"></i>
                    <h5 class="my-3"><strong>School Visits</strong></h5>
                </div>
            </div>
        </div>
    </section>
    <!-- business model  -->

    <!-- our previous events -->
    <section class="previous_event">
        <div class="container">
            <h1 class="text-center"><strong>Our Previous Events</strong></h1>
            <div class="row pt-5">
                <div class="col-md-4 p-2">
                    <img src="./assets/src_gsc/image/events/event2024 (1).jpeg" class="rounded-3 img-fluid event-img"
                        alt="" style="width: 100%; height: 250px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#eventModal" onclick="showModal(this)">
                </div>
                <div class="col-md-4 p-2">
                    <img src="./assets/src_gsc/image/events/event2024 (2).jpeg" class="rounded-3 img-fluid event-img"
                        alt="" style="width: 100%; height: 250px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#eventModal" onclick="showModal(this)">
                </div>
                <div class="col-md-4 p-2">
                    <img src="./assets/src_gsc/image/events/event2024 (3).jpeg" class="rounded-3 img-fluid event-img"
                        alt="" style="width: 100%; height: 250px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#eventModal" onclick="showModal(this)">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 p-2">
                    <img src="./assets/src_gsc/image/events/event2024 (4).jpeg" class="rounded-3 img-fluid event-img"
                        alt="" style="width: 100%; height: 250px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#eventModal" onclick="showModal(this)">
                </div>
                <div class="col-md-4 p-2">
                    <img src="./assets/src_gsc/image/events/event2024 (5).jpeg" class="rounded-3 img-fluid event-img"
                        alt="" style="width: 100%; height: 250px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#eventModal" onclick="showModal(this)">
                </div>
                <div class="col-md-4 p-2">
                    <img src="./assets/src_gsc/image/events/event2024 (6).jpeg" class="rounded-3 img-fluid event-img"
                        alt="" style="width: 100%; height: 250px; object-fit: cover;" data-bs-toggle="modal"
                        data-bs-target="#eventModal" onclick="showModal(this)">
                </div>
            </div>
        </div>
    </section>
    <!-- our previous events -->

    <!-- Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Event Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid rounded-3" alt="Event Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Call To Action Section -->
    <section id="event_register" class="call-to-action">
        <img src="assets/src_gsc/image/l3/overley_img.jpg" alt="">
        <div class="container">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-12 text-white mx-auto">
                    <h1 class="text-white"><strong>Register to GSC Events in 2025</strong></h1>
                    <p class="text-white">Fill in the registration form to express your interest in GSC events
                        planned for 2025. GSC Team will contact you shortly.</p>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control my-1 " id="name" name="name"
                                        placeholder="Full Name" required>
                                </div>
                                <div>
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control my-1 " id="email" name="email"
                                        placeholder="Enter E-mail" required>
                                </div>
                                <div>
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control my-1 " id="phone" name="phone"
                                        placeholder="Phone Number" required>
                                </div>
                                <div>
                                    <label for="Institute">Institute</label>
                                    <input type="text" class="form-control my-1 " id="Institute" name="Institute"
                                        placeholder="Institute Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="Institute_type">Institute Type</label>
                                    <select name="Institute_type" id="Institute_type" class="form-control my-1">
                                        <option value="">--Please choose an option--</option>
                                        <option value="Educational institution (university, college, school, etc.)">
                                            Educational institution (university, college, school, etc.)</option>
                                        <option value="Student recruitment agency">Student recruitment agency
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label for="inputProjectLeader">Nationality <span
                                            class="text-white">*</span></label>
                                    <select name="country" id="inputProjectLeader" class="form-control text-uppercase" required>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Eswatini">Eswatini</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="destinations">Choose your destinations</label>
                                    <select name="destinations" id="destinations" class="form-control text-uppercase">
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Eswatini">Eswatini</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="message">Message <span class="text-white">*</span></label>
                                <textarea name="message" id="message" class="form-control my-2" placeholder="Message"
                                    rows="10" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="reg_btn_hover text-white my-3" name="btn">Send <i
                                class="bi bi-send-plus"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- /Call To Action Section -->
</main>

<?php 
    // database file connected 
    $db = mysqli_connect('localhost','root','','gsc');

        if(isset($_POST['btn'])){
            // all input fild data rechive from 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $Institute = $_POST['Institute'];
        $Institute_type = $_POST['Institute_type'];
        $country = $_POST['country'];
        $destinations = $_POST['destinations'];

        $sql = "INSERT INTO events (name,email,phone,Institute,Institute_type,country,destinations) VALUE ('$name','$email','$phone','$Institute','$Institute_type','$country','$destinations')";

        $res = mysqli_query($db,$sql);

        if($res){
            echo "Registation Successfull";
        }else{
            echo "Registation Faild";
        }
    }
    

?>

<script>
    function showModal(element) {
        document.getElementById("modalImage").src = element.src;
    }
</script>
<?php include "./pages/include/footer.php"; ?>





