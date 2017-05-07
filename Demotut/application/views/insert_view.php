<html>
<head>
<title>Insert Data Into Database Using CodeIgniter Form</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />

<script type = 'text/javascript' src = "<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script>

<script src="<?php echo base_url(); ?>js/javascripdem.js" type="text/javascript" charset="utf-8"></script>


</head>
<body>

<div id="container">
<div id="Form">
<?php echo form_open('insert_ctrl'); ?>
<h1>School Demo</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php echo form_label('Member Name :'); ?> <?php echo form_error('dname'); ?><br />
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

<?php echo form_label('Student Email :'); ?> <?php echo form_error('demail'); ?><br />
<?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />

<?php echo form_label('School Name :'); ?> <?php echo form_error('Dropdown'); ?><br />
<?php echo form_dropdown("Dropdown", $schooldata , 'class="myClass" id="myId"' ); ?>

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>


<?php //echo validation_errors(); ?>



<?php echo form_close(); ?><br/>
</div>
<div id="fugo">

</div>
</div>
</body>
</html>
