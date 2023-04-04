<div class="text-center mt-4 mb-4">
    <h2>Person Information</h2>
</div>
<div class="mb-4">
    <a href="<?php echo base_url() ?>person/create" class="btn btn-info btn-sm">Add Person</a>
    <a href="<?php echo base_url() ?>auth/logout" class="btn btn-secondary btn-sm">Logout</a>
</div>
<h2>Name : - <?php 
echo $data[0]['firstName'];
// var_dump($data);
?></h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">Department</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $id = 1;
        foreach ($data as $row) { ?>
            <tr>
                <th scope="row"><?php echo $id; ?></th>
                <td><?php echo $row['firstName'] ?></td>
                <td><?php echo $row['lastName'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['department'] ?></td>
                <td><?php echo $row['dob'] ?></td>
                <td>
                    <a href="person/edit/<?php echo $row['id'] ?>" class="btn btn-sm btn-secondary">Edit</a>
                    <a href='<?php base_url() ?>person/deletedata/<?php echo $row['id']; ?> ' class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php $id++;
        } ?>
    </tbody>
</table>
</div>