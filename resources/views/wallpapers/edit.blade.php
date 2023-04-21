@extends('layouts.index')

@section('title')
{{ __('Edit Wallpaper') }}
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
                  <h6 class="m-0 font-weight-bold text-primary">{{ __('Edit Wallpaper') }}</h6>
                </div>
                <div class="card-body">
                 <form method="post" action="{{ route('wallpapers.update',[$wallpapers->id]) }}" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('Wallpaper Name') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEmail3" name="name" value="{{ $wallpapers->name }}">
                        <input type="hidden" class="form-control" id="inputEmail3" name="user_id" value="{{ $wallpapers->id }}">
                        {{ csrf_field() }}
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('Wallpaper Description') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        {{-- <textarea id="inputEmail3" name="desc" rows="5" cols="33" value="{{ $wallpapers->desc }}"></textarea>
                        <textarea id="inputEmail3" name="user_id" rows="5" cols="33" value="{{ $wallpapers->id }}"></textarea> --}}
                        <input type="text" class="form-control" id="inputEmail3" name="desc" value="{{ $wallpapers->desc }}">
                        <input type="hidden" class="form-control" id="inputEmail3" name="user_id" value="{{ $wallpapers->id }}">
                        {{ csrf_field() }}
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">{{ __('Date') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" id="inputEmail3" name="date" value="{{ $wallpapers->date }}">
                        <input type="hidden" class="form-control" id="inputEmail3" name="user_id" value="{{ $wallpapers->id }}">
                        {{ csrf_field() }}
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('Wallpaper') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <img height="200" width="200" src="/wallpaper/{{$wallpapers->image}}">
                        <input type="file" name="image" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">{{ __('Thumbnail') }}<font color="red">*</font></label>
                      <div class="col-sm-9">
                        <img height="200" width="200" src="/thumbnail/{{$wallpapers->thumbnail}}">
                        <input type="file" name="image" >
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
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
