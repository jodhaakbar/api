<?php $__env->startSection('content'); ?>

<div class="page-content row">
  <div class="page-content-wrapper m-t">
    <div class="sbox">
      <div class="sbox-title">
         <h1> <?php echo e($pageTitle); ?> <small>Configuration</small></h1>
      </div>
      <div class="sbox-content">

          <?php echo $__env->make('sximo.module.tab',array('active'=>'sql','type'=>  $type ), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  
          <?php echo Form::open(array('url'=>'sximo/module/savesql/'.$module_name, 'class'=>'form-vertical ' ,'id'=>'SQL' , 'parsley-validate'=>'','novalidate'=>' ')); ?>

          <div class="infobox infobox-info fade in">
          <button type="button" class="close" data-dismiss="alert"> x </button>  
          <p> <strong>Tips !</strong> U can use query builder tool such <a href="http://code.google.com/p/sqlyog/downloads/list" target="_blank">SQL YOG </a> , PHP MyAdmin , Maestro etc to build your query statment and preview the result , <br /> then copy the syntac here </p> 
          </div>  


          <div class="form-group">
          <label for="ipt" class=" control-label">SQL SELECT & JOIN</label>
          <textarea name="sql_select" rows="5" id="sql_select" class="tab_behave form-control"  placeholder="SQL Select & Join Statement" ><?php echo e($sql_select); ?></textarea>
          </div>  

          <div class="form-group">
          <label for="ipt" class=" control-label">SQL WHERE CONDITIONAL</label>
          <textarea name="sql_where" rows="2" id="sql_where" class="form-control" placeholder="SQL Where Statement" ><?php echo e($sql_where); ?></textarea>
          </div> 

          <div class="infobox infobox-danger fade in">
          <button type="button" class="close" data-dismiss="alert"> x </button>  
          <p> <strong>Warning !</strong> Please make sure SQL where not empty , for prevent error when user attempt submit  <strong>SEARCH</strong>   </p>  
          </div>  
            


          <div class="form-group">
          <label for="ipt" class=" control-label">SQL GROUP</label>
          <textarea name="sql_group" rows="2" id="sql_group" class="form-control"   placeholder="SQL Grouping Statement" ><?php echo e($sql_group); ?></textarea>

          </div> 
          <div class="form-group">
          <label for="ipt" class=" control-label"></label>
          <button type="submit" class="btn btn-primary"> Save SQL </button>
          </div>  

          <input type="hidden" name="module_id" value="<?php echo e($row->module_id); ?>" />
          <input type="hidden" name="module_name" value="<?php echo e($row->module_name); ?>" />

          <?php echo Form::close(); ?>



      </div>
    </div>
  </div>
</div>
 
<script type="text/javascript">
  $(document).ready(function(){

    <?php echo SximoHelpers::sjForm('SQL'); ?>

  })
</script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>