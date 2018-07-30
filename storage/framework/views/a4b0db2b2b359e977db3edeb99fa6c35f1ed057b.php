<?php $__env->startSection('content'); ?>
<div class="page-content row">
    <div class="page-content-wrapper m-t">

        <div class="sbox">
            <div class="sbox-content">

                <div class="ribon-sximo">
                    <section >

                        <div class="row m-l-none m-r-none m-t  white-bg shortcut " >
                            <div class="col-sm-3  p-sm ribon-grey">
                                <span class="pull-left m-r-sm "><i class="fa fa-plus"></i></span> 
                                <a href="<?php echo e(url('sximo/module/create')); ?>" class="clear">
                                    <span class="h3 block m-t-xs"><strong> <?php echo e(Lang::get('core.btn_create')); ?> Module </strong>
                                    </span> <small > <?php echo e(Lang::get('core.fr_createmodule')); ?>  </small>
                                </a>
                            </div>                           
                            <div class="col-sm-3   p-sm ribon-grey2">
                                <span class="pull-left m-r-sm "><i class="fa fa-cloud-download "></i></span>
                                <a href="<?php echo e(url('sximo/module/package')); ?>" class="clear post_url">
                                    <span class="h3 block m-t-xs"><strong><?php echo e(Lang::get('core.btn_backup')); ?> Module</strong>
                                    </span> <small > <?php echo e(Lang::get('core.fr_backupmodule')); ?> </small> 
                                </a>
                            </div>                  
                            <div class="col-sm-3 p-sm ribon-grey3">
                                <span class="pull-left m-r-sm "><i class="fa fa-database"></i></span>
                                <a href="<?php echo e(url('sximo/tables')); ?>" class="clear " >
                                    <span class="h3 block m-t-xs"><strong> PHP MyAdmin </strong>
                                    </span> <small > Manage Database Table </small> 
                                </a>
                            </div>   
                            <div class="col-sm-3   p-sm ribon-grey4">
                                <span class="pull-left m-r-sm "><i class="fa fa-random "></i></span>
                                <a href="<?php echo e(url('sximo/rac')); ?>" class="clear ">
                                    <span class="h3 block m-t-xs"><strong> RestAPI</strong>
                                    </span> <small > Token / Authentication  </small> 
                                </a>
                            </div>    

                        </div> 

                    </section>          
                </div>

                <div class="p-sm m-b unziped" style=" padding: 5px 5px 30px ; margin-bottom:10px;">
                <?php echo Form::open(array('url'=>'sximo/module/install/', 'class'=>'breadcrumb-search','files' => true , 'parsley-validate'=>'','novalidate'=>' ')); ?>

                <h4>Select File <small>( Module zip installer ) </small></h4>
                <p>  <input type="file" name="installer" required style="float:left;">  <button type="submit" class="btn btn-primary btn-sm" style="float:left;"  ><i class=" fa fa-cloud-upload "></i> Upload &  Install</button></p>
                </form>
                <div class="clr" style="clear: both;"></div>
                </div> 
                <hr />   

                    <ul class="nav nav-tabs" style="margin-bottom:10px;">
                        <li <?php if($type =='addon'): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('sximo/module')); ?>"> <?php echo e(Lang::get('core.tab_installed')); ?>  </a></li>
                        <li <?php if($type =='core'): ?> class="active" <?php endif; ?>><a href="<?php echo e(url('sximo/module?t=core')); ?>"> <?php echo e(Lang::get('core.tab_core')); ?></a></li>
                    </ul>     

                    <?php if($type =='core'): ?>

                     <div class="infobox infobox-info fade in">
                      <button type="button" class="close" data-dismiss="alert"> x </button>  
                      <p>   Do not <b>Rebuild</b> or Change any Core Module </p>    
                    </div>  
                     
                    <?php endif; ?>

        <div class="table-responsive"  style="min-height:400px; padding-bottom: 200px;"> 


        <?php echo Form::open(array('url'=>'sximo/module/package#', 'class'=>'form-horizontal' ,'ID' =>'SximoTable' )); ?>


        <?php if(count($rowData) >=1): ?> 
        <table class="table table-hover  ">
            <thead>
            <tr>
                <th>Action</th>                 
                <th><input type="checkbox" class="checkall minimal-green" /></th>
                <th>Module</th>
                <th>Type</th>
                
                <th>Controller</th>
                <th>Database</th>
                <th>PRI</th>
                <th>Created</th>

            </tr>
            </thead>
        <tbody>
        <?php $__currentLoopData = $rowData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>        
                <td>
                <div class="btn-group ">
                <button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"> Action </span>
                </button>
                    <ul  class="dropdown-menu icons-right " style="z-index: 999999">
                        <?php if($type != 'core'): ?>
                        <li><a href="<?php echo e(url($row->module_name)); ?>"> <?php echo e(Lang::get('core.btn_view')); ?> Module </a></li>
                        <li><a href="<?php echo e(url('sximo/module/duplicate/'.$row->module_id)); ?>" onclick="SximoModal(this.href,'Duplicate/Clone Module'); return false;" > Duplicate/Clone </a></li>                       
                        <?php endif; ?>
                        <li><a href="<?php echo e(url('sximo/module/config/'.$row->module_name)); ?>"> <?php echo e(Lang::get('core.btn_edit')); ?></a></li> 
                        
                        <?php if($type != 'core'): ?>
                        <li><a href="javascript://ajax" onclick="SximoConfirmDelete('<?php echo e(url('sximo/module/destroy/'.$row->module_id)); ?>')"> <?php echo e(Lang::get('core.btn_remove')); ?></a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo e(url('sximo/module/rebuild/'.$row->module_id)); ?>"> Rebuild All Codes</a></li>
                        <?php endif; ?>
                    </ul>
                </div>                  
                </td>
                <td>
                 
                <input type="checkbox" class="ids minimal-green" name="id[]" value="<?php echo e($row->module_id); ?>" /> </td>
                <td><?php echo e($row->module_title); ?> </td>
                <td><?php echo e($row->module_type); ?> </td>
                <td><?php echo e($row->module_name); ?> </td>

                <td><?php echo e($row->module_db); ?> </td>
                <td><?php echo e($row->module_db_key); ?> </td>
                <td><?php echo e($row->module_created); ?> </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </tbody>        
        </table>
        <?php echo Form::close(); ?>

        </div>
        <?php else: ?>

        <p class="text-center" style="padding:50px 0;"><?php echo e(Lang::get('core.norecord')); ?> 
        <br /><br />
        <a href="<?php echo e(url('sximo/module/create')); ?>" class="btn btn-primary btn-sm "><i class="fa fa-plus"></i> <?php echo e(Lang::get('core.fr_createmodule')); ?> </a>
         </p>   
        <?php endif; ?>
        </div>

            </div>
        </div>
    </div>
</div>


  <script language='javascript' >
  jQuery(document).ready(function($){
    $('.post_url').click(function(e){
      e.preventDefault();
      if( ( $('.ids',$('#SximoTable')).is(':checked') )==false ){
        alert( $(this).attr('data-title') + " not selected");
        return false;
      }
      $('#SximoTable').attr({'action' : $(this).attr('href') }).submit();
    });


  })
  </script>        

<style type="text/css">
    .navbar-fixed-top {
        background: #fff !important;
    }
</style>  



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>