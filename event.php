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
                        <a href="https://ci-gsc.com/"
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
                <div class="col-md-4">
                    <i class="bi bi-people fs-3"></i>
                    <h5 class="my-3"><strong>B2B</strong></h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-globe fs-3"></i>
                    <h5 class="my-3"><strong>B2C</strong></h5>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-bullseye fs-3 "></i>
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
    <section id="call-to-action" class="call-to-action">
        <img src="assets/src_gsc/image/l3/overley_img.jpg" alt="">
        <div class="container">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-12 text-white mx-auto">
                    <h1 class="text-white"><strong>Register to GSC Events in 2025:</strong></h1>
                    <p class="text-white">Fill in the registration form to express your interest in GSC events
                        planned for 2025. GSC Team will contact you shortly.</p>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control my-1 " id="name" name="name"
                                        placeholder="Full Name">
                                </div>
                                <div>
                                    <label for="eamil">E-mail</label>
                                    <input type="email" class="form-control my-1 " id="email" name="eamil"
                                        placeholder="Enter E-mail">
                                </div>
                                <div>
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control my-1 " id="phone" name="phone"
                                        placeholder="Phone Number">
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
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control my-1 " id="country" name="country"
                                        placeholder="Country Name">
                                </div>
                                <div>
                                    <label for="destinations">Choose your destinations</label>
                                    <select name="destinations" id="destinations" class="form-control">
                                        <option value="">--Select your Destinations--</option>
                                        <option value="USA">USA</option>
                                        <option value="UK">UK</option>
                                        <option value="CANADA">CANADA</option>
                                        <option value="AUSTRALIA">AUSTRALIA</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="form-control" placeholder="Message"
                                    rows="10"></textarea>
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




<script>
    function showModal(element) 
    {
    document.getElementById("modalImage").src = element.src;
    }
</script>
<?php include "./pages/include/footer.php"; ?>