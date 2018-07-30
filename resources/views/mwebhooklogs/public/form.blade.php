

		 {!! Form::open(array('url'=>'mwebhooklogs/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Webhook Logs</legend>
				
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
										<label for="Request" class=" control-label col-md-4 text-left"> Request </label>
										<div class="col-md-6">
										  <input  type='text' name='request' id='request' value='{{ $row['request'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Booking Id" class=" control-label col-md-4 text-left"> Booking Id </label>
										<div class="col-md-6">
										  <input  type='text' name='booking_id' id='booking_id' value='{{ $row['booking_id'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="LiveTrackingUrl" class=" control-label col-md-4 text-left"> LiveTrackingUrl </label>
										<div class="col-md-6">
										  <input  type='text' name='liveTrackingUrl' id='liveTrackingUrl' value='{{ $row['liveTrackingUrl'] }}'
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

			

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
