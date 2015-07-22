<!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo WEB_DIR.'img/'.$_SESSION['uimg']?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
							<?php
								$myname=$_SESSION['uname'];
								$start=strrpos($myname, " ");
								$end=strlen($myname);
							?>
                            <p><?php echo strtoupper(mb_substr($myname,$start,$end)); ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <!-- <li class="treeview"> -->
						<li>
                            <a href="<?php echo WEB_DIR?>">
                                <i class="fa fa-building-o"></i> <span>University</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo WEB_DIR?>user/">
                                <i class="fa fa-building-o"></i> <span>User</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo WEB_DIR?>course/">
                                <i class="fa fa-building-o"></i> <span>Course</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo WEB_DIR?>scholarship/">
                                <i class="fa fa-building-o"></i> <span>Scholarship</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo WEB_DIR?>event-training/">
                                <i class="fa fa-building-o"></i> <span>Event & Training</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo WEB_DIR?>Promotion/">
                                <i class="fa fa-building-o"></i> <span>Promotion</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>