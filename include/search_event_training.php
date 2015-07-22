<table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>N<sup>o</sup></th>
                                                <th>Event-Training</th>
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
                                                $obj_main->returnQuery("UPDATE ".EVENT_TRAINING." set ".$_GET['f']."='".$_GET['to']."' WHERE et_id='".$_GET['id']."'");
                                            }
                                            $page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
                                            if ($page <= 0) $page = 1;
                                             
                                            $per_page = 10; // Set how many records do you want to display per page.
                                             
                                            $startpoint = ($page * $per_page) - $per_page;
                                             
                                            $statement = QUERY_EVENT_TRAINING_ADMIN; // Change `records` according to your table name.
                                               
                                            $results = $obj_main->returnQuery("SELECT et.*,q.*,b.*,c.*,p.*
                                                FROM {$statement} 
                                                INNER JOIN qualification_level q ON q.qu_id = et.qu_id
                                                INNER JOIN branch b ON b.br_id = et.br_id 
                                                INNER JOIN category c ON c.cat_id = et.cat_id
                                                INNER JOIN province p ON p.pro_id = et.pro_id
                                                WHERE et_title like '%" .(isset($_GET['k'])?$_GET['k']:"")."%' or
                                                qu_name like '%" .(isset($_GET['k'])?$_GET['k']:"")."%' or 
                                                br_name like '%" .(isset($_GET['k'])?$_GET['k']:"")."%' or 
                                                cat_name like '%" .(isset($_GET['k'])?$_GET['k']:"")."%' or
                                                pro_name like '%" .(isset($_GET['k'])?$_GET['k']:"")."%'
                                                LIMIT {$startpoint} , {$per_page}");

                                            if (mysqli_num_rows($results) != 0) {
                                                $n=1;
                                                // displaying records.
                                                while ($row = mysqli_fetch_array($results)) {
                                                    ?>
                                                    <tr class="odd">
                                                        <td><?php echo $n?></td>
                                                        <td><?php echo $row['et_title'];?></td>
                                                        <td><?php echo $row['qu_name'];?></td>
                                                        <td><?php echo $row['br_name'];?></td>
                                                        <td><?php echo $row['cat_name'];?></td>
                                                        <td><?php echo $row['pro_name'];?></td>
                                                        <td><?php echo $row['et_startDate'];?></td>
                                                        <td><?php echo $row['et_endDate'];?></td>
                                                        <td class="alc">
                                                            <a href="#" onclick="update_sub(<?php echo $row['et_id']?>,'et_status',<?php echo ($row['et_status']==1?"0":"1")?>,'EVENT_TRAINING','responseTable')">
                                                                <i class="fa fa<?php echo ($row['et_status']==1?"-check":"");?>-square-o"></i>
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
                                            