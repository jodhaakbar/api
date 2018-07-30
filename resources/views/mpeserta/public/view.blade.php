<div class="m-t" style="padding-top:25px;">	
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-responsive" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Anak', (isset($fields['nama_anak']['language'])? $fields['nama_anak']['language'] : array())) }}</td>
						<td>{{ $row->nama_anak}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kota', (isset($fields['kota']['language'])? $fields['kota']['language'] : array())) }}</td>
						<td>{{ $row->kota}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sekolah', (isset($fields['sekolah']['language'])? $fields['sekolah']['language'] : array())) }}</td>
						<td>{{ $row->sekolah}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kategori', (isset($fields['kategori']['language'])? $fields['kategori']['language'] : array())) }}</td>
						<td>{{ $row->kategori}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id Sso', (isset($fields['id_sso']['language'])? $fields['id_sso']['language'] : array())) }}</td>
						<td>{{ $row->id_sso}} </td>

					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	