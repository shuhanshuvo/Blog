@extends('layout.index')
@section('content')
<div class="profile-info">
	<div class="container">
		<div class="shadow">
			<div class="row">
				<div class="col-lg-2">
					
				</div>

				<div class="col-lg-8">
					<div class="container">
						<div class="title">
							<h3>Fill in your profile information</h3>
							<div class="line"></div>
						</div>
						<form action="" method="post">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-md-4">
									
								</div>
								<div class="col-md-4">
									<div class="user-profile-image" data-reactid="6"><label class="user-pict user-pict-150 " for="profile_image" data-reactid="7">
										<img src="{{('frontend/img/Profile-pic.PNG')}}" class="user-pict-img" alt="sultanafaria" data-reactid="8">
									</label>
									</div>
								</div>
								<div class="col-md-4">
									
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="FirstName">FIRST NAME</label>
									    <input type="text" class="form-control" id="FirstName" placeholder="First Name">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="LastName">LAST NAME</label>
									    <input type="text" class="form-control" id="LastName" placeholder="Last Name">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="email">EMAIL ADDRESS</label>
							    <input type="email" class="form-control" id="email" placeholder="Email Address">
							</div>
							<div class="form-group">
								<label for="number">PHONE NUMBER</label>
							    <input type="text" class="form-control" id="number" placeholder="Phone Number">
							</div>
							<div class="form-group">
								<label for="Institute">INSTITUTE</label>
							    <input type="text" class="form-control" id="Institute" placeholder="Institute Name">
							</div>
							<div class="form-group">
							    <label for="department">DEPARTMENT</label>
							    <select class="form-control" id="department">
							      <option>Dept. of CSTE</option>
							      <option>Dept. of ACCE</option>
							      <option>Dept. of ICE</option>
							      <option>Dept. of EEE</option>
							      <option>Dept. of FIMS</option>
							      <option>Dept. of Pharmacy</option>
							      <option>Dept. of Microbiology</option>
							      <option>Dept. of Applied Mathematics</option>
							      <option>Dept. of Statistics</option>
							      <option>Dept. of FTNS</option>
							      <option>Dept. of ESDM</option>
							      <option>Dept. of BGE</option>
							      <option>Dept. of Agriculture</option>
							      <option>Dept. of Ocenaography</option>
							      <option>Dept. of Biochemistry & Molecular Biology</option>
							      <option>Dept. of Zoology</option>
							      <option>Dept. of Sociology</option>
							      <option>Dept. of English</option>
							      <option>Dept. of Bangla</option>
							      <option>Dept. of BLWS</option>
							      <option>Dept. of Social Welfare</option>
							      <option>Dept. of Economics</option>
							      <option>Dept. of THM</option>
							      <option>Dept. of MIS</option>
							      <option>Dept. of BBA</option>
							      <option>Dept. of Education</option>
							      <option>Dept. of Education Administration</option>
							      <option>Dept. of Law</option>

							    </select>
							  </div>
							<div class="form-group">
								<label for="batch">BATCH</label>
							    <input type="text" class="form-control" id="batch" placeholder="Batch">
							</div>
							<div class="form-group">
								<label for="job_category">JOB TITLE</label>
							    <input type="text" class="form-control" id="job_category" placeholder="Job Title">
							</div>
							<div class="form-group">
								<label for="works_at">WORKS AT</label>
							    <input type="text" class="form-control" id="works_at" placeholder="Works at">
							</div>
							<div class="form-group">
								<label for="resume">PLEASE UPLOAD YOUR CV</label>
							    <input type="file" class="form-control-file" id="resume" >
							</div>
							<div class="form-group">
								<label for="icon">FOLLOW ME:-</label>
							    <span class="social-media">
						    		<a href="#"><i class="fa fa-facebook color1"></i></a>
									<a href="#"><i class="fa fa-linkedin color2"></i></a>
									<a href="#"><i class="fa fa-google-plus color3"></i></a>
									<a href="#"><i class="fa fa-twitter color4"></i></a>
								</span>
							</div>
							<div class="form-group" id="submit">
								<a href="/Alumni_profile" value="submit" class="form-control">Submit</a>
							</div>
						</form>
					</div>
				</div>

				<div class="col-lg-2">
					
				</div>

			</div>
		</div>
	</div>
</div>
@endsection