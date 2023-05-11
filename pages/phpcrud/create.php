<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $avatar = isset($_POST['avatar']) ? $_POST['avatar'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $notelp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
    $pekerjaan = isset($_POST['pekerjaan']) ? $_POST['pekerjaan'] : '';
    $pekerjaan = isset($_POST['role']) ? $_POST['role'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO kontak VALUES (?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $avatar, $nama, $email, $notelp, $pekerjaan, $role]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="avatar">Avatar</label>
        <input type="text" name="id" id="id">
        <input type="foto" name="avatar" id="avatar">
        <label for="nama">Nama</label>
        <label for="email">Email</label>
        <input type="text" name="nama" id="nama">
        <input type="text" name="email" id="email">
        <label for="notelp">No. Telp</label>
        <label for="pekerjaan">Pekerjaan</label>
        <input type="text" name="notelp" id="notelp">
        <input type="text" name="pekerjaan" id="pekerjaan">
        <label for="role">Role</label>
        <input type="enum" name="role" id="role">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>