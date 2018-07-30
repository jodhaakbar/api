<?php $sidebar = SiteHelpers::menus('sidebar') ;?>
<div id="sidebar-navigation">
    <div class="logo">
         <a href="<?php echo url('dashboard') ;?>">           
            <?php if(file_exists(public_path().'/uploads/images/'.config('sximo.cnf_logo') ) && config('sximo.cnf_logo') !=''): ?>
                <img src="<?php echo e(asset('uploads/images/'.config('sximo.cnf_logo'))); ?>" alt="<?php echo e(config('sximo.cnf_appname')); ?>"  />
            <?php else: ?>
            <?php echo e(config('sximo.cnf_appname')); ?> 
            <?php endif; ?>  
        </a>    
    </div>
    <div class="sidebar-collapse">
    <nav role="navigation" class="navbar-default ">
       <ul id="sidemenu" class="nav expanded-menu">
        <li class="profile-sidebar">
            <a href="<?php echo e(url('user/profile')); ?>">
                <?php echo SiteHelpers::avatar(80); ?>

            </a>

            <div class="stats-label">
               

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <span class="font-extra-bold font-uppercase"><?php echo e(session('fid')); ?></span>
                    </a>
                    <ul class="dropdown-menu animated flipInX m-t-xs" style="display: none">
                        <li><a href="<?php echo e(url('user/profile')); ?>"><i class="fa fa-vcard-o"></i>  <?php echo app('translator')->getFromJson('core.m_profile'); ?></a></li>
                        <li class="divider"></li>
                        <li><a href="javascript://ajax" class="switch-theme" code="light-theme.css"> Light Theme </a></li>
                        <li><a href="javascript://ajax" class="switch-theme" code="blue-theme.css"> Blue Theme </a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo e(url('user/logout')); ?>"><i class="fa fa-power-off"></i> <?php echo app('translator')->getFromJson('core.m_logout'); ?></a></li>
                    </ul>
                </div>
            </div>    


        </li>      
        <?php $__currentLoopData = $sidebar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            

             <li <?php if(Request::segment(1) == $menu['module']): ?> class="active" <?php endif; ?>>

            <?php if($menu['module'] =='separator'): ?>
            <li class="separator"> <span> <?php echo e($menu['menu_name']); ?> </span></li>
                
            <?php else: ?>
                <a data-toggle="tooltip" title="<?php echo e($menu['menu_name']); ?>" data-placement="right"
                    <?php if($menu['menu_type'] =='external'): ?>
                        href="<?php echo e($menu['url']); ?>" 
                    <?php else: ?>
                        href="<?php echo e(URL::to($menu['module'])); ?>" 
                    <?php endif; ?>              
                
                 <?php if(count($menu['childs']) > 0 ): ?> class="expand level-closed" <?php endif; ?>>
                    <i class="<?php echo e($menu['menu_icons']); ?>"></i> 
                    <span class="nav-label">                    
                        <?php echo e((isset($menu['menu_lang']['title'][session('lang')]) ? $menu['menu_lang']['title'][session('lang')] : $menu['menu_name'])); ?>

                    </span> 
                    <?php if(count($menu['childs'])): ?><span class="fa arrow"></span> <?php endif; ?>    
                </a> 
                <?php endif; ?>  
                <?php if(count($menu['childs']) > 0): ?>
                    <ul class="nav nav-second-level">
                        <?php $__currentLoopData = $menu['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li <?php if(Request::segment(1) == $menu2['module']): ?> class="active" <?php endif; ?>>
                            <a  
                                <?php if($menu2['menu_type'] =='external'): ?>
                                    href="<?php echo e($menu2['url']); ?>" 
                                <?php else: ?>
                                    href="<?php echo e(URL::to($menu2['module'])); ?>"  
                                <?php endif; ?>                                  
                            >
                            
                            <i class="<?php echo e($menu2['menu_icons']); ?>"></i>
                           <?php echo e((isset($menu2['menu_lang']['title'][session('lang')]) ? $menu2['menu_lang']['title'][session('lang')] : $menu2['menu_name'])); ?>

                            </a> 
                            <?php if(count($menu2['childs']) > 0): ?>
                            <ul class="nav nav-third-level">
                                <?php $__currentLoopData = $menu2['childs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li <?php if(Request::segment(1) == $menu3['module']): ?> class="active" <?php endif; ?>>
                                        <a 
                                            <?php if($menu['menu_type'] =='external'): ?>
                                                href="<?php echo e($menu3['url']); ?>" 
                                            <?php else: ?>
                                                href="<?php echo e(URL::to($menu3['module'])); ?>" 
                                            <?php endif; ?>                                      
                                        
                                        >
                                       
                                        <i class="<?php echo e($menu3['menu_icons']); ?>"></i> 
                                        <?php echo e((isset($menu3['menu_lang']['title'][session('lang')]) ? $menu3['menu_lang']['title'][session('lang')] : $menu3['menu_name'])); ?>                                         
                                            
                                        </a>
                                    </li>   
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php endif; ?>                          
                        </li>                           
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>   
    </nav>
    </div>
</div>