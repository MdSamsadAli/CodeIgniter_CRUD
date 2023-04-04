<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
    <style>
        .mr-auto {
            width: 80%;
            margin: auto;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
</head>

<body>
    <div class="container mt-4">
        <form class="mr-auto">
            <div class="text-center mt-4 mb-4">
                <h3>Student Information Here</h3>
            </div>
            <a href="<?php base_url() ?>login/login" class="btn btn-info btn-sm">Login Here</a>
            <a href="<?= base_url() ?>user/create" class="btn btn-primary btn-sm">Create Here</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $id = 1;
                    foreach ($data as $row){?>
                        <tr>
                            <td scope="row"><?php echo $id ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                        <td>
                            <a href='user/editupdate/<?php echo $row['id']; ?>' class="btn btn-primary btn-sm" >Edit</a>
                            <a href='user/delete?id="<?php 
                            echo $row['id']; 
                            ?>" ' class="btn btn-danger btn-sm">Delete</a>
                            <!-- <a href="#" class="delete_data" id=" -->
                            <?php 
                                // echo $row['id'];
                            ?>
                            <!-- ">Delete</a> -->
                        </td>
                    </tr>
                   <?php 
                   $id++;
                }?>
                    
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>

<!-- <script>
$(document).ready(function(){
$('.delete_data').click(function(){
var id=$(this).attr("id");
if(confirm("are you sure you want to delete this?"))
{
    window.location="<?php 
    // echo base_url();
     ?>user/deletedata/"+id;
}
else
{
    return false;
}
});
});

</script> -->