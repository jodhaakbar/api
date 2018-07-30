<?php $__env->startSection('content'); ?>
<section class="page-header row">
	<h2> <?php echo e($pageTitle); ?> <small> <?php echo e($pageNote); ?> </small></h2>
	<ol class="breadcrumb">
		<li><a href="<?php echo e(url('')); ?>"> Dashboard </a></li>
		<li><a href="<?php echo e(url($pageModule)); ?>"> <?php echo e($pageTitle); ?> </a></li>
		<li class="active"> View  </li>		
	</ol>
</section>
<div class="page-content row">
	<div class="page-content-wrapper no-margin">
	
	<div class="sbox">
		<div class="sbox-title clearfix">
			<div class="sbox-tools pull-left" >
		   		<a href="<?php echo e(($prevnext['prev'] != '' ? url('mbookinglogs/'.$prevnext['prev'].'?return='.$return ) : '#')); ?>" class="tips btn btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
				<a href="<?php echo e(($prevnext['next'] != '' ? url('mbookinglogs/'.$prevnext['next'].'?return='.$return ) : '#')); ?>" class="tips btn btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
			</div>	

			<div class="sbox-tools" >
				<?php if($access['is_add'] ==1): ?>
		   		<a href="<?php echo e(url('mbookinglogs/'.$id.'/edit?return='.$return)); ?>" class="tips btn btn-sm  " title="<?php echo e(__('core.btn_edit')); ?>"><i class="fa  fa-pencil"></i></a>
				<?php endif; ?>
				<a href="<?php echo e(url('mbookinglogs?return='.$return)); ?>" class="tips btn btn-sm  " title="<?php echo e(__('core.btn_back')); ?>"><i class="fa  fa-times"></i></a>		
			</div>
		</div>
		<div class="sbox-content">
			<div class="table-responsive">
				<table class="table table-striped " >
					<tbody>	
				
					<tr>
						<td width='30%' class='label-view text-right'><?php echo e(SiteHelpers::activeLang('AuditID', (isset($fields['auditID']['language'])? $fields['auditID']['language'] : array()))); ?></td>
						<td><?php echo e($row->auditID); ?> </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'><?php echo e(SiteHelpers::activeLang('Id Trx Booking', (isset($fields['id_trx_booking']['language'])? $fields['id_trx_booking']['language'] : array()))); ?></td>
						<td><?php echo e($row->id_trx_booking); ?> </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'><?php echo e(SiteHelpers::activeLang('Request', (isset($fields['request']['language'])? $fields['request']['language'] : array()))); ?></td>
						<td><?php echo e($row->request); ?> </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'><?php echo e(SiteHelpers::activeLang('Response Code', (isset($fields['response_code']['language'])? $fields['response_code']['language'] : array()))); ?></td>
						<td><?php echo e($row->response_code); ?> </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'><?php echo e(SiteHelpers::activeLang('Response', (isset($fields['response']['language'])? $fields['response']['language'] : array()))); ?></td>
						<td><?php echo e($row->response); ?> </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'><?php echo e(SiteHelpers::activeLang('Timestamp', (isset($fields['timestamp']['language'])? $fields['timestamp']['language'] : array()))); ?></td>
						<td><?php echo e($row->timestamp); ?> </td>

					</tr>
				
					</tbody>	
				</table>   

			 	

			</div>
		</div>
	</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>