<div class="table-footer">
	<div class="clearfix">
		<div class="col-sm-4">
			<div class="" style=" padding: 15px 0 0">
			<?php echo app('translator')->getFromJson('core.grid_displaying'); ?> 
				<b> <?php echo e(($pagination->currentpage()-1) * $pagination->perpage()+1); ?> </b>
			<?php echo app('translator')->getFromJson('core.grid_to'); ?>
				<b>  <?php echo e($pagination->currentpage()*$pagination->perpage()); ?> </b>
			<?php echo app('translator')->getFromJson('core.grid_of'); ?>
				<b>  <?php echo e($pagination->total()); ?> </b>
			<?php echo app('translator')->getFromJson('core.grid_entries'); ?>
			</div>		
		</div>
		<div class="col-sm-8 text-right">			 
			<?php echo $pagination->appends($pager)->render(); ?>

		</div>
	</div>
</div>	
	
	