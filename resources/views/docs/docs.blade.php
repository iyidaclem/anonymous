@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
        <div class="col-md-12">
            <div class="alert alert-info" id="register">
                <h1>Documentations</h1>
{{-- REGISTRATION --}}
            <h5>User registrations</h5>
            <b>Endpoint</b>: {domain}/api/register
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
            <b>Endpoint</b>: {domain}/api/login <br>
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
            <b>Endpoint</b>: {domain}/api/logout <br>
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
            <b>Endpoint</b>: {domain}/api/forgot-password <br>
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
            <b>Endpoint</b>: {domain}/api/new-password <br>
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


        </div>
        <div class="col-md-12 fixed-bottom bg-dark text-light p-3 text-capitalize border text-center">
            <a href="#register">Registration</a>
            <a href="#login">login</a>
            <a href="#logout">logout</a>
            <a href="#forgotpassword">forgotpassword</a>
            <a href="#newpassword">newpassword</a>
            
            
        </div>
    
    </div>
</div>
@endsection