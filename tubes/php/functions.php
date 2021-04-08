<?php

//Function untuk koneksi database
function koneksi() {
    return mysqli_connect('localhost', 'root', '', 'pw2020_193040025');
}

function query($query) {
    $conn = koneksi();

    $result = mysqli_query($conn, $query);
    // jika hasilnya satu data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//function untuk tambah data
function tambah($data) {
    $conn = koneksi();

    $merk = htmlspecialchars($data['merk']);
    $nama_artikel = htmlspecialchars($data['nama_artikel']);
    $size = htmlspecialchars($data['size']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);

    // upload gambar
    $display = upload();
    if (!$display) {
        return false;
    }

    $query = "INSERT INTO 
            apparel 
            VALUES
    (null , '$display', '$merk', '$nama_artikel', '$size', '$harga', '$stok')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// function hapus data
function hapus($id) {
    $conn = koneksi();
    // menghapus gambar difolder image
    $apparel = query("SELECT * FROM apparel WHERE id = $id");
    if ($apparel['display'] != 'no_poto.png') {
        unlink('../assets/img/' . $apparel['display']);
    }
    mysqli_query($conn, "DELETE FROM apparel WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// function ubah data
function ubah($data) {
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);

    $merk = htmlspecialchars($data['merk']);
    $nama_artikel = htmlspecialchars($data['nama_artikel']);
    $size = htmlspecialchars($data['size']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);
    $display_lama = htmlspecialchars($data['display_lama']);
    $display = upload();
    if (!$display) {
        return false;
    }

    if ($display == 'no_poto.png') {
        $display = $display_lama;
    }
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

function upload() {
    $nama_file = $_FILES['display']['name'];
    $tipe_file = $_FILES['display']['type'];
    $ukuran_file = $_FILES['display']['size'];
    $error = $_FILES['display']['error'];
    $tmp_file = $_FILES['display']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        echo  "<script>
              alert('pilih gambar terlebih dahulu!');
              </script>";
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

function registrasi($data) {
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong
    if (empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
        alert('username/ password tidak boleh kosong!');
        document.location.href = 'registrasi.php';
        </script>";

        return false;
    }
    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
        alert('username sudah terdaftar!');
        document.location.href = 'registrasi.php';
        </script>";

        return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
        alert('Konfirmasi password tidak sesuai');
        document.location.href = 'registrasi.php';
        </script>";

        return false;
    }

    // jika password <5 digit
    if (strlen($password1) < 5) {
        echo "<script>
        alert('Password terlalu pendek');
        document.location.href = 'registrasi.php';
        </script>";

        return false;
    }

    // jika username dan password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke table user
    $query = "INSERT INTO user
            VALUES
            (null, '$username', '$password_baru')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $conn = koneksi();

    $query = "SELECT * FROM apparel
            WHERE nama_artikel LIKE '%$keyword%' OR
            merk LIKE '%$keyword%' OR
            size LIKE '%$keyword%' OR
            stok LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


//login
// cek cookie
function login(){

}