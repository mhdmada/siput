<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Profil &mdash; SIPUTRI</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="section-header">
        <h1>Profil</h1>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Success!</b>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">x</button>
                <b>Error!</b>
                <?= session()->getFlashdata('error') ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Informasi Akun</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="d-flex flex-column align-items-center position-relative">
                            <img src="<?= base_url('/uploads/profile/' . ($users['foto_profil'] ?? 'avatar-1.png')) ?>" class="img-thumbnail" alt="User Image" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="mt-2">
                                <form id="upload-form" action="<?= site_url('userprofile/upload') ?>" method="post" enctype="multipart/form-data" class="d-flex flex-column align-items-center">
                                    <?= csrf_field() ?>
                                    <input type="file" name="foto_profil" class="d-none" id="foto-upload" onchange="document.getElementById('upload-form').submit();">
                                    <button type="button" class="btn btn-dark btn-sm mt-2" onclick="document.getElementById('foto-upload').click();">Ubah Foto Profil</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-borderless">
                            <tr>
                                <th>NIK</th>
                                <td><?= $users['nik'] ?></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td><?= $users['name_user'] ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td><?= $users['username'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
