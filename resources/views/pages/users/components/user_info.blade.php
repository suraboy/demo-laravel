<div class="row">
    <div class="col-lg-12">
        <div class="panel registration-form">
            <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>Firstname :</label>
                                        <input type="text" data-name="user_info" class="form-control" placeholder="Please input Firstname" value="{{ old('name', '') }}" name="name" id="name" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>Lastname :</label>
                                        <input type="text" class="form-control" placeholder="Please input Lastname" value="{{ old('last_name', '') }}" name="last_name" id="last_name" required data-name="user_info">
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>Nickname :</label>
                                        <input type="text" class="form-control" placeholder="Please input Nickname" value="{{ old('nick_name', '') }}" name="nick_name" id="nick_name" required data-name="user_info">
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
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Please input Email address" value="{{ old('email', '') }}" required data-name="user_info">
                                        <div class="form-control-feedback">
                                            <i class="icon-mention text-muted" id="icon-email"></i>
                                        </div>
                                        <span id="error_email"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>Mobile :</label>
                                        <input type="text" class="form-control numeric" name="mobile" id="mobile" value="{{ old('mobile', '') }}" placeholder="Please input Phone Number" data-name="user_info" maxlength="10">
                                        <div class="form-control-feedback">
                                            <i class="fas fa-mobile-alt text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>Status :</label>
                                        <select class="form-control select2" name="status" id="status" required >
                                            <option value="">Please selected status</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>Role :</label>
                                        <select class="form-control select2" name="type" id="type" required data-name="user_info">
                                            <option>Please selected type user</option>
                                            <option value="admin">Admin</option>
                                            <option value="owner">Owner</option>
                                            <option value="staff">Staff</option>
                                            <option value="brand-owner">Brand-owner</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>Brith date :</label>
                                        <input type="date" name="birthday" id="birthday" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <label>Gender :</label>
                                        <select class="form-control select2" name="gender" id="gender" required >
                                            <option value="">Please selected gender user</option>
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
