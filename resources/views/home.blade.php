@extends('layouts.index')

@section('title')
{{ __('Dashboard') }}
@endsection

@section('content')
<div class="row">
   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ __('Wallpapers') }}
                  {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_wallpaper }}</div> --}}


                  </div>
                  
               </div>
                  <div class="col-auto">
                     <i class="far fa-image fa-2x text-gray-300"></i>
                  </div>
            </div>
         </div>
      </div>
   </div>

</div>
</div>
@endsection

@section('header')

@endsection

@section('footer')

@endsection