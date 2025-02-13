<?php
if (!function_exists('f_date')) {
  function f_date($date, $day = false)
  {
    $hari_array = array(
      'Minggu',
      'Senin',
      'Selasa',
      'Rabu',
      'Kamis',
      'Jumat',
      'Sabtu'
    );
    $hr = date('w', strtotime($date));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($date));
    $bulan_array = array(
      1 => 'Januari',
      2 => 'Februari',
      3 => 'Maret',
      4 => 'April',
      5 => 'Mei',
      6 => 'Juni',
      7 => 'Juli',
      8 => 'Agustus',
      9 => 'September',
      10 => 'Oktober',
      11 => 'November',
      12 => 'Desember',
    );
    $bl = date('n', strtotime($date));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($date));
    $jam = date( 'H:i', strtotime($date));

      //untuk menampilkan hari, tanggal bulan tahun jam
      //return "$hari, $tanggal $bulan $tahun $jam";

      //untuk menampilkan hari, tanggal bulan tahun
    if ($day) {
      return "$hari, $tanggal $bulan $tahun";
    } else {
      return "$tanggal $bulan $tahun";
    }
  }

  function f_time($date)
  {
    $time = date( 'H:i', strtotime($date));
    return $time;
  }

  function f_date_year($date)
  {
    $year = date( 'Y', strtotime($date));
    return $year;
  }
}
