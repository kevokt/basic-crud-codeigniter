<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Mobil</h2>


    <div class="row">
      <a href="<?= base_url('Welcome/create'); ?>" class="btn btn-info" id="createButton">Tambah data</a>
      <a href="<?= site_url('welcome/deleteAll/'); ?>" class="btn red" id="deleteLink">Hapus Semua</a>
    </div>
    </div>

    <div class="table-responsive bg-white rounded shadow p-3">
        <table class="table table-bordered align-middle text-center">
            <thead class="table-light">
                <tr>
                    <th>Model Mobil</th>
                    <th>Deskripsi</th>
                    <th>Gambar Mobil</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($home_post as $data): ?>
                    <tr>
                        <td>
                            <?= $data['name']; ?>
                        </td>
                        <td>
                            <?= $data['description']; ?>
                        </td>
                        <td>
                            <img src="<?= site_url("/upload/post/" . $data['filename']); ?>" alt="Gambar Mobil" class="img-thumbnail"
                                style="width: 130px; height: 130px; border: 1px solid white; border-radius: 20px;">
                        </td>
                        <td>
                            <a href="<?= site_url("welcome/index/" . $data['id']); ?>" class="btn btn-info">
                                <i class="bi bi-eye"></i> Lihat
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Konfirmasi Hapus Semua -->
<script>
    document.getElementById("deleteLink").addEventListener("click", function (e) {
        let confirmation = confirm("Apakah anda ingin menghapus semua data?");
        if (!confirmation) {
            e.preventDefault();
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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