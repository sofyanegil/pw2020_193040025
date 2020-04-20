<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040025") or die("Database salah!");
    return $conn;
}


// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $display = htmlspecialchars($data['display']);
    $merk = htmlspecialchars($data['merk']);
    $nama_artikel = htmlspecialchars($data['nama_artikel']);
    $size_guide = htmlspecialchars($data['size_guide']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);
    $query = "INSERT INTO 
             apparel 
             VALUES
    ('' , '$display', '$merk', '$nama_artikel', '$size_guide', '$harga', '$stok')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM apparel WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $display = htmlspecialchars($data['display']);
    $merk = htmlspecialchars($data['merk']);
    $nama_artikel = htmlspecialchars($data['nama_artikel']);
    $size_guide = htmlspecialchars($data['size_guide']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);

    $query = "UPDATE apparel SET
            display = '$display',
            merk = '$merk',
            nama_artikel = '$nama_artikel',
            size_guide = '$size_guide',
            harga = '$harga',
            stok = '$stok'
            WHERE id = '$id'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function cari($keyword)
// {
//     $
//     return query($query);
// }
