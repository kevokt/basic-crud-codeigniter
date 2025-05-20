<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h6 class="red-text"><?= validation_errors(); ?></h6>
<h6 class="red-text"><?= $this->session->flashdata('error'); ?></h6>

<div class="row">
  <div class="col s12 m8 offset-m2">
    <div class="card white">
      <div class="card-content">
        <span class="card-title">Edit Data</span>
        <form action="<?= site_url('welcome/update/' . $post->id); ?>" method="post" enctype="multipart/form-data">

          <!-- Gambar -->
          <div class="file-field input-field">
            <div class="btn grey lighten-2 black-text">
              <span>Choose File</span>
              <input name="image1" type="file" id="image1">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="No file chosen">
            </div>
          </div>

          <!-- Judul -->
          <div class="input-field">
            <label for="name" class="active">Model Mobil</label>
            <input name="name" id="name" type="text" value="<?= $post->name; ?>">
          </div>

          <!-- Konten -->
          <div class="input-field">
            <label for="description" class="active">Deskripsi</label>
            <textarea name="description" id="description" class="materialize-textarea"><?= $post->description; ?></textarea>
          </div>

          <!-- Tombol -->
          <div class="right-align">
            <a href="<?= site_url('welcome'); ?>" class="btn-flat grey-text text-darken-2">Batal</a>
            <button class="btn cyan darken-2" type="submit">Simpan</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>