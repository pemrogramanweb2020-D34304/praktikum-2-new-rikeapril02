<?php
if(isset($_POST['nama'])){

$nama = $_POST['nama'];
$user = array(
    array(
        "Nama"              => "Arsene Lupin",
        "NIK"               => "1234",
        "Jenis_kelamin"     => "Male",
        "Tgl_lahir"         => "1902-03-23"
    ),
    array(
        "Nama"              => "Sherlock Holmes",
        "NIK"               => "4321",
        "Jenis_kelamin"     => "Male",
        "Tgl_lahir"         => "1812-01-11"
    ),
    array(
        "Nama"              => "Irene Adler",
        "NIK"               => "7890",
        "Jenis_kelamin"     => "Female",
        "Tgl_lahir"         => "1232-04-13"
    )
);

$a=0;
$b=0;

foreach($user as $y){
if(strtoupper($y["Nama"]) == strtoupper($nama)){
$a=1;
$b=$y;
} 
}

if($b){
echo "Nama              : ".$b["Nama"]."<br>";
echo "NIK               : ".$b["NIK"]."<br>";
echo "Jenis Kelamin     : ".$b["Jenis_kelamin"]."<br>";
echo "Tanggal Lahir     : ".$b["Tgl_lahir"]."<br>";
}

else{
    echo "[".$nama."] Data yang Anda Cari Tidak Dapat Ditemukan";
}
}

?>
