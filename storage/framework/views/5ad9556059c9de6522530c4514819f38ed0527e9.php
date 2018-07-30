 

<?php $__env->startSection('content'); ?>
<div class="page-content row">
	<div class="page-content-wrapper m-t">

		<div class="sbox">
			<div class="sbox-title">
				 <h1> <?php echo e($pageTitle); ?></h1>
			</div>
			<div class="sbox-content">


			<?php echo $__env->make('sximo.config.tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			 <?php echo Form::open(array('url'=>'sximo/config/email/', 'class'=>'form-vertical row validated')); ?>

			
			<div class="col-sm-6 animated fadeInRight">
				<h3> <?php echo e(Lang::get('core.registernew')); ?> </h3>
				<div class="form-group">
					<label for="ipt" class=" control-label"> <?php echo e(Lang::get('core.tab_email')); ?> </label>		
					<textarea rows="20" name="regEmail" class="form-control input-sm  markItUp"><?php echo e($regEmail); ?></textarea>	
				</div>  
						

				<div class="form-group">   
					<button class="btn btn-primary" type="submit"> <?php echo e(Lang::get('core.sb_savechanges')); ?></button>	 
				</div>
				
			</div> 


			<div class="col-sm-6 animated fadeInRight">
				<h3> <?php echo e(Lang::get('core.forgotpassword')); ?> </h3>
				
				<div class="form-group">
					<label for="ipt" class=" control-label "><?php echo e(Lang::get('core.tab_email')); ?> </label>					
					<textarea rows="20" name="resetEmail" class="form-control input-sm markItUp"><?php echo e($resetEmail); ?></textarea>					 
				</div> 

				<div class="form-group">
					<button class="btn btn-primary" type="submit"><?php echo e(Lang::get('core.sb_savechanges')); ?></button>
				</div> 
				 
			</div>	  

			   <?php echo Form::close(); ?>


			</div>
		</div>
	</div>
</div>



<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>