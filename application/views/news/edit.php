<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h2><?php  echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/edit/'.$news_item['student_id']); ?>

<table>
	<tr>
		<td><label for="name">Student Name</label></td>
		<td><input type="text" name="name" size="50" value="<?php echo $news_item['name'] ?>"></td>
	</tr>
	<tr>
		<td><label for="phone_number">Phone Number</label></td>
		<td><input type="text" name="phone_number" size="50" value="<?php echo $news_item['phone_number'] ?>"></td>
	</tr>
	<tr>
		<td><label for="email">Email Address</label></td>
		<td><input type="text" name="email" size="50" value="<?php echo $news_item['email'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Update"></td>
	</tr>
</table>

<?php echo form_close(); ?>