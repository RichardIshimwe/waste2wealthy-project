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
               <p>You are free to buy electricity anytine and anywhere</p>
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
         <div class="col-md-6">
            <div class="message-box">
               <h2>Making electricity</h2>
               <p class="lead">We produce  electricity </p>
               <h2>Selling electricity</h2>
               <p class="lead">We sell electricity and provide employment opportunities to people.</p>
            </div>
            <!-- end messagebox -->
         </div>
         <!-- end col -->
         </div>
         <!-- end col -->
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
               <h3>Individuals(households)</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="photos/go  kabisa.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="photos/go  kabisa.jpeg" alt="" class="img-responsive">
               </div>
               <h3>Go Kabisa</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="photos/ampersand.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="photos/ampersand.jpg" alt="" class="img-responsive">
               </div>
               <h3>Ampersand</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="photos/university.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="photos/university.jpeg" alt="" class="img-responsive">
               </div>
               <h3>Organizations</h3>
            </div>
            <!-- end service -->
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<div id="service" class="services wow fadeIn">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
             <div class="inner-services">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv"> <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
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
