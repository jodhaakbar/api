<?php $__env->startSection('content'); ?>
<div class="page-content row">
	<div class="page-content-wrapper m-t">

		<div class="sbox">
			<div class="sbox-title">
				 <h1> <?php echo e($pageTitle); ?> <small>Configuration</small></h1>
			</div>
			<div class="sbox-content clearfix">

			<?php echo $__env->make('sximo.module.tab',array('active'=>'config','type'=> $type), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="col-md-6">
	<?php echo Form::open(array('url'=>'sximo/module/saveconfig/'.$module_name, 'class'=>'form-horizontal ','id'=>'configA' , 'parsley-validate'=>'','novalidate'=>' ')); ?>

	<input  type='hidden' name='module_id' id='module_id'  value='<?php echo e($row->module_id); ?>'   />
  	<fieldset>
		<legend> Module Info </legend>	
  		<div class="form-group">
    		<label for="ipt" class=" control-label col-md-4">Name / Title </label>
			<div class="col-md-8">
				<div class="input-group input-group-sm" style="margin:1px 0 !important;">
				<input  type='text' name='module_title' id='module_title' class="form-control " required="true" value='<?php echo e($row->module_title); ?>'  />
				<span class="input-group-addon xlick bg-default btn-sm " >EN</span>
			</div> 		
			<?php if($config->lang =='true'): ?>
			  <?php $lang = SiteHelpers::langOption();
			   if($sximoconfig['cnf_multilang'] ==1) {
				foreach($lang as $l) { if($l['folder'] !='en') {
			   ?>
			   <div class="input-group input-group-sm" style="margin:1px 0 !important;">
				 <input name="language_title[<?php echo $l['folder'];?>]" type="text"   class="form-control" placeholder="Label for <?php echo $l['name'];?>"
				 value="<?php echo (isset($module_lang['title'][$l['folder']]) ? $module_lang['title'][$l['folder']] : '');?>" />
				<span class="input-group-addon xlick bg-default btn-sm " ><?php echo strtoupper($l['folder']);?></span>
			   </div> 
	 		
 			 <?php } } }?>	  
 			  <?php endif; ?>
			 </div> 
			
  		</div>   

		<div class="form-group">
			<label for="ipt" class=" control-label col-md-4">Module Note</label>
			<div class="col-md-8">
				<div class="input-group input-group-sm" style="margin:1px 0 !important;">
				<input  type='text' name='module_note' id='module_note'  value='<?php echo e($row->module_note); ?>' class="form-control input-sm "  />
				<span class="input-group-addon xlick bg-default btn-sm " >EN</span>
			</div> 
			<?php if($config->lang =='true'): ?>	
		  <?php $lang = SiteHelpers::langOption();
		   if($sximoconfig['cnf_multilang'] ==1) {
			foreach($lang as $l) { if($l['folder'] !='en') {
		   ?>
		   <div class="input-group input-group-sm" style="margin:1px 0 !important;">
			 <input name="language_note[<?php echo $l['folder'];?>]" type="text"   class="form-control input-sm" placeholder="Note for <?php echo $l['name'];?>"
			 value="<?php echo (isset($module_lang['note'][$l['folder']]) ? $module_lang['note'][$l['folder']] : '');?>" />
			<span class="input-group-addon xlick bg-default btn-sm " ><?php echo strtoupper($l['folder']);?></span>
		   </div> 
			 
		  <?php } } }?>	
		  	 <?php endif; ?>	

			 </div> 
		 </div>   
		
	  <div class="form-group">
		<label for="ipt" class=" control-label col-md-4">Class Controller </label>
		<div class="col-md-8">
		<input  type='text' name='module_name' id='module_name' readonly="1"  class="form-control input-sm" required value='<?php echo e($row->module_name); ?>'  />
		 </div> 
	  </div>  
  
	   <div class="form-group">
		<label for="ipt" class=" control-label col-md-4">Table Master</label>
		<div class="col-md-8">
		<input  type='text' name='module_db' id='module_db' readonly="1"  class="form-control input-sm" required value='<?php echo e($row->module_db); ?>'  />
		  
		 </div> 
	  </div>  
  
	  <div class="form-group" style="display:none;" >
		<label for="ipt" class=" control-label col-md-4">Author </label>
		<div class="col-md-8">
		<input  type='text' name='module_author' id='module_author' class="form-control input-sm"  readonly="1"  value='<?php echo e($row->module_author); ?>'  />
		 </div> 
	  </div>  

		<div class="form-group">
			<label for="ipt" class=" control-label col-md-4"> ShortCode </label>
			<div class="col-md-8 " >
				
						<b>Form Shortcode : </b><code><br /><?php echo "[sc:Sximo fnc=showForm|id=".$row->module_name."] [/sc]"; ?></code><br />
					<b>Table Shortcode : </b><br />
					<code><?php echo "[sc:Sximo fnc=render|id=".$row->module_name."] [/sc]"; ?></code>
			</div> 
		</div>  	  
	 
		<div class="form-group">
			<label for="ipt" class=" control-label col-md-4"></label>
			<div class="col-md-8">
			<button type="submit" name="submit" class="btn btn-primary"> Update Module </button>
			 </div> 
		</div>   



	</fieldset>
  	<?php echo Form::close(); ?>

	
  
	</div>


	 <?php if($config->advance =='true'): ?> 
 <div class="col-sm-6 col-md-6"> 

 <?php if($type !='report' && $type !='generic'): ?>
  <?php echo Form::open(array('url'=>'sximo/module/savesetting/'.$module_name, 'class'=>'form-horizontal ' ,'id'=>'configB')); ?>

  <input  type='text' name='module_id' id='module_id'  value='<?php echo e($row->module_id); ?>'  style="display:none; " />
  	<fieldset>
		<legend> Module Setting </legend>

		  <div class="form-group">
			<label for="ipt" class=" control-label col-md-4"> Grid Table Type </label>
			<div class="col-md-8">			

				<select class="form-control input-sm" name="module_type">
					<?php if($row->module_type  =='addon') $row->module_type ='native'; ?>
					<?php $__currentLoopData = $cruds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($crud->type); ?>" 
						<?php if($crud->type == $row->module_type ): ?> selected <?php endif; ?>
						><?php echo e($crud->name); ?> </option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>	
				
			 </div> 
		  </div> 


	
	  <div class="form-group">
		<label for="ipt" class=" control-label col-md-4"> Default Order  </label>
		<div class="col-md-8">
			<select class="select-alt" name="orderby">
			<?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($t['field']); ?>"
				<?php if($setting['orderby'] ==$t['field']): ?> selected="selected" <?php endif; ?> 
				><?php echo e($t['label']); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
			<select class="select-alt" name="ordertype">
				<option value="asc" <?php if($setting['ordertype'] =='asc'): ?> selected="selected" <?php endif; ?> > Ascending </option>
				<option value="desc" <?php if($setting['ordertype'] =='desc'): ?> selected="selected" <?php endif; ?> > Descending </option>
			</select>
			
		 </div> 
	  </div> 
	  
	  <div class="form-group">
		<label for="ipt" class=" control-label col-md-4"> Display Rows </label>
		<div class="col-md-8">
			<select class="select-alt" name="perpage">
				<?php $pages = array('10','20','30','50');
				foreach($pages as $page) {
				?>
				<option value="<?php echo $page;?>"  <?php if($setting['perpage'] ==$page): ?> selected="selected" <?php endif; ?> > <?php echo $page;?> </option>
				<?php } ?>
			</select>	
			/ Page	
		 </div> 
	  </div>   
		
	</fieldset>	
	 <?php if($config->setting->method =='true'): ?> 
  	<fieldset>
	<legend> Form & View Setting </legend>
		<p> <i>You can switch this setting and applied to current module without have to rebuild </i></p>

		  <div class="form-group">
			<label for="ipt" class=" control-label col-md-4"> Form Method </label>
			<div class="col-md-8">
				<label class="radio-inline">
				<input type="radio" value="native" name="form-method" class="minimal-red" 
				 <?php if($setting['form-method'] == 'native'): ?> checked="checked" <?php endif; ?> 
				 /> New Page  
				</label>
				<label class="radio-inline">
				<input type="radio" value="modal" name="form-method"  class="minimal-red" 
				 <?php if($setting['form-method'] == 'modal'): ?> checked="checked" <?php endif; ?> 			
				/> Modal  
				</label>							
			 </div> 
		  </div> 

		  <div class="form-group">
			<label for="ipt" class=" control-label col-md-4"> View  Method </label>
			<div class="col-md-8">
				<label class="radio-inline">
				<input type="radio" value="native" name="view-method" class="minimal-red" 
				 <?php if($setting['view-method'] == 'native'): ?> checked="checked" <?php endif; ?> 
				 /> New Page  
				</label>
				<label class="radio-inline">
				<input type="radio" value="modal" name="view-method" class="minimal-red"  
				 <?php if($setting['view-method'] == 'modal'): ?> checked="checked" <?php endif; ?> 			
				/> Modal  
				</label>	
				<label class="radio-inline">
				<input type="radio" value="expand" name="view-method" class="minimal-red"  
				 <?php if($setting['view-method'] == 'expand'): ?> checked="checked" <?php endif; ?> 			
				/> Expand Grid   
				</label>

			 </div> 
		  </div> 		  

		  <div class="form-group" >
			<label for="ipt" class=" control-label col-md-4"> Inline add / edit row </label>
			<div class="col-md-8">
				<label class="checkbox-inline">
				<input type="checkbox" value="true" name="inline" class="minimal-red" 
				<?php if($setting['inline'] == 'true'): ?> checked="checked" <?php endif; ?> 	
				 /> Yes  Allowed 
				</label>
										
			 </div> 
		  </div> 		  

		  
		   <p class="alert alert-warning"> <strong> Important ! </strong> this setting only work with module where have <strong>Adavance </strong> Option</p>
	</fieldset>


	<?php endif; ?>

			  <div class="form-group">
			<label for="ipt" class=" control-label col-md-4"></label>
			<div class="col-md-8">
			<button type="submit" name="submit" class="btn btn-primary"> Update Setting </button>
			 </div> 
		  </div> 

	<?php echo Form::close(); ?>

	<?php endif; ?>
	
  </div>
  	<?php endif; ?>

			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){

		<?php echo SximoHelpers::sjForm('configA'); ?>
		<?php echo SximoHelpers::sjForm('configB'); ?>

	})
</script>	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>