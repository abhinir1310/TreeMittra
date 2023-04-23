@extends('layouts.index')

@section('title')
{{ __('New Wallpaper') }}
@endsection

@section('content')
    <div class="row">
      <div class="col">
         @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
      </div>
      
    </div>
    <div class="row justify-content-center">
                  

        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">{{ __('New Wallpaper') }}</h6>
                </div>
                <div class="card-body">
                 <form method="post" action="{{ route('wallpapers.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('Wallpaper Name') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder=" Enter Wallpaper Name" id="inputEmail3" name="name" value="{{old('name')}}">
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                        {{ csrf_field() }}
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('Wallpaper Description') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <textarea id="inputEmail3" name="desc" rows="5" cols="33" placeholder=" Enter Wallpaper Description"></textarea>
                        {{-- <input type="long-text" class="form-control" placeholder=" Enter Wallpaper Description" id="inputEmail3" name="desc" value="{{old('desc')}}"> --}}
                        <span class="text-danger">@error('desc') {{$message}} @enderror</span>
                        {{ csrf_field() }}
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('Wallpaper Date') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" placeholder=" Enter Wallpaper date" id="inputEmail3" name="date" value="{{old('date')}}">
                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                        {{ csrf_field() }}
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('Wallpaper') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="file" name="image" required>
                        <span class="text-danger">@error('image') {{$message}} @enderror</span>
                        {{ csrf_field() }}
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('Thumbnail') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="file" name="thumbnail" required>
                        <span class="text-danger">@error('thumbnail') {{$message}} @enderror</span>
                        {{ csrf_field() }}
                      </div>
                    </div>

                    <div class="form-group row"  style="text-align: center;">
                      <div class="col-sm-9" style="text-align: center;">
                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            
        </div>

    </div>

@endsection

@section('header')

@endsection

@section('footer')

@endsection
