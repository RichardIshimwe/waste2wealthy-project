@extends('layouts.app')
@section('content')
<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('photos/bulb.jpg');" {{ $app = App\Models\general_settings::latest()->first() }}>
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="text-contant">
               <h2>
                  <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to Waste2wealth", "We care about your work", "We provide electricity to the society!" ]'  style="color:white;">
                  <span class="wrap"></span>
                  </a>
               </h2>
            </div>
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
<div id="time-table" class="time-table-section">
   <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time one" style="background:#2A1F3F;">
               <span class="info-icon"><i class="fa fa-car" aria-hidden="true"></i></span>
               <h3>Our products</h3>
               <p>We provide electricity to households, companies, electric vehicles like cars and motorcycles </p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time middle" style="background:#2A1F3F;">
               <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
               <h3>We are open 24/7</h3>
               <p>You are free to buy electricity anytine and anywhere.</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time three" style="background:#2A1F3F;">
               <span class="info-icon"><i class="fa fa-money" aria-hidden="true"></i></span>
               <h3>Cost</h3>
               <p>The electricity we sell is affordable and this was also our goal in producing it so that everyone can afford to use it</p>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="about" class="section wow fadeIn">
   <div class="container">
      
      <!-- end title -->
       <div class="heading">
         <h2>What we do</h2>
      </div>
      <div class="row">
         <div class="">
            <div class="message-box">
               <h2>Making electricity</h2>
               <p class="lead">
               With Waste2Wealthy, we have pioneered a groundbreaking initiative that transforms the conventional notion of waste into a sustainable source of wealth. Our mission is to harness the untapped potential within human waste, turning it into a valuable resource that benefits both the environment and society.

Through cutting-edge technology and innovative processes, we specialize in producing electricity from human waste. By leveraging the power of biogas generation, we convert organic matter into a clean and renewable energy source. This not only helps to reduce the carbon footprint but also provides a reliable and eco-friendly alternative to traditional energy production.

In addition to generating electricity, we take our commitment to sustainability a step further by recycling the water content from human waste. Our advanced water recycling system ensures that the water extracted during the process is purified and made available for reuse, particularly in the context of flushing systems. This closed-loop approach minimizes water wastage and promotes a circular economy, contributing to the conservation of this precious resource.

With Waste2Wealthy, we envision a future where waste is no longer a burden but a valuable asset. By transforming what was once considered a problem into a solution, we strive to create a cleaner, greener, and more sustainable world. Join us on this journey towards environmental stewardship and economic prosperity, as we turn waste into wealth for the benefit of our planet and future generations </p>
               <h2>Selling electricity</h2>
               <p class="lead">
               With Waste2Wealthy, our commitment extends beyond the realm of environmental sustainability to encompass social impact. By ingeniously converting human waste into a lucrative source of electricity, we not only contribute to a greener planet but also actively create employment opportunities for individuals in our communities.

Our state-of-the-art waste-to-energy technology transforms organic matter from human waste into a clean and renewable power source, thus reducing our dependence on conventional energy and lowering overall carbon emissions. As a result, we not only generate electricity but also open doors to a brighter future for our workforce.

Through strategic partnerships and community engagement, we prioritize job creation, empowering individuals with meaningful employment opportunities in various facets of our operations. Whether it's skilled technicians overseeing our cutting-edge processes, or community outreach teams fostering awareness about sustainable practices, With Waste2Wealthy is at the forefront of both environmental innovation and social progress.

Every kilowatt-hour sold not only powers homes and businesses but also fuels the engine of economic growth within our communities. Join us in reshaping the narrative around waste, as we illuminate homes, empower lives, and forge a sustainable future that benefits us all
               </p>
            </div>
            <!-- end messagebox -->
         </div>
      </div>
      <!-- end row -->
      <hr class="hr1">
      <div class="row">
          <div class="heading">
         <h2>OUR TARGET CUSTOMERS</h2>
      </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="photos/house.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="photos/house.jpg" alt="" class="img-responsive">
               </div>
               <h3 style="background:#2A1F3F;">Individuals(households)</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="photos/kabisa.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="photos/kabisa.jpeg" alt="" class="img-responsive">
               </div>
               <h3 style="background:#2A1F3F;">Go Kabisa</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="photos/ampersand.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="photos/ampersand.jpg" alt="" class="img-responsive">
               </div>
               <h3 style="background:#2A1F3F;">Ampersand</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="photos/university.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="photos/university.jpeg" alt="" class="img-responsive">
               </div>
               <h3 style="background:#2A1F3F;">Organizations</h3>
            </div>
            <!-- end service -->
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<div id="service" class="services wow fadeIn" style="background:#2A1F3F;">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
             <div class="inner-services">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv"> 
                      <h4>INSTALLATION</h4>
                      <p>Reach out for you want to install this electricity.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
      
                      <h4>FIXING/ REPAIRING</h4>
                      <p>In need of repairing feell free to call us and we will be happy to help</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                     
                      <h4>JOB opportunities</h4>
                      <p>If you are interested in what we do and you want a job  you can also contact us</p>
                   </div>
                </div>
             </div>
          </div>
          @livewire('appointmentform')
       </div>
    </div>
 </div>
@livewire('contactus')
</div>

@endsection
