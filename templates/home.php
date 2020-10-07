
<?php $title = "home" ?>
<?php $mainTitle = "coucou" ?>
<?php $previous = "previous" ?>

<?php ob_start(); ?>

<h1>Home !</h1>

<?php $primaryContent = ob_get_clean(); ?>

<?php ob_start(); ?>

<h1>Hello !</h1>

<?php $secondaryContent = ob_get_clean(); ?>

<?php require('layout-2.php'); ?>
