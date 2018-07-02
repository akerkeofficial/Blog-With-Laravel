@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}
                    </div>
                @endforeach
            @endif

            @if(session('response'))
                <div class="alert alert-success">
                {{session('response')}}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="co-md-4">
                    @if(!empty($profile))
                        <img src="{{ $profile->profile_pic }}" style="max-width: 100px; border-radius: 100%;">
                    @else
                        <img src="{{ url('images/user.png') }}" style="max-width: 100px; border-radius: 100%;">
                    @endif

                    @if(!empty($profile))
                        <p class="lead">{{ $profile->name}}</p>
                    @else
                        <p></p>
                    @endif

                    @if(!empty($profile))
                        <p class="lead">{{ $profile->designation}}</p>
                    @else
                        <p></p>
                    @endif
                        

                    

                    You are logged in! {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
