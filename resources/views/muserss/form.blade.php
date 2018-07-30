@extends('layouts.app')

@section('content')
<section class="page-header row">
	<h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
	<ol class="breadcrumb">
		<li><a href="{{ url('') }}"> Dashboard </a></li>
		<li><a href="{{ url($pageModule) }}"> {{ $pageTitle }} </a></li>
		<li class="active"> Form  </li>		
	</ol>
</section>
<div class="page-content row">
	<div class="page-content-wrapper no-margin">

	{!! Form::open(array('url'=>'muserss?return='.$return, 'class'=>'form-horizontal validated','files' => true )) !!}
	<div class="sbox">
		<div class="sbox-title clearfix">
			<div class="sbox-tools " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
			</div>
			<div class="sbox-tools pull-left" >
				<button name="apply" class="tips btn btn-sm btn-apply  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
				<button name="save" class="tips btn btn-sm btn-save"  title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button> 
			</div>
		</div>	
		<div class="sbox-content clearfix">
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		
<div class="col-md-12">
						<fieldset><legend> modul user</legend>
				{!! Form::hidden('id', $row['id']) !!}
									  <div class="form-group  " >
										<label for="Group Id" class=" control-label col-md-4 text-left"> Group Id </label>
										<div class="col-md-6">
										  <input  type='text' name='group_id' id='group_id' value='{{ $row['group_id'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Username" class=" control-label col-md-4 text-left"> Username </label>
										<div class="col-md-6">
										  <input  type='text' name='username' id='username' value='{{ $row['username'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Password" class=" control-label col-md-4 text-left"> Password </label>
										<div class="col-md-6">
										  <input  type='text' name='password' id='password' value='{{ $row['password'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email </label>
										<div class="col-md-6">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="First Name" class=" control-label col-md-4 text-left"> First Name </label>
										<div class="col-md-6">
										  <input  type='text' name='first_name' id='first_name' value='{{ $row['first_name'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Last Name" class=" control-label col-md-4 text-left"> Last Name </label>
										<div class="col-md-6">
										  <input  type='text' name='last_name' id='last_name' value='{{ $row['last_name'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Avatar" class=" control-label col-md-4 text-left"> Avatar </label>
										<div class="col-md-6">
										  <input  type='text' name='avatar' id='avatar' value='{{ $row['avatar'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Active" class=" control-label col-md-4 text-left"> Active </label>
										<div class="col-md-6">
										  <input  type='text' name='active' id='active' value='{{ $row['active'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Login Attempt" class=" control-label col-md-4 text-left"> Login Attempt </label>
										<div class="col-md-6">
										  <input  type='text' name='login_attempt' id='login_attempt' value='{{ $row['login_attempt'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Last Login" class=" control-label col-md-4 text-left"> Last Login </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('last_login', $row['last_login'],array('class'=>'form-control input-sm datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Created At" class=" control-label col-md-4 text-left"> Created At </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('created_at', $row['created_at'],array('class'=>'form-control input-sm datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Updated At" class=" control-label col-md-4 text-left"> Updated At </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('updated_at', $row['updated_at'],array('class'=>'form-control input-sm datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Reminder" class=" control-label col-md-4 text-left"> Reminder </label>
										<div class="col-md-6">
										  <input  type='text' name='reminder' id='reminder' value='{{ $row['reminder'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Activation" class=" control-label col-md-4 text-left"> Activation </label>
										<div class="col-md-6">
										  <input  type='text' name='activation' id='activation' value='{{ $row['activation'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Remember Token" class=" control-label col-md-4 text-left"> Remember Token </label>
										<div class="col-md-6">
										  <input  type='text' name='remember_token' id='remember_token' value='{{ $row['remember_token'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Last Activity" class=" control-label col-md-4 text-left"> Last Activity </label>
										<div class="col-md-6">
										  <input  type='text' name='last_activity' id='last_activity' value='{{ $row['last_activity'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Config" class=" control-label col-md-4 text-left"> Config </label>
										<div class="col-md-6">
										  <textarea name='config' rows='5' id='config' class='form-control input-sm '
				           >{{ $row['config'] }}</textarea>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Uuid" class=" control-label col-md-4 text-left"> Sso Uuid </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_uuid' id='sso_uuid' value='{{ $row['sso_uuid'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Username" class=" control-label col-md-4 text-left"> Sso Username </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_username' id='sso_username' value='{{ $row['sso_username'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Email" class=" control-label col-md-4 text-left"> Sso Email </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_email' id='sso_email' value='{{ $row['sso_email'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Last Login" class=" control-label col-md-4 text-left"> Sso Last Login </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_last_login' id='sso_last_login' value='{{ $row['sso_last_login'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Date Registered" class=" control-label col-md-4 text-left"> Sso Date Registered </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_date_registered' id='sso_date_registered' value='{{ $row['sso_date_registered'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Date Last Updated" class=" control-label col-md-4 text-left"> Sso Date Last Updated </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_date_last_updated' id='sso_date_last_updated' value='{{ $row['sso_date_last_updated'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Birthday" class=" control-label col-md-4 text-left"> Sso Birthday </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_birthday' id='sso_birthday' value='{{ $row['sso_birthday'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Firstname" class=" control-label col-md-4 text-left"> Sso Firstname </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_firstname' id='sso_firstname' value='{{ $row['sso_firstname'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Lastname" class=" control-label col-md-4 text-left"> Sso Lastname </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_lastname' id='sso_lastname' value='{{ $row['sso_lastname'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Gender" class=" control-label col-md-4 text-left"> Sso Gender </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_gender' id='sso_gender' value='{{ $row['sso_gender'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Phone" class=" control-label col-md-4 text-left"> Sso Phone </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_phone' id='sso_phone' value='{{ $row['sso_phone'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Province" class=" control-label col-md-4 text-left"> Sso Province </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_province' id='sso_province' value='{{ $row['sso_province'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso City" class=" control-label col-md-4 text-left"> Sso City </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_city' id='sso_city' value='{{ $row['sso_city'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sso Profilepic" class=" control-label col-md-4 text-left"> Sso Profilepic </label>
										<div class="col-md-6">
										  <input  type='text' name='sso_profilepic' id='sso_profilepic' value='{{ $row['sso_profilepic'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Id Vote" class=" control-label col-md-4 text-left"> Id Vote </label>
										<div class="col-md-6">
										  <textarea name='id_vote' rows='5' id='id_vote' class='form-control input-sm '
				           >{{ $row['id_vote'] }}</textarea>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="No Mypoin" class=" control-label col-md-4 text-left"> No Mypoin </label>
										<div class="col-md-6">
										  <textarea name='no_mypoin' rows='5' id='no_mypoin' class='form-control input-sm '
				           >{{ $row['no_mypoin'] }}</textarea>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="No Ponta" class=" control-label col-md-4 text-left"> No Ponta </label>
										<div class="col-md-6">
										  <textarea name='no_ponta' rows='5' id='no_ponta' class='form-control input-sm '
				           >{{ $row['no_ponta'] }}</textarea>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset>
			</div>

			

		</div>
	</div>
	<input type="hidden" name="action_task" value="save" />
	{!! Form::close() !!}
	</div>
</div>		
	
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("muserss/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop