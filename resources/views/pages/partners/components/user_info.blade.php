<div class="row">
    <div class="col-lg-12">
        <div class="panel registration-form">
            <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>ชื่อบริษัท / ชื่อร้าน :</label>
                                        <input type="text" data-name="user_info" class="form-control" placeholder="กรอกชื่อบริษัท / ร้าน" value="{{ old('companyname', '') }}" name="companyname" id="companyname" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>เลขผู้เสียภาษี / เลขประจำตัวประชาชน :</label>
                                        <input type="text" class="form-control" placeholder="กรอก เลขผู้เสียภาษี / เลขประจำตัวประชาชน" value="{{ old('last_name', '') }}" name="tax_id" id="tax_id" required data-name="user_info">
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check text-muted"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>อีเมล :</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Please input Email address" value="{{ old('email', '') }}" required data-name="user_info">
                                        <span id="error_email"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>เบอร์ติดต่อ :</label>
                                        <input type="text" class="form-control numeric" name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}" placeholder="กรอกเบอร์ติดต่อ" data-name="user_info" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>Line ID :</label>
                                        <input type="text" class="form-control" name="line_id" id="line_id" value="{{ old('line_id', '') }}" placeholder="กรอกไลน์ไอดี" data-name="user_info">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>facebook :</label>
                                        <input type="text" class="form-control" name="facebook" id="facebook" value="{{ old('facebook', '') }}" placeholder="กรอกเฟสบุ๊ค" data-name="user_info">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>Website :</label>
                                        <input type="text" class="form-control" name="website" id="website" value="{{ old('website', '') }}" placeholder="กรอกเว็บไซด์" data-name="user_info">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>Instagram :</label>
                                        <input type="text" class="form-control" name="ig" id="ig" value="{{ old('ig', '') }}" placeholder="กรอกอินสตาแกรม" data-name="user_info">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
