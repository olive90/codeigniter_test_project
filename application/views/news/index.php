<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h2><?php echo $title; ?></h2>

<table border="1" cellpadding="4">
	<tr>
		<td><strong>Name</strong></td>
		<td><strong>Phone Number</strong></td>
		<td><strong>Email</strong></td>
		<td><strong>Action</strong></td>
	</tr>
	<?php foreach ($news as $news_item): ?>
		<tr>
			<td><?php echo $news_item['name']; ?></td>
			<td><?php echo $news_item['phone_number']; ?></td>
			<td><?php echo $news_item['email']; ?></td>
			<td>
				<a href="<?php echo site_url('news/'.$news_item['email']); ?>">View</a>
				<a href="<?php echo site_url('news/edit/'.$news_item['student_id']); ?>">Edit</a>
				<a href="<?php echo site_url('news/delete/'.$news_item['student_id']); ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>