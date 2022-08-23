
<body>
    @include('Settings_page');

<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<form action="{{ route('update') }}" method="post">
							@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>First Name</label>
								  	<input type="text" class="form-control"  name="first_name" placeholder="{{Auth::user()->first_name}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Last Name</label>
								  	<input type="text" class="form-control" name="last_name" placeholder="{{Auth::user()->last_name}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" name="email" placeholder="{{Auth::user()->email}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Phone number</label>
								  	<input type="text" class="form-control" name="phone" placeholder="{{Auth::user()->phone}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>CNP</label>
								  	<input type="text" class="form-control" name="cnp" placeholder="{{Auth::user()->cnp}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Address</label>
								  	<input type="text" class="form-control" name="address" placeholder="{{Auth::user()->address}}">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary" type="submit">Update</button>
                          
					</form>
							<button class="btn btn-light">Cancel</button>
						</div>

					</div>
</body>

