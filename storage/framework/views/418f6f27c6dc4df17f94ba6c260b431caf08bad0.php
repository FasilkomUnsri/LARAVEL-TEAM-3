<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="<?php echo e(route('admin.users.index')); ?>" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="<?php echo e(route('admin.users.store')); ?>">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label for="name">Full Name</label>
						<input required="" class="form-control" type="" name="name" id="name" placeholder="">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input required="" class="form-control" type="" name="email" id="email" placeholder="">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input required="" class="form-control" type="password" name="password" id="password" placeholder="">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app',[
	'title' => 'Tambah Users',
	'contentTitle' => 'Tambah Users',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraschool-master\resources\views/admin/users/create.blade.php ENDPATH**/ ?>