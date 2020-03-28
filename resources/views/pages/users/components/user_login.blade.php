<div class="row">
    <div class="col-lg-12">
        <div class="panel registration-form">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-9 col-md-offset-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label>Username :</label>
                                    <input type="text" data-name="user_login" class="form-control"
                                           placeholder="Please input Username" name="username" id="username" required>
                                    <div class="form-control-feedback">
                                        <i class="icon-user-check text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9 col-md-offset-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group has-feedback">
                                    <label>Password :</label>
                                    <input type="password" pattern=".{5,10}" class="form-control"
                                           placeholder="Please input Password" name="password"
                                           id="password" data-name="user_login" required>
                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-feedback">
                                    <label>ComfirmPassword :</label>
                                    <input type="password" pattern=".{5,10}" class="form-control"
                                           placeholder="Please input Password again." name="confirm" id="confirm"
                                           data-name="user_login" required>
                                    <div class="form-control-feedback">
                                        <i class="icon-user-lock text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9 col-md-offset-3">
                        <div class="row">
                            <div class="col-md-12">
                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
