@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('admin.cmd') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="cmd">Command:</label>
                        <input type="text" name="cmd" class="form-control"/>
                        Ex: migrate -> php artisan automatically added
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Run</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
