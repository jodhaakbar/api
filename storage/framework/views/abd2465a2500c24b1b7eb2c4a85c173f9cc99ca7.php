<?php $__env->startSection('content'); ?>
<div class="page-content row">
	<div class="page-content-wrapper m-t">

		<div class="sbox">
			<div class="sbox-title">
				<h1> <?php echo e($pageTitle); ?>  <small> <?php echo e($pageNote); ?> </small> </h1>
			</div>
			<div class="sbox-content clearfix">

			<?php echo $__env->make('sximo.config.tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	 		<?php echo Form::open(array('url'=>'sximo/config/login/', 'class'=>'form-horizontal validated')); ?>


			<div class="col-sm-6">
				

		 		  <div class="form-group">
					<label for="ipt" class=" control-label col-sm-4">  <?php echo e(Lang::get('core.fr_emailsys')); ?>  </label>	
					<div class="col-sm-8 ">
							
							<div class="">
								<input type="radio" name="CNF_MAIL" value="phpmail"   <?php if($sximoconfig['cnf_mail'] =='phpmail'): ?> checked <?php endif; ?> class="minimal-red"  /> 
								<label>PHP MAIL System</label>
							</div>
							
							<div class="">
								<input type="radio" name="CNF_MAIL" value="swift"   <?php if($sximoconfig['cnf_mail'] =='swift'): ?> checked <?php endif; ?> class="minimal-red"  /> 
								<label>SWIFT Mail ( Required Configuration )</label>
							</div>			
					</div>
				</div>					
		  
				  <div class="form-group">
					<label for="ipt" class=" control-label col-sm-4"> <?php echo e(Lang::get('core.fr_registrationdefault')); ?>  </label>	
					<div class="col-sm-8">
							<div >
								
								<select class="form-control" name="CNF_GROUP">
									<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($group->group_id); ?>"
									 <?php if($sximoconfig['cnf_group'] == $group->group_id ): ?> selected <?php endif; ?>
									><?php echo e($group->name); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								
							</div>				
					</div>	
							
				  </div> 

				  <div class="form-group">
					<label for="ipt" class=" control-label col-sm-4"><?php echo e(Lang::get('core.fr_registration')); ?> </label>	
					<div class="col-sm-8 " >
						<div class=" radio-success">
							
							<div class="">
							<input type="radio" name="CNF_ACTIVATION" value="auto" <?php if($sximoconfig['cnf_activation'] =='auto'): ?> checked <?php endif; ?>  class="minimal-red"  /> 
							<label><?php echo e(Lang::get('core.fr_registrationauto')); ?></label>
							</div>
							
							<div class=" ">
								<input type="radio" name="CNF_ACTIVATION" value="manual" <?php if($sximoconfig['cnf_activation'] =='manual'): ?> checked <?php endif; ?>   class="minimal-red" /> 
								<label><?php echo e(Lang::get('core.fr_registrationmanual')); ?></label>
							</div>								
							<div class=" ">
								<input type="radio" name="CNF_ACTIVATION" value="confirmation" <?php if($sximoconfig['cnf_activation'] =='confirmation'): ?> checked <?php endif; ?>  class="minimal-red"  />
								<label><?php echo e(Lang::get('core.fr_registrationemail')); ?></label>
							</div>
						</div>						
									
					</div>	
							
				  </div> 
				  
		 		  <div class="form-group">
					<label for="ipt" class=" control-label col-sm-4"> <?php echo e(Lang::get('core.fr_allowregistration')); ?> </label>	
					<div class="col-sm-8">
						<div class="">
							<input type="checkbox" name="CNF_REGIST" value="true"  <?php if($sximoconfig['cnf_regist'] =='true'): ?> checked <?php endif; ?> class="minimal-red"  /> 
							<label><?php echo e(Lang::get('core.fr_enable')); ?></label>
						</div>			
					</div>
				</div>	
				
		 		<div class="form-group">
					<label for="ipt" class=" control-label col-sm-4"> <?php echo e(Lang::get('core.fr_allowfrontend')); ?> </label>	
					<div class="col-sm-8">
						<div class="">
							<input type="checkbox" name="CNF_FRONT" value="false" <?php if($sximoconfig['cnf_front'] =='true'): ?> checked <?php endif; ?> class="minimal-red"  /> 
							<label><?php echo e(Lang::get('core.fr_enable')); ?></label>
						</div>			
					</div>
				</div>		
			
		 		<div class="form-group">
					<label for="ipt" class=" control-label col-sm-4">Google reCaptcha </label>	
					<div class="col-sm-8">
						<div class="">
						
							<input type="checkbox" name="cnf_recaptcha" value="false" <?php if(config('sximo.cnf_recaptcha') =='true'): ?> checked <?php endif; ?> class="minimal-red"  />  <?php echo e(Lang::get('core.fr_enable')); ?>

							<br /><br />

							<label> Site key</label>
							<input type="text" name="cnf_recaptchapublickey" value="<?php echo e(config('sximo.cnf_recaptchapublickey')); ?>" class="input-sm form-control"  /> 
							<label> Secret key</label>
							<input type="text" name="cnf_recaptchaprivatekey" value="<?php echo e(config('sximo.cnf_recaptchaprivatekey')); ?>" class="input-sm form-control"  /> 
							
						</div>	
												
					</div>
				</div>		
				

		 		<div class="form-group">
					<label for="ipt" class=" control-label col-sm-4"> Google Maps API Key </label>	
					<div class="col-sm-8">
						<div class="">
							<input type="text" name="CNF_MAPS" value="<?php echo e(config('sximo.cnf_maps')); ?>" class="input-sm form-control"  /> 
							<small><i>* This is required if you use google Maps form .</i></small>
						</div>	
												
					</div>
				</div>		
				

			  	<div class="form-group">
					<label for="ipt" class=" control-label col-md-4">&nbsp;</label>
					<div class="col-md-8">
						<button class="btn btn-primary" type="submit"> <?php echo e(Lang::get('core.sb_savechanges')); ?></button>
				 	</div>
			  	</div>	  
			
		 	</div>

			<div class="col-sm-6">	
				<div class="form-vertical">
					<div class="form-group">
						<label> <?php echo e(Lang::get('core.fr_restrictip')); ?> </label>	
						
						<p><small><i>
							
							<?php echo e(Lang::get('core.fr_restrictipsmall')); ?>  <br />
							<?php echo e(Lang::get('core.fr_restrictipexam')); ?> : <code> 192.116.134 , 194.111.606.21 </code>
						</i></small></p>
						<textarea rows="5" class="form-control" name="CNF_RESTRICIP"><?php echo e($sximoconfig['cnf_restrictip']); ?></textarea>
					</div>
					
					<div class="form-group">
						<label> <?php echo e(Lang::get('core.fr_allowip')); ?> </label>	
						<p><small><i>
							
							<?php echo e(Lang::get('core.fr_allowipsmall')); ?>  <br />
							<?php echo e(Lang::get('core.fr_allowipexam')); ?> : <code> 192.116.134 , 194.111.606.21 </code>
						</i></small></p>							
						<textarea rows="5" class="form-control" name="CNF_ALLOWIP"><?php echo e($sximoconfig['cnf_allowip']); ?></textarea>
					</div>

					<p> <?php echo e(Lang::get('core.fr_ipnote')); ?> </p>
				</div>
			</div>
			<?php echo Form::close(); ?>



			</div>
		</div>
	</div>
</div>


<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>