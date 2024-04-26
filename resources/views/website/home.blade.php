@extends('website.layout')
@section('pageTitle', 'Home')

@section('body')

    <div id="main-slider" data-slider-width="100%" data-slider-height="700px" data-slider-arrows="true"
        class="main-slider main-slider_mod-a slider-pro">
        <div class="sp-slides">
            <!-- Slide 1-->
            <div class="sp-slide"><img src="/website/assets/media/image/slider1.jpg" alt="slider" class="sp-image" />
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-10 col-sm-offset-1">
                            <h2 data-width="100%" data-show-transition="left" data-hide-transition="left"
                                data-show-duration="800" data-show-delay="400" data-hide-delay="400"
                                class="main-slider__title sp-layer">SECURING TODAY, SAFEGUARDING TOMORROW</h2>
                            <div data-width="100%" data-show-transition="left" data-hide-transition="left"
                                data-show-duration="800" data-show-delay="400" data-hide-delay="400"
                                class="main-slider__info sp-layer">Our proactive security solutions shape the future,
                                globally and across Africa.</div>
                            <div data-width="100%" data-show-transition="left" data-hide-transition="left"
                                data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                                <a href="/about" class="main-slider__btn btn btn-primary btn-sm btn-effect">LEARN MORE</a>
                                {{-- <a href="/about" class="main-slider__btn btn btn-default btn-sm btn-effect">learn more</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2-->
            <div class="sp-slide"><img src="/website/assets/media/image/slider2.png" alt="slider" class="sp-image" />
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-10 col-sm-offset-1">
                            <h2 data-width="100%" data-show-transition="left" data-hide-transition="left"
                                data-show-duration="800" data-show-delay="400" data-hide-delay="400"
                                class="main-slider__title sp-layer">ADVANCED SOLUTIONS FOR A SAFER TOMORROW</h2>
                            <div data-width="100%" data-show-transition="left" data-hide-transition="left"
                                data-show-duration="800" data-show-delay="400" data-hide-delay="400"
                                class="main-slider__info sp-layer">We bring AI, drones, and cybersecurity to forefront of
                                Nigeria’s defense. Innovating for your security</div>
                            <div data-width="100%" data-show-transition="left" data-hide-transition="left"
                                data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                                <a href="/about" class="main-slider__btn btn btn-primary btn-sm btn-effect">LEARN MORE</a>
                                {{-- <a href="services.html" class="main-slider__btn btn btn-default btn-sm btn-effect">learn more</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 3-->
            <div class="sp-slide"><img src="/website/assets/media/image/slider3.jpg" alt="slider" class="sp-image" />
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-10 col-sm-offset-1">
                            <h2 data-width="100%" data-show-transition="left" data-hide-transition="left"
                                data-show-duration="800" data-show-delay="400" data-hide-delay="400"
                                class="main-slider__title sp-layer">YOUR PEACE OF MIND, OUR PRIORITY</h2>
                            <div data-width="100%" data-show-transition="left" data-hide-transition="left"
                                data-show-duration="800" data-show-delay="400" data-hide-delay="400"
                                class="main-slider__info sp-layer">We protect homes, businesses, and communities. Making
                                safety a reality for everyone.</div>
                            <div data-width="100%" data-show-transition="left" data-hide-transition="left"
                                data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                                <a href="/about" class="main-slider__btn btn btn-primary btn-sm btn-effect">LEARN MORE</a>
                                {{-- <a href="services.html" class="main-slider__btn btn btn-default btn-sm btn-effect">learn more</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main-slider-->
    <section class="section-default wow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <h2 class="ui-title-block">We are Apollo Africa Security Systems</h2>
                        <div class="ui-subtitle-block">Apollo Africa Security Systems combines over 40 years of expertise
                            with advanced technology to protect Nigeria and beyond. Our focus is clear: provide reliable,
                            cutting-edge security solutions for every sector. From individual safety to national security,
                            Apollo is dedicated to your peace of mind</div>
                        <div class="ui-decor-type-1 center-block"></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <ul class="b-advantages-3">
                        <li class="b-advantages-3__item">
                            <div class="b-advantages-3__inner"><i
                                    class="b-advantages-3__icon color-primary flaticon-shield"></i>
                                <!-- <div class="b-advantages-3__subtitle">in business for 10 years</div> -->
                                <div class="b-advantages-3__title">EXPERTISE</div>
                            </div>
                            <div class="b-advantages-3__text">Leveraging more than 40 years of collective expertise in
                                Nigeria's security landscape, we're uniquely positioned to deliver advanced security
                                solutions for both current and future challenges.</div>
                        </li>
                        <li class="b-advantages-3__item">
                            <div class="b-advantages-3__inner"><i
                                    class="b-advantages-3__icon color-primary flaticon-umbrella"></i>
                                <!-- <div class="b-advantages-3__subtitle">protect you anywhere</div> -->
                                <div class="b-advantages-3__title">INNOVATION</div>
                            </div>
                            <div class="b-advantages-3__text">We offer advanced, state-of-the-art security technologies for
                                immediate threat anticipation and response.</div>
                        </li>
                        <li class="b-advantages-3__item">
                            <div class="b-advantages-3__inner"><i
                                    class="b-advantages-3__icon color-primary flaticon-cctv"></i>
                                <!-- <div class="b-advantages-3__subtitle">we offer 24/7 support</div> -->
                                <div class="b-advantages-3__title">CUSTOMIZATION</div>
                            </div>
                            <div class="b-advantages-3__text">Over 40 years of combined experience in the security
                                industry.</div>
                        </li>
                    </ul>
                    <!-- end b-advantages-3-->

                </div>
            </div>
        </div>
    </section>

    <div class="section-default wow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <h2 class="ui-title-block">NEWS AND BLOG POST</h2>
                        {{-- <div class="ui-subtitle-block">Elit sed aute dou eiusmod tempor incididunt labore dolore magna aliqua</div> --}}
                        <div class="ui-decor-type-1 center-block"></div>
                    </div>
                    <div data-min480="1" data-min768="2" data-min992="2" data-min1200="3" data-pagination="true"
                        data-navigation="false" data-auto-play="4000" data-stop-on-hover="true"
                        class="owl-carousel owl-theme enable-owl-carousel">
                        <article class="b-post b-post-5 clearfix">
                            <div class="entry-media"><a href="/website/assets/media/image/a.png"
                                    class="js-zoom-images"><img src="/website/assets/media/image/a.png" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    {{-- <div class="entry-date">15<span class="entry-date__month">may</span></div> --}}
                                    <h2 class="entry-title entry-title_spacing ui-title-inner">The Role of Advanced
                                        Surveillance in Enhancing Public Safety in Nigeria</h2>
                                    {{-- <div class="entry-meta"><span class="entry-meta__item"><i class="entry-meta__icon pe-7s-user"></i>by<a href="post-1.html" class="entry-meta__link">  Sandy</a></span><span class="entry-meta__item"><i class="entry-meta__icon pe-7s-comment"></i><a href="post-1.html" class="entry-meta__link">20</a></span></div> --}}
                                </div>
                                <div class="entry-content">
                                    <p>Delve into how advanced surveillance technologies are revolutionizing public safety
                                        across Nigeria, offering unprecedented capabilities in threat detection and law
                                        enforcement efficiency.</p>
                                </div>
                            </div>
                        </article>
                        <!-- end post-->

                        <article class="b-post b-post-5 clearfix">
                            <div class="entry-media"><a href="/website/assets/media/image/b.png"
                                    class="js-zoom-images"><img src="/website/assets/media/image/b.png" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    {{-- <div class="entry-date">15<span class="entry-date__month">may</span></div> --}}
                                    <h2 class="entry-title entry-title_spacing ui-title-inner">Leveraging Community-based
                                        Security Solutions for Safer Neighborhoods</h2>
                                    {{-- <div class="entry-meta"><span class="entry-meta__item"><i class="entry-meta__icon pe-7s-user"></i>by<a href="post-1.html" class="entry-meta__link"> Sandy</a></span><span class="entry-meta__item"><i class="entry-meta__icon pe-7s-comment"></i><a href="post-1.html" class="entry-meta__link">20</a></span></div> --}}
                                </div>
                                <div class="entry-content">
                                    <p>Discover how localized security initiatives are transforming Nigerian neighborhoods,
                                        fostering a culture of vigilance and cooperation for community-wide safety.</p>
                                </div>
                            </div>
                        </article>
                        <!-- end post-->

                        <article class="b-post b-post-5 clearfix">
                            <div class="entry-media"><a href="/website/assets/media/image/c.png"
                                    class="js-zoom-images"><img src="/website/assets/media/image/a.png" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    {{-- <div class="entry-date">15<span class="entry-date__month">may</span></div> --}}
                                    <h2 class="entry-title entry-title_spacing ui-title-inner">Navigating Nigeria's
                                        Security Landscape: Trends and Innovations</h2>
                                    {{-- <div class="entry-meta"><span class="entry-meta__item"><i class="entry-meta__icon pe-7s-user"></i>by<a href="post-1.html" class="entry-meta__link"> Sandy</a></span><span class="entry-meta__item"><i class="entry-meta__icon pe-7s-comment"></i><a href="post-1.html" class="entry-meta__link">20</a></span></div> --}}
                                </div>
                                <div class="entry-content">
                                    <p>Explore the evolving security challenges in Nigeria and how cutting-edge technologies
                                        are paving the way for more robust protection strategies and safer communities.</p>
                                </div>
                            </div>
                        </article>
                        <!-- end post-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-default section-table clearfix">
        <section class="b-form-request section-table__inner">
            <div style="background-image: url(/website/assets/media/components/b-form-request/bg-1.jpg)"
                data-jarallax="{&quot;type&quot;: &quot;scroll-opacity&quot;}"
                class="b-form-request__parallax section-bg section-bg_primary jarallax"></div>
            <div class="section__inner">
                <div class="b-form-request__inner">
                    <h2 class="b-form-request__title">SECURE YOUR TOMORROW TODAY!</span></h2>
                    <div class="b-form-request__text">
                        <p>Contact us for a personalized security consultation. Together, we can build a safer future.</p>

                    </div>
                </div>
                <form class="b-form-request__form">
                  @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" placeholder="Full Name" class="form-control" name="fullname"
                                id="fullname" />
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Company" class="form-control" name="company"
                                id="company" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="email" placeholder="Email" class="form-control" name="email"
                                id="email" />
                        </div>
                        <div class="col-sm-6">
                            <input type="tel" placeholder="Phone" class="form-control" name="phone"
                                id="phone" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="text" placeholder="Service Location (Address)" class="form-control"
                                name="location" id="location" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea rows="4" placeholder="Description of Service(s) Needed , Which Day / Date etc..."
                                class="form-control" name="service" id="service"></textarea>
                            <a class="btn btn-default btn-sm btn-effect" onclick="submitOpenAccount()">Submit request</a>
                        </div>
                    </div><i class="b-form-request__icon pe-7s-note2"></i>
                </form>
            </div>
        </section>
        <!-- end b-form-request-->
        <div class="b-type-d section-bg b-type-d_mod-a section-table__inner"></div>
        <!-- end b-type-d-->
    </div>

    {{-- <script>
        // Example using jQuery for AJAX submission
        $('.b-form-request__form').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url: "{{ route('submit-form') }}",
                method: 'POST',
                data: formData,
                success: function(response) {
                    // Handle success
                    alert('Form submitted successfully!');
                    $('.b-form-request__form')[0].reset(); // Reset form fields
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                    alert('An error occurred while submitting the form.');
                }
            });
        });
    </script> --}}



    <script>
        function isValidEmail(email) {
            // Regular expression pattern for email validation
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }

        function submitOpenAccount() {

            var fullname = $('#fullname').val();
            var company = $('#company').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var location = $('#location').val();
            var service = $('#service').val();

            if (!fullname || !email || !phone ) {
                Swal.fire({
                    title: 'Validation Error',
                    text: 'Please fill in all required fields.',
                    icon: 'error'
                });
                return;
            }

            if (!isValidEmail(email)) {
                Swal.fire({
                    title: 'Validation Error',
                    text: 'Please enter a valid email address.',
                    icon: 'error'
                });
                return;
            }

            // Create a data object to send via AJAX
            var data = {
                fullname: fullname,
                company: company,
                email: email,
                phone: phone,
                location: location,
                service: service,
                _token: '{!! csrf_token() !!}'
            };

            console.log("ajax post");
            $.ajax({
                url: "{{ route('submit-form') }}",
                method: 'POST',
                data: JSON.stringify(data),
                contentType: 'application/json',
                success: function(response) {
                    console.log(response);
                    Swal.fire({
                        title: 'Success!',
                        text: response.message,
                        icon: 'success',
                    }).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Failed to submit the form.',
                        icon: 'error'
                    });
                },
            });
        };
    </script>

@endsection
