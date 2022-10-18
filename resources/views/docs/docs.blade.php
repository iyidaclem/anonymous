@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
        <div class="col-md-12">
            <div class="alert alert-info" id="register">
                <h1>Documentations</h1>
{{-- REGISTRATION --}}
            <h5>User registrations</h5>
            <b>Endpoint</b>: {{ request()->getHost() }}/api/register
            <b>Request type</b>: POST <br>
            <b>params</b>
            <ul>
                <li>email</li>
                <li>first_name</li>
                <li>last_name</li>
                <li>password</li>
                <li>refered_by</li>                
            </ul>
            <b>response</b>
            {status:bool,data:{}}

            </div>

            <div class="alert alert-muted" id="login">
                {{-- LOGIN --}}
            <hr>
            <h5>Login</h5>
            <b>Endpoint</b>: {{ request()->getHost() }}/api/login <br>
            <b>Request type</b>: POST <br>
            <b>params</b>
            <ul>
                <li>email</li>
                <li>password</li>                
            </ul><br>
            <b>response</b>
            {
                "status": true,
                "data": {
                    "access_token": "6|2v3nY3ItgcQxbrCuFPNE4pSGaoQIsY6R3LidZTkf",
                    "token_type": "Bearer"
                }
            }

            </div>

           <div class="alert alert-info" id="logout">
            <hr>
            <h5>logout</h5>
            <b>Endpoint</b>: {{ request()->getHost() }}/api/logout <br>
            <b>Request type</b>: POST <br>
            <b>headers</b>{
                'Authorization': 'Bearer '+{access_token}
              }, <br>
            <b>response</b><br>
            {
                "status": true,
                "data": {
                    "message": "Logged out successfully"
                }
            }
           </div>

           <div class="alert alert-muted" id="forgotpassword">
            <hr>
            <h5>Forget Password</h5>
            <b>Endpoint</b>: {{ request()->getHost() }}/api/forgot-password <br>
            <b>Request type</b>: POST <br>
            <b>Params</b> <br>
            <ul>
                <li>email</li>
            </ul>
             <br>
            <b>response</b><br>
            {
                "status": true,
                "data": {
                    "message": "We have sent you password reset token in your email."
                }
            }
                <br>
                            <b>Or</b>
                <br>
                {
                    "status": false,
                    "data": {
                        "message": "User not found"
                    }
                }
           </div>

           <div class="alert alert-info" id="newpassword">
            <hr>
            <h5>Add New Password</h5>
            <b>Endpoint</b>: {{ request()->getHost() }}/api/new-password <br>
            <b>Request type</b>: POST <br>
            <b>Params</b> <br>
            <ul>
                <li>email</li>
                <li>reset_code</li>
                <li>new_password</li>
            </ul>
             <br>
            <b>response</b><br>
            {
                "status": false,
                "data": {
                    "message": "Invalid reset code"
                }
            }
                <br>
                            <b>Or</b>
                <br>
                {
                    "status": true,
                    "data": {
                        "message": "Password changed"
                    }
                }
           </div>


           <div class="alert" id="sendmessage">
            <hr>
            <h5>Send Message</h5>
            <b>Endpoint</b>: {{ request()->getHost() }}/api/send-message <br>
            <b>Request type</b>: POST <br>
            <b>Params</b> <br>
            <ul>
                <li>user_id</li>
                <li>message</li>
            </ul>
             <br>
            <b>response</b><br>
            {      "status":true,
                "data":
                {   "user_id":"4932218092",
                "message":"WElcome",
                "updated_at":"2022-10-18T17:51:27.000000Z",
                "created_at":"2022-10-18T17:51:27.000000Z",
                "id":5}}
                <br>
                            <b>Or</b>
                <br>
                {"message":"Unauthenticated."}
           </div>


           <div class="alert alert-info" id="fetchmessage">
            <hr>
            <h5>fetch Message</h5>
            <b>Endpoint</b>: {{ request()->getHost() }}/api/fetch-message <br>
            <b>Request type</b>: POST <br>
            <b>Params</b> <br>
            <ul>
                <li>user_id</li>
                <li>message</li>
            </ul>
            <b>Headers</b>
            <ul>
                <li>accept: application/json</li>
                <li>Content-Type: application/json</li>
                <li>Authorization: Bearer { access_token }</li>
            </ul>
             <br>
            <b>response</b><br>
            {      "status":true,
                "data":
                {"status":true,
                "messages":[{"id":8,"user_id":"5191280393",
                "message":"WElcome",
                "created_at":"2022-10-18T18:02:47.000000Z",
                "updated_at":"2022-10-18T18:02:47.000000Z"}]}
                <br>
                            <b>Or</b>
                <br>
                {"message":"Unauthenticated."}
           </div>


        </div>
        <div class="col-md-12 fixed-bottom bg-dark text-light p-3 text-capitalize border text-center">
            <a href="#register">Registration</a>
            <a href="#login">login</a>
            <a href="#logout">logout</a>
            <a href="#forgotpassword">forgotpassword</a>
            <a href="#newpassword">newpassword</a>
            <a href="#sendmessage">sendmessage</a>
            <a href="#fetchmessage">fetchmessage</a>
            
            
            
            
        </div>
    
    </div>
</div>
@endsection