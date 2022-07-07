<h2>Data Perpustakaan</h2>

<table border="1" style="border-collapse:collapse">
<tr bgcolor="#eee">
    <th widht="50">NO BUKU</th>
    <th widht="100">JUDUL BUKU</th>
    <th widht="100">PENGARANG</th>
    <th widht="100">PENERBIT</th>
    <th widht="100">TAHUN</th>
    <th widht="50">ISBN</th>
    <th widht="100">NAMA</th>
    <th widht="50">NIM</th>
    <th widht="50">PRODI</th>
    <th widht="50">KELAS</th>
    <th widht="50">NO HP</th>
    <th widht="100">TGL PEMINJAMAN</th>
    <th widht="100">TGL KEMBALI</th>
    <th widht="100">PETUGAS</th>
    <th widht="50">NIP</th>
</tr>

<?php
include "koneksi.php";

$no=1;
$ambildata = mysqli_query($koneksi,"SELECT * FROM perpustakaan")
or die (mysqli_error($koneksi));

while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td align='center'>$no</td>
            <td align='center'>$tampil[judul]</td>
            <td align='center'>$tampil[pengarang]</td>
            <td align='center'>$tampil[penerbit]</td>
            <td align='center'>$tampil[tahun]</td>
            <td align='center'>$tampil[ISBN]</td>
            <td align='center'>$tampil[nama]</td>
            <td align='center'>$tampil[nim]</td>
            <td align='center'>$tampil[prodi]</td>
            <td align='center'>$tampil[kelas]</td>
            <td align='center'>$tampil[no_hp]</td>
            <td align='center'>$tampil[tgl_peminjaman]</td>
            <td align='center'>$tampil[tgl_kembali]</td>
            <td align='center'>$tampil[petugas]</td>
            <td align='center'>$tampil[NIP]</td>
        </tr>";    
        $no++;
    }
    ?>
</table>