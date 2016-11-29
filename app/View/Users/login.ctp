<div class="wrapper">
    <header>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="#">
                        <img src="<?php echo Configure::read('App.baseUrl'); ?>/images/logo.png" width="" height="" alt="Logo"></a>
                </div>
            </div>
        </div>
    </header>


    <div class="lower-header">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <h1>Login</h1>
            </div>

        </div>

    </div>

    <?php echo $this->Session->flash(); ?>

    <div class="login-form">
        <div class="container-fluid ">
            <?php echo $this->Form->create('User'); ?>
            <div class="form-group">

                <?php
                echo $this->Form->input(
                        'username', array('label' => 'Username', 'class' => 'form-control', 'placeholder' => '"eg: roger.federer"')
                );
                ?>
            </div>

            <div class="form-group">

                <?php
                echo $this->Form->input(
                        'password', array('label' => 'Password', 'class' => 'form-control', 'type' => 'password', 'placeholder' => 'Enter password')
                );
                ?>
            </div>
            <div class="checkbox">
                <label>
                    <?php
                    echo $this->Form->checkbox('rememberme', array('hiddenField' => false));
                    ?>
                    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                    Remember me on this computer
                </label>
            </div>         



            <div class="btn-form width-50 marg-top-25">
                <?php echo $this->Form->button('Sign Up',array('class'=>'btn btn-default', 'type'=>'button', 'onclick'=>'goToLogin()')); ?>
                <?php echo $this->Form->button('Login',array('class'=>'btn btn-default')); ?>
            </div>
            <?php echo $this->Form->end(); ?>

        </div>
    </div>





</div>
<script>
    function goToLogin(){
        window.location.href = 'signup';
    }
</script>