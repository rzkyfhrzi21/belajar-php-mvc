<div class="container mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?= Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<!-- Button Modal Tambah -->
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#modalForm">
				Tambah Data Mahasiswa
			</button>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari mahasiswa.." name="keyword" id="keyword">
					<div class="input-group-append">
						<button class="btn btn-primary" type="submit" id="tombolCari" autocomplete="off">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">

			<h3>Daftar Mahasiswa</h3>

			<ul class="list-group">
				<?php foreach ($data['mhs'] as $mhs) : ?>
					<li class="list-group-item">
						<?= $mhs['nama']; ?>
						<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin ingin hapus ?');">hapus</a>
						<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-warning float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#modalForm" data-id="<?= $mhs['id']; ?>">ubah</a>
						<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
					</li>

				<?php endforeach; ?>
			</ul>

		</div>
	</div>
</div>

<!-- Modal Tambah-->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama anda" required>
					</div>
					<div class="form-group">
						<label for="email">Email :</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="email@contoh.com" required>
					</div>
					<div class="form-group">
						<label for="no_hp">No Handphone :</label>
						<input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="08xx-xxxx-xxxx" required>
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan :</label>
						<select class="form-control custom-select" id="jurusan" name="jurusan" required>
							<option value="">-pilih jurusan-</option>
							<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
							<option value="Teknik Bisnis dan Sepeda Motor">Teknik Bisnis dan Sepeda Motor</option>
							<option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
							<option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
							<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
						</select>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Tambah Data</button>
			</div>
			</form>
		</div>
	</div>
</div>