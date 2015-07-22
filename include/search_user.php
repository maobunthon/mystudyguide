<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>N<sup>o</sup></th>
            <th>Full Name</th>
            <th>Location</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Admin at</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if(isset($_GET['f'])){
            $obj_main->returnQuery("UPDATE ".ADMIN_USER." set ".$_GET['f']."='".$_GET['to']."' WHERE adm_id='".$_GET['id']."'");
        }
        $page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
        if ($page <= 0) $page = 1;
         
        $per_page = 10; // Set how many records do you want to display per page.
         
        $startpoint = ($page * $per_page) - $per_page;
         
        $statement = QUERY_USER_ADMIN; // Change `records` according to your table name.
          
        $results = $obj_main->returnQuery("SELECT au.*,u.*  
         FROM {$statement} inner join ".UNIVERSITY." u on u.adm_id=au.adm_id where adm_fullName like '%" .(isset($_GET['k'])?$_GET['k']:"")."%' or adm_email like '%" .(isset($_GET['k'])?$_GET['k']:"")."%' or uni_full_name like '%" .(isset($_GET['k'])?$_GET['k']:"")."%' LIMIT {$startpoint} , {$per_page}");
        
        if (mysqli_num_rows($results) != 0) {
            $n=1;
            // displaying records.
            while ($row = mysqli_fetch_array($results)) {
                ?>
                <tr class="odd">
                    <td><?php echo $n?></td>
                    <td><?php echo $row['adm_fullName'];?></td>
                    <td><?php echo $row['adm_address'];?></td>
                    <td><?php echo $row['adm_email'];?></td>
                    <td><?php echo $row['adm_phone'];?></td>
                    <td><?php echo $row['uni_full_name'];?></td>
                    <td class="alc">
                        <a href="#" onclick="update_sub(<?php echo $row['adm_id']?>,'adm_status',<?php echo ($row['adm_status']==1?"0":"1")?>,'ADMIN_USER','responseTable')">
                            <i class="fa fa<?php echo ($row['adm_status']==1?"-check":"");?>-square-o"></i>
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