<meta name="_token" content="{!! csrf_token() !!}"/>
@extends('layouts.backend')
@section('breadcrumb')
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Create User Management</h4>
            <i class="now-ui-icons arrows-1_minimal-right"></i>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Lists</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection('breadcrumb')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <!-- TEXT -->
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel registration-form">
                                <div class="panel-body">
                                    <div class="text-center">
                                        <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                                        <h5 class="content-group-lg">Create account <small class="display-block">All fields are required</small></h5>
                                    </div>
                                    <form action="{{route('users.insert')}}" method="POST">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group has-feedback">
                                                            <label>Firstname :</label>
                                                            <input type="text" class="form-control" placeholder="Please input Firstname" name="firstname" id="firstname" required="true">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-user-check text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group has-feedback">
                                                            <label>Lastname :</label>
                                                            <input type="text" class="form-control" placeholder="Please input Lastname" name="lastname" id="lastname" required="true">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-user-check text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group has-feedback">
                                                            <label>Email :</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Please input Email address" required="true">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-mention text-muted" id="icon-email"></i>
                                                            </div>
                                                            <span id="error_email"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group has-feedback">
                                                            <label>Tel :</label>
                                                            <input type="number"  class="form-control" required="true" placeholder="Please input your number phone" name="phonenumber" id="phonenumber" min="8">
                                                            <div class="form-control-feedback">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group has-feedback">
                                                            <label>ID Card :</label>
                                                            <input type="number"  class="form-control" placeholder="Please input your ID Card" name="midcard" id="midcard" min="13">
                                                            <div class="form-control-feedback">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group has-feedback">
                                                            <label>Role :</label>
                                                            <select class="form-control" name="role_id" id="role_id" required="true">
                                                                <option>Please selected type user</option>
                                                                <option value="1">Admin</option>
                                                                <option value="2">User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group has-feedback">
                                                            <label>Brith date :</label>
                                                            <input type="date" name="brithdate" id="brithdate" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group has-feedback">
                                                            <label>Gender :</label>
                                                            <select class="form-control" name="gender" id="gender" required="true">
                                                                <option>Please selected gender user</option>
                                                                <option value="0">Female</option>
                                                                <option value="1">Male</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group has-feedback">
                                                            <label>Address :</label>
                                                            <textarea class="form-control" name="address"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label>Password :</label>
                                                            <input type="password" pattern=".{5,10}" class="form-control" placeholder="Please input Password" required="true" name="password" id="password">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-user-lock text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label>ComfirmPassword :</label>
                                                            <input type="password" pattern=".{5,10}" class="form-control" placeholder="Please input Password again." name="repassword" id="repassword">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-user-lock text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="g-recaptcha" data-sitekey="6LfmDTcUAAAAAJ6Dcq8lsQTnMdbQoot0JDq_ziEZ"></div>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <!-- <button type="submit" class="btn btn-link"><i class="icon-arrow-left13 position-left"></i> Back to login form</button> -->
                                                    <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10" onclick="correctCaptcha()"><b><i class="icon-plus3"></i></b> Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('content')
<style>
    #profileimg{position: absolute;bottom: 110px;left: 73px;width: 30%;}
</style>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    $(document).ready(function()
    {
        // Check email
        $("input[name='email']").on('keyup',function()
        {
            var email = $('#email').val();
            if(email.length > 6)
                $.ajax({
                    url:'{{route("users.checkemail")}}',
                    type:'POST',
                    data:'email='+email,
                    success:function(data){
                        if (data == "1") {
                            $("#error_email").html("There is already a user with that email !");
                            $("#error_email").show();
                            $("#email").css("border","1px solid #F90A0A");
                            $(".bg-teal-400").prop("disabled", true);
                            $("#icon-email").css("paddingTop","0px");
                        }
                        else{
                            $("#error_email").hide();
                            $("#email").css("border","1px solid #009900");
                            $(".bg-teal-400").prop("disabled", false);
                            $("#icon-email").css("paddingTop","10px");
                        }
                    },
                });
        });
    });
    {{--function submitForm(){--}}
    {{--    // Upload image--}}
    {{--    data = new FormData();--}}
    {{--    data.append('file', $('#fileimg')[0].files[0]);--}}
    {{--    var imgname  =  $('input[type=file]').val();--}}
    {{--    var size  =  $('#fileimg')[0].files[0].size;--}}
    {{--    var ext =  imgname.substr( (imgname.lastIndexOf('.') +1) );--}}
    {{--    if(ext=='jpg' || ext=='jpeg' || ext=='png' || ext=='gif' || ext=='PNG' || ext=='JPG' || ext=='JPEG'){--}}
    {{--        if(size<=1000000){--}}
    {{--            $.ajax({--}}
    {{--                url: "{{route('fileUploadPost')}}",--}}
    {{--                type: "POST",--}}
    {{--                data: data,--}}
    {{--                enctype: 'multipart/form-data',--}}
    {{--                processData: false,  // tell jQuery not to process the data--}}
    {{--                contentType: false   // tell jQuery not to set contentType--}}
    {{--            }).done(function(data) {--}}
    {{--                console.log(data.path)--}}
    {{--                $('#profileimg_div').html('<img src="../'+data.path+'" id="profileimg"><input type="hidden" name="mpic" value="'+data.path+'">')--}}
    {{--            });--}}
    {{--            return false;--}}
    {{--        }//end size--}}
    {{--        else--}}
    {{--        {--}}
    {{--            imgclean.replaceWith( imgclean = imgclean.clone( true ) );//Its for reset the value of file type--}}
    {{--            alert('Sorry File size exceeding from 1 Mb');--}}
    {{--        }--}}
    {{--    }//end FILETYPE--}}
    {{--    else--}}
    {{--    {--}}
    {{--        imgclean.replaceWith( imgclean = imgclean.clone( true ) );--}}
    {{--        alert('Sorry Only you can uplaod JPEG|JPG|PNG|GIF file type ');--}}
    {{--    }--}}
    {{--}--}}
    // function correctCaptcha(){
    // 	var response = grecaptcha.getResponse();
    // 	if(response.length == 0){
    // 		alert('Please comfirm capcha.');
    // 	}
    // 	else{

    // 	}
    // 	}
</script>
