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
                <h1>Registration</h1>
            </div>

        </div>

    </div>

    <?php echo $this->Session->flash(); ?>

    <div class="register-form">
        <?php echo $this->Form->create('UserDetail'); ?>
        <?php
        echo $this->Form->input(
                'first_name', array('label' => '* First Name', 'div' => array('class' => 'form-group'), 'class' => 'form-control', 'placeholder' => '"eg: Serena"')
        );
        ?>
        <div class="border"></div>
        <?php
        echo $this->Form->input(
                'surname', array('label' => '* Surname', 'div' => array('class' => 'form-group'), 'class' => 'form-control', 'placeholder' => '"eg: Williams"')
        );
        ?>
        <div class="border"></div>
        <div class="form-group">
            <div class="select">
                <label for="suffix">Suffix</label>
                <div class="styled-select grey">
                    <?php
                    echo $this->Form->input(
                            'suffix', array('label' => false, 'options' => $this->App->getSuffix())
                    );
                    ?>
                </div>
            </div>
            <div class="select pull-right">
                <label for="suffix">D.O.B.</label>
                <div class="input-group date" data-date="05/12/1991" data-date-format="dd/mm/yyyy" data-provide="datepicker">
                    <?php
                    echo $this->Form->input(
                            'dob', array('label' => false, 'type' => 'text', 'class' => 'form-control datepicker down-arrow', 'value' => '05/12/1991')
                    );
                    ?>
                </div>

            </div>
        </div>
        <div class="border"></div>
        <div class="form-group position">
            <div class="switch-button">
                <h5>Publicity Viewable:</h5>
                <div class="switch">
                    <?php
                    echo $this->Form->checkbox('agree', array('hiddenField' => false, 'class' => 'cmn-toggle cmn-toggle-round-flat', 'id' => 'cmn-toggle-4'));
                    ?>
                    <label for="cmn-toggle-4"></label>
                </div>
            </div>
            <?php
            echo $this->Form->input(
                    'email', array('label' => 'Email', 'div' => false, 'class' => 'form-control', 'type' => 'email', 'placeholder' => 'e.g: serena.williams@gmail.com')
            );
            ?>
        </div>
        <div class="border"></div>

        <?php
        echo $this->Form->input(
                'retype-email', array('label' => 'Re-type Email', 'div' => array('class' => 'form-group'), 'class' => 'form-control', 'type' => 'email', 'placeholder' => 'e.g: serena.williams@gmail.com')
        );
        ?>
        <div class="border"></div>
        <?php
        echo $this->Form->input(
                'postal_code', array('label' => 'Zip/Postal Code', 'div' => array('class' => 'form-group'), 'class' => 'form-control', 'placeholder' => 'e.g: 302012')
        );
        ?>
        <div class="border"></div>
        <div class="form-group">
            <label for="region">Region</label>
            <div class="styled-select grey">
                <?php
                echo $this->Form->input(
                        'country_id', array('label' => false, 'options' => $this->App->getCountries(), 'empty' => 'Select from list')
                );
                ?>
            </div>
        </div>
        <div class="border"></div>

        <div class="form-group">
            <label for="rating">Do you have a USTA/ITN/UTR rating?</label>     
            <div class="rate" data-toggle="collapse" data-target="#yes"><strong>Yes</strong></div>
            <div id="yes" class="collapse">
                <div class="yes-item">
                    <ul>
                        <li>NTPR ID:</li>
                        <li><?php
                            echo $this->Form->input(
                                    'ntrpid', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => '12345')
                            );
                            ?></li>
                        <li style="width:38%">
                            <div class="input-group spinner" data-trigger="spinner">
                                <?php
                                echo $this->Form->input(
                                        'ntrp_level', array('label' => false, 'div' => false, 'class' => 'form-control text-center'
                                    , 'values' => '6.0', 'data-rule' => 'quantity', 'type' => 'text')
                                );
                                ?>
                                <div class="input-group-addon">
                                    <a href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-caret-up"></i></a>
                                    <a href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="border1"></div>
                    <ul>
                        <li>ITN ID:</li>
                        <li><?php
                            echo $this->Form->input(
                                    'itnid', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => '12345')
                            );
                            ?></li>
                        <li style="width:38%">
                            <div class="input-group spinner" data-trigger="spinner">
                                <?php
                                echo $this->Form->input(
                                        'itn_level', array('label' => false, 'div' => false, 'class' => 'form-control text-center'
                                    , 'values' => '3', 'data-rule' => 'quantity', 'type' => 'text')
                                );
                                ?>
                                <div class="input-group-addon">
                                    <a href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-caret-up"></i></a>
                                    <a href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="border1"></div>
                    <ul>
                        <li>UTR ID:</li>
                        <li><?php
                            echo $this->Form->input(
                                    'utrid', array('label' => false, 'div' => false, 'class' => 'form-control', 'placeholder' => '12345')
                            );
                            ?></li>
                        <li style="width:38%">
                            <div class="input-group spinner" data-trigger="spinner">
                                <?php
                                echo $this->Form->input(
                                        'utr_level', array('label' => false, 'div' => false, 'class' => 'form-control text-center'
                                    , 'values' => '13', 'data-rule' => 'quantity', 'type' => 'text')
                                );
                                ?>
                                <div class="input-group-addon">
                                    <a href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-caret-up"></i></a>
                                    <a href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="rate1" data-toggle="collapse" data-target="#no"><strong>No</strong></div>
            <div id="no" class="collapse">
                <div class="no-item">
                    <ul>
                        <li>Self-rating: &nbsp;</li>
                        <li>
                            <div class="input-group spinner" data-trigger="spinner">
                                <?php
                                echo $this->Form->input(
                                        'self_rating', array('label' => false, 'div' => false, 'class' => 'form-control text-center'
                                    , 'values' => '2.0', 'data-rule' => 'quantity', 'type' => 'text')
                                );
                                ?>
                                <div class="input-group-addon">
                                    <a href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-caret-up"></i></a>
                                    <a href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="border"></div>
        <div class="form-group">
            <label>Set Default Mode</label>
            <div class="radio-button">
                <ul>
                    <li>
                        <label>
                            <input type="radio" name="data[UserDetail][default_mode]" value="Social" />
                            <span class="lbl padding-8">Social</span>
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="radio" name="data[UserDetail][default_mode]" value="Competitive" />
                            <span class="lbl padding-8">Competitive</span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border"></div>
        <div class="form-group block">
            <label>MatchPlay Options</label>
            <div class="s-btn">
                <h4 class="pull-left">Open to Beacon Play</h4>
                <div class="switch pull-right">
                    <?php echo $this->Form->checkbox('is_beaconplay', array('id'=>'cmn-toggle-5','hiddenField' => false,'class'=>'cmn-toggle cmn-toggle-round-flat')); ?>
                    <label for="cmn-toggle-5"></label>
                </div>
            </div>
            <div class="s-btn">
                <h4 class="pull-left">Open to Challange Play</h4>
                <div class="switch pull-right">
                    <?php echo $this->Form->checkbox('is_challangeplay', array('id'=>'cmn-toggle-6','hiddenField' => false,'class'=>'cmn-toggle cmn-toggle-round-flat')); ?>
                    <label for="cmn-toggle-6"></label>
                </div>
            </div>

        </div>
        <div class="border"></div>
        <?php
        echo $this->Form->input(
                'User.username', array('label' => 'Username', 'div' => array('class' => 'form-group'), 'class' => 'form-control'
            , 'placeholder' => 'roger.federer')
        );
        ?>
        <div class="border"></div>

        <?php
        echo $this->Form->input(
                'User.password', array('label' => 'Password', 'div' => array('class' => 'form-group'), 'class' => 'form-control'
            , 'placeholder' => '••••••••')
        );
        ?>
        <div class="border"></div>

        <?php
        echo $this->Form->input(
                'User.re-password', array('label' => 'Re-enter Password', 'div' => array('class' => 'form-group'), 'class' => 'form-control'
            , 'placeholder' => '••••••••')
        );
        ?>

        <div class="checkbox padd">
            <label>
                <?php
                echo $this->Form->checkbox('agree', array('hiddenField' => false));
                ?>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                I agree to the <a href="#">Term of Use</a>
            </label>

            <label class="marg-top-5">
                <?php
                echo $this->Form->checkbox('newsletter', array('hiddenField' => false));
                ?>
                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                I'd like to receive newsletters
            </label>
        </div>         

        <div class="form-group">
            <div class="btn-form width-50 marg-top-25">
                <?php echo $this->Form->button('Register', array('class' => 'btn btn-default', 'type' => 'submit')); ?>
                <?php echo $this->Form->button('Cancel', array('class' => 'btn btn-default', 'onclick' => 'window.history.back()', 'type' => 'button')); ?>
            </div></div>
        <?php echo $this->Form->end(); ?>


    </div>





</div>
<script>
    $(document).ready(function () {
        $('.datepicker').datepicker()
    });
    $(function () {
        $('#customize-spinner').spinner('changed', function (e, newVal, oldVal) {
            $('#old-val').text(oldVal);
            $('#new-val').text(newVal);
        });
    })
</script>