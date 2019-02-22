@extends('layouts.app')

@section('content')
<div class="header-data bg-center bg-contain w-full -mt-5 h-full">
    <div class="container-fluid mx-auto flex items-center">
      <img src="/img/about-us.png" class="w-full" alt="">
    </div>
</div>
<div class="trainer bg-grey-light">
    <div class="container mx-auto">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase text-white pt-4 items-center">Who we are</h2>
        </div>
        <div class="container mx-auto flex items-center h-80">
            <div class="w-1/2">
                <div>
                    <h2>Team CADS</h2>
                </div>
                <div>
                    <p class="mt-5 mr-10">Just over 5 years ago we embarked on a journey of being the <strong>voice of data science & analytics </strong> in the ASEAN region. Data Science is rapidly transforming the future of Businesses and Governments. Data is king in today’s world. All decisions will be increasingly based on smart data analytics. As Data Missionaries, we seek to evangelize and mainstream the adoption of Data Science.
                    </p>
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <!-- <h2>Goals</h2> -->
                    <p class="mt-5 mr-10">
                      We also seek to be a one-stop platform and center of excellence for Data Science. That means we will enable and empower corporations across the entire value chain of Data Science & Analytics − whether it is training & coaching corporations to be data ready, developing data science talent in Malaysia, enabling businesses and governments to strategize and implement data solutions or whether it is incubating start-ups. <br> To put it simply, we seek to champion Data Science amongst businesses, governments, universities and individuals.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div>
                <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
                    <h2 class="uppercase text-white pt-4 items-center">We Are Different</h2>
                </div>
                <!-- Five columns -->
                <div class="flex mt-8 h-64">
                  <div class="flex-1 h-48">
                    <i class="fas fa-chart-line text-cads-cop1 fa-5x"></i>
                      <p class="mt-3">We have world class <br>education links and collaborations</p>
                  </div>
                  <div class="flex-1 h-48">
                      <i class="fas fa-arrow-alt-circle-down text-cads-sub1 fa-5x"></i>
                      <p class="mt-3">We offer leading edge <br>Global Expertise </p>
                  </div>
                  <div class="flex-1 h-48">
                    <i class="fas fa-address-card text-cads-sub2 fa-5x"></i>
                      <p class="mt-3">We set professional <br>standards for the industry </p>
                  </div>
                  <div class="flex-1 h-48">
                    <i class="fas fa-chart-area text-cads-sub3 fa-5x"></i>
                     <p class="mt-3">We are the architects of the <br> entire data analyst ecosystem</p>
                  </div>
                  <div class="flex-1 h-48">
                      <i class="fas fa-database text-cads-sub4 fa-5x"></i>
                      <p class="mt-3">We are a global knowledge<br> & market hub for Data Analytics</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="description bg-grey-light -mb-4">
    <div class="container mx-auto ">
        <div class="w-full">
            <div>
                <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
                    <h2 class="uppercase text-white pt-4 items-center">Our Business</h2>
                </div>
                <!-- Five columns -->
                <div class="flex mt-8">
                  <div class="flex-1 h-48">
                    <!-- <i class="fas fa-chart-line fa-5x"></i> -->
                      <h4 class="mt-3">Training & Education</h4>
                      <p class="px-1">We focus on training, education, coaching, developing and mentoring future data scientists of Malaysia.</p>
                  </div>
                  <div class="flex-1 h-48">
                      <!-- <i class="fas fa-arrow-alt-circle-down fa-5x"></i> -->
                      <h4 class="mt-3">Advisory</h4>
                      <p>We offer Data Analytics consulting services and solutions for businesses and governments.</p>
                  </div>
                  <div class="flex-1 h-48">
                    <!-- <i class="fas fa-address-card fa-5x"></i> -->
                      <h4 class="mt-3">Talent Development</h4>
                      <p class="px-1">We focus on sourcing, developing and recruiting Data Science Talent for Malaysian businesses.</p>
                  </div>
                  <div class="flex-1 h-48">
                    <!-- <i class="fas fa-chart-area fa-5x"></i> -->
                     <h4 class="mt-3">App & Technology <br> Development</h4>
                     <p class="px-1">We are focused on innovation, the advancement of technology and app development within the Data Science and Analytics space.</p>
                  </div>
                  <div class="flex-1 h-48">
                      <!-- <i class="fas fa-database fa-5x"></i> -->
                      <h4 class="mt-3">Ventures</h4>
                      <p class="px-1">We identify market opportunities to invest and incubate start ups.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
