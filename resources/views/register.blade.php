<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="{{asset('s/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('s/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('s/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('s/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('s/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    @if ($errors->any())
    <div class="alert alert-danger" style="background-color: orange">
        <ul>
            @foreach ($errors->all() as $error)
                <!-- <li>{{ $error }}</li> -->
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('msg'))
<div style="background-color: lime;font-size: 15px;font-family: sans-serif;">{{Session::get('msg')}}</div>
@endif

                    <h2 class="title">Registration Info</h2>
                    <form method="POST" action="{{URL::to('store')}}">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input class="input--style-1" value="{{old('name')}}" type="text" placeholder="NAME" name="name">
                        </div>
                        <div class="alert alert-danger" style="color: red">
                            {{$errors->first('name')}}
                        </div>
                         <div class="input-group">
                            <input class="input--style-1" value="{{old('email')}}" type="email" placeholder="EMAIL" name="email">
                        </div>
                        <div class="alert alert-danger" style="color: red">
                            {{$errors->first('email')}}
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="PASSWORD" name="password">
                        </div>
                       <div class="alert alert-danger" style="color: red">
                        {{$errors->first('password')}}
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="CONFIRM PASSWORD" name="confirm_password">
                        </div>
                       <div class="alert alert-danger" style="color: red">
                        {{$errors->first('confirm_password')}}
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{old('birthday')}}" type="text" placeholder="BIRTHDATE" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                                <div class="alert alert-danger" style="color: red">
                        {{$errors->first('birthday')}}
                        </div>
                        
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" >
                                            <option disabled="disabled" value="{{old('gender')}}" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>  
                                    </div>

                                </div>
                                                                 <div class="alert alert-danger" style="color: red">
                        {{$errors->first('gender')}}
                        </div>
                     
                            </div>

                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                      <input class="input--style-1" type="text" placeholder="Salary" name="salary" value="{{old('salary')}}">
                  
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                                   <div class="alert alert-danger" style="color: red">
                            {{$errors->first('salary')}}
                            </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" value="{{old('username')}}" type="text" placeholder="Username" name="username">
                                </div>
                            </div>
                        
                        </div>
                                           <div class="alert alert-danger" style="color: red">
                        {{$errors->first('username')}}
                            </div>
                  
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('s/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('s/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('s/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('s/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('s/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
