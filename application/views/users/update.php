<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
    <style>
        .mr-auto {
            width: 40%;
            margin: auto;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4 ">
        <div class="mr-auto">
            <div class="text-center">
                <h3>Student Create Here</h3>
            </div>
            <?php
        foreach($data as $row){?>
            <form method="post" action="<?php base_url() ?>editdata" >
                <div class="col-12 mt-4">
       

                    <input type="hidden" name="id" value="<?php echo $row->id ?>" />
                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row->name ?>" >
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $row->email ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="mobile">Mobile No.</label>
                        <input type="number" class="form-control" name="mobile" value="<?php echo $row-> mobile ?>" >
                    </div>
                    <input type="submit" class="btn btn-primary" name="save" value="Update" />
                </div>
            </form>
            <?php  }
        ?>
        </div>
    </div>
</body>

</html>