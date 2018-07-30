<div class="row  ">
    <nav style="margin-bottom: 0;" role="navigation" class="navbar navbar-fixed-top ">
    <div class="navbar-header">
         <a href="javascript:void(0)" class="navbar-minimalize minimalize-btn  ">
            <i class="fa fa-bars"></i> 
         </a>    
             
    </div>

     <ul class="nav navbar-top-links navbar-right">

        <?php if(config('sximo.cnf_multilang') ==1): ?>
        <li class="dropdown tasks-menu">
          <?php 
          $flag ='en';
          $langname = 'English'; 
          foreach(SiteHelpers::langOption() as $lang):
            if($lang['folder'] == session('lang') or $lang['folder'] == config('sximo.cnf_lang')) {
              $flag = $lang['folder'];
              $langname = $lang['name']; 
            }
            
          endforeach;?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <img class="flag-lang" src="<?php echo e(asset('sximo5/images/flags/'.$flag.'.png')); ?>" width="16" height="12" alt="lang" /> <?php echo e(strtoupper($flag)); ?>

            <span class="hidden-xs">
            
            </span>
          </a>

           <ul class="dropdown-menu dropdown-menu-right icons-right">
            <?php $__currentLoopData = SiteHelpers::langOption(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(url('home/lang/'.$lang['folder'])); ?>"><img class="flag-lang" src="<?php echo e(asset('sximo5/images/flags/'. $lang['folder'].'.png')); ?>" width="16" height="11" alt="lang"  /> <?php echo e($lang['name']); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          </ul>

        </li> 
        <?php endif; ?> 

        <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="pe-7s-bell icons-pe"></i>
              <span class="label label-green notif-alert">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"> </li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu" id="notification-menu">
                  
                </ul>  
              <li><a href="<?php echo e(url('notification')); ?>">View all</a></li>
            </ul>
          </li>
     
        <li class="dropdown user">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <i class="pe-7s-tools icons-pe"></i>  
            </a>
            <ul class="dropdown-menu navbar-mega-menu animated flipInX" style="display: none;">

     <?php if(Auth::user()->group_id == 1 or Auth::user()->group_id ==2 ): ?>
    <li class="col-sm-3">
        <ul>
            <li class="dropdown-header">  <?php echo app('translator')->getFromJson('core.m_setting'); ?> </li>
            <li class="divider"></li>
             <li><a href="<?php echo e(url('')); ?>/sximo/config"><i class="fa fa-sliders"></i> <?php echo app('translator')->getFromJson('core.t_generalsetting'); ?> </a> </li> 
             <li><a href="<?php echo e(url('')); ?>/sximo/config/email"><i class="fa fa-envelope"></i><?php echo app('translator')->getFromJson('core.t_emailtemplate'); ?> </a> </li> 
             <li><a href="<?php echo e(url('')); ?>/sximo/config/security"><i class="fa fa-lock"></i>  <?php echo app('translator')->getFromJson('core.t_loginsecurity'); ?> </a> </li> 
             <li><a href="<?php echo e(url('')); ?>/sximo/config/translation"><i class="fa fa-map"></i> <?php echo app('translator')->getFromJson('core.tab_translation'); ?> </a> </li>  
             <li><a href="<?php echo e(url('core/logs')); ?>"><i class="fa fa-archive"></i> <?php echo app('translator')->getFromJson('core.m_logs'); ?></a></li>
           
        </ul>
    </li>
                                
    <li class="col-sm-3">
        <ul>
            <li class="dropdown-header"> Administrator </li>
            <li class="divider"></li>
            <li ><a href="<?php echo e(url('core/users')); ?>"> <i class="fa fa-user-circle-o"></i> <?php echo app('translator')->getFromJson('core.m_users'); ?> <br /></a> </li> 
            <li ><a href="<?php echo e(url('core/groups')); ?>"> <i class="fa fa-user-plus"></i> <?php echo app('translator')->getFromJson('core.m_groups'); ?> </a> </li>
            <li><a href="<?php echo e(url('core/users/blast')); ?>"> <i class="fa fa-envelope"></i>  <?php echo app('translator')->getFromJson('core.m_blastemail'); ?> </a></li> 
            <li><a href="<?php echo e(url('core/pages')); ?>"> <i class="fa fa-text-width"></i>  <?php echo app('translator')->getFromJson('core.m_pagecms'); ?>  </a></li>
            <li ><a href="<?php echo e(url('core/posts')); ?>"> <i class="fa fa-text-height"></i> <?php echo app('translator')->getFromJson('core.m_post'); ?></a></li>
             
        </ul>
    </li>
    <?php endif; ?>
     <?php if(Auth::user()->group_id == 1  ): ?>
    <li class="col-sm-3">
        <ul>
            <li class="dropdown-header"> Superadmin </li> 
             <li class="divider"></li>       
               <li><a href="<?php echo e(url('sximo/module')); ?>"><i class="fa fa-free-code-camp"></i> <?php echo app('translator')->getFromJson('core.m_codebuilder'); ?>  </a> </li>
                <li><a href="<?php echo e(url('sximo/rac')); ?>"><i class="fa fa-random"></i> RestAPI Generator </a> </li> 
                <li><a href="<?php echo e(url('sximo/tables')); ?>"><i class="fa fa-database"></i> <?php echo app('translator')->getFromJson('core.m_database'); ?> </a> </li>
                <li><a href="<?php echo e(url('sximo/form')); ?>"><i class="fa fa-tasks"></i> <?php echo app('translator')->getFromJson('core.m_formbuilder'); ?> </a> </li>
                <li><a href="<?php echo e(url('core/elfinder')); ?>"><i class="fa fa-cloud-upload"></i> Dropzone Media </a> </li>                      
 

            
        </ul>
    </li> 
    <li class="col-sm-3">
        <ul>
            <li class="dropdown-header"> Utility </li> 
            <li class="divider"></li>
                <li><a href="<?php echo e(url('sximo/menu')); ?>"><i class="fa fa-sitemap"></i>  <?php echo app('translator')->getFromJson('core.m_menu'); ?></a> </li>              
                <li> <a href="<?php echo e(url('sximo/code')); ?>"><i class="fa fa-file-code-o"></i> <?php echo app('translator')->getFromJson('core.m_sourceeditor'); ?> </a>  </li>
                 <li> <a href="<?php echo e(url('sximo/config/clearlog')); ?>" class="clearCache"><i class="fa fa-trash-o"></i> <?php echo app('translator')->getFromJson('core.m_clearcache'); ?></a> </li>
 
        </ul>
    </li>
    <?php endif; ?>    
                             


            </ul>
        </li>
        <li><a href="<?php echo e(url('user/logout')); ?>"><i class="pe-7s-angle-right-circle icons-pe"></i> </a></li>            
    </ul>   
    </nav>   
     


</div>  