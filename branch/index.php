<?php
	require_once '../config/class.php';
    require_once '../config/branch.php';
	require_once '../check/index.php';
	require_once '../include/header.php';
	require_once '../include/menu.php';
?>

 <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Branch
                        <small>Management</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Branch</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
					<div class="row">
                        <div class="col-lg-10">
                            <div class="box">
                                <div class="col-sm-6 box-header">
                                    <h3 class="box-title">All Branch
                                </div><!-- /.box-header -->
                                <!-- <div class="col-sm-6 search-form" style="margin:5px 0;">
                                        <form action="#" class="text-right">
                                            <div class="input-group">
                                                <input type="text" class="form-control input-sm" placeholder="Search">
                                                <div class="input-group-btn">
                                                    <button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> -->
                                <div class="box-body table-responsive">
                                    <!-- <table id="example2" class="table table-bordered table-hover"> -->
                                    
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>University</th>
                                                <th>Branch Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th class="alc">Status</th>
                                                <th class="alc">Head office</th>
                                                <th class="alc">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
                                            if ($page <= 0) $page = 1;
                                             
                                            $per_page = 10; // Set how many records do you want to display per page.
                                             
                                            $startpoint = ($page * $per_page) - $per_page;
                                             
                                            $statement = QUERY_UNIVERSITY_ADMIN; // Change `records` according to your table name.
                                              
                                            $results = $obj_main->returnQuery("SELECT u.*,
                                                                                (SELECT ua.adm_email FROM ".ADMIN_USER." ua WHERE ua.adm_id=u.adm_id) as `adm_email` 
                                                                                FROM {$statement} LIMIT {$startpoint} , {$per_page}");
                                            
                                            if (mysqli_num_rows($results) != 0) {
                                                 
                                                // displaying records.
                                                while ($row = mysqli_fetch_array($results)) {
                                                    ?>
                                                    <tr class="odd">
                                                        <td><?php echo $row['uni_full_name'];?></td>
                                                        <td><?php echo $row['uni_short_name'];?></td>
                                                        <td><?php echo $row['adm_email'];?></td>
                                                        <td class="alc"><?php echo ($row['uni_logo']!=""?"<img src='".WEB_DIR."img/university/".$row['uni_logo']."' height='20px'>":"")?></td>
                                                        <td class="alc">
                                                        <a href="<?php echo WEB_DIR?>university/?action=status&id=<?php echo $row['uni_id']?>&status=<?php echo ($row['uni_status']==1?"0":"1");?><?php if(isset($_GET['page'])){echo '&p='.$_GET['page'];}?>">
                                                        <i class="fa fa<?php echo ($row['uni_status']==1?"-check":"");?>-square-o"></i>
                                                        </a>
                                                        </td>
                                                        <td class="alc">
                                                        <a href="<?php echo WEB_DIR?>university/?action=feature&id=<?php echo $row['uni_id']?>&status=<?php echo ($row['uni_isFeature']==1?"0":"1");?><?php if(isset($_GET['page'])){echo '&p='.$_GET['page'];}?>">
                                                            <i class="fa fa-fw fa-star<?php echo ($row['uni_isFeature']==1?"":"-o");?>"></i>
                                                        </a>
                                                        </td>
                                                        <td class='alc'>
                                                            <a href="<?php echo WEB_DIR?>university/edit.php?id=<?php echo $row['uni_id']?><?php if(isset($_GET['page'])){echo '&p='.$_GET['page'];}?>"><i class="fa fa-edit"></i></a>
                                                            <!-- <a onClick="return confirm('Do you want to delete?');" href="<?php echo WEB_DIR?>university/?action=delete&id=<?php echo $row['uni_id']?><?php if(isset($_GET['page'])){echo '&p='.$_GET['page'];}?>"><i class="fa fa-fw fa-trash-o"></i></a> -->
                                                        </td>
                                                    </tr>
                                                    <?php 
                                                }
                                              
                                            } else {
                                                 echo "<tr><td colspan='6' class='text-center'>No records are found.</td></tr>";
                                            }
                                             
                                             // displaying paginaiton.
                                            //echo $obj_main->pagination($statement,$per_page,$page,$url='?');
                                            
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div></div>
                                            <div class="dataTables_paginate paging_bootstrap">
                                                <?php
                                                // displaying paginaiton.
                                                echo $obj_main->pagination($statement,$per_page,$page,$url='?');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <div class="col-lg-2">
                            <!--<div class="nav-tabs-custom">-->
                            <div class="nav-tabs-custom">
                                <!-- compose message btn -->
                                <!-- <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-plus"></i> Add New University</a> -->
                                
                            </div>
                            <div class="nav-tabs-custom">
                                
                            </div>
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->

<?php require_once '../include/footer.php';?>

        