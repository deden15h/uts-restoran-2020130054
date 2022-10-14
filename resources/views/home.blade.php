@extends('layouts.master') @section('title', 'Home') @section('content') <h1 class="cover-heading"></h1>
<br><br><p class="lead"><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/bg1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/bg2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/bg3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
   <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div> </p><br><br>
<p class="text-justify"> Masakan Jepang (和食, washoku) menawarkan banyak hidangan gastronomi dengan variasi hidangan regional dan musiman yang tak terbatas. Restoran di Jepang berkisar dari kios makanan keliling hingga ryotei berusia berabad-abad, tempat minum yang nyaman, teras yang didirikan secara musiman di atas sungai, toko rantai murah, dan restoran bertema unik tentang ninja dan robot. Banyak restoran mengkhususkan diri dalam satu jenis hidangan, sementara yang lain menawarkan berbagai hidangan.</p> @endsection


