<?php $__env->startSection('content'); ?>

<section class="page-header row">
	<h2> <?php echo e($pageTitle); ?> <small> <?php echo e($pageNote); ?> </small></h2>
	<ol class="breadcrumb">
		<li><a href="<?php echo e(url('')); ?>"> Dashboard </a></li>
		<li class="active"> <?php echo e($pageTitle); ?> </li>		
	</ol>
</section>
<div class="page-content row">
	<div class="page-content-wrapper no-margin">

		<div class="sbox">
			<div class="sbox-title">
				<h1> All Records <small> </small></h1>
				<div class="sbox-tools">
					<?php if(Session::get('gid') ==1): ?>
						<a href="<?php echo e(url($pageModule)); ?>" class="tips btn btn-sm  " title=" <?php echo e(__('core.btn_reload')); ?>" ><i class="fa  fa-refresh"></i></a>
						<a href="<?php echo e(url('sximo/module/config/'.$pageModule)); ?>" class="tips btn btn-sm  " title=" <?php echo e(__('core.btn_config')); ?>" ><i class="fa  fa-ellipsis-v"></i></a>
					<?php endif; ?> 	
				</div>				
			</div>
			<div class="sbox-content">
			<!-- Toolbar Top -->
			<div class="row">
				<div class="col-md-4"> 	
					<?php if($access['is_add'] ==1): ?>
					<a href="<?php echo e(url('mwebhooklogs/create?return='.$return)); ?>" class="btn btn-default btn-sm"  
						title="<?php echo e(__('core.btn_create')); ?>"><i class=" fa fa-plus "></i> Create New </a>
					<?php endif; ?>

					<div class="btn-group">
						<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-menu5"></i> Bulk Action </button>
				        <ul class="dropdown-menu">
				         <?php if($access['is_excel'] ==1): ?>
							<li><a href="<?php echo e(url( $pageModule .'/export?do=excel&return='.$return)); ?>"><i class="fa fa-download"></i> Export CSV </a></li>	
						<?php endif; ?>
						<?php if($access['is_add'] ==1): ?>
							<li><a href="<?php echo e(url($pageModule .'/import?return='.$return)); ?>" onclick="SximoModal(this.href, 'Import CSV'); return false;"><i class="fa fa-cloud-upload"></i> Import CSV</a></li>
							<li><a href="javascript://ajax" class=" copy " title="Copy" ><i class="fa fa-copy"></i> Copy selected</a></li>
						<?php endif; ?>	
							<li><a href="<?php echo e(url($pageModule)); ?>"  ><i class="fa fa-times"></i> Clear Search </a></li>
				          	<li role="separator" class="divider"></li>
				         <?php if($access['is_remove'] ==1): ?>
							 <li><a href="javascript://ajax"  onclick="SximoDelete();" class="tips" title="<?php echo e(__('core.btn_remove')); ?>"><i class="fa fa-trash-o"></i>
							Remove Selected </a></li>
						<?php endif; ?> 
				          
				        </ul>
				    </div>    
				</div>
				<div class="col-md-4 pull-right">
					<div class="input-group">
					      <div class="input-group-btn">
					        <button type="button" class="btn btn-default btn-sm " 
					        onclick="SximoModal('<?php echo e(url($pageModule."/search")); ?>','Advance Search'); " ><i class="fa fa-filter"></i> Filter </button>
					      </div><!-- /btn-group -->
					      <input type="text" class="form-control input-sm onsearch" data-target="<?php echo e(url($pageModule)); ?>" aria-label="..." placeholder=" Type And Hit Enter ">
					    </div>
				</div>    
			</div>					
			<!-- End Toolbar Top -->

			<!-- Table Grid -->
			<div class="table-responsive" style="padding-bottom: 70px;">
 			<?php echo Form::open(array('url'=>'mwebhooklogs?'.$return, 'class'=>'form-horizontal m-t' ,'id' =>'SximoTable' )); ?>

			
		    <table class="table table-striped table-hover " id="<?php echo e($pageModule); ?>Table">
		        <thead>
					<tr>
						<th style="width: 3% !important;" class="number"> No </th>
						<th  style="width: 3% !important;"> <input type="checkbox" class="checkall minimal-green" /></th>
						<th  style="width: 10% !important;"><?php echo e(__('core.btn_action')); ?></th>
						
						<?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($t['view'] =='1'): ?>				
								<?php $limited = isset($t['limited']) ? $t['limited'] :''; 
								if(SiteHelpers::filterColumn($limited ))
								{
									$addClass='class="tbl-sorting" ';
									if($insort ==$t['field'])
									{
										$dir_order = ($inorder =='desc' ? 'sort-desc' : 'sort-asc'); 
										$addClass='class="tbl-sorting '.$dir_order.'" ';
									}
									echo '<th align="'.$t['align'].'" '.$addClass.' width="'.$t['width'].'">'.\SiteHelpers::activeLang($t['label'],(isset($t['language'])? $t['language'] : array())).'</th>';				
								} 
								?>
							<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
					  </tr>
		        </thead>

		        <tbody>        						
		            <?php $__currentLoopData = $rowData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <tr>
							<td > <?php echo e(++$i); ?> </td>
							<td ><input type="checkbox" class="ids minimal-green" name="ids[]" value="<?php echo e($row->auditID); ?>" />  </td>
							<td>

							 	<div class="dropdown">
								  <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown"> Action </button>
								  <ul class="dropdown-menu">
								 	<?php if($access['is_detail'] ==1): ?>
									<li><a href="<?php echo e(url('mwebhooklogs/'.$row->auditID.'?return='.$return)); ?>" class="tips" title="<?php echo e(__('core.btn_view')); ?>"> <?php echo e(__('core.btn_view')); ?> </a></li>
									<?php endif; ?>
									<?php if($access['is_edit'] ==1): ?>
									<li><a  href="<?php echo e(url('mwebhooklogs/'.$row->auditID.'/edit?return='.$return)); ?>" class="tips" title="<?php echo e(__('core.btn_edit')); ?>"> <?php echo e(__('core.btn_edit')); ?> </a></li>
									<?php endif; ?>
									<li class="divider" role="separator"></li>
									<?php if($access['is_remove'] ==1): ?>
										 <li><a href="javascript://ajax"  onclick="SximoDelete();" class="tips" title="<?php echo e(__('core.btn_remove')); ?>">
										Remove Selected </a></li>
									<?php endif; ?> 
								  </ul>
								</div>

							</td>														
						 <?php $__currentLoopData = $tableGrid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							 <?php if($field['view'] =='1'): ?>
							 	<?php $limited = isset($field['limited']) ? $field['limited'] :''; ?>
							 	<?php if(SiteHelpers::filterColumn($limited )): ?>
							 	 <?php $addClass= ($insort ==$field['field'] ? 'class="tbl-sorting-active" ' : ''); ?>
								 <td align="<?php echo e($field['align']); ?>" width=" <?php echo e($field['width']); ?>"  <?php echo $addClass; ?> >					 
								 	<?php echo SiteHelpers::formatRows($row->{$field['field']},$field ,$row ); ?>						 
								 </td>
								<?php endif; ?>	
							 <?php endif; ?>					 
						 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>			 
		                </tr>
						
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		              
		        </tbody>
		      
		    </table>
			<input type="hidden" name="action_task" value="" />
			
			<?php echo Form::close(); ?>

			<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<!-- End Table Grid -->


			</div>
		</div>
	</div>
</div>


<script>
$(document).ready(function(){
	$('.copy').click(function() {
		var total = $('input[class="ids"]:checkbox:checked').length;
		if(confirm('are u sure Copy selected rows ?'))
		{
			$('input[name="action_task"]').val('copy');
			$('#SximoTable').submit();// do the rest here	
		}
	})	
	
});	
</script>	
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>