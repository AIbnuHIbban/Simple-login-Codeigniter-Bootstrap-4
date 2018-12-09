<?php 
if ($this->session->userdata('status') !== TRUE) { 
    // JIka session status tidak sama dengan TRUE maka :
    redirect(base_url()); // kembali ke halaman awal
}
?>

<h1>Selamat Datang di Admin</h1> 
<p>Username : <?= $this->session->userdata('username') ?></p>
<a href="<?= base_url('logout') ?>">Logout</a>