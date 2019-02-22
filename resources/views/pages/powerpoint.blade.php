@extends('layouts.app')

@section('content')
<div class="header-data bg-center bg-contain w-full -mt-5 h-full">
    <div class="container-fluid mx-auto flex items-center">
      <img src="/img/powerpoint101.png" class="w-full" alt="">
    </div>
</div>
<div class="description bg-grey-light">
    <div class="container mx-auto ">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase pt-4 text-white items-center">Details of subject</h2>
        </div>
        <div class="container mx-auto flex items-center  h-64">
            <div class="w-1/2">
                <div>
                    <h2>Who, What, How</h2>
                    <p class="mt-5 mr-8">There are two reasons we perform Data Visualisation. Data exploration is the first step for many data analysts and is a skill that has been religiously cultivated in response to the rise of Big Data. Explanatory Visuals are used to convey the outcome of an analysis to the audience and is thus the focus for this course.
                    </p>
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <h2>Choosing a Visual</h2>
                    <p class="mt-5 mr-8">Bar Graphs, Tree Maps, Pie Charts, Slope Graphs – the list of charts we can use never ends. Learn about common pitfalls for popular chart types to avoid making them yourselves. We will also talk about the ‘best’ charts to use when trying to convey certain types of information.
                    </p>
                    <br>
                </div>
            </div>
            <!-- <div class="w-1/3">
                <div>
                    <h2>Dashboarding</h2>
                    <p class="mt-5 mr-8">Dashboards are a versatile tool frequently used in the
                      realm of Business Intelligence. Analysts can create
                      interactive dashboards that enable drill-down analysis. We
                      can also create strategic dashboards for decision-makers
                      to track KPI’s at a glance
                    </p>
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
                    <h2>Course <br> Description</h2>
                </div>
                <div>
                    <p class="mt-5 mr-10">Effectively communicate insights from Data. Participants will learn to meaningfully articulate findings through both narrative and visual strategies. This module will enable participants to drive change through effective communication of Data insights.
                    </p>
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <h2>Course <br> Summary</h2>
                    <p class="mt-5 mr-10">Data Storytelling is suited towards any professionals that work with data and charts. If you need to tell better stories with your data, then this course is for you. The curriculum challenges participants to communicate effective and impactful data-driven narratives, focusing on principles of effective data storytelling.
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div> 
<div class="description bg-grey-light">
    <div class="container mx-auto ">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase pt-4 text-white items-center">Duration of Class</h2>
        </div>
        <div class="container mx-auto flex items-center -mt-16 h-64">
            <div class="w-1/2">
                <div>
                    <h2 class="">Commence 9am to 5pm</h2>
                    <p class="mt-5 mr-8">Storytelling using Powerpoint class starts from 9:00am and run through to 5:00 pm.
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
              <p class="text-3xl uppercase text-white text-start text-xs font-bold mt-4 mb-4">Enroll for Storytelling using Powerpoint</p>
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
      </div>
  </div>
</div>
<div class="w-full bg-cads-cop1 h-112 -mb-4">
    <div class="container mx-auto flex w-full justify-center bg-cads-cop1">
      <div class="row w-full bg-cads-cop1  mt-10">
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
            <form class="w-full max-w-md justify-center mt-5 mb-4" enctype="multipart/form-data" method="POST" action="{{ route('powerpoints.store') }}">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-2">
              
              <div class="w-full md:w-2/3 mt-5 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-lightest text-xs font-bold mb-2" for="grid-state">
                  Scheduled Dates
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" name="powerpointdate" id="powerpointdate">
                    <option>Training Dates</option>
                    <!-- <option value="1">19-20 Feb (Datastorytelling using Powerpoint)</option> -->
                    <option value="2">13-14 Mar (Datastorytelling using Powerpoint)</option>
                    <option value="3">10-11 Apr (Datastorytelling using Powerpoint)</option>
                    <option value="4">15-16 May (Datastorytelling using Powerpoint)</option>
                    <!-- <option value="5">12-13 Jun (Datastorytelling using Powerpoint)</option>
                    <option value="6">10-11 Jul (Datastorytelling using Powerpoint)</option>
                    <option value="7">14-15 Aug (Datastorytelling using Powerpoint)</option>
                    <option value="8">11-12 Sep (Datastorytelling using Powerpoint)</option>
                    <option value="9">09-10 Oct (Datastorytelling using Powerpoint)</option>
                    <option value="10">13-14 Nov (Datastorytelling using Powerpoint)</option>
                    <option value="11">04-05 Dec (Datastorytelling using Powerpoint)</option> -->
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
      </div>
  </div>
</div>
@endsection
