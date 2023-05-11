<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $avatar = isset($_POST['avatar']) ? $_POST['avatar'] : '';
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $notelp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
        $pekerjaan = isset($_POST['pekerjaan']) ? $_POST['pekerjaan'] : '';
        $role = isset($_POST['role']) ? $_POST['role'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE kontak SET id = ?, avatar = ?, nama = ?, email = ?, notelp = ?, pekerjaan = ?, role = ? WHERE id = ?');
        $stmt->execute([$id, $avatar, $nama, $email, $notelp, $pekerjaan, $role, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM kontak WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>Update Contact #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama</label>
        <input type="text" name="id" value="<?=$contact['id']?>" id="id">
        <input type="text" name="nama" value="<?=$contact['nama']?>" id="nama">
        <label for="avatar">Avatar</label>
        <label for="email">Email</label>
        <input type="text" name="avatar" value="<?=$contact['avatar']?>" id="avatar">
        <input type="email" name="email" value="<?=$contact['email']?>" id="email">
        <label for="notelp">No. Telp</label>
        <label for="pekerjaan">Pekerjaan</label>
        <input type="text" name="notelp" value="<?=$contact['notelp']?>" id="notelp">
        <input type="text" name="pekerjaan" value="<?=$contact['pekerjaan']?>" id="title">
        <label for="role">Role</label>
        <input type="text" name="role" value="<?=$contact['role']?>" id="role">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>