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
				<div class="panel-body text-center">

			<?php echo validation_errors(); ?>

			<?php echo form_open('news/create', 'class="form-horizontal" role="form"'); ?>

				<div class="form-group">
					 
					<label for="student_name" class="col-sm-3 control-label">
						Student Name
					</label>
					<div class="col-sm-6">
						<input type="text" name="name" class="form-control" />
					</div>
				</div>

				<div class="form-group">
					 
					<label for="phone_number" class="col-sm-3 control-label">
						Phone Number
					</label>
					<div class="col-sm-6">
						<input type="text" name="phone_number" class="form-control" />
					</div>
				</div>

				<div class="form-group">
					 
					<label for="email" class="col-sm-3 control-label">
						Email Address
					</label>
					<div class="col-sm-6">
						<input type="email" name="email" class="form-control" />
					</div>
				</div>

				<input type="submit" name="submit" value="Save" class="btn btn-primary" style="width:150px;">

			<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>
</div>