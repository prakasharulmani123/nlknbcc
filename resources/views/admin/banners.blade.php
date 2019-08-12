@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @php
                    $banners = [
                        'home',
                        'blog',
                        'contact',
                        'aboutus',
                    ];
                @endphp
                <form method="post" action="{{ route('admin.banners') }}" enctype="multipart/form-data">
                    @csrf
                    @foreach($banners as $banner)
                        <div class="form-group">
                            <label for="{{ $banner }}">{{ $banner }}:</label>
                            <input type="file" name="banners[{{ $banner }}]" id="{{ $banner }}" accept="image/*"/>
                            Size: 2700 * 1800
                            @php
                                $url = \App\Banner::fetchImage($banner)
                            @endphp

                            @if($url)
                                <img src="{{ $url }}" width="100" height="100" alt="">
                            @endif
                        </div>
                    @endforeach
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
