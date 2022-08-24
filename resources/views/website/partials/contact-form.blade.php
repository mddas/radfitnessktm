<section class="contact-form-front" id="registration">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="text-center">Registration Form</h3>
                <p class="text-center">Have a question about a service, feedback,or business inquiry for fitness
                    Park?</p>
            </div>
        </div>

        <form action="{{route('contact.store')}}" method="POST">
            {{csrf_field()}}
            <div class="row contact_form">
                <div class="col-lg-6 col-md-6 col-sm-12">

                        <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" class="wpcf7-form-control wpcf7-text " name="name" placeholder="Name">
                                </span>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">

                        <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" class="wpcf7-form-control wpcf7-text"
                                           placeholder="Email">
                                </span>

                </div>
                <div class="col-lg-12">

                        <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" class="wpcf7-form-control wpcf7-text " name="address" placeholder="Address">
                                </span>

                </div>
                <div class="col-lg-12">

                        <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" class="wpcf7-form-control wpcf7-text " name="phone" placeholder="Phone">
                                </span>

                </div>
                <div class="col-lg-12">

                        <span class="wpcf7-form-control-wrap your-email">
                                    <input type="text" name="subject" class="wpcf7-form-control wpcf7-text"
                                           placeholder="Subject">
                                </span>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">

                    <label class="label text-center">Prefered Date</label>
                    <input type="date" id="text" name="prefered_date" placeholder="Date" class="input">

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">

                    <label class="label  text-center">Prefered Time</label>
                    <input type="time" id="text" name="prefered_time" placeholder="Subject" class="input">

                </div>

                <div class="col-lg-12 c col-sm-12">

                        <span class="wpcf7-form-control-wrap your-message">
                                    <textarea name="message" class="wpcf7-form-control wpcf7-textarea"
                                              style="height: 75px" placeholder="Type Your Message"></textarea>
                                </span>

                </div>
                <div class="col-lg-12 c col-sm-12">

                    <input type="submit" value="SUBMIT" >
                </div>

            </div>
    </div>

</section>