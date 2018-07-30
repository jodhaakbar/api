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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('SSO ID', (isset($fields['sso_uuid']['language'])? $fields['sso_uuid']['language'] : array())) }}</td>
						<td>{{ $row->sso_uuid}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Username', (isset($fields['sso_username']['language'])? $fields['sso_username']['language'] : array())) }}</td>
						<td>{{ $row->sso_username}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['sso_email']['language'])? $fields['sso_email']['language'] : array())) }}</td>
						<td>{{ $row->sso_email}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Firstname', (isset($fields['sso_firstname']['language'])? $fields['sso_firstname']['language'] : array())) }}</td>
						<td>{{ $row->sso_firstname}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lastname', (isset($fields['sso_lastname']['language'])? $fields['sso_lastname']['language'] : array())) }}</td>
						<td>{{ $row->sso_lastname}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sso Phone', (isset($fields['sso_phone']['language'])? $fields['sso_phone']['language'] : array())) }}</td>
						<td>{{ $row->sso_phone}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Province', (isset($fields['sso_province']['language'])? $fields['sso_province']['language'] : array())) }}</td>
						<td>{{ $row->sso_province}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('City', (isset($fields['sso_city']['language'])? $fields['sso_city']['language'] : array())) }}</td>
						<td>{{ $row->sso_city}} </td>

					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	