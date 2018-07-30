<?php $__env->startSection('content'); ?>
	

		<div class="text-center">
	    <?php if(file_exists(public_path().'/uploads/images/logo-light.png' )): ?>
	        <img src="<?php echo e(asset('uploads/images/logo-light.png')); ?>" alt="<?php echo e(config('sximo.cnf_appname')); ?>"  />
	    <?php else: ?>
	    <h3 class="text-center"> <?php echo e(config('sximo.cnf_appname')); ?> </h3>
	    <?php endif; ?>
	    </div>
	    <p class="text-center"> <?php echo e(config('sximo.cnf_appdesc')); ?>  </p> 
		
		
		
			<div class="ajaxLoading"></div>
			<p class="message alert alert-danger " style="display:none;"></p>	
	 
		    	<?php if(Session::has('status')): ?>
		    		<?php if(session('status') =='success'): ?>
		    			<p class="alert alert-success">
							<?php echo Session::get('message'); ?>

						</p>
					<?php else: ?>
						<p class="alert alert-danger">
							<?php echo Session::get('message'); ?>

						</p>
					<?php endif; ?>		
				<?php endif; ?>

			<ul class="parsley-error-list">
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>		
			

		<div class="tab-content" >
			<div class="tab-pane active m-t" id="tab-sign-in">
	 		<?php echo Form::open(array('url'=>'user/signin', 'class'=>'form-vertical','id'=>'LoginAjax' , 'parsley-validate'=>'','novalidate'=>' ')); ?>

				<div class="form-group has-feedback animated fadeInLeft delayp1">
					<input type="text" name="email" placeholder="<?php echo e(Lang::get('core.email')); ?>" class="form-control" required="email" />
				</div>
				
				<div class="form-group has-feedback  animated fadeInRight delayp1">
					<input type="password" name="password" placeholder="<?php echo e(Lang::get('core.password')); ?>" class="form-control" required="true" />
				</div>

				<div class="form-group has-feedback  animated fadeInRight delayp1">
					<label> Remember  ?	</label>
					<input type="checkbox" name="remember" value="1" />
				</div>


				<?php if(config('sximo.cnf_recaptcha') =='true'): ?> 
				<div class="form-group has-feedback  animated fadeInLeft delayp1">
					<label class="text-left"> Are u human ? </label>	
					<div class="g-recaptcha" data-sitekey="6Le2bjQUAAAAABascn2t0WsRjZbmL6EnxFJUU1H_"></div>
					
					<div class="clr"></div>
				</div>	
			 	<?php endif; ?>	

				<div class="form-group animated fadeInRight delayp1">
					<button type="submit" class="btn btn-primary btn-block"> Submit </button>
				</div>			 	




				<div class="form-group   animated fadeInLeft delayp1" >					       
						<p class="">						
							<a href="javascript:void(0)" class="forgot"> <?php echo app('translator')->getFromJson('core.forgotpassword'); ?> ? </a> | 
							<a href="<?php echo e(url('user/register')); ?>"> <?php echo app('translator')->getFromJson('core.registernew'); ?> </a>
						</p>					
				</div>	
				<div class="animated fadeInUp delayp1">
			<div class="form-group  ">
				<?php if($socialize['google']['client_id'] !='' || $socialize['twitter']['client_id'] !='' || $socialize['facebook'] ['client_id'] !=''): ?> 
				
				<p class="text-muted text-center"><b> <?php echo e(Lang::get('core.loginsocial')); ?> </b>	  </p>
				
				<div style="padding:15px 0;">
					<?php if($socialize['facebook']['client_id'] !=''): ?> 
					<a href="<?php echo e(url('user/socialize/facebook')); ?>" class="btn btn-success"><i class="icon-facebook"></i> Facebook </a>
					<?php endif; ?>
					<?php if($socialize['google']['client_id'] !=''): ?> 
					<a href="<?php echo e(url('user/socialize/google')); ?>" class="btn btn-danger"><i class="icon-google"></i> Google </a>
					<?php endif; ?>
					<?php if($socialize['twitter']['client_id'] !=''): ?> 
					<a href="<?php echo e(url('user/socialize/twitter')); ?>" class="btn btn-info"><i class="icon-twitter"></i> Twitter </a>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>			


				  <p style="padding:5px 0" class="text-center">
				  <a href="<?php echo e(url('')); ?>"> <?php echo e(Lang::get('core.backtosite')); ?> </a>  
			   		</p>
			   	</div>	
			   </form>			
			</div>
		
		

		<div class="tab-pane  m-t" id="tab-forgot" style="display: none">	

			
			<?php echo Form::open(array('url'=>'user/request', 'class'=>'form-vertical', 'parsley-validate'=>'','novalidate'=>' ')); ?>

			   <div class="form-group has-feedback">
			   <div class="">
					<label><?php echo e(Lang::get('core.enteremailforgot')); ?></label>
					<input type="text" name="credit_email" placeholder="<?php echo e(Lang::get('core.email')); ?>" class="form-control" required/>
				</div> 	
				</div>
				<div class="form-group has-feedback">    
					<a href="javascript:;" class="forgot btn btn-warning"> Cancel </a>     
			      <button type="submit" class="btn btn-default pull-right"> <?php echo e(Lang::get('core.sb_submit')); ?> </button>        
			  </div>
			  
			  <div class="clr"></div>

			  
			</form>		
		</div>
		
	</div>
 



<script type="text/javascript">
	$(document).ready(function(){

		$('.forgot').on('click',function(){
			$('#tab-forgot').toggle();
			$('#tab-sign-in').toggle();
		})
		var form = $('#LoginAjax'); 
		form.parsley();
		form.submit(function(){
			
			if(form.parsley().isValid()){			
				var options = { 
					dataType:      'json', 
					beforeSubmit :  showRequest,
					success:       showResponse  
				}  
				$(this).ajaxSubmit(options); 
				return false;
							
			} else {
				return false;
			}		
		
		});

	});

function showRequest()
{
	$('.ajaxLoading').show();		
}  
function showResponse(data)  {		
	
	if(data.status == 'success')
	{
		window.location.href = data.url;	
		$('.ajaxLoading').hide();
	} else {
		$('.message').html(data.message)	
		$('.ajaxLoading').hide();
		$('.message').show(data.message)	
		return false;
	}	
}	
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>