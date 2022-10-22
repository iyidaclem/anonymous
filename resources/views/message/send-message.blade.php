@extends('layouts.app')

@section('content')
    <form action=" {{ route('send-message') }} " method="post"></form>

    <h1 class="text-center">Send Message to {{ $data['user']->first_name }}</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if(session('success'))
                <p class="alert alert-success p-5"> {{ session('success') }} 
                Get you own link to start recieving messages <a href="/home"><button class="btn btn-info">Get Link</button></a>
                </p>

                @else
                    <marquee behavior="alternate" direction="alternate">
                        {{-- <center> --}}
                            <small class="text-center"><i>Don't worry about your identity. You are completely anonymous. 
                                <br> Feel free to say you mind!</i> <img width="50" src="{{url('/').'/images/LOL.png'}}" alt=""></small>
                      {{-- </center> --}}
                    </marquee>
              
                @endif

                @if(session('error'))
                <p class="alert alert-danger p-5"> {{ session('error') }} </p>
                @endif

                @if(count($errors))
                    <div class="alert alert-warning p-5">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route("send-message") }}" method="post">
                
                    <textarea  required class="w-100 msg" name="message" id="" rows="10" placeholder="Start typing ..."></textarea>
                    <input type="hidden" name="user_id" value="{{ $data['reciever'] }}">
                    <input type="submit" class="btn btn-danger">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
