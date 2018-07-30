

		 {!! Form::open(array('url'=>'mpeserta/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Modul Pendaftaran Peserta</legend>
				{!! Form::hidden('id', $row['id']) !!}
									  <div class="form-group  " >
										<label for="Nama Anak" class=" control-label col-md-4 text-left"> Nama Anak <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='nama_anak' id='nama_anak' value='{{ $row['nama_anak'] }}'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Jenis Kelamin" class=" control-label col-md-4 text-left"> Jenis Kelamin <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  

					<input type='radio' name='jenis_kelamin' value ='1' required @if($row['jenis_kelamin'] == '1') checked="checked" @endif class='minimal-red' > LAKI - LAKI 

					<input type='radio' name='jenis_kelamin' value ='2' required @if($row['jenis_kelamin'] == '2') checked="checked" @endif class='minimal-red' > PEREMPUAN 
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Tempat Lahir" class=" control-label col-md-4 text-left"> Tempat Lahir <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='tempat_lahir' id='tempat_lahir' value='{{ $row['tempat_lahir'] }}'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Tanggal Lahir" class=" control-label col-md-4 text-left"> Tanggal Lahir <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('tanggal_lahir', $row['tanggal_lahir'],array('class'=>'form-control input-sm date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Usia" class=" control-label col-md-4 text-left"> Usia <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
					<?php $usia = explode(',',$row['usia']);
					$usia_opt = array( '5' => '5 TAHUN' ,  '6' => '6 TAHUN' ,  '7' => '7 TAHUN' ,  '8' => '8 TAHUN' ,  '9' => '9 TAHUN' ,  '10' => '10 TAHUN' ,  '11' => '11 TAHUN' ,  '12' => '12 TAHUN' ,  '13' => '13 TAHUN' ,  '14' => '14 TAHUN' , ); ?>
					<select name='usia' rows='5' required  class='select2 '  > 
						<?php
						foreach($usia_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['usia'] == $key ? " selected='selected' " : '' ).">$val</option>";
						}
						?></select>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Alamat" class=" control-label col-md-4 text-left"> Alamat <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <textarea name='alamat' rows='5' id='alamat' class='form-control input-sm '
				         required  >{{ $row['alamat'] }}</textarea>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Kota" class=" control-label col-md-4 text-left"> Kota <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='kota' id='kota' value='{{ $row['kota'] }}'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Sekolah" class=" control-label col-md-4 text-left"> Sekolah <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='sekolah' id='sekolah' value='{{ $row['sekolah'] }}'
						required     class='form-control input-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group  " >
										<label for="Kelas" class=" control-label col-md-4 text-left"> Kelas <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='kelas' id='kelas' value='{{ $row['kelas'] }}'
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
										<label for="Kategori" class=" control-label col-md-4 text-left"> Kategori <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='kategori' id='kategori' value='{{ $row['kategori'] }}'
						required     class='form-control input-sm ' />
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
