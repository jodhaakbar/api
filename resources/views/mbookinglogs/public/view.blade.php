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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('AuditID', (isset($fields['auditID']['language'])? $fields['auditID']['language'] : array())) }}</td>
						<td>{{ $row->auditID}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id Trx Booking', (isset($fields['id_trx_booking']['language'])? $fields['id_trx_booking']['language'] : array())) }}</td>
						<td>{{ $row->id_trx_booking}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Response Code', (isset($fields['response_code']['language'])? $fields['response_code']['language'] : array())) }}</td>
						<td>{{ $row->response_code}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Response', (isset($fields['response']['language'])? $fields['response']['language'] : array())) }}</td>
						<td>{{ $row->response}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Timestamp', (isset($fields['timestamp']['language'])? $fields['timestamp']['language'] : array())) }}</td>
						<td>{{ $row->timestamp}} </td>

					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	