<table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>N<sup>o</sup></th>
                                                <th>Course</th>
                                                <th>Level</th>
                                                <th>Branch</th>
                                                <th>Category</th>
                                                <th>Location</th>
                                                <th>Start Date</th>
                                                <th>Close Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(isset($_GET['f'])){
                                                $obj_main->returnQuery("UPDATE ".SCHOLARSHIP." set ".$_GET['f']."='".$_GET['to']."' WHERE sl_id='".$_GET['id']."'");
                                            } 
                                            $page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
                                            if ($page <= 0) $page = 1;
                                             
                                            $per_page = 10; // Set how many records do you want to display per page.
                                             
                                            $startpoint = ($page * $per_page) - $per_page;
                                             
                                            $statement = QUERY_SCHOLARSHIP_ADMIN; // Change `records` according to your table name.
                                               
                                            $results = $obj_main->returnQuery("SELECT s.*,q.*,b.*,c.*,cont.*
                                                FROM {$statement} 
                                                INNER JOIN qualification_level q ON q.qu_id = s.qu_id
                                                INNER JOIN branch b ON b.br_id = s.br_id 
                                                INNER JOIN category c ON c.cat_id = s.cat_id
                                                INNER JOIN country cont ON cont.cont_id = s.cont_id
                                                WHERE sl_title like '%" .(isset($_GET['k'])?$_GET['k']:"")."%' or
                                                qu_name like '%" .(isset($_GET['k'])?$_GET['k']:"")."%' or 
                                                br_name like '%" .(isset($_GET['k'])?$_GET['k']:"")."%' or 
                                                cat_name like '%" .(isset($_GET['k'])?$_GET['k']:"")."%' or
                                                cont_name like '%" .(isset($_GET['k'])?$_GET['k']:"")."%'
                                                LIMIT {$startpoint} , {$per_page}");

                                            
                                            if (mysqli_num_rows($results) != 0) {
                                                $n=1;
                                                // displaying records.
                                                while ($row = mysqli_fetch_array($results)) {
                                                    ?>
                                                    <tr class="odd">
                                                        <td><?php echo $n?></td>
                                                        <td><?php echo $row['sl_title'];?></td>
                                                        <td><?php echo $row['qu_name'];?></td>
                                                        <td><?php echo $row['br_name'];?></td>
                                                        <td><?php echo $row['cat_name'];?></td>
                                                        <td><?php echo $row['cont_name'];?></td>
                                                        <td><?php echo $row['sl_startDate'];?></td>
                                                        <td><?php echo $row['sl_expiredDate'];?></td>
                                                        <td class="alc">
                                                            <a href="#" onclick="update_sub(<?php echo $row['sl_id']?>,'sl_status',<?php echo ($row['sl_status']==1?"0":"1")?>,'SCHOLARSHIP','responseTable')">
                                                                <i class="fa fa<?php echo ($row['sl_status']==1?"-check":"");?>-square-o"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <?php
                                                    $n++; 
                                                }
                                              
                                            } else {
                                                 echo "<tr><td colspan='9' class='text-center'>No records are found.</td></tr>";
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

