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
function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo  "<script>
        //       alert('pilih gambar terlebih dahulu!');
        //       </script>";
        return 'no_poto.png';
    }
    // cek extensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
    alert('file yang anda pilih bukan gambar!');
    </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
       alert('file yang anda pilih bukan gambar!');
      </script>";
        return false;
    }

    // cek ukuran file
    // maximal 5Mb
    if ($ukuran_file > 5000000) {
        echo "<script>
    alert('ukuran file anda terlalu besar!');
   </script>";
        return false;
    }

    // lolos pengecekan 
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

// function tambah data
function tambah($data)
{
    $conn = koneksi();
    $display = htmlspecialchars($data['display']);
    $merk = htmlspecialchars($data['merk']);
    $nama_artikel = htmlspecialchars($data['nama_artikel']);
    $size = htmlspecialchars($data['size']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);


    $query = "INSERT INTO 
             apparel 
             VALUES
    ('' , '$display', '$merk', '$nama_artikel', '$size', '$harga', '$stok')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function hapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM apparel WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// function ubah data
function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $display = htmlspecialchars($data['display']);
    $merk = htmlspecialchars($data['merk']);
    $nama_artikel = htmlspecialchars($data['nama_artikel']);
    $size = htmlspecialchars($data['size']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);

    $query = "UPDATE apparel SET
            display = '$display',
            merk = '$merk',
            nama_artikel = '$nama_artikel',
            size = '$size',
            harga = '$harga',
            stok = '$stok'
            WHERE id = '$id'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function registrasi akun
function registrasi($data)
{

    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('username sudah digunakan');
                </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
