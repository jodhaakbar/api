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

	{!! Form::open(array('url'=>'msubmission?return='.$return, 'class'=>'form-horizontal validated','files' => true )) !!}
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
						<fieldset><legend> Modul Submission</legend>
				{!! Form::hidden('id', $row['id']) !!}
									  <div class="form-group  " >
										<label for="Nama Lengkap" class=" control-label col-md-4 text-left"> Nama Lengkap <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='nama_lengkap' id='nama_lengkap' value='{{ $row['nama_lengkap'] }}'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Judul Proposal" class=" control-label col-md-4 text-left"> Judul Proposal <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='judul_proposal' id='judul_proposal' value='{{ $row['judul_proposal'] }}'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Penjelasan Proposal" class=" control-label col-md-4 text-left"> Penjelasan Proposal <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <textarea name='penjelasan_proposal' rows='5' id='penjelasan_proposal' class='form-control input-sm '
				         required  >{{ $row['penjelasan_proposal'] }}</textarea>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="File Name" class=" control-label col-md-4 text-left"> File Name <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='file' name='file_name' id='file_name' class='inputfile  @if($row['file_name'] =='') class='required' @endif '  />

							<label for='file_name'><i class='fa fa-upload'></i> Choose a file</label>
							<div class='file_name_preview'></div>
					 	<div >
						{!! SiteHelpers::showUploadedFile($row['file_name'],'/upload') !!}

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
			var removeUrl = '{{ url("msubmission/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop