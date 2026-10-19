<?php
    $mahasiswa = [
    [
        "nim" => "2509075",
        "nama" => "Shaquel Kuningan",
        "jurusan" => "Sastra Kedokteran",
        "email" => "aldebranmpruy@upi.edu",
        "nilai" => 65,
    ],
    [
        "nim" => "2501590",
        "nama" => "Rio Putra Hermawan",
        "jurusan" => "Teknik Eletro",
        "email" => "rioganteng@upi.edu",
        "nilai" => 99,
    ],
    [
        "nim" => "2503075",
        "nama" => "Althof Cikampek",
        "jurusan" => "Pendidikan Guru Pendidikan Anak Usia Dini",
        "email" => "althoprisdiyantuy@upi.edu",
        "nilai" => 50,
    ],
    [
        "nim" => "2501234",
        "nama" => "Zilong Epic",
        "jurusan" => "Sastra Mesin",
        "email" => "zilong@upi.edu",
        "nilai" => 75,
    ],
    [
        "nim" => "2407439",
        "nama" => "Hanif Lahadalila",
        "jurusan" => "Komunikasi Perikanan",
        "email" => "hanipmetime@upi.edu",
        "nilai" => 84,
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffb70e;
            margin: 0;
            padding: 40px 20px;
        }

        .card {
            background-color: white;
            max-width: 1300px;
            margin: 0 auto;
            padding: 50px;
            border-radius: 12px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 40px;
        }

        .header h2 {
            margin: 0 0 8px 0;
            color: #333;
        }

        .header p {
            margin: 0;
            color: #333;
        }

        .button {
            display: inline-block;
            background-color: #ffb70e;
            color: #1a1919;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 10px;
        }

        .button:hover {
            background-color: #ff8103;
            color: white;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #848485;
        }

        th {
            background-color: #ffb70e;
            color: black;
            text-align: left;
        }

        th, td {
            padding: 12px;
        }

        .lulus {
            color: #21c131 !important;
            font-weight: bold;
            padding: 4px 10px;
            border-radius: 12px;
            white-space: nowrap;
        }

        .tidak-lulus {
            color: #fc2f2f !important;
            font-weight: bold;
            padding: 4px 10px;
            border-radius: 12px;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <div>
                <h2>Daftar Mahasiswa</h2>
                <p>Berikut adalah informasi mengenai nilai mahasiswa</p>
            </div>
            <a href="form_pesan.php" class="button">Isi Form Pesan</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($mahasiswa as $data): ?>

                    <?php
                    // Menentukan grade menggunakan if, else if dan else
                    if ($data["nilai"] >= 80) {
                        $grade = "A";
                    } elseif ($data["nilai"] >= 70) {
                        $grade = "B";
                    } elseif ($data["nilai"] >= 60) {
                        $grade = "C";
                    } else {
                        $grade = "D";
                    }

                    // Menentukan Status menggunakan if dan else
                    if ($data["nilai"] >= 70) {
                        $status = "Lulus";
                        $status_kelas = "lulus";
                    } else {
                        $status = "Tidak Lulus";
                        $status_kelas = "tidak-lulus";
                    }

                    // URL untuk dikirim ke detail.php dengan method GET
                    $url = "detail.php?nim=" . $data["nim"]
                         . "&nama=" . $data["nama"]
                         . "&jurusan=" . $data["jurusan"]
                         . "&email=" . $data["email"]
                         . "&nilai=" . $data["nilai"]
                         . "&grade=" . $grade
                         . "&status=" . $status;
                    ?>

                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data["nim"] ?></td>
                        <td><?= $data["nama"] ?></td>
                        <td><?= $data["jurusan"] ?></td>
                        <td><?= $data["nilai"] ?></td>
                        <td><?= $grade ?></td>
                        <td><span class="<?= $status_kelas ?>"><?= $status ?></span></td>
                        <td><a href="<?= $url ?>" class="button">Lihat Detail</a></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>