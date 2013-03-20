<html>
<head>
<title>Perkalian Matriks</title>
<?php
// Mengambil waktu awal proses
$mtime = microtime();
$mtime = explode (" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
?>
</head>
<body>
    <h2>Perkalian Matriks Ordo 3x3</h2>
    <form method="POST" action="rumus.html">
        Inputkan nilai matriks pertama:<BR>
        <INPUT TYPE = "text" NAME = "A11">
        <INPUT TYPE = "text" NAME = "A12">
        <INPUT TYPE = "text" NAME = "A13"><BR>
        <INPUT TYPE = "text" NAME = "A21">
        <INPUT TYPE = "text" NAME = "A22">
        <INPUT TYPE = "text" NAME = "A23"><BR>
        <INPUT TYPE = "text" NAME = "A31">
        <INPUT TYPE = "text" NAME = "A32">
        <INPUT TYPE = "text" NAME = "A33"><BR>
        Inputkan nilai matriks kedua:<BR>
        <INPUT TYPE = "text" NAME = "B11">
        <INPUT TYPE = "text" NAME = "B12">
        <INPUT TYPE = "text" NAME = "B13"><BR>
        <INPUT TYPE = "text" NAME = "B21">
        <INPUT TYPE = "text" NAME = "B22">
        <INPUT TYPE = "text" NAME = "B23"><BR>
        <INPUT TYPE = "text" NAME = "B31">
        <INPUT TYPE = "text" NAME = "B32">
        <INPUT TYPE = "text" NAME = "B33"><BR>
        <INPUT TYPE="submit" VALUE="hitung" NAME="submit">
    </form>
</body>
<?php
// mengambil waktu selesai
$mtime = microtime();
$mtime = explode (" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
// Store end time in a variable
$tend = $mtime;
// Calculate Difference
$totaltime = ($tend - $tstart);
// Output the result
printf ("Waktu menampilkan halaman %f detik.", $totaltime);
?>
</html>
