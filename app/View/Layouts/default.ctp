<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <meta charset="UTF-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('responsive');
        echo $this->Html->css('style');
        echo $this->Html->css('common');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('datepicker');
        echo $this->Html->css('font-awesome.min');
        echo $this->Html->css('https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');

        echo $this->fetch('meta');
        echo $this->fetch('css');

        echo $this->Html->script('jquery.min');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('common');
        echo $this->Html->script('jquery.spinner.min');
        echo $this->Html->script('bootstrap-datepicker');
        echo $this->Html->script('https://code.jquery.com/ui/1.12.1/jquery-ui.js');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <?php echo $this->fetch('content'); ?>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
