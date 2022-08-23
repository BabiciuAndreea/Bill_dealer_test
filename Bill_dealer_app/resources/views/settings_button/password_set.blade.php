
<body>
    @include('Settings_page');
    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
                        <form action="{{ route('updatepass') }}" method="post">
                            @csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" class="form-control" name="old_password">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" class="form-control" name="new_password">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="password" class="form-control" name="confirm_password">
								</div>
							</div>
						</div>
							<button class="btn btn-primary"type="submit">Update</button>
                        </form>
							<button class="btn btn-light">Cancel</button>
    </div>
</body>