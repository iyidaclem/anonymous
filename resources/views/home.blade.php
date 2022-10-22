@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome '). auth()->user()->first_name }}</div>

                    <small>Copy / share your links to you family and friends let them send you secret anonymous message. Their
                        identity is hidden. You are going to here the craziest thing you never knew people can say about. Cheers!!! </small>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="alert alert-info text-center">
                             Your Link: <span id="mylink">{{ "https://".request()->getHost() . '/send/' . auth()->user()->user_id }}</span> <br>
                            <button id="copy_link"  onclick="copyLink()" class="btn btn-primary   m-1 w-50"><i class="bi bi-clipboard"></i> Copy</button>
                            <button id="share_link" onclick="shareLink()" class="btn btn-primary   m-1 w-50"><i class="bi bi-share"></i> Share</button>
                        </div>

                        <hr>
                        <h1>Messages</h1>
                        <div class="container-fluid ">
                           @if(count($messages) > 0)
                                @foreach($messages->all() as $message)
                                <div class="row msg">
                                    <div class="col-md-8"> {{ $message->message }}</div>
                                    <div class="col-md-4 bg-secondary">
                                        <div style="
                                        display: flex;
                                        flex-direction: row;
                                        align-items: center;
                                        justify-content: space-around;
                                        width: 100%;
                                        ">
                                        <i   class="btn bi w-50 bi-facebook"></i> <i   class="btn bi bi-whatsapp"></i><i   class="btn bi bi-trash"></i></div> 
                                    </div>
                                </div><br>
                                @endforeach
                           @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
