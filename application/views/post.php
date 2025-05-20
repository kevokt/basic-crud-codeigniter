<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="col s12 m8 offset-m2">
			<!-- Centered Card -->
			<div class="card">
				<div class="card-image">
					<img src="<?= site_url('upload/post/' . $post->filename); ?>" alt="Post's Image" class="responsive-img"
						style="max-height: 500px; object-fit: cover;">
				</div>
				<div class="card-content center">
					<span class="card-title">
						<?= $post->name; ?>
					</span>
					<p>
						<?= $post->description; ?>
					</p>
				</div>
				<div class="card-action center">
					<a href="<?= site_url('welcome/update/' . $post->id); ?>" class="btn cyan darken-2">Update</a>
					
					<!-- Delete Button -->
					<button class="btn red darken-2" onclick="confirmDelete('<?= site_url('welcome/delete/' . $post->id); ?>')">
						Delete
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
	function confirmDelete(url) {
		Swal.fire({
			title: 'Yakin ingin menghapus?',
			text: "Tindakan ini tidak bisa dibatalkan!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#d33',
			cancelButtonColor: '#3085d6',
			confirmButtonText: 'Ya, hapus!',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.isConfirmed) {
				window.location.href = url;
			}
		});
	}
</script>

<!-- SweetAlert feedback after action -->
<?php if ($this->session->flashdata('success')): ?>
			<script>
				Swal.fire({
					icon: 'success',
					title: 'Berhasil!',
					text: '<?= $this->session->flashdata('success'); ?>',
					confirmButtonColor: '#3085d6'
				});
			</script>
<?php elseif ($this->session->flashdata('error')): ?>
			<script>
				Swal.fire({
					icon: 'error',
					title: 'Gagal!',
					text: '<?= $this->session->flashdata('error'); ?>',
					confirmButtonColor: '#d33'
				});
			</script>
<?php endif; ?>