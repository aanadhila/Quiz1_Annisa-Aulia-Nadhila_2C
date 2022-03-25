<!-- Menghubungkan dengan view template master -->
@extends('layout')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Index')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<h2>Selamat Datang!</h2>
<center>
<div class="imgholder"><a href="#"><img src="images/demo/260x180.gif" width="260" height="180" alt="" /></a></div>
          <p><strong>INI ADALAH HALAMAN HOME</strong></p>
          <p>Orciint erdum condimen terdum nulla mcorper elit nam curabitur laoreet met prae senean et iac ulum. Metridiculis cons eque quis iaculum aenean nunc aenean.</p>

</center>
@endsection