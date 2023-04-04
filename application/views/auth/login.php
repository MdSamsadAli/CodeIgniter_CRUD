<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>My Pages for Alert</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    
    <!-- Login Form -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card shadow">
                    <div class="card-title text-center border-bottom">
                        <h2 class="p-3">Login</h2>
                    </div>
                    <div class="card-body">
                        <?php echo form_open('auth/login_form'); ?>
                        <!-- <form> -->
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" />
                            <?php if (form_error('email')) {
                                echo "<span style='color:red'>" . form_error('email') . "</span>";
                            }
                            ?>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>" />
                            <?php if (form_error('password')) {
                                echo "<span style='color:red'>" . form_error('password') . "</span>";
                            }
                            ?>
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="">
                            <label for="remember" class="form-label">Are You Registered Already ?</label>
                            <a href="<?php base_url() ?>auth/register" id="remember">Register Here</a>
                        </div>
                        <!-- </form> -->
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<script type="text/javascript">


<?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }else if($this->session->flashdata('error')){  ?>
    toastr.error("<?php echo $this->session->flashdata('error'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>


</script>

</body>

<!-- <script>
    var v = $("form").validate({
        submitHandler: function() {
            return false;
        }
    });

    $('#email').blur(function() {
        v.element('#email');
    });

    $('#password').blur(function() {
        v.element('#password');
    });
</script> -->



</html>