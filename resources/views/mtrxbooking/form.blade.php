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

	{!! Form::open(array('url'=>'mtrxbooking?return='.$return, 'class'=>'form-horizontal validated','files' => true )) !!}
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
						<fieldset><legend> TRX Booking</legend>
				
									  <div class="form-group  " >
										<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
										<div class="col-md-6">
										  <input  type='text' name='id' id='id' value='{{ $row['id'] }}'
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
									  </div> 
									  <div class="form-group  " >
										<label for="Status Pesanan Internal" class=" control-label col-md-4 text-left"> Status Pesanan Internal </label>
										<div class="col-md-6">
										  <input  type='text' name='status_pesanan_internal' id='status_pesanan_internal' value='{{ $row['status_pesanan_internal'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Status Pesanan Gojek" class=" control-label col-md-4 text-left"> Status Pesanan Gojek </label>
										<div class="col-md-6">
										  <input  type='text' name='status_pesanan_gojek' id='status_pesanan_gojek' value='{{ $row['status_pesanan_gojek'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Kode Booking" class=" control-label col-md-4 text-left"> Kode Booking </label>
										<div class="col-md-6">
										  <input  type='text' name='kode_booking' id='kode_booking' value='{{ $row['kode_booking'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Last Update" class=" control-label col-md-4 text-left"> Last Update </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('last_update', $row['last_update'],array('class'=>'form-control input-sm datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Uuid" class=" control-label col-md-4 text-left"> Uuid </label>
										<div class="col-md-6">
										  <input  type='text' name='uuid' id='uuid' value='{{ $row['uuid'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="OriginName" class=" control-label col-md-4 text-left"> OriginName </label>
										<div class="col-md-6">
										  <input  type='text' name='originName' id='originName' value='{{ $row['originName'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="OriginNote" class=" control-label col-md-4 text-left"> OriginNote </label>
										<div class="col-md-6">
										  <input  type='text' name='originNote' id='originNote' value='{{ $row['originNote'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="OriginContactName" class=" control-label col-md-4 text-left"> OriginContactName </label>
										<div class="col-md-6">
										  <input  type='text' name='originContactName' id='originContactName' value='{{ $row['originContactName'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="OriginContactPhone" class=" control-label col-md-4 text-left"> OriginContactPhone </label>
										<div class="col-md-6">
										  <input  type='text' name='originContactPhone' id='originContactPhone' value='{{ $row['originContactPhone'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="OriginLatLong" class=" control-label col-md-4 text-left"> OriginLatLong </label>
										<div class="col-md-6">
										  <input  type='text' name='originLatLong' id='originLatLong' value='{{ $row['originLatLong'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="OriginAddress" class=" control-label col-md-4 text-left"> OriginAddress </label>
										<div class="col-md-6">
										  <input  type='text' name='originAddress' id='originAddress' value='{{ $row['originAddress'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="DestinationName" class=" control-label col-md-4 text-left"> DestinationName </label>
										<div class="col-md-6">
										  <input  type='text' name='destinationName' id='destinationName' value='{{ $row['destinationName'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="DestinationNote" class=" control-label col-md-4 text-left"> DestinationNote </label>
										<div class="col-md-6">
										  <input  type='text' name='destinationNote' id='destinationNote' value='{{ $row['destinationNote'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="DestinationContactName" class=" control-label col-md-4 text-left"> DestinationContactName </label>
										<div class="col-md-6">
										  <input  type='text' name='destinationContactName' id='destinationContactName' value='{{ $row['destinationContactName'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="DestinationContactPhone" class=" control-label col-md-4 text-left"> DestinationContactPhone </label>
										<div class="col-md-6">
										  <input  type='text' name='destinationContactPhone' id='destinationContactPhone' value='{{ $row['destinationContactPhone'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="DestinationLatLong" class=" control-label col-md-4 text-left"> DestinationLatLong </label>
										<div class="col-md-6">
										  <input  type='text' name='destinationLatLong' id='destinationLatLong' value='{{ $row['destinationLatLong'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="DestinationAddress" class=" control-label col-md-4 text-left"> DestinationAddress </label>
										<div class="col-md-6">
										  <input  type='text' name='destinationAddress' id='destinationAddress' value='{{ $row['destinationAddress'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Item" class=" control-label col-md-4 text-left"> Item </label>
										<div class="col-md-6">
										  <input  type='text' name='item' id='item' value='{{ $row['item'] }}'
						     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="StoreOrderId" class=" control-label col-md-4 text-left"> StoreOrderId </label>
										<div class="col-md-6">
										  <input  type='text' name='storeOrderId' id='storeOrderId' value='{{ $row['storeOrderId'] }}'
						     class='form-control input-sm ' />
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
			var removeUrl = '{{ url("mtrxbooking/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop