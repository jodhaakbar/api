

		 {!! Form::open(array('url'=>'msubmission/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
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
