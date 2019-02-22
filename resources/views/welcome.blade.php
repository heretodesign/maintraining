<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CadsTraining</title>


        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/main.css">

    </head>
    <body class="bg-grey-light font-sans">
        <div class="bg-white">
            <div class="container-fluid mx-auto flex items-center py-4">
                <div  class="w-1/5">
                    <a href="#">
                        <!-- <i class="fab fa-twitter fa-lg text-blue"></i> -->
                        <img src="/img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="w-3/5 text-center">
                    <nav>
                        <a href="{{ url('/') }}" class="top-nav-item no-underline"> Home</a>
                        <a href="{{ ('/about') }}" class="top-nav-item no-underline"> About Us</a>
                        <!-- <a href="{{ ('/trainers') }}" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> Trainers</a> -->
                        <a href="{{ ('/training') }}" class="top-nav-item no-underline"> Training</a>
                        <a href="{{ ('/contact') }}" class="top-nav-item no-underline"> Contact Us</a>
                    </nav>
                </div>
                <div class="w-1/5 flex justify-end">
                     @guest
                        <div>
                            <a class="bg-black hover:bg-teal-dark text-white text-white  py-2 px-4 rounded-full block uppercase no-underline tracking-wide text-grey-darker text-xs font-bold mb-2 btn py-3 px-10 mr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </div>
                        @if (Route::has('register'))
                            <div class="nav-item">
                                <a class="bg-black hover:bg-teal-dark text-white  py-2 px-4 rounded-full block uppercase tracking-wide no-underline text-grey-darker text-xs font-bold mb-2 btn py-3 px-10 mr-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                        @endif
                        <!-- <div class="button px-2"><button class="bg-black hover:bg-teal-dark text-white font-medium py-3 px-10 uppercase rounded-full">Login</button></div>

                        <div class="button px-2 mr-4"><button class="bg-black hover:bg-teal-dark text-white font-medium py-3 px-10 uppercase rounded-full">Register</button></div> -->
                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="bg-black hover:bg-teal-dark text-white rounded-full block uppercase tracking-wide no-underline text-grey-darker text-xs font-bold  btn py-3 px-10 mr-5 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item inline-block text-sm ml-5 px-4 py-1 leading-none border rounded-full text-black border-black hover:border-black hover:text-teal hover:bg-white lg:mt-0" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                </div>
            </div>
        </div>

        <div class="herod bg-center bg-contain w-full h-screen">
            <img src="/img/shellcads.png" alt="" class="bg-center bg-contain w-full h-screen">
        </div>

        <div class="container mx-auto flex items-center mt-5 mb-5 h-48">
            <div class="mx-auto items-center px-6 flex">
                <h1 class="uppercase mt-5 text-5xl items-center">Training & certification <i class="fas fa-angle-double-right"></i> </h1>
                <h1 class="uppercase mt-5 text-grey-darker items-center">  Build new skills in Analytics and Data Science</h1>
            </div>
        </div>
        <section class="w-full bg-cads-cop1 h-112">
          <div class="container mx-auto flex w-full justify-center">
            <div class="row w-full bg-cads-cop1 mt-5">
                <div>
                    <p class="text-3xl text-center uppercase text-white font-bold mt-4"> training process (How it works) </p>
                </div>
                <div>
                  <!-- <p class="text-center text-3xl text-grey-darker text-start text-xs font-bold mt-4 mb-4">How it works</p> -->
                </div>
                <!-- Six columns -->
                <div class="flex mt-16">
                  <div class="w-1/6  text-center h-12">
                    <img src="/img/1.png" class="" alt="">
                  </div>
                  <div class="w-1/6  h-32">
                      <p class="mx-5 text-grey-lighter mt-5"><strong>Step 1 </strong> <br> Begin your journey by selecting your course.</p>
                  </div>
                  <div class="w-1/6 text-center h-12">
                    <img src="/img/2.png" class="ml-5" alt="">
                  </div>
                  <div class="w-1/6 h-32">
                    <p class="mx-5 text-grey-lighter mt-5"><strong>Step 2 </strong> <br> Select an assessment date that works best for your schedule.</p>
                  </div>
                  <div class="w-1/6 text-center h-12">
                    <img src="/img/3.png" class="ml-5" alt="">
                  </div>
                  <div class="w-1/6 h-32">
                    <p class="mx-5 text-grey-lighter mt-5"><strong>Step 3 </strong> <br> 
                      Make Payment. Once payment has been made, you will receive a receipt via email along with a confirmation email. 
                    </p>
                  </div>
                </div>
            </div>
          </div>
        </section>
        <!-- Full width column -->
        <div class="container mx-auto flex items-center mt-5 mb-5">
          <div class="flex-1 bg-grey px-6 h-48">
              <h1 class="uppercase mt-5 items-center">Thecads: data storytelling & visualization</h1>
                <h2 class="uppercase mt-5 text-grey-darker items-center">In order to complete these programme, participants would need to go through a capstone at the end of each module. <i class="fas fa-angle-double-down"></i></h2>
          </div>
        </div>
        <!-- cards -->
        <div class="flex flex-wrap h-144 -mx-2">
            <div class="w-1/3 ml-auto bg-grey-light h-144">
                <div class="bg-grey-red px-2 h-144">
                  <div class="max-w-sm rounded overflow-hidden shadow-lg">
                      <img class="w-full" src="/img/ibd101.png" alt="Sunset in the mountains">
                      <div class="px-4 py-2">
                        <div class="font-bold text-xl mb-2">Introduction to Big Data 101 Online</div>
                        <p class="text-grey-darker text-base">
                            • Learn how to use examine, analyse large & varied data sets using advanced analytics techniques. <br>• Make informed data driven decisions. Uncover market trends, customer preferences etc.  
                        </p>
                      </div>
                      <div class="px-6 py-4">
                        <a href="{{ ('/ibd') }}" class="bg-blue no-underline hover:bg-teal text-white py-2 px-4 text-center rounded-full font-bold block uppercase mr-2">Explore Module</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="w-1/3 mr-auto bg-grey-light h-144">
                <div class="bg-grey-lighth-144 px-2">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                          <img class="w-full" src="/img/talent101.png" alt="Sunset in the mountains">
                          <div class="px-4 py-2">
                            <div class="font-bold text-xl mb-2">Talent Assessment </div>
                            <p class="text-grey-darker text-base">
                              • 80 questions in 30 minutes that test your data competency and knowledge<br>
                                • It covers databases, programming (Python & R), analytics & strategy <br>
                            </p>
                          </div>
                          <div class="px-6 py-4">
                            <a href="{{ ('/talent') }}" class="content-between no-underline bg-blue hover:bg-teal text-white text-center font-bold py-2 px-4 rounded-full block uppercase  mr-2">Explore Module</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>    
        <div class="container mx-auto flex items-center mb-5">

            <div class="px-2 mt-5 mb-5 h-112">
              <div class="flex -mx-2">
                
                <div class="w-1/3 px-2">
                  <div class="bg-grey-red h-12">
                      <div class="max-w-sm rounded overflow-hidden shadow-lg">
                          <img class="w-full" src="/img/powerpoint.png" alt="Sunset in the mountains">
                          <div class="px-4 py-2">
                            <div class="font-bold text-xl mb-2">2 Day: Storytelling using Powerpoint</div>
                            <p class="text-grey-darker text-base">
                                • Establish connections and work
                                with different data sources
                                Create effective visualisations
                                and employ dashboarding
                                fundamentals <br>
                                • Understand and apply analytical
                                techniques
                            </p>
                          </div>
                          <div class="px-6 py-4">
                            <a href="{{ ('/powerpoint') }}" class="bg-blue no-underline hover:bg-teal text-white py-2 px-4 text-center rounded-full font-bold block uppercase mr-2">Explore Module</a>
                          </div>
                        </div>
                   </div>
                </div>
                <div class="w-1/3 px-2">
                  <div class="bg-grey h-12">
                      <div class="max-w-sm rounded overflow-hidden shadow-lg">
                          <img class="w-full" src="/img/excel.png" alt="Sunset in the mountains">
                          <div class="px-4 py-2">
                            <div class="font-bold text-xl mb-2">2 Days: Storytelling using Excel</div>
                            <p class="text-grey-darker text-base">
                              • Develop strong competencies in
                                using Microsoft Excel <br>
                                • Apply statistical data analysis
                                techniques on data to generate
                                insight <br>
                               <!--  • Visualize data & create
                                dashboards for reporting with
                                Microsoft Excel -->
                            </p>
                          </div>
                          <div class="px-6 py-4">
                            <a href="{{ ('/excell') }}" class="content-between no-underline bg-blue hover:bg-teal text-white text-center font-bold py-2 px-4 rounded-full block uppercase  mr-2">Explore Module</a>

                          </div>
                        </div>
                  </div>
                </div>
                <div class="w-1/3 px-2">
                  <div class="bg-grey-black h-12">
                      <div class="max-w-sm rounded overflow-hidden shadow-lg">
                          <img class="w-full" src="/img/dvisual.png" alt="Sunset in the mountains">
                          <div class="px-4 py-2">
                            <div class="font-bold text-xl mb-2">1 Days: Data Visualization</div>
                            <p class="text-grey-darker text-base">
                                • Formulating the Big Idea to
                                materialise value creation <br>
                                • Design intuitive visuals that are
                                easy for the audience to
                                interpret <br>
                                <!-- • Present findings through stories  -->
                            </p>
                          </div>
                          <div class="px-6 py-4 content-between">
                            <a href="{{ ('/storytelling') }}" class="bg-blue no-underline hover:bg-teal text-white font-bold py-2 px-4 rounded-full block uppercase text-center mr-2">Explore Module</a>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="herod bg-center bg-contain w-full h-screen ">
            <img src="/img/shellcads.png" alt="" class="bg-center bg-contain w-full h-screen">
        </div>
    <div class="container-fluid bg-cads-darker mx-auto flex items-center h-112">
    <div class="container mx-auto flex items-center py-4 h-96">
        <div  class="w-1/5 h-64">
            <a href="#">
                <img src="/img/cadswhite.png" width="60%" height="70%" alt="logo">
            </a> 
            <p class="leading-normal text-white font-san text-sm"><br>Level 8, Vertical Corporate Tower B, Avenue 10, The Vertical, No.8 Jalan Kerinchi, Bangsar South City, 59200, Kuala Lumpur <br> <br>
            </p>
            <p class="leading-loose font-san text-white">+603 2732 2751</p>
            <p class="leading-loose font-san text-white">info@thecads.org</p>
            <p class="leading-loose font-san text-white mt-3">
                <a href="https://www.linkedin.com/company/the-center-of-applied-data-science/" class="mr-2 text-left"><i class="fab fa-linkedin fa-2x text-left text-blue"></i></a>
                <a href="https://www.facebook.com/thecads.org/" class="mr-2 text-left"><i class="fab fa-facebook fa-2x text-left text-blue"></i></a>
            </p>
            
        </div>
        <div class="w-4/5 text-center h-64">
            <nav class="ml-10">
                <!-- Five columns -->
                <div class="flex mb-4">
                  <div class="w-1/5 h-64 font-san">
                    <ul class="list-reset leading-loose text-left text-white">
                      <li><strong>Discover</strong></li>
                      <li class="text-sm">For Enterprise</li>
                      <li class="text-sm">For Individuals</li>
                      <li class="text-sm">For Graduates</li>
                    </ul>
                  </div>
                  <div class="w-1/5 h-12">
                    <ul class="list-reset text-left text-white">
                      <li class="leading-loose"><strong>Learn</strong></li>
                      <li class="leading-loose text-sm">Training <br> & Certifications</li>
                      <li class="leading-loose text-sm">Knowledge Center</li>
                    </ul>
                  </div>
                  <div class="w-1/5 h-12">
                    <ul class="list-reset leading-loose text-left text-white">
                      <li><strong>Engage</strong></li>
                      <li class="text-sm">Advisory</li>
                    </ul>
                  </div>
                  <div class="w-1/5 h-12"> 
                    <ul class="list-reset leading-loose text-white text-left">
                      <li><strong>Analytics Solutions</strong></li>
                      <li class="text-sm">TalentSpy</li>
                    </ul>
                  </div>
                  <div class="w-1/5 h-12">
                    <ul class="list-reset leading-loose text-left text-white">
                      <li><strong>Partners</strong></li>
                      <li class="text-sm">Partner With Us</li>
                    </ul>
                  </div>
                </div>
              </nav>
          </div>
        </div>
      </div>
      <div class="flex">
        <div class="w-full bg-cads-darker text-center  h-12"><a href="https://thecads.org/privacy-policy/" class="text-white text-xs">Copyright © 2019 The Center of Applied Data Sciences. Privacy Policy</a>
        </div>
      </div>
  </div>
</body>
</html>
