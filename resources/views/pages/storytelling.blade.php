@extends('layouts.app')

@section('content')
<div class="header-data bg-center bg-contain w-full -mt-5 h-full">
    <div class="container-fluid mx-auto flex items-center">
      <img src="/img/visual101.png" class="w-full" alt="">
    </div>
</div>
<div class="trainer bg-grey-light">
    <div class="container mx-auto">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase pt-4 text-white items-center">module Overview</h2>
        </div>
        <div class="container mx-auto flex items-center h-80">
            <div class="w-1/2">
                <div>
                    <h2>Data Visualization <br> Made Simple</h2>
                </div>
                <div>
                    <p class="mt-5 mr-10">Data Visualization will teach
                        participants the foundations
                        of data visualization through
                        the use of a popular BI tool,
                        Tableau. <br> Participants will learn
                        how to connect their data to
                        the software, create basic
                        visualizations and even
                        perform simple data analytics
                        through Tableau’s Interface.
                    </p>
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <h2>Goals</h2>
                    <h4 class="mt-5 mr-10">
                        1. Make stories that highlight value from data-driven insight <br> 2. Design intuitive visuals that are easy for the audience to interpret <br> 3. Present findings through stories
                    </h4>
                </div>
            </div>
        </div>
        <!-- <div class="w-full">
            <div>
                <div class="flex-1 bg-grey px-6 h-16 w-1/2">
                    <h2 class="uppercase items-center">Learning Outcome</h2>
                </div>
                <div class="flex mt-8 ">
                  <div class="flex-1 h-48">
                    <i class="fas fa-chart-line fa-5x"></i>
                      <p class="mt-3">Produce more accurate <br> forecasts</p>
                  </div>
                  <div class="flex-1 h-48">
                      <i class="fas fa-arrow-alt-circle-down fa-5x"></i>
                      <p class="mt-3">Analyse real time <br> transactions </p>
                  </div>
                  <div class="flex-1 h-48">
                    <i class="fas fa-address-card fa-5x"></i>
                      <p class="mt-3">Fundamentals of <br> impactful storytelling</p>
                  </div>
                  <div class="flex-1 h-48">
                    <i class="fas fa-chart-area fa-5x"></i>
                     <p class="mt-3">Visualize data & create dashboards for reporting <br> with Microsoft Excel</p>
                  </div>
                  <div class="flex-1 h-48">
                      <i class="fas fa-database fa-5x"></i>
                      <p class="mt-3">Understand and apply <br> analytical techniques</p>
                  </div>
                </div>
            </div>
        </div> -->
    </div>
</div> 
<div class="description bg-grey-light">
    <div class="container mx-auto">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase pt-4 text-white items-center">Details of subject</h2>
        </div>
        <div class="container mx-auto flex items-center -mt-16 h-96">
            <div class="w-1/2">
                <div>
                    <h3>Data Preparation <br>& Connections</h3>
                    <p class="mt-5 mr-8">Before a student can visualize data, it needs to be in the right format and connected to the right sources. Proper preparation in terms of source (union, join, blend) along with type, and format ensures that data can be analyzed.
                    </p>
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <h3>Creating their First <br>Visualization & Dashboard</h3>
                    <p class="mt-5 mr-8">Dashboards are widespread in Business Intelligence as a tool for both analysis and decision-making. Visualisation best practices ensure that your team can make dashboards best-suited to quality decision making.</p>
                    <br>
                </div>
            </div>
            <!-- <div class="w-1/3">
                <div>
                    <h3>Tableau <br> Analytics</h3>
                    <p class="mt-5 mr-8">Tableau enables users to use powerful machine learning algorithms for analysis in a simple drag-and-drop interface. These algorithms can be used for applications such as market segmentation, demand forecasting, and price estimation.</p>
                    <br>
                </div>
            </div> -->
        </div>
    </div>
</div> 
<div class="description bg-grey-light">
    <div class="container mx-auto ">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase pt-4 text-white items-center">module Summary</h2>
        </div>
        <div class="container mx-auto flex items-center -mt-16 h-96">
            <div class="w-1/2">
                <div>
                    <h3>Course <br> Description</h3>
                </div>
                <div>
                    <p class="mt-5 mr-10">Data Storytelling is suited towards any professional who works with data and charts. If you need to tell better stories with your data, then this course is for you. The curriculum challenges participants to communicate effective and impactful data-driven narratives, focusing on principles of effective data storytelling.
                    </p>
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <h3>Course <br> Summary</h3>
                    <p class="mt-5 mr-10">Participants will learn to meaningfully articulate findings through both narrative and visual strategies. This module will enable participants to drive change through effective communication of data insights.</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- <div class="trainer bg-grey-light">
    <div class="container mx-auto">
        <div class="flex-1 bg-grey px-6 h-16 w-1/2">
            <h2 class="uppercase items-center">Thecads: Lead Instructor</h2>
        </div>
        <div class="container mx-auto flex items-center -mt-16 h-112">
            <div class="w-1/4">
                <div>
                    <img src="/img/darren-01.png" alt="darren-pic" class="rounded-full h-48 w-48 border-b-2 border-solid border-black">
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
                            <a href="https://www.linkedin.com/company/the-center-of-applied-data-science/" class="mr-5 ml-5"><i class="fab fa-linkedin fa-3x text-blue"></i></a>
                        </li>
                        <li class="text-center py-3 px-4">
                            <a href="info@thecads.org" class="mr-5 ml-5"><i class="fas fa-envelope-square  fa-3x text-blue"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <div class="w-full bg-orange h-112 -mb-5">
    <div class="container mx-auto flex w-full justify-center bg-orange">
      <div class="row w-full bg-orange mt-10">
          <div>
              <p class="text-3xl uppercase text-grey-darker text-start text-xs font-bold mt-4 mb-4">select your scheduled date </p>
          </div>
          <form class="w-full max-w-md">
            <div class="flex flex-wrap -mx-3 mb-2">
              
              <div class="w-full md:w-2/3 mt-5 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                  Scheduled Dates
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-state">
                    <option>Training Dates</option>
                    <option>26-27 Feb (Data Visualization)</option>
                    <option>17-18 Apr (Big Data for Line Managers)</option>
                    <option>15-16 May (Big Data for Line Managers)</option>
                    <option>17-18 Apr (Datastorytelling using Powerpoint)</option>
                    <option>15-16 May (Datastorytelling using Excel)</option>
                    <option>19-20 Jun (Data Visualization)</option>
                    <option>17-18 Jul (Data Analysis for Data ANalyst)</option>
                    <option>Texas</option>
                  </select>
                  <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                
              </div>
            </div>
          </form>
          <div class=" max-w-md justify-center mt-10 mb-4">
            <div class="flex flex-wrap  mb-6">
                <div class="md:flex md:items-center">
                    <a href="http://bit.ly/shell00004" class="no-underline"><button class="block uppercase bg-blue hover:bg-teal-dark text-white font-bold py-3 px-10 rounded">Enroll now</button> </a>
                    <br>
                </div>
            </div>
              <p class="text-black text-xs italic">Click the button to purchase course.</p>
          </div>
      </div>
  </div>
</div> -->
<!-- <div class="w-full bg-teal h-64 -mb-5">
    <div class="container mx-auto flex w-full justify-center bg-teal">
      <div class="row w-full bg-teal mt-5">
          <div>
              <p class="text-3xl uppercase text-grey-darker text-start text-xs font-bold mt-4 mb-4">Enroll for DATA VISUALIZATION </p>
          </div>
          <div class=" max-w-md justify-center mt-5 mb-4">
            <div class="flex flex-wrap  mb-6">
                      <div class="md:flex md:items-center">
                          <a href="http://bit.ly/shell00004" class="no-underline"><button class="block uppercase bg-blue hover:bg-teal-dark text-white font-bold py-3 px-10 rounded">Enroll</button> </a>
                          <br>
                      </div>
                  </div>
              <p class="text-black text-xs italic">Click the button to purchase course.</p>
          </div>
      </div>
  </div>
</div> -->
<div class="description bg-grey-light">
    <div class="container mx-auto ">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase pt-4 text-white items-center">Duration of Class</h2>
        </div>
        <div class="container mx-auto flex items-center -mt-16 h-64">
            <div class="w-1/2">
                <div>
                    <h2 class="">Commence 9am to 5pm</h2>
                    <p class="mt-5 mr-8">Data Visualization class starts from 9:00am and run through to 5:00 pm.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="w-full bg-cads-cop1 h-64 -mb-5">
    <div class="container mx-auto flex w-full justify-center bg-cads-cop1">
      <div class="row w-full bg-cads-cop1 mt-5">
          <div>
              <p class="text-3xl uppercase text-white text-start text-xs font-bold mt-4 mb-4">Enroll for DATA VISUALIZATION </p>
          </div>
          <!-- Four columns -->
          <div class="flex mt-10">
            <div class="w-1/4 text-center h-12">
              <img src="/img/1.png" class="ml-32" alt="">
            </div>
            <div class="w-1/4 h-12">
              <p class="text-white text-base mt-5 italic mb-4">Step 1: Choose your training dates</p>
            </div>
            <div class="w-1/4 text-center h-12">
              <img src="/img/2.png" class="ml-32" alt="">
            </div>
            <div class="w-1/4 h-12">
              <p class="text-white mt-5 text-base italic mb-4">Step 2: Click enroll to make payment</p>
            </div>
          </div>
          <!-- Two columns -->
          <!-- <div class="flex mb-4">
            <div class="w-1/2 h-32">
              <div class="w-full md:w-1/3 max-w-md justify-center mt-5 mb-4">
                <div class="flex flex-wrap  mb-6">
                  <div class="md:flex md:items-center">
                    <div>
                        <i class="fas fa-hand-pointer text-indigo-darker fa-3x"></i>
                    </div>
                  </div>
                </div>
                  <p class="text-black text-base italic">Step 1: Choose your Dates</p>
              </div>
            </div>
            <div class="w-1/2 h-32">
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <div class=" max-w-md justify-center mt-5 mb-4">
                    <div class="flex flex-wrap  mb-6">
                      <div class="md:flex md:items-center">
                        <div>
                            <i class="far fa-credit-card text-red fa-3x"></i>
                        </div>
                      </div>
                    </div>
                      <p class="text-black text-base italic">Step 2: Click enroll to make payment</p>
                  </div>
              </div>
            </div>
          </div> -->
      </div>
  </div>
</div>
<div class="w-full bg-cads-cop1 h-112 -mb-4">
    <div class="container mx-auto flex w-full justify-center bg-cads-cop1">
      <div class="row w-full bg-cads-cop1 mt-10">
          <div>
              <p class="text-3xl uppercase text-white text-start text-xs font-bold mt-4 mb-4">select your scheduled date </p>
          </div>
          @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="w-full max-w-md justify-center mt-5 mb-4" enctype="multipart/form-data" method="POST" action="{{ route('datavs.store') }}">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-2">
              
              <div class="w-full md:w-2/3 mt-5 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-lightest text-xs font-bold mb-2" for="grid-state">
                  Scheduled Dates
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" name="visualtrainingdate" id="grid-state">
                    <option value="1">Training Dates</option>
                    <option value="2">27 Feb (Data Visualization)</option>
                    <option value="3">20 Mar (Data Visualization)</option>
                    <option value="4">17 Apr (Data Visualization)</option>
                    <option value="5">23 May (Data Visualization)</option>
                    <option value="6">19 Jun (Data Visualization)</option>
                    <option value="7">17 Jul (Data Visualization)</option>
                    <option value="8">21 Aug (Data Visualization)</option>
                    <option value="9">18 Sep (Data Visualization)</option>
                    <option value="10">16 Oct (Data Visualization)</option>
                    <option value="11">20 Nov (Data Visualization)</option>
                    <option value="12">11 Dec (Data Visualization)</option>
                  </select>
                  <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <!-- <div class="inline-block relative w-64">
                    <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                      <option>Really long option that will likely overlap the chevron</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                  </div> -->
              </div>
            </div>          
            <div class=" max-w-md justify-center mt-10 mb-4">
            <div class="flex flex-wrap  mb-6">
                <div class="md:flex md:items-center">
                    <button class="block uppercase bg-blue hover:bg-teal-dark text-white font-bold py-3 px-10 rounded" type="submit">Enroll now</button>
                    <br>
                </div>
            </div>
              <p class="text-white text-xs italic">Click the button to purchase course.</p>
            </div>
          </form>
          <!-- <div class=" max-w-md justify-center mt-10 mb-4">
            <div class="flex flex-wrap  mb-6">
                <div class="md:flex md:items-center">
                    <button class="block uppercase bg-blue hover:bg-teal-dark text-white font-bold py-3 px-10 rounded" type="submit">Enroll now</button>
                    <br>
                </div>
            </div>
              <p class="text-black text-xs italic">Click the button to purchase course.</p>
          </div> -->
      </div>
  </div>
</div>
<!-- <section class="w-full bg-green-light">
  <div class="container mx-auto flex w-full justify-center bg-grey">
    <div class="row w-full bg-green-light mt-5">
        <div>
            <p class="text-3xl uppercase text-grey-darker text-start text-xs font-bold mt-4 mb-4">steps to Enroll for DATA VISUALIZATION </p>
        </div>
        <div>
          <p class="text-center text-3xl text-grey-darker text-start text-xs font-bold mt-4 mb-4">How it works</p>
        </div>
        <div class="container mx-auto px-2 h-64 mt-10">
          <div class="flex -mx-2">
            <div class="w-1/3 px-2">
              <div class=" h-64">
                  <span class="text-center text-3xl text-purple-light text-start">1</span>

                  <div><i class="far fa-check-square text-pink-darkest hover:text-pink fa-5x mx-5"></i></div>
                  <p class="mx-5 mt-5 text-3xl text-grey-darker">Select date for training</p>
                  <p class="mx-5 mt-5">Choose available dates to do training</p>

              </div>
            </div>
            <div class="w-1/3 px-2">
              <div class="bg-green-light h-64">
                <span class="text-center text-3xl text-purple-light text-start">2</span>
                <div class=""><i class="fab fa-wpforms text-teal-dark hover:text-red fa-5x mx-5"></i></div>
                  <p class="mx-5 mt-5 text-3xl text-grey-darker">Enroll</p>
                  <p class="mx-5 mt-5">Enroll for that specific module training</p>
              </div>
            </div>
            <div class="w-1/3 px-2">
              <div class="bg-green-light h-64">
                <span class="text-center text-3xl text-purple-light text-start">3</span>
                <div><i class="fab fa-cc-visa text-purple hover:text-blue-dark fa-5x mx-5"></i></div>
                  <p class="mx-5 mt-5 text-3xl text-grey-darker">Make Payment</p>
                  <p class="mx-5 mt-5">Lastly, proceed to make payment for the module</p>
              </div>
            </div>
          </div>
        </div>

        <div class=" max-w-md justify-center mt-5 mb-4">
            @if ($errors->any())
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form class="w-full max-w-md justify-center mt-5 mb-4" enctype="multipart/form-data" method="POST" action="{{ route('enrolls.store') }}">
                @csrf
                <div class="flex flex-wrap justify-center -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">First Name</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Kane">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                        Last Name
                      </label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" type="text" placeholder="Richard">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">Job Title</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Executive Director">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">Company</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" type="text" placeholder="Shell">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">Email</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="luke@shell.com.my">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">Mobile Number</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" type="text" placeholder="+6012227282">
                    </div>
                </div>
                <div class="flex flex-wrap  mb-6">
                    <div class="md:flex md:items-center">
                        <button class="block uppercase bg-blue hover:bg-blue-dark text-white font-bold py-3 px-10 rounded">Enroll</button> <br>
                    </div>
                </div>
                <p class="text-grey-darker text-xs italic">Please fill out this form before making payment.</p>
            </form>
        </div>
    </div>
  </div>
</section> -->
@endsection
