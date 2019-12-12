<div class="row mb-3">
    <div class="col-md-12">
        <a href="index.php?action=add" class="btn btn-success">Add New</a>
    </div>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Class</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Reason</th>
            <th>Major</th>
            <th>profile</th>
        </tr>
    </thead>
    <?php
        if(isset($data['student_data'])){
            foreach($data['student_data'] as $rows){
    ?>
    <tbody>
        <tr>
            <td><?php echo $rows ['id']?></td>
            <td><?php echo $rows ['first_name']?></td>
            <td><?php echo $rows ['last_name']?></td>
            <td><?php echo $rows ['class']?></td>
            <td><?php echo $rows ['gender']?></td>
            <td><?php echo $rows ['email']?></td>
            <td><?php echo $rows ['reason']?></td>
            <td><?php echo $rows ['marjor']?></td>
            <td><?php echo $rows ['profile']?></td>
            <td>
                <a href="index.php?action=detain&id=<?php echo $rows['id'];?>"></a>
            </td>
        </tr>
    </tbody>
    <?php
            }
        }
    ?>
</table>