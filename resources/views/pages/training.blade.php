@extends('layouts.app')

@section('content')
<div class="header-data bg-center bg-contain w-full -mt-5 h-full">
    <div class="container-fluid mx-auto flex items-center">
      <img src="/img/training.png" class="w-full" alt="">
    </div>
</div>
<div class="header-data  bg-grey-light h-224">
    <div class="container mx-auto flex items-center h-112">
      <div class="flex-1 bg-grey-light px-6 h-112">
          <h1 class="uppercase mt-5 items-center">introduction to big data online & talent Assessment</h1>
            <!-- <h2 class="uppercase mt-5 mb-4 text-grey-darker items-center">1 Day course <i class="fas fa-angle-double-down"></i></h2> -->
            <img src="/img/dbo7.png" alt="">
      </div>
      <div class="flex-1 bg-grey-light px-6 h-112">
          <h1 class="uppercase mt-5 items-center">big data for senior managers </h1>
            <!-- <h2 class="uppercase mt-5 mb-4 text-grey-darker items-center">1 Day course <i class="fas fa-angle-double-down"></i></h2> -->
            <img src="/img/bds.png" alt="">
      </div>
    </div>
    <div class="container mx-auto flex items-center h-96">
      <div class="flex-1 bg-grey-light px-6 h-96">
          <h1 class="uppercase mt-5 items-center">big data for line managers </h1>
            <!-- <h2 class="uppercase mt-5 mb-4 text-grey-darker items-center">1 Day course <i class="fas fa-angle-double-down"></i></h2> -->
            <img src="/img/bdl.png" alt="">
      </div>
      <div class="flex-1 bg-grey-light px-6 h-96">
          <h1 class="uppercase mt-5 items-center">enterprise data pratitioner </h1>
            <!-- <h2 class="uppercase mt-5 mb-4 text-grey-darker items-center">3 Modules <i class="fas fa-angle-double-down"></i></h2> -->
            <img src="/img/edp.png" alt="">
      </div>
    </div>
</div> 
<div class="description bg-cads-cop1 -mb-4">
    <div class="container mx-auto ">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase pt-4 text-white items-center">Training Details</h2>
        </div>
        <div class="container mx-auto flex items-center -mt-16 h-112">
            <div class="w-1/3 h-64">
                <div>
                    <h2 class="text-white">Venue for Training</h2>
                    <p class="mt-5 text-white mr-8">All training will be conducted at Shell Cyberjaya amphitheatre office. <br> <br>
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
                    <h2 class="text-white">What to bring for Training</h2>
                    <p class="mt-5 text-white mr-8">
                      <i class="fas fa-laptop text-cads-sub4 hover:text-orange fa-5x"></i>
                      <br><br> 1. Bring your notebook computer. <br>
                      2. Access will be granted for online softcopy notes portal. <br>
                    </p>
                    <br>
                </div>
            </div>
            <div class="w-1/3 text-white h-64">
                <div>
                    <h2>Training Time</h2>
                    <p class="mt-5 mr-8">
                      <i class="far fa-clock text-cads-sub4 hover:text-orange fa-5x"></i>
                     <br><br> Training is scheduled to start at 9am and finish at 5pm.. <br>
                     Candidates are advised to be puntual, as training will commence on time.
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="trainer bg-grey-light">
    <div class="container mx-auto ">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase pt-4 text-white items-center">Cads: Lead Trainers</h2>
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
                            <a href="https://www.facebook.com/thecads.org/" class="mr-5 ml-5"><i class="fab fa-facebook fa-3x text-cads-cop1"></i></a>
                        </li>
                        <li class="text-center py-3">
                            <a href="https://www.linkedin.com/in/darrenchongky/" class="mr-5 ml-5"><i class="fab fa-linkedin fa-3x text-cads-cop1"></i></a>
                        </li>
                        <li class="text-center py-3 px-4">
                            <a href="info@thecads.org" class="mr-5 ml-5"><i class="fas fa-envelope-square  fa-3x text-cads-cop1"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="trainer bg-grey-light -mb-4">
    <div class="container mx-auto ">
        <!-- <div class="flex-1 bg-grey px-6 h-16 w-1/2">
            <h2 class="uppercase items-center">Thecads: Lead Instructor</h2>
        </div> -->
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
                      modelling Epileptic Seizures. Currently, his interests revolve around
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
                            <a href="https://www.facebook.com/thecads.org/" class="mr-5 ml-5"><i class="fab fa-facebook fa-3x text-cads-cop1"></i></a>
                        </li>
                        <li class="text-center py-3">
                            <a href="https://www.linkedin.com/in/rvinod85/" class="mr-5 ml-5"><i class="fab fa-linkedin fa-3x text-cads-cop1"></i></a>
                        </li>
                        <li class="text-center py-3 px-4">
                            <a href="info@thecads.org" class="mr-5 ml-5"><i class="fas fa-envelope-square  fa-3x text-cads-cop1"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="trainer bg-grey-light -mb-4">
    <div class="container mx-auto ">
        <!-- <div class="flex-1 bg-grey px-6 h-16 w-1/2">
            <h2 class="uppercase items-center">Thecads: Lead Instructor</h2>
        </div> -->
        <div class="container mx-auto flex items-center -mt-16 h-112">
            <div class="w-1/4">
                <div>
                    <img src="/img/Mazlita-Photo.jpg" alt="profile-pictuer" class="rounded-full h-48 w-48 border-b-2 border-solid border-black">
                </div>
                <div>
                    <h2 class="mt-5 ml-5">Mazlita <br> Mat Hassan</h2>
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <p class="pr-8 mr-5">Mazlita is a BSc and MPhil. Computer Science graduate from University College London and Birkbeck College of the University of London respectively, specialising in Web Data Mining. Her prior experience includes providing consultancy work in IT and Web Data Mining as well as previously co-founding a mobile app development start-up. 
                    <br> <br>
                    A corporate trainer since 2011, Mazlita has a vast experience in teaching various Computer Applications software such as Microsoft Office and Google Apps. She uses her experience as a mentor to various start-ups and her experience as the President of a business networking group to connect and engage with participants in her class..
                    </p>
                </div>
            </div>
            <div class="w-1/4 flex justify-end items-center h-48">       
                <div>
                    <h2>Connect with Mazlita</h2>
                    <ul class="list-reset flex px-4">
                        <li class="text-center py-3">
                            <a href="https://www.facebook.com/thecads.org/" class="mr-5 ml-5"><i class="fab fa-facebook fa-3x text-cads-cop1"></i></a>
                        </li>
                        <li class="text-center py-3">
                            <a href="https://www.linkedin.com/in/rvinod85/" class="mr-5 ml-5"><i class="fab fa-linkedin fa-3x text-cads-cop1"></i></a>
                        </li>
                        <li class="text-center py-3 px-4">
                            <a href="info@thecads.org" class="mr-5 ml-5"><i class="fas fa-envelope-square  fa-3x text-cads-cop1"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
