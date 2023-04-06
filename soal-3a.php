<?php
    $localhost = 'localhost';
    $database = 'testdb';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($localhost, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }

    if (isset($_GET['nama']) || isset($_GET['alamat']) || isset($_GET['hobi'])) {
        $query = $conn->query("SELECT person.nama, person.alamat, hobi.hobi FROM person JOIN hobi ON hobi.person_id = person.id WHERE person.nama like '%".$_GET['nama']."%' AND person.alamat like '%".$_GET['alamat']."%' AND hobi.hobi like '%".$_GET['hobi']."%'");
    } else {
        $query = $conn->query("SELECT person.nama, person.alamat, hobi.hobi FROM person JOIN hobi ON hobi.person_id = person.id");
    }
?>

<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
    </thead>
    <tbody>
        <?php while($data=mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $data['nama']?></td>
                <td><?php echo $data['alamat']?></td>
                <td><?php echo $data['hobi']?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br><br>
<form action="" method="GET" style="padding: 3rem;">
    <div class="">
        <label>Nama : </label>
        <input type="text" name="nama">
    </div>
    <br>
    <div class="">
        <label>Alamat : </label>
        <input type="text" name="alamat">
    </div>
    <br>
    <div class="">
        <label>Hobi : </label>
        <input type="text" name="hobi">
    </div>
    <br>
    <button type="submit">Search</button>
</form>