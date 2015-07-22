<?php
	require_once 'config/class.php';
    require_once 'config/university.php';
	require_once 'check/index.php';
	require_once 'include/header.php';
	require_once 'include/menu.php';
    // require_once 'university/pop-add.php';
    // require_once 'university/pop-edit.php';

    // if(isset($_POST['AddUniversity'])){
    //     $obj_university->adm_id="";
    //     $obj_university->uni_logo="";
    //     $obj_university->uni_full_name="";
    //     $obj_university->uni_short_name="";
    //     $obj_university->uni_slogan="";
    //     $obj_university->uni_rank="";
    //     $obj_university->uni_isFeature="";
    //     $obj_university->uni_isPrivate="";
    //     $obj_university->uni_status="";
    //     $obj_university->uni_addDate="";
    //     $obj_university->uni_description="";

    //     $obj_university->university_process("insert");
    // }
?>

 <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        University
                        <small>Management</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">University</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
					<div class="row">
                        <div class="col-lg-10">
                            <div class="box">
                                <div class="col-sm-6 box-header">
                                    <h3 class="box-title">All Universities
                                </div><!-- /.box-header -->
                                <div class="col-sm-6 search-form" style="margin:5px 0;">
                                        <form action="#" class="text-right">
                                            <div class="input-group">
                                                <input type="text" onkeyup="search_me(this.value,'UNIVERSITY','responseTable')" class="form-control input-sm" placeholder="Search">
                                                <div class="input-group-btn">
                                                    <button type="button"  class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <div class="box-body table-responsive" id="responseTable">
                                    <!-- <table id="example2" class="table table-bordered table-hover"> -->
                                    
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>N<sup>o</sup></th>
                                                <th>Full Name</th>
                                                <th>Location</th>
                                                <th>Email</th>
                                                <th class="alc">Logo</th>
                                                <th class="alc">Status</th>
                                                <th class="alc">Feature</th>
                                                <th class="alc">Branch</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
                                            if ($page <= 0) $page = 1;
                                             
                                            $per_page = 10; // Set how many records do you want to display per page.
                                             
                                            $startpoint = ($page * $per_page) - $per_page;
                                             
                                            $statement = QUERY_BRANCH_ADMIN; // Change `records` according to your table name.
                                              
                                            $results = $obj_main->returnQuery("SELECT b.*,
                                                (SELECT u.uni_logo FROM ".UNIVERSITY." u where u.uni_id=b.uni_id) as `uni_logo`,
                                                (SELECT p.pro_name FROM ".PROVINCE." p where p.pro_id=b.pro_id) as `pro_id`,
                                                (SELECT au.adm_email FROM adm_user au INNER JOIN university u WHERE u.adm_id=au.adm_id and b.uni_id=u.uni_id) as `adm_email`  
                                             FROM {$statement} LIMIT {$startpoint} , {$per_page}");
                                            
                                            if (mysqli_num_rows($results) != 0) {
                                                $n=1;
                                                // displaying records.
                                                while ($row = mysqli_fetch_array($results)) {
                                                    ?>
                                                    <tr class="odd">
                                                        <td><?php echo $n?></td>
                                                        <td><?php echo $row['br_name'];?></td>
                                                        <td><?php echo $row['pro_id'];?></td>
                                                        <td><?php echo $row['adm_email'];?></td>
                                                        <td class="alc"><?php echo ($row['uni_logo']!=""?"<img src='".WEB_DIR."img/university/".$row['uni_logo']."' height='20px'>":"")?></td>
                                                        <td class="alc">
                                                            <a href="#" onclick="update(<?php echo $row['br_id']?>,'br_status',<?php echo ($row['br_status']==1?"0":"1")?>,'UNIVERSITY','responseTable')">
                                                                <i class="fa fa<?php echo ($row['br_status']==1?"-check":"");?>-square-o"></i>
                                                            </a>
                                                        </td>
                                                        <td class="alc">
                                                        <a href="#" onclick="update(<?php echo $row['br_id']?>,'br_isFeature',<?php echo ($row['br_isFeature']==1?"0":"1")?>,'UNIVERSITY','responseTable')">
                                                            <i class="fa fa-fw fa-star<?php echo ($row['br_isFeature']==1?"":"-o");?>"></i>
                                                        </a>
                                                        </td>
                                                        <td class='alc'>
                                                            <a href="#" onclick="update(<?php echo $row['br_id']?>,'br_isHeadOffice',<?php echo ($row['br_isHeadOffice']==1?"0":"1")?>,'UNIVERSITY','responseTable')">
                                                            <i class="fa fa-fw fa-star<?php echo ($row['br_isHeadOffice']==1?"":"-o");?>"></i><?php echo ($row['br_isHeadOffice']==1?"Head office":" Branch");?>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <?php
                                                    $n++; 
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

<?php require_once 'include/footer.php';?>

        