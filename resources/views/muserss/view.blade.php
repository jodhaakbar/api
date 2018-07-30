@extends('layouts.app')

@section('content')
<section class="page-header row">
	<h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
	<ol class="breadcrumb">
		<li><a href="{{ url('') }}"> Dashboard </a></li>
		<li><a href="{{ url($pageModule) }}"> {{ $pageTitle }} </a></li>
		<li class="active"> View  </li>		
	</ol>
</section>
<div class="page-content row">
	<div class="page-content-wrapper no-margin">
	
	<div class="sbox">
		<div class="sbox-title clearfix">
			<div class="sbox-tools pull-left" >
		   		<a href="{{ ($prevnext['prev'] != '' ? url('muserss/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
				<a href="{{ ($prevnext['next'] != '' ? url('muserss/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
			</div>	

			<div class="sbox-tools" >
				@if($access['is_add'] ==1)
		   		<a href="{{ url('muserss/'.$id.'/edit?return='.$return) }}" class="tips btn btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
				@endif
				<a href="{{ url('muserss?return='.$return) }}" class="tips btn btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
			</div>
		</div>
		<div class="sbox-content">
			<div class="table-responsive">
				<table class="table table-striped " >
					<tbody>	
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('UUID', (isset($fields['sso_uuid']['language'])? $fields['sso_uuid']['language'] : array())) }}</td>
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Phone', (isset($fields['sso_phone']['language'])? $fields['sso_phone']['language'] : array())) }}</td>
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id Vote', (isset($fields['id_vote']['language'])? $fields['id_vote']['language'] : array())) }}</td>
						<td>{{ $row->id_vote}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Mypoin', (isset($fields['no_mypoin']['language'])? $fields['no_mypoin']['language'] : array())) }}</td>
						<td>{{ $row->no_mypoin}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Ponta', (isset($fields['no_ponta']['language'])? $fields['no_ponta']['language'] : array())) }}</td>
						<td>{{ $row->no_ponta}} </td>

					</tr>
				
					</tbody>	
				</table>   

			 	

			</div>
		</div>
	</div>
	</div>
</div>
@stop
