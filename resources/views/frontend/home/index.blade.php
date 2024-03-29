@extends('frontend.master')

@section('content')
  @include('frontend.includes.Slider')
  <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 3 - THE CAMPANIES SECTION
  ////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <!-- //////////////////////////////////////////////////////////////////////////////////////////////
 @include('frontend.includes.companies')
  
 @include('frontend.includes.services')
  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                                 START SECTION 5 - THE TESTIMONIALS
  /////////////////////////////////////////////////////////////////////////////////////////////////////-->
  @include('frontend.includes.testimonials')
  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                         START SECTION 6 - THE FAQ
  //////////////////////////////////////////////////////////////////////////////////////////////////////-->
 @include('frontend.includes.faq')

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////
                                START SECTION 7 - THE PORTFOLIO
  //////////////////////////////////////////////////////////////////////////////////////////////////////-->
   @include('frontend.includes.portfolio')
  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////
                START SECTION 8 - GET STARTED
  /////////////////////////////////////////////////////////////////////////////////////////////////////////-->
   @include('frontend.includes.getstarted')
@endsection

