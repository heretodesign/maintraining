@extends('layouts.app')

@section('content')
<!-- Full width column -->
<div class="header-data bg-teal-light">
    <div class="container mx-auto flex items-center h-64">
      <div class="flex-1 bg-teal-light px-6 h-64">
          <h1 class="uppercase mt-5 items-center">Make payment <br></h1>
            <!-- <h2 class="uppercase mt-5 text-grey-darker items-center">since then, It’s been our mission to equip & empower everyone with data analytics <i class="fas fa-angle-double-down"></i></h2> -->
      </div>
    </div>
</div> 
<section class="w-full bg-grey">
    <div class="container mx-auto flex w-full justify-center bg-grey">
        <div class="row w-full bg-grey mt-5">
            <div>
                <p class="text-3xl uppercase text-grey-darker text-start text-xs font-bold mt-4 mb-4">Step 2: Make payment for training course</p>
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
                          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">Full Name</label>
                          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Kane">
                          <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
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
                          <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
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
</section>
@endsection
