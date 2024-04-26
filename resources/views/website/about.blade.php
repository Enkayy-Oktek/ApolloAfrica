@extends('website.layout')
@section('pageTitle', 'About Us' )

@section('body')
    
<div class="section-title-page parallax-bg parallax-light" style="height:200px !mportant">
        <ul class="bg-slideshow">
          <li>
            <div style="background-image:url(/website/assets/media/image/aboutUsBanner.png)" class="bg-slide"></div>
          </li>
        </ul>
        <div class="parallax__inner">
          <div class="container">
            <div class="row">
              <div class="col-sm-7">
                <h1 class="b-title-page">About Us</h1>
                <!-- <div class="b-title-page__info">The approved contractor of Security Guard services, providing quality security services to many organizations &amp; private companies</div> -->
                <!-- end b-title-page-->
              </div>
              <div class="col-sm-5">
                <ol class="breadcrumb">
                  <li><a href="/">home</a></li>
                  <li class="active">about us</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
     
      <div class="section-default section_border-bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <section class="b-type-b b-type-b_mod-a">
                  <div class="col-sm-6"><img src="/website/assets/media/image/ourstory.png" alt="Foto" class="img-responsive"></div>
                <div class="b-type-b__inner">
                  <h2 class="b-type-b__title ui-title-inner-1">Our Story</h2>
                  <!-- <div class="b-type-b__subtitle ui-subtitle-block">More than five decades in industry gives us the power to perform every day and every time.</div> -->
                  <div class="b-type-b__text">
                    <p>Apollo Security Services is founded and run by veteran security service personnel, each with an extensive background in law enforcement and security management. With over 40 years of collective experience, our team brings a wealth of knowledge and insight into every operation, ensuring our clients benefit from the highest standards of security. Our deep understanding of national security landscapes enables us to craft bespoke solutions that meet the unique challenges faced by our clients.</p>
                  </div>
                </div>
              </section>
              <!-- end b-type-b-->
              
            </div>
          </div>
        </div>
      </div>

      <section class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h2 class="ui-title-inner-1">Our Mission</h2>
              <!-- <div class="ui-subtitle-block ui-subtitle-block_mr-btm_sm">WeGuard has over 10 years of experience as a security company.</div> -->
              <p>Dedicated to providing advanced, bespoke security solutions, Apollo's mission revolves around addressing the specific needs and challenges of our clients. Our approach—blending state-of-the-art technology with profound local and international security insights—guarantees peace of mind in an unpredictable world, ensuring our clients' preparedness and resilience against threats.</p>
            </div>
            <div class="col-sm-6"><img src="/website/assets/media/image/mission.png" alt="Foto" class="img-responsive"></div>
          </div>
        </div>
      </section>

      <section class="section-default section-default_top-padd">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="ui-title-block text-center">Our Values</h2>
              <ul class="b-advantages-3 b-advantages-3_mod-a">
                <li class="b-advantages-3__item">
                  <div class="b-advantages-3__title color-primary">Integrity</div>
                  <div class="b-advantages-3__subtitle">Integrity forms the foundation of all our operations and relationships at Apollo Security Services. We operate with transparency, honesty, and ethical principles, ensuring our clients can trust us to protect their interests with unwavering dedication and moral fortitude. Our reputation is built on the trust we earn through our actions every day</div>
                </li>
                <li class="b-advantages-3__item">
                  <div class="b-advantages-3__title color-primary">Innovation</div>
                  <div class="b-advantages-3__subtitle">At Apollo, innovation is the cornerstone of our approach to security. We continuously explore and adopt the latest technologies and strategies to stay ahead of threats. Our commitment to innovation ensures we can provide the most effective, advanced solutions that keep our clients safe in an ever-evolving security landscape.</div>
                </li>
                <li class="b-advantages-3__item">
                  <div class="b-advantages-3__title color-primary">Customer Centric</div>
                  <div class="b-advantages-3__subtitle">Our mission centers on understanding and meeting the unique needs of each client. We listen, adapt, and respond with personalized solutions designed to address specific security challenges. Customer satisfaction drives us to exceed expectations, delivering service and support that ensure peace of mind and foster long-term partnerships.</div>
                </li>
              </ul>
              <!-- end b-advantages-3-->
            </div>
          </div>
        </div>
      </section>

      <div class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="text-center">
                <h2 class="ui-title-block">Our Team</h2>
                <div class="ui-subtitle-block">Behind the Shield: Our Expert Team</div>
                <div class="ui-decor-type-1 center-block"></div>
              </div>
            </div>
          </div>
          <div data-min480="1" data-min768="2" data-min992="2" data-min1200="3" data-pagination="true" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
            <section class="b-team">
              <div class="b-team__media"><img src="/website/assets/media/image/default.png" alt="Foto" class="img-responsive"/></div>
              <h3 class="b-team__name">AIG Imohimi Edgal (Rtd)</h3>
              <div class="b-team__category">MD / CEO</div>
            
              <!-- end social-list-->
            </section>
            <!-- end b-team-->
            <section class="b-team">
              <div class="b-team__media"><img src="/website/assets/media/image/default.png" alt="Foto" class="img-responsive"/></div>
              <h3 class="b-team__name">Engr. Chibuzo Obi</h3>
              <div class="b-team__category">TECHNICAL DIRECTOR</div>
           
              <!-- end social-list-->
            </section>
            <!-- end b-team-->
            <section class="b-team">
              <div class="b-team__media"><img src="/website/assets/media/image/default.png" alt="Foto" class="img-responsive"/></div>
              <h3 class="b-team__name">Bello Tunde</h3>
              <div class="b-team__category">COMMS. TECHNOLOGY SPECIALST</div>
              <!-- end social-list-->
            </section>
            <!-- end b-team-->
          </div>
        </div>
      </div>

@endsection