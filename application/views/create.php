<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h6 class="red-text">
  <?= validation_errors(); ?>
</h6>
<h6 class="red-text">
  <?= $this->session->flashdata('error'); ?>
</h6>

<div class="row">
  <div class="col s12 m8 offset-m2">
    <div class="card white">
      <div class="card-content">
        <span class="card-title">Create Data</span>
        <form action="<?= site_url('welcome/create'); ?>" method="post" enctype="multipart/form-data">

          <!-- Gambar -->
          <div class="file-field input-field">
            <div class="btn cyan darken-2">
              <span>Select File</span>
              <input type="file" name="image1" accept=".jpg,.png,.jpeg">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="No file chosen">
            </div>
          </div>

          <!-- Nama -->
          <div class="input-field">
            <label for="name" class="active">Model</label>
            <input name="name" id="name" type="text">
          </div>

          <!-- Deskripsi -->
          <div class="input-field">
            <label for="description" class="active">Description</label>
            <textarea name="description" id="description" class="materialize-textarea"></textarea>
          </div>

          <!-- Tombol -->
          <div class="right-align">
            <a href="<?= site_url('welcome'); ?>" class="btn-flat grey-text text-darken-2">Cancel</a>
            <button class="btn cyan darken-2" type="submit">Create</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

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