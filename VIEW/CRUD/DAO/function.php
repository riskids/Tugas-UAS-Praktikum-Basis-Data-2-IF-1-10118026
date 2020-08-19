<?php
function dbConnect()
{
    $db = new mysqli("localhost:3306", "root", "", "uas_basdat");
    return $db;
}


// ruangan
function getDataRuangan($NoRuang)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM ruangan WHERE no_ruangan='$NoRuang'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}

function getDataFakultas($IdFakultas)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM fakultas WHERE id_fakultas='$IdFakultas'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}

function getDataJurusan($IdJurusan)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM jurusan WHERE id_jurusan='$IdJurusan'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}
function getListJurusan()
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT id_jurusan FROM jurusan");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            return $data;
        } else
            return false;
    } else
        return false;
}


function getDataDosen($NIP)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM dosen WHERE nip='$NIP'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}
function getDataMahasiswa($NIM)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM mahasiswa WHERE nim='$NIM'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}

function getDataMatakuliah($IdMatkul)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM matakuliah WHERE id_matakuliah='$IdMatkul'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}
function getDataNilai($NIM)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM nilai WHERE nim='$NIM'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}
function getListFakultas()
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT  id_fakultas FROM fakultas");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            return $data;
        } else
            return false;
    } else
        return false;
}
function getListDosen()
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT nip FROM dosen");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            return $data;
        } else
            return false;
    } else
        return false;
}

function getListRuangan()
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT no_ruangan FROM ruangan");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            return $data;
        } else
            return false;
    } else
        return false;
}
function getListMahasiswa()
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT nim FROM mahasiswa");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            return $data;
        } else
            return false;
    } else
        return false;
}
function getListMatakuliah()
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT id_matakuliah FROM matakuliah");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            return $data;
        } else
            return false;
    } else
        return false;
}
?>