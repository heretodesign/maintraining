@extends('layouts.app')

@section('content')
<!-- Full width column -->
<div class="training header-data bg-grey -mt-4 h-144">
    <div class="container mx-auto flex items-center h-64">
      <div class="flex-1 px-6 h-64">
          <h1 class="uppercase text-white mt-5 text-5xl items-center">training </h1>
            <h2 class="uppercase mt-5 text-grey-light items-center">All the info regarding training <i class="fas fa-angle-double-down"></i></h2>
      </div>
    </div>
</div> 

<div class="trainer bg-grey-light">
    <div class="container mx-auto ">
        <div class="flex-1 bg-grey px-6 h-16 w-1/2">
            <h2 class="uppercase items-center">Thecads: Lead Instructor</h2>
        </div>
        <div class="container mx-auto flex items-center -mt-16 h-112">
            <div class="w-1/4">
                <div>
                    <img src="/img/darren-01.png" alt="profile-pictuer" class="rounded-full h-48 w-48 border-b-2 border-solid border-black">
                </div>
                <div>
                    <h2 class="mt-5 ml-5">Darren Chong</h2>
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <p class="pr-8 mr-5">Darren is an MSc. Management
                        graduate with Distinction from Warwick
                        Business School transitioning into Data
                        Science from the world of business. His
                        prior work experience spans a broad
                        range of industries including
                        management consulting, education and
                        public relations. At the Center of
                        Applied Data Science, Darren helps
                        organizations unlock latent value
                        hidden in their data by generating and communicating actionable insights
                        to decision-makers. <br> <br>
                        As a trainer, Darren uses his business
                        management background to provide
                        business context to theoretical
                        concepts covered in class. He provides
                        training in Functional Programming
                        and Machine Learning but mainly
                        specializes in Data Visualization & Darren Chong Storytelling.
                    </p>
                </div>
            </div>
            <div class="w-1/4 flex justify-end items-center h-48">       
                <div>
                    <h2>Connect with Darren</h2>
                    <ul class="list-reset flex px-4">
                        <li class="text-center py-3">
                            <a href="https://www.facebook.com/thecads.org/" class="mr-5 ml-5"><i class="fab fa-facebook fa-3x text-blue"></i></a>
                        </li>
                        <li class="text-center py-3">
                            <a href="https://www.linkedin.com/in/darrenchongky/" class="mr-5 ml-5"><i class="fab fa-linkedin fa-3x text-blue"></i></a>
                        </li>
                        <li class="text-center py-3 px-4">
                            <a href="info@thecads.org" class="mr-5 ml-5"><i class="fas fa-envelope-square  fa-3x text-blue"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="trainer bg-grey-light">
    <div class="container mx-auto ">
        <div class="flex-1 bg-grey px-6 h-16 w-1/2">
            <h2 class="uppercase items-center">Thecads: Lead Instructor</h2>
        </div>
        <div class="container mx-auto flex items-center -mt-16 h-112">
            <div class="w-1/4">
                <div>
                    <img src="/img/Vinod.jpeg" alt="profile-pictuer" class="rounded-full h-48 w-48 border-b-2 border-solid border-black">
                </div>
                <div>
                    <h2 class="mt-5 ml-5">Dr. Vinod <br> A. R. Ramachandran</h2>
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <p class="pr-8 mr-5">Dr. Vinod Ramachandran is a certified Data Science specialist with
                      10 years of Data Modelling experience. His expertise also covers
                      Statistics and Computational Intelligence where he researched the
                      implementation of computational algorithms and techniques in
                      the medical field (A full list of his publications is available at
                      www.goo.gl/S2CC2i). <br> <br> On top of that, Dr. Vinod has also been
                      granted a patent for his work on applying Genetic Algorithms in
                      modelling Epileptic Seizures. <br> <br> Currently, his interests revolve around
                      not only Data Science but also Geometric Modelling and
                      Topological Data analysis.
                    </p>
                </div>
            </div>
            <div class="w-1/4 flex justify-end items-center h-48">       
                <div>
                    <h2>Connect with Dr. Vinod </h2>
                    <ul class="list-reset flex px-4">
                        <li class="text-center py-3">
                            <a href="https://www.facebook.com/thecads.org/" class="mr-5 ml-5"><i class="fab fa-facebook fa-3x text-blue"></i></a>
                        </li>
                        <li class="text-center py-3">
                            <a href="https://www.linkedin.com/in/rvinod85/" class="mr-5 ml-5"><i class="fab fa-linkedin fa-3x text-blue"></i></a>
                        </li>
                        <li class="text-center py-3 px-4">
                            <a href="info@thecads.org" class="mr-5 ml-5"><i class="fas fa-envelope-square  fa-3x text-blue"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description bg-teal-light -mb-4">
    <div class="container mx-auto ">
        <div class="flex-1 bg-grey-darkest px-6 h-16 w-1/2">
            <h2 class="uppercase text-white items-center">Training Details</h2>
        </div>
        <div class="container mx-auto flex items-center -mt-16 h-112">
            <div class="w-1/3 h-64">
                <div>
                    <h2>Venue for Training</h2>
                    <p class="mt-5 mr-8">All training will be conducted at Shell Cyberjaya amphitheatre office. <br> <br>
                     <strong>Shell Business Service Centre Sdn. Bhd. (503619-D)</strong> <br>
                      Wisma Shell <br>
                      3450, Jalan Teknokrat 3 <br>
                      63000 Cyberjaya <br>
                      Selangor Darul Ehsan <br>
                      Tel: +603 8316 8888 <br>
                      Fax: +603 8686 9221 <br>
                    </p>
                </div>
            </div>
            <div class="w-1/3 h-64">
                <div>
                    <h2>What to bring for Training</h2>
                    <p class="mt-5 mr-8">
                      <i class="fas fa-laptop text-grey-darkest hover:text-orange fa-5x"></i>
                      <br><br> 1. Bring your notebook computer. <br>
                      2. All the softcopy and hardcopy notes will be provided during class. <br>
                    </p>
                    <br>
                </div>
            </div>
            <div class="w-1/3 h-64">
                <div>
                    <h2>Training Time</h2>
                    <p class="mt-5 mr-8">
                      <i class="far fa-clock text-grey-darkest hover:text-orange fa-5x"></i>
                     <br><br> Training is scheduled to start at 9am. <br>
                     Candidates are advised to be puntual, as training will commence on time.
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
