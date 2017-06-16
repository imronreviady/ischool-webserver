<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start <?php if ($page_name == 'dashboard') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title"><?php echo get_phrase('dashboard'); ?></span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start <?php if ($page_name == 'dashboard') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/dashboard" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title"><?php echo get_phrase('dashboard'); ?></span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase"><?php echo get_phrase('user_management'); ?></h3>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_school') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user-following"></i>
                                <span class="title"><?php echo get_phrase('school'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_school') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/school" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('manage_school'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_teacher') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title"><?php echo get_phrase('teacher'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_teacher') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/teacher" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('manage_teacher'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_student') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title"><?php echo get_phrase('student'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_student') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/student" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('manage_student'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_parent') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title"><?php echo get_phrase('parent'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_parent') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/parent" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('manage_parent'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase"><?php echo get_phrase('data'); ?></h3>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_school_level') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title"><?php echo get_phrase('app_data'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_school_level') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/school_level" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('school_level'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_classroom') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title"><?php echo get_phrase('classroom'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_classroom') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/classroom" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('manage_classroom'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_building') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title"><?php echo get_phrase('buildings'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_building') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/buildings" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('buildings'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_service') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-social-dropbox"></i>
                                <span class="title"><?php echo get_phrase('services'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_service') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/services" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('services'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'order_services') echo 'active open'; ?>">
                            <a href="?p=" class="nav-link nav-toggle">
                                <i class="icon-call-in"></i>
                                <span class="title"><?php echo get_phrase('order_services'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'order_services') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/order_services" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('order_services'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_paket') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-present"></i>
                                <span class="title"><?php echo get_phrase('paket'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_paket') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/paket" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('paket'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_survey_time') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-hourglass"></i>
                                <span class="title"><?php echo get_phrase('survey_time'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_survey_time') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/survey_time" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('survey_time'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_commodities') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-hourglass"></i>
                                <span class="title"><?php echo get_phrase('commodities'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_commodities') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/commodities" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('commodities'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_front_ads') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-hourglass"></i>
                                <span class="title"><?php echo get_phrase('front_ads'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_front_ads') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/front_ads" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('front_ads'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase"><?php echo get_phrase('setting'); ?></h3>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'system_settings' || $page_name == 'manage_language') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-wrench"></i>
                                <span class="title"><?php echo get_phrase('settings'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'system_settings') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/system_settings" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('system_settings'); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php if ($page_name == 'manage_language') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/manage_language" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('language_settings'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_profile') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-emoticon-smile"></i>
                                <span class="title"><?php echo get_phrase('account'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_profile') echo 'active open'; ?>">
                                    <a href="<?php echo base_url(); ?>admin/manage_profile" class="nav-link ">
                                        <span class="title"><?php echo get_phrase('account'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->