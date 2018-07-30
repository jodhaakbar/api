<?php $__env->startSection('content'); ?>
<script type="text/javascript" src="<?php echo e(asset('sximo5/js/plugins/jquery.nestable.js')); ?>"></script>
<section class="page-header row">
	<h2> <?php echo e($pageTitle); ?> <small> <?php echo e($pageNote); ?> </small></h2>
	<ol class="breadcrumb">
		<li><a href="<?php echo e(url('')); ?>"> Dashboard </a></li>
		<li class="active"> <?php echo e($pageTitle); ?> </li>		
	</ol>
</section>
<div class="page-content row">
	<div class="page-content-wrapper no-margin">
		<div class="sbox"  >
			<div class="sbox-title" >   
				 <h1> <?php echo e($pageTitle); ?> <small> <?php echo e($pageNote); ?> </small></h1>
			</div>
			<div class="sbox-content">
	<ul class="nav nav-tabs" style="margin:10px 0;">
		<li <?php if($active == 'top'): ?> class="active" <?php endif; ?> ><a href="<?php echo e(url('sximo/menu?pos=top')); ?>"> <?php echo e(Lang::get('core.tab_topmenu')); ?> </a></li>
		<li <?php if($active == 'sidebar'): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('sximo/menu?pos=sidebar')); ?>"> <?php echo e(Lang::get('core.tab_sidemenu')); ?></a></li>	
	</ul>
					
				<div class="col-md-5">
					<fieldset style="min-height: 400px;">
						<legend> Menu navigation</legend>

<div id="list2" class="dd myadmin-dd-empty " style="min-height:350px;">
              <ol class="dd-list">
			<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  <li data-id="<?php echo e($menu['menu_id']); ?>" class="dd-item dd3-item">
					<div class="dd-handle dd3-handle"></div><div class="dd3-content"><?php echo e($menu['menu_name']); ?>

						<span class="pull-right">
						<a href="<?php echo e(url('sximo/menu/index/'.$menu['menu_id'].'?pos='.$active)); ?>"><i class="fa fa-edit"></i></a></span>
					</div>
					<?php if(count($menu['childs']) > 0): ?>
						<ol class="dd-list" style="">
							<?php $__currentLoopData = $menu['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							 <li data-id="<?php echo e($menu2['menu_id']); ?>" class="dd-item dd3-item">
								<div class="dd-handle dd3-handle"></div><div class="dd3-content"><?php echo e($menu2['menu_name']); ?>

									<span class="pull-right">
									<a href="<?php echo e(url('sximo/menu/index/'.$menu2['menu_id'].'?pos='.$active)); ?>"><i class="fa fa-edit"></i></a></span>
								</div>
								<?php if(count($menu2['childs']) > 0): ?>
								<ol class="dd-list" style="">
									<?php $__currentLoopData = $menu2['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									 	<li data-id="<?php echo e($menu3['menu_id']); ?>" class="dd-item dd3-item">
											<div class="dd-handle dd3-handle"></div><div class="dd3-content"><?php echo e($menu3['menu_name']); ?>

												<span class="pull-right">
												<a href="<?php echo e(url('sximo/menu/index/'.$menu3['menu_id'].'?pos='.$active)); ?>"><i class="fa fa-edit"></i></a>
												</span>
											</div>
										</li>	
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ol>
								<?php endif; ?>
							</li>							
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ol>
					<?php endif; ?>
				</li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>			  
              </ol>
            </div>
		 <?php echo Form::open(array('url'=>'sximo/menu/saveorder', 'class'=>'form-horizontal','files' => true)); ?>	
			<input type="hidden" name="reorder" id="reorder" value="" />
 <div class="infobox infobox-danger fade in">
 <p> <?php echo e(Lang::get('core.t_tipsnote')); ?>	</p>
</div>			
		
			<button type="submit" class="btn btn-primary ">  <?php echo e(Lang::get('core.sb_reorder')); ?> </button>	
		 <?php echo Form::close(); ?>	


					</fieldset>
				</div>	

				<div class="col-md-7">
					<fieldset style="min-height: 400px;">
						<legend> Create / Update</legend>



		 <?php echo Form::open(array('url'=>'sximo/menu/save', 'class'=>'form-horizontal','files' => true  , 'parsley-validate'=>'','novalidate'=>' ')); ?>

				

				
				<input type="hidden" name="menu_id" id="menu_id" value="<?php echo e($row['menu_id']); ?>" />
				<input type="hidden" name="parent_id" id="parent_id" value="<?php echo e($row['parent_id']); ?>" />	
								
				 
				  <div class="form-group  " >
					<label for="ipt" class=" control-label col-md-4 text-right"><?php echo e(Lang::get('core.fr_mtitle')); ?>  </label>
					<div class="col-md-8">
					  <?php echo Form::text('menu_name', $row['menu_name'],array('class'=>'form-control input-sm ', 'placeholder'=>'','required'=>'true')); ?> 
					  <?php if($sximoconfig['cnf_multilang'] ==1): ?>
					    <?php $lang = SiteHelpers::langOption();
						foreach($lang as $l) { 
							if($l['folder'] !='en') {
							?>
								<div class="input-group input-group-sm" style="margin:1px 0 !important;">
								 <input name="language_title[<?php echo $l['folder'];?>]" type="text"   class="form-control" placeholder="Title for <?php echo $l['name'];?>"
								 value="<?php echo (isset($menu_lang['title'][$l['folder']]) ? $menu_lang['title'][$l['folder']] : '');?>" />
								<span class="input-group-addon xlick bg-default btn-sm " ><?php echo strtoupper($l['folder']);?></span>
							   </div> 								
							<?php
							}
						
						}
					   ?>
					  <?php endif; ?>				  
					  
					 </div> 
				  </div> 

				  <div class="form-group   " >
					<label for="ipt" class=" control-label col-md-4 text-right"> <?php echo e(Lang::get('core.fr_mtype')); ?>  </label> 
					<div class="col-md-8 menutype">
					
						
					<input type="radio" name="menu_type" value="internal" class="minimal-red"   required="true" 
					<?php if($row['menu_type']=='internal' || $row['menu_type']==''): ?> checked="checked" <?php endif; ?> />
					
					Internal
					
					<input type="radio" name="menu_type" value="external"  class="minimal-red" required="true" 

					<?php if($row['menu_type']=='external' ): ?> checked="checked" <?php endif; ?>  /> External 
					  
					 </div> 
				  </div> 

				  			  					
				  <div class="form-group  ext-link" >
					<label for="ipt" class=" control-label col-md-4 text-right"> Url  </label>
					<div class="col-md-8">
					   <?php echo Form::text('url', $row['url'],array('class'=>'form-control input-sm', 'placeholder'=>' Type External Url')); ?> 
					 </div> 
				  </div> 	


								  					
				  <div class="form-group  int-link" >
					<label for="ipt" class=" control-label col-md-4 text-right"> Controller / Route  </label>
					<div class="col-md-8">
					 		
					
					<select name='module' rows='5' id='module'  style="width:100%" 
							class='form-control input-sm	'    >

							<option value=""> -- Select Module or Page -- </option>
							<option value="separator" <?php if($row['module']== 'separator' ): ?> selected="selected" <?php endif; ?>> Separator Menu </option>
							<optgroup label="Module ">
							<?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($mod->module_name); ?>"
								<?php if($row['module']== $mod->module_name ): ?> selected="selected" <?php endif; ?>
								><?php echo e($mod->module_title); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</optgroup>
							<optgroup label="Page CMS ">
							<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($page->alias); ?>"
								<?php if($row['module']== $page->alias ): ?> selected="selected" <?php endif; ?>
								>Page : <?php echo e($page->title); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
							</optgroup>						
					</select> 
					 </div> 

				  </div> 										
					

				  <div class="form-group  " >
					<label for="ipt" class=" control-label col-md-4 text-right"> <?php echo e(Lang::get('core.fr_mposition')); ?>  </label>
					<div class="col-md-8">
						<div class="">
							<input type="radio" name="position"  value="top" required  class="minimal-red" 
							<?php if($row['position']=='top' ): ?> checked="checked" <?php endif; ?> /> <?php echo e(Lang::get('core.tab_topmenu')); ?> 
						</div>
						<div class="">	
							<input type="radio" name="position"  value="sidebar"  required class="minimal-red" 
							<?php if($row['position']=='sidebar' ): ?> checked="checked" <?php endif; ?>  /> <?php echo e(Lang::get('core.tab_sidemenu')); ?> 
						</div>	
					 </div> 
				  </div> 	 				
				  <div class="form-group  " >
					<label for="ipt" class=" control-label col-md-4 text-right"><?php echo e(Lang::get('core.fr_miconclass')); ?>  </label>
					<div class="col-md-8">
					  <?php echo Form::text('menu_icons', $row['menu_icons'],array('class'=>'form-control input-sm', 'placeholder'=>'')); ?>

					  <p> <?php echo e(Lang::get('core.fr_mexample')); ?> : <span class="label label-info"> fa fa-desktop </span> </p>
					  <p> View Icon Codes : 
					  <a href="<?php echo e(url('sximo/menu/icon')); ?>" onclick="SximoModal(this.href,'Select Icon'); return false;"> Browse Icons  </a>  
					 </div> 
				  </div> 					
				  <div class="form-group  " >
					<label for="ipt" class=" control-label col-md-4 text-right"> <?php echo e(Lang::get('core.fr_mactive')); ?>  </label>
					<div class="col-md-8 ">
						<div class="">
							<input type="radio" name="active"  value="1"  class="minimal-red" 
							<?php if($row['active']=='1' ): ?> checked="checked" <?php endif; ?> /> <label><?php echo e(Lang::get('core.fr_mactive')); ?> </label>
						</div>
						<div class="">
							<input type="radio" name="active" value="0"  class="minimal-red" 
							<?php if($row['active']=='0' ): ?> checked="checked" <?php endif; ?>  /> <label><?php echo e(Lang::get('core.fr_minactive')); ?> </label>
						</div>	
										
					 
					 </div> 
				  </div> 

			  <div class="form-group">
				<label for="ipt" class=" control-label col-md-4"><?php echo e(Lang::get('core.fr_maccess')); ?>  <code>*</code></label>
				<div class="col-md-8">
						<?php 
					$pers = json_decode($row['access_data'],true);
					foreach($groups as $group) {
						$checked = '';
						if(isset($pers[$group->group_id]) && $pers[$group->group_id]=='1')
						{
							$checked= ' checked="checked"';
						}						
							?>		
				  <div class="">
				  <input type="checkbox" name="groups[<?php echo $group->group_id;?>]" value="<?php echo $group->group_id;?>" <?php echo $checked;?> class="minimal-red"  />   
				  	<label><?php echo $group->name;?>  </label>
				  </div>
			
				  <?php } ?>
						 </div> 
			  </div> 

				  <div class="form-group  " >
					<label for="ipt" class=" control-label col-md-4"><?php echo e(Lang::get('core.fr_mpublic')); ?>   </label>
					<div class="col-md-8">
					<div class="">
						<input  type='checkbox' name='allow_guest'  class="minimal-red"  
 						<?php if($row['allow_guest'] ==1 ): ?> checked  <?php endif; ?>	
					  	value="1"	/> <label>  Yes  </lable>
					</div>   
				  </div>
				</div>
				  
			  <div class="form-group">
				<label class="col-sm-4 text-right">&nbsp;</label>
				<div class="col-sm-8">	
				<button type="submit" class="btn btn-primary ">  <?php echo e(Lang::get('core.sb_submit')); ?>  </button>
				<?php if($row['menu_id'] !=''): ?>
					<button type="button"onclick="SximoConfirmDelete('<?php echo e(url('sximo/menu/destroy/'.$row['menu_id'].'?pos='.$active)); ?>')" class="btn btn-danger ">  Delete </button>
				<?php endif; ?>	
				</div>	  
		
			  </div> 
			
		</div>	  
		 
		 <?php echo Form::close(); ?>	

		 			<div class="clr"></div>	
					</fieldset>				
				</div>	
				<div class="clr"></div>	
				
			</div>	
		</div>
	</div>		
</div>
                               
<script>
$(document).ready(function(){
	$('.dd').nestable();
    update_out('#list2',"#reorder");
    
    $('#list2').on('change', function() {
		var out = $('#list2').nestable('serialize');
		$('#reorder').val(JSON.stringify(out));	  

    });
	$('.ext-link').hide(); 

	$('.menutype input:radio').on('ifClicked', function() {
	 	 val = $(this).val();
  			mType(val);
	  
	});
	
	mType('<?php echo $row['menu_type'];?>'); 
	
			
});	

function mType( val )
{
		if(val == 'external') {
			$('.ext-link').show(); 
			$('.int-link').hide();
		} else {
			$('.ext-link').hide(); 
			$('.int-link').show();
		}	
}

	
function update_out(selector, sel2){
	
	var out = $(selector).nestable('serialize');
	$(sel2).val(JSON.stringify(out));

}
</script>	
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>