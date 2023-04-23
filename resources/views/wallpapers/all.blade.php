@extends('layouts.index')

@section('title')
{{ __('All Wallpapers') }}
@endsection

@section('content')

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

   <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
               <div class="row">
                <div class="col-8">
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('All Wallpapers') }}</h6>
                </div>
                <div class="col-4">
                  <a href="create" class="btn btn-primary float-right"><i class="fa fa-plus"></i> {{ __('New Wallpaper') }}</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th class="text-center">{{ __('Image Name') }}</th>
                      <th class="text-center">{{ __('Description') }}</th>
                      <th class="text-center">{{ __('Wallpapers') }}</th>
                      <th class="text-center">{{ __('Thumbnails') }}</th>
                      <th class="text-center">{{ __('Created At') }}</th>
                      <th class="text-center">{{ __('Actions') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($wallpaper as $wallpaper)
                    <tr><td>{{$wallpaper->id}}</td>
                    <td><a href="#"> {{ $wallpaper->name }} </a></td>
                    <td> {{ $wallpaper->desc }} </td>
                    <td><img height="200" width="200" src="/wallpaper/{{$wallpaper->image}}"></td>
                    <td><img height="200" width="200" src="/thumbnail/{{$wallpaper->thumbnail}}"></td>
                    <td> {{ $wallpaper->date }} </td>
                      <td class="text-center">
                        <a href="#" class="btn btn-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('wallpaper/edit/'.$wallpaper->id) }}" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pencil"></i></a>
                        <a href="{{ url('wallpaper/delete/'.$wallpaper->id) }}" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                      </td></tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection
