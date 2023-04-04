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
            <form method="post" action="<?php base_url() ?>create">
                <?php
                // echo validation_errors();
                ?>
                <div class="col-12 mt-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>">
                        <?php if (form_error('name')) {
                            echo "<span style='color:red'>" . form_error('name') . "</span>";
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
                        <?php if (form_error('email')) {
                            echo "<span style='color:red'>" . form_error('email') . "</span>";
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="mobile">Mobile No.</label>
                        <input type="number" class="form-control" name="mobile" value="<?php echo set_value('mobile'); ?>">
                        <?php if (form_error('mobile')) {
                            echo "<span style='color:red'>" . form_error('mobile') . "</span>";
                        }
                        ?>
                    </div>
                    <input type="submit" class="btn btn-primary" name="save" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>