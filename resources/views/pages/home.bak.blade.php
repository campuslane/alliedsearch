@extends('layouts.new')

@section('title', 'Allied Search')

{{-- page header section --}}
@section('header')
	<div class="front-header-container">
	<div class="container front-header">
		<div class="row">
			<div class="col-lg-offset-5 col-md-offset-5 col-sm-offset-6">
				<div class="front-header-text">
					Professional & Executive Search Services
				</div>

				<div class="front-header-text-2">
					Professional & Executive <br> Search Services
				</div>

			</div>
		</div>

	</div>
	</div>
@endsection


{{-- page content section --}}
@section('content')

	
	<div class="row">
		<div class="col-lg-12  col-md-12  col-sm-12">
			<div class="well front-page-well">
				<div class="row">
					<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8">
						For over 30 Years <strong>Allied Search</strong> has been placing top talent at companies throughout the U.S. and Worldwide. If you need to fill a position at your company or if you're seeking a new career opportunity contact us today.</div>
					</div>
				</div>
			

			<div class="front-page-buttons">
				<a href="/candidate" style="margin-bottom:20px;" class="btn btn-primary btn-lg"><i class="fa fa-user"></i> For Job Candidates</a> &nbsp; &nbsp; 
				<a href="/client" style="margin-bottom:20px;" class="btn btn-primary btn-lg"><i class="fa fa-bank"></i> For Companies</a>
			</div>

			<br><br>


			<h3 class="divisions-header">Divisions</h3>
			
			<div class="row divisions">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<ul>
						<li><h4>Executive</h4>
						Presidents (CEO's) and Vice Presidents (VP's) in all industries. 
						</li>
						<li><h4>Tax & Financial</h4>
							Chief Financial Officers (CFO's), Treasurers, Controllers, Directors, Managers, Supervisors, Accountants, Analysts, etc. in all industries. Tax Specialists in Public Accounting (staff up to Partner) and all industries (staff up to VP of Taxes). 
						</li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4">
					<ul>
					
						<li><h4>Consulting</h4>
							Advisory, Business, Internet Security, Economic, Educational, Energy, ERP, Financial, Healthcare, Human Resources, Litigation, Management, Operational, Outsourcing, Pharmaceutical, Public Sector, Risk, SAP, Strategy, Technology, Etc..
							
						</li>

						<li><h4>Sales & Marketing</h4>
							Staff, Supervisors, Managers, Directors, VP's, etc. in all industries. 

						</li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4">
					<ul>
						<li><h4>Human Resources	</h4>
							Staff, Supervisors, Managers, Directors, VP's, etc. in all industries. 
						</li>

						<li><h4>Audit</h4>
							IT Auditors, Internal Auditors, Financial Auditors, Integrated Auditors, Operational Auditors, etc. in Public Accounting (staff up to Partner) and all industries (staff up to VP of Audit). 

						</li>
					</ul>
				</div>
			</div>

			<hr>

			
		<div class="client-logos">
			<img src="/images/bofa.png" alt=""> &nbsp; 
			<img src="/images/ibm.png" alt="">  &nbsp; &nbsp;
			<img src="/images/kpmg.png" alt="">  &nbsp; 
		</div>
	
		</div>
	</div>

  <br>
  <br>
 

@endsection	