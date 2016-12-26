<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title text-center">
						<?php echo $title; ?>
					</h3>
				</div>
				<div class="panel-body">

					<table class="table table-condensed table-hover table-bordered">
						<tr class="text-center">
							<td><strong>Name</strong></td>
							<td><strong>Phone Number</strong></td>
							<td><strong>Email</strong></td>
							<td><strong>Action</strong></td>
						</tr>
					<?php foreach ($news as $news_item): ?>
						<tr class="text-center">
							<td><?php echo $news_item['name']; ?></td>
							<td><?php echo $news_item['phone_number']; ?></td>
							<td><?php echo $news_item['email']; ?></td>
							<td>
								<a href="<?php echo site_url('news/'.$news_item['email']); ?>" class="btn btn-info" style="width:80px;">View</a>
								<a href="<?php echo site_url('news/edit/'.$news_item['student_id']); ?>" class="btn btn-primary" style="width:80px;">Edit</a>
								<a href="<?php echo site_url('news/delete/'.$news_item['student_id']); ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger" style="width:80px;">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>

					</table>

				</div>
			</div>

		</div>
	</div>
</div>