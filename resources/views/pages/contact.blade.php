@extends('layouts.app')

@section('content')
<div class="header-data bg-center bg-contain w-full -mt-5 h-full">
    <div class="container-fluid mx-auto flex items-center">
      <img src="/img/contact-us.png" class="w-full" alt="">
    </div>
</div>
<div class="trainer bg-grey-light">
    <div class="container mx-auto">
        <div class="flex-1 bg-cads-cop1 px-6 h-16 w-1/2">
            <h2 class="uppercase pt-2  text-white items-center">Take your first step towards becoming Big Data driven</h2>
        </div>
        <div class="container mx-auto flex items-center h-80">
            <div class="w-1/2">
                <div>
                    <!-- <h2>Use Excel to Make The <br> Most of Your Data</h2> -->
                </div>
                <div>
                    <p class="mt-5 mr-10">1. Want to register for one of our programs?
                       <br> 2. Need more information on your career pathway?
                    </p>
                </div>
            </div>
            <div class="w-1/2">
                <div>
                    <!-- <h2>Goals</h2> -->
                    <p class="mt-5 mr-10">
                      3. Want to find out more about our services to mobilize your organizations transformation with Big Data?
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> 
<section class="w-full bg-cads-darker -mb-4">
    <div class="container mx-auto flex w-full justify-center bg-cads-darker">
    <div class="row w-full bg-cads-darker mt-5">
        <div>
            <p class="text-3xl uppercase text-white text-start text-xs font-bold mt-4 mb-4">Reach out to us</p>
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
            <form class="w-full max-w-md justify-center mt-5 mb-4" enctype="multipart/form-data" method="POST" action="{{ route('contacts.store') }}">
                @csrf
                <div class="flex flex-wrap justify-center -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">First Name</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="firstname" grid-first-name" type="text" placeholder="Kane">
                      <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">
                        Last Name
                      </label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name"name="lastname" type="text" placeholder="Richard">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">Job Title</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="jobtitle" id="grid-first-name" type="text" placeholder="Executive Director">
                      <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">Department</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" type="text" name="department" placeholder="Shell Data Team">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">Email</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="email" id="grid-first-name" type="text" placeholder="luke@shell.com.my">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">Message</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" name="message" type="text" placeholder="I need assistance with..">
                    </div>
                </div>
                <div class="flex flex-wrap  mb-6">
                    <div class="md:flex md:items-center">
                        <button class="block uppercase bg-cads-cop1 hover:bg-blue-dark text-white font-bold py-3 px-10 rounded" type="submit">Contact US</button> <br>
                    </div>
                </div>
                <p class="text-grey-lightest text-xs italic">We will revert soonest.</p>
            </form>
        </div>
    </div>
</div>
</section>
@endsection
