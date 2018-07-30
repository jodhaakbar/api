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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Timestamp', (isset($fields['timestamp']['language'])? $fields['timestamp']['language'] : array())) }}</td>
						<td>{{ $row->timestamp}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status Pesanan Internal', (isset($fields['status_pesanan_internal']['language'])? $fields['status_pesanan_internal']['language'] : array())) }}</td>
						<td>{{ $row->status_pesanan_internal}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status Pesanan Gojek', (isset($fields['status_pesanan_gojek']['language'])? $fields['status_pesanan_gojek']['language'] : array())) }}</td>
						<td>{{ $row->status_pesanan_gojek}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kode Booking', (isset($fields['kode_booking']['language'])? $fields['kode_booking']['language'] : array())) }}</td>
						<td>{{ $row->kode_booking}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Last Update', (isset($fields['last_update']['language'])? $fields['last_update']['language'] : array())) }}</td>
						<td>{{ $row->last_update}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Uuid', (isset($fields['uuid']['language'])? $fields['uuid']['language'] : array())) }}</td>
						<td>{{ $row->uuid}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('OriginName', (isset($fields['originName']['language'])? $fields['originName']['language'] : array())) }}</td>
						<td>{{ $row->originName}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('OriginNote', (isset($fields['originNote']['language'])? $fields['originNote']['language'] : array())) }}</td>
						<td>{{ $row->originNote}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('OriginContactName', (isset($fields['originContactName']['language'])? $fields['originContactName']['language'] : array())) }}</td>
						<td>{{ $row->originContactName}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('OriginContactPhone', (isset($fields['originContactPhone']['language'])? $fields['originContactPhone']['language'] : array())) }}</td>
						<td>{{ $row->originContactPhone}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('OriginLatLong', (isset($fields['originLatLong']['language'])? $fields['originLatLong']['language'] : array())) }}</td>
						<td>{{ $row->originLatLong}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('OriginAddress', (isset($fields['originAddress']['language'])? $fields['originAddress']['language'] : array())) }}</td>
						<td>{{ $row->originAddress}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('DestinationName', (isset($fields['destinationName']['language'])? $fields['destinationName']['language'] : array())) }}</td>
						<td>{{ $row->destinationName}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('DestinationNote', (isset($fields['destinationNote']['language'])? $fields['destinationNote']['language'] : array())) }}</td>
						<td>{{ $row->destinationNote}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('DestinationContactName', (isset($fields['destinationContactName']['language'])? $fields['destinationContactName']['language'] : array())) }}</td>
						<td>{{ $row->destinationContactName}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('DestinationContactPhone', (isset($fields['destinationContactPhone']['language'])? $fields['destinationContactPhone']['language'] : array())) }}</td>
						<td>{{ $row->destinationContactPhone}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('DestinationLatLong', (isset($fields['destinationLatLong']['language'])? $fields['destinationLatLong']['language'] : array())) }}</td>
						<td>{{ $row->destinationLatLong}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('DestinationAddress', (isset($fields['destinationAddress']['language'])? $fields['destinationAddress']['language'] : array())) }}</td>
						<td>{{ $row->destinationAddress}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Item', (isset($fields['item']['language'])? $fields['item']['language'] : array())) }}</td>
						<td>{{ $row->item}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('StoreOrderId', (isset($fields['storeOrderId']['language'])? $fields['storeOrderId']['language'] : array())) }}</td>
						<td>{{ $row->storeOrderId}} </td>

					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	