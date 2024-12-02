<?php 
// $_GET
$mahasiswa =[
    [
    "nama" => "nindia",
    "nrp" => "043040022",
    "email" => "nindia334@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "nindia.img"
    ],
    [
        "nama" => "alexa",
        "nrp" => "043040023",
        "email" => "qwalexa@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "lus2.img"
        ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>    <?php foreach( $mahasiswa as $mhs ): ?>
        <li>
          <a href="latihan2.php?nama=<?=$mhs["nama"];?>%nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    
    </ul>

</body>
</html>