@extends('website.layout')
@section('pageTitle', 'Contact Us' )

@section('body')

<div class="section-title-page parallax-bg parallax-light">
        <ul class="bg-slideshow">
          <li>
            <div style="background-image:url(/website/assets/media/content/title-page/1.jpg)" class="bg-slide"></div>
          </li>
        </ul>
        <div class="parallax__inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">
                <h1 class="b-title-page">Contact Us</h1>
                <!-- <div class="b-title-page__info">The approved contractor of Security Guard services, providing quality security services to many organizations &amp; private companies</div> -->
                <!-- end b-title-page-->
              </div>
              <div class="col-sm-5">
                <ol class="breadcrumb">
                  <li><a href="/">home</a></li>
                  <li class="active">contact us</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-contacts">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="text-center">
                <h6  class="ui-title-block ui-title-block_mod-a">Let's secure your peace of mind together. Contact Apollo Security Services today.</h6>
                <div class="ui-decor-type-1 center-block"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="b-contacts"><i class="b-contacts__icon pe-7s-flag"></i>
                <div class="b-contacts__name color-primary">location</div>
                <div class="b-contacts__contacts">1st Floor, </br>
                  Mega Mound Building </br>
                  1B Muri Okunola Extenstion </br>
                  Victoria Island, </br>
                  Lagos Nigeria</div>
              </div>
              <!-- end b-contacts-->
            </div>
            <div class="col-sm-4">
              <div class="b-contacts"><i class="b-contacts__icon pe-7s-call"></i>
                <div class="b-contacts__name color-primary">phone</div>
                <div class="b-contacts__contacts">+234 805 444 4994 </br>
                  +234 817 774 4444 </br>
                  +234 805 444 4995</div>
              </div>
              <!-- end b-contacts-->
            </div>
            <div class="col-sm-4">
              <div class="b-contacts"><i class="b-contacts__icon pe-7s-mail-open"></i>
                <div class="b-contacts__name color-primary">email</div>
                <div class="b-contacts__contacts">services@apollosystemsafrica.com</div>
              </div>
              <!-- end b-contacts-->
            </div>
          </div>
        </div>
      </div>
      {{-- <div id="map" class="map"></div> --}}
      <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6845999165157!2d3.4389450757534212!3d6.434543024189152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf54bd654aa13%3A0x1722c128544c7c38!2sMEGAMOUND%20HEAD%20OFFICE%20(Muri%20Okunola%20Extension)!5e0!3m2!1sen!2sgh!4v1713775809342!5m2!1sen!2sgh" width="1800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      <div class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <form action="#" method="post" class="ui-form ui-form-2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text" placeholder="Full Name" name="name" id="name" class="form-control">
                        <input type="email" placeholder="Email Address" name="email" id="email" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <input type="tel" placeholder="Company" name="company" id="company" class="form-control">
                        <input type="text" placeholder="Phone" name="phone" id="phone" class="form-control">
                      </div>
                    </div>
                    <button class="ui-form__btn btn btn-primary btn-sm btn-effect btn-block">send the message</button>
                  </div>
                  <div class="col-md-6">
                    <textarea rows="7" placeholder="Message" name="message" id="message" class="form-control"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <div class="section-default section-default_top-padd">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="text-center mb-5 pb-4">
                <h2 class="ui-title-block b-4">FAQ</h2>
                <div class="ui-decor-type-1 ui-decor-type-1_marg-bott_a center-block"></div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="accordion-1" class="panel-group accordion accordion_marg-top_a">
                <div class="panel panel-default">
                  <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1" class="btn-collapse"><i class="icon"></i></a>
                    <h3 class="panel-title">How does Apollo Africa Security Systems customize solutions for different clients?</h3>
                  </div>
                  <div id="collapse-1" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>We begin with a thorough assessment of each client's specific security needs and challenges. Our team then designs a tailored security strategy that integrates the latest technology and best practices, ensuring a personalized solution that meets the unique requirements of homes, businesses, or government entities.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2" class="btn-collapse collapsed"><i class="icon"></i></a>
                    <h3 class="panel-title">What measures does Apollo take to ensure the reliability of its security technologies?</h3>
                  </div>
                  <div id="collapse-2" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Apollo prioritizes the use of state-of-the-art technology from leading manufacturers, complemented by rigorous testing and regular updates. We also provide comprehensive training to ensure that our clients and their staff are proficient in the use of our security systems.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3" class="btn-collapse collapsed"><i class="icon"></i></a>
                    <h3 class="panel-title">Can Apollo's security solutions integrate with existing systems?</h3>
                  </div>
                  <div id="collapse-3" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Yes, our solutions are designed for seamless integration with existing security infrastructure. Our technical team works closely with clients to ensure compatibility and enhance the overall effectiveness of their security measures without the need for complete overhauls.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-4" class="btn-collapse collapsed"><i class="icon"></i></a>
                    <h3 class="panel-title"> What kind of support does Apollo offer post-installation?</h3>
                  </div>
                  <div id="collapse-4" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Apollo provides ongoing support and maintenance for all our installations. This includes 24/7 monitoring services, rapid response to any issues, and regular system updates to ensure optimal performance and security.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end panel-->
              
            </div>
          </div>
        </div>
      </div>



    <script>
      var map = L.map('map').setView([51.505, -0.09], 13);

      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([51.5, -0.09]).addTo(map)
          .bindPopup('Apollo')
          .openPopup();
  </script>

@endsection