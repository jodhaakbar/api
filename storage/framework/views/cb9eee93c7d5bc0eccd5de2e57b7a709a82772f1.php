<?php $__env->startSection('content'); ?>
<div class="page-content row">
	<div class="page-content-wrapper m-t">

		<div class="sbox">
			<div class="sbox-title">
				<h1> <?php echo e($pageTitle); ?> <small> <?php echo e($pageNote); ?> </small></h1>
			</div>
			<div class="sbox-content">

	 <?php echo $__env->make('sximo.config.tab',array('active'=>'translation'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 	<?php echo Form::open(array('url'=>'sximo/config/translation/', 'class'=>'form-vertical row')); ?>

		
		<div class="col-sm-9">
		
			<a href="<?php echo e(URL::to('sximo/config/addtranslation')); ?> " onclick="SximoModal(this.href,'Add New Language');return false;" class="btn btn-success"><i class="fa fa-plus"></i> New </a>  
			<hr />
			<table class="table table-striped">
				<thead>
					<tr>
						<th> Name </th>
						<th> Folder </th>
						<th> Author </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>		
			
				<?php $__currentLoopData = SiteHelpers::langOption(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td>  <?php echo e($lang['name']); ?>   </td>
						<td> <?php echo e($lang['folder']); ?> </td>
						<td> <?php echo e($lang['author']); ?> </td>
					  	<td>
						<?php if($lang['folder'] !='en'): ?>
						<a href="<?php echo e(URL::to('sximo/config/translation?edit='.$lang['folder'])); ?> " class="btn btn-sm btn-primary"> Manage </a>
						<a href="<?php echo e(URL::to('sximo/config/removetranslation/'.$lang['folder'])); ?> " class="btn btn-sm btn-danger"> Delete </a> 
						 
						<?php endif; ?> 
					
					</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				</tbody>
			</table>
		</div> 

		<?php echo Form::close(); ?>



			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>