<meta name="_token" content="{!! csrf_token() !!}"/>
@extends('layouts.login')

@section('content')

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-6 col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <form method="POST" action="{{ route('login') }}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="form-head" align="center">
                                        <a href="#" class="logo"><img src="{{asset('img')}}/logo_web.png"
                                                                      class="img-fluid" alt="logo"></a>
                                        <br><span class="my-4">เข้าสู่ระบบตัวแทนขาย (Agent)</span><br>
                                        @error('username')
                                        <div class="form-group">
                                            <div class="alert alert-danger" align="center">
                                                {{$message}}
                                            </div>
                                        </div>

                                        @enderror
                                        <hr>
                                    </div>
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user"
                                               id="exampleInputEmail" aria-describedby="emailHelp"
                                               placeholder="กรอกชื่อผู้ใช้งาน" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                               id="exampleInputPassword" placeholder="กรอกรหัสผ่าน" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block">เข้าสู่ระบบ <i
                                            class="icon-circle-right2 position-right"></i></button>
                                    <hr>
                                    <div class="text-center">
                                        <p class="mb-0 mt-3">ยังไม่มีบัญชีกับเรา? <a
                                                href="https://www.suksamarket.com/home/contact_shop" target="_blank">สมัครใช้งานฟรี</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection('content')
