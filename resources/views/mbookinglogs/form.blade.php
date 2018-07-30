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

	{!! Form::open(array('url'=>'mbookinglogs?return='.$return, 'class'=>'form-horizontal validated','files' => true )) !!}
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
						<fieldset><legend> Make Booking Logs</legend>
				
									  <div class="form-group  " >
										<label for="AuditID" class=" control-label col-md-4 text-left"> AuditID </label>
										<div class="col-md-6">
										  <input  type='text' name='auditID' id='auditID' value='{{ $row['auditID'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Id Trx Booking" class=" control-label col-md-4 text-left"> Id Trx Booking </label>
										<div class="col-md-6">
										  <input  type='text' name='id_trx_booking' id='id_trx_booking' value='{{ $row['id_trx_booking'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Request" class=" control-label col-md-4 text-left"> Request </label>
										<div class="col-md-6">
										  <input  type='text' name='request' id='request' value='{{ $row['request'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Response Code" class=" control-label col-md-4 text-left"> Response Code </label>
										<div class="col-md-6">
										  <input  type='text' name='response_code' id='response_code' value='{{ $row['response_code'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Response" class=" control-label col-md-4 text-left"> Response </label>
										<div class="col-md-6">
										  <input  type='text' name='response' id='response' value='{{ $row['response'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Timestamp" class=" control-label col-md-4 text-left"> Timestamp </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('timestamp', $row['timestamp'],array('class'=>'form-control input-sm datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				
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
			var removeUrl = '{{ url("mbookinglogs/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop