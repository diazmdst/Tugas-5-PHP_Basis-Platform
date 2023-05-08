<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tugas_php");

function query($query)
{
    global $conn;
    // ambil data mahasiswa
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    //ambil dta dari tiap elemenn
    $kontent = htmlspecialchars($data["kontent"]);

    global $conn;
    //query insert data
    $query = "INSERT INTO konten
    VALUES 
    ('', '$kontent')";
    mysqli_query($conn, $query);

    //cek apakah berhasl ditambah    
    return (mysqli_affected_rows($conn));
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM konten WHERE id = $id");
    return (mysqli_affected_rows($conn));
}


