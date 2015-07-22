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
                if(isset($_GET['f'])){
					$obj_main->returnQuery("UPDATE ".BRANCH." set ".$_GET['f']."='".$_GET['to']."' WHERE br_id='".$_GET['id']."'");
				}
                $page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
                if ($page <= 0) $page = 1;
                 
                $per_page = 10; // Set how many records do you want to display per page.
                 
                $startpoint = ($page * $per_page) - $per_page;
                 
                $statement = QUERY_BRANCH_ADMIN; // Change `records` according to your table name.
                  
                $results = $obj_main->returnQuery("SELECT b.*,
                    (SELECT u.uni_logo FROM ".UNIVERSITY." u where u.uni_id=b.uni_id) as `uni_logo`,
                    (SELECT p.pro_name FROM ".PROVINCE." p where p.pro_id=b.pro_id) as `pro_id`,
                    (SELECT au.adm_email FROM adm_user au INNER JOIN university u WHERE u.adm_id=au.adm_id and b.uni_id=u.uni_id) as `adm_email`  
                 FROM {$statement} Where b.br_name like '%" .(isset($_GET['k'])?$_GET['k']:"")."%'  LIMIT {$startpoint} , {$per_page}");
                
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
                     echo "<tr><td colspan='8' class='text-center'>No records are found.</td></tr>";
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