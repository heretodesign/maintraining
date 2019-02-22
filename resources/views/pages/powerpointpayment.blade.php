@extends('layouts.app')

@section('content')

<div class="container-fluid bg-black mx-auto flex items-center h-112">
    <div class="container-fluid mx-auto flex items-center py-4">
        <div  class="w-1/5">
            
        </div>
        <div class="w-3/5 text-center">
            <nav>
                <a href="https://twitter.com/thecadsmalaysia" class="mr-5 ml-5"><i class="fab fa-twitter fa-3x text-blue"></i></a>
                <a href="https://www.facebook.com/thecads.org/" class="mr-5 ml-5"><i class="fab fa-facebook fa-3x text-blue"></i></a>
                <a href="https://www.linkedin.com/company/the-center-of-applied-data-science/" class="mr-5 ml-5"><i class="fab fa-linkedin fa-3x text-blue"></i></a>
                <a href="info@thecads.org" class="mr-5 ml-5"><i class="fas fa-envelope-square  fa-3x text-blue"></i></a>
            </nav>
        </div>
        <div class="w-1/5 flex justify-end">
            <h1 class="uppercase mt-5 items-center">Stay Connected <i class="fas fa-angle-double-right"></i> </h1>
        </div>
    </div>
</div>
@endsection
