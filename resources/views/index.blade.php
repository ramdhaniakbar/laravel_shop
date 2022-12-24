@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container mt-5">
   <div class="custom-title-padding">
      <h2 class="mb-4">Paling Favorit</h2>

      <div class="carousel-menu overflow-hidden mb-3">
         <div class="container position-relative">
            <div class="row">
               <div class="col-12 d-flex justify-content-start">
                  <div class="card-carousel position-relative me-3">
                     <img src="{{ asset('assets/images/burger.png') }}" alt="burger" />
                     <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                           <h5>Burger</h5>
                           <span>Burger Jumbo</span>
                           <h6>Rp. 30.000</h6>
                           <button>Lihat Menu</button>
                        </div>
                     </div>
                  </div>
                  <div class="card-carousel position-relative me-3">
                     <img src="{{ asset('assets/images/mie_goreng.png') }}" alt="mie_goreng" />
                     <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                           <h5>Mie Goreng</h5>
                           <span>Level Paling Pedas</span>
                           <h6>Rp. 27.000</h6>
                           <button>Lihat Menu</button>
                        </div>
                     </div>
                  </div>
                  <div class="card-carousel position-relative me-3">
                     <img src="{{ asset('assets/images/es_teh.png') }}" alt="es_teh" />
                     <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                           <h5>Es Teh</h5>
                           <span>Manisnya Pas</span>
                           <h6>Rp. 12.000</h6>
                           <button>Lihat Menu</button>
                        </div>
                     </div>
                  </div>
                  <div class="card-carousel position-relative me-3">
                     <img src="{{ asset('assets/images/pancake.png') }}" alt="pancake" />
                     <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                        <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                           <h5>Pancake</h5>
                           <span>Lembut Di Dalem</span>
                           <h6>Rp. 20.000</h6>
                           <button>Lihat Menu</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <button class="button-arrow-left position-absolute start-0 top-50 translate-middle-y">
               <img src="{{ asset('assets/images/arrowleft.png') }}" alt="arrow_left">
            </button>

            <button class="button-arrow-right position-absolute end-0 top-50 translate-middle-y">
               <img src="{{ asset('assets/images/arrowright.png') }}" alt="arrow_right">
            </button>
         </div>
      </div>

      {{-- Button Desktop --}}
      <div class="d-inline-block">
         <form action="/products" class="form-inline d-none d-md-block mt-4 mb-5 float-start">
            <button type="submit" class="button-primary text-center me-4">All menu</button>
            <button type="submit" class="button-secondary text-center me-4">Makanan</button>
            <button type="submit" class="button-secondary text-center me-4">Minuman</button>
         </form>
      </div>

      {{-- Button Mobile --}}
      <form action="/products" class="form-inline d-sm-block d-md-none my-4 float-start">
         <button type="submit" class="button-primary text-center me-4 mb-2">All menu</button>
         <button type="submit" class="button-secondary text-center me-4 mb-2">Makanan</button>
         <button type="submit" class="button-secondary text-center me-4 mb-2">Minuman</button>
      </form>

      <div class="row float-start">
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
               <img src="{{ asset('assets/images/es_kopi.png') }}" class="card-img-top product-image"
                  alt="product-image">
               <div class="card-body">
                  <h1 class="card-title">Es Kopi</h1>
                  <p class="price-text">Rp. 15.000,00<span class="porsi">/porsi</span></p>
                  <p class="card-sub">Lorem ipsum dolor sit amet consectetur. Dictum sit...</p>
                  <a href="/detail-product"
                     class="button-sm-primary d-none d-md-block py-2 px-5 text-center float-end">Lihat
                     Detail</a>

                  <a href="/detail-product"
                     class="button-sm-primary d-sm-block d-md-none py-2 px-2 text-center d-flex justify-content-center">Lihat
                     Detail &nbsp;</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
               <img src="{{ asset('assets/images/es_teh_landscape.png') }}" class="card-img-top product-image"
                  alt="product-image">
               <div class="card-body">
                  <h1 class="card-title">Es Teh</h1>
                  <p class="price-text">Rp. 12.000,00<span class="porsi">/porsi</span></p>
                  <p class="card-sub">Lorem ipsum dolor sit amet consectetur. Dictum sit...</p>
                  <a href="/detail-product"
                     class="button-sm-primary d-none d-md-block py-2 px-5 text-center float-end">Lihat
                     Detail</a>

                  <a href="/detail-product"
                     class="button-sm-primary d-sm-block d-md-none py-2 px-2 text-center d-flex justify-content-center">Lihat
                     Detail &nbsp;</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
               <img src="{{ asset('assets/images/mie_ayam_landscape.png') }}" class="card-img-top product-image"
                  alt="product-image">
               <div class="card-body">
                  <h1 class="card-title">Mie Ayam</h1>
                  <p class="price-text">Rp. 25.000,00<span class="porsi">/porsi</span></p>
                  <p class="card-sub">Lorem ipsum dolor sit amet consectetur. Dictum sit...</p>
                  <a href="/detail-product"
                     class="button-sm-primary d-none d-md-block py-2 px-5 text-center float-end">Lihat
                     Detail</a>

                  <a href="/detail-product"
                     class="button-sm-primary d-sm-block d-md-none py-2 px-2 text-center d-flex justify-content-center">Lihat
                     Detail &nbsp;</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
               <img src="{{ asset('assets/images/nasi_goreng.png') }}" class="card-img-top product-image"
                  alt="product-image">
               <div class="card-body">
                  <h1 class="card-title">Nasi Goreng</h1>
                  <p class="price-text">Rp. 23.000,00<span class="porsi">/porsi</span></p>
                  <p class="card-sub">Lorem ipsum dolor sit amet consectetur. Dictum sit...</p>
                  <a href="/detail-product"
                     class="button-sm-primary d-none d-md-block py-2 px-5 text-center float-end">Lihat
                     Detail</a>

                  <a href="/detail-product"
                     class="button-sm-primary d-sm-block d-md-none py-2 px-2 text-center d-flex justify-content-center">Lihat
                     Detail &nbsp;</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
               <img src="{{ asset('assets/images/es_kopi.png') }}" class="card-img-top product-image"
                  alt="product-image">
               <div class="card-body">
                  <h1 class="card-title">Es Kopi</h1>
                  <p class="price-text">Rp. 15.000,00<span class="porsi">/porsi</span></p>
                  <p class="card-sub">Lorem ipsum dolor sit amet consectetur. Dictum sit...</p>
                  <a href="/detail-product"
                     class="button-sm-primary d-none d-md-block py-2 px-5 text-center float-end">Lihat
                     Detail</a>

                  <a href="/detail-product"
                     class="button-sm-primary d-sm-block d-md-none py-2 px-2 text-center d-flex justify-content-center">Lihat
                     Detail &nbsp;</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
               <img src="{{ asset('assets/images/es_teh_landscape.png') }}" class="card-img-top product-image"
                  alt="product-image">
               <div class="card-body">
                  <h1 class="card-title">Es Teh</h1>
                  <p class="price-text">Rp. 12.000,00<span class="porsi">/porsi</span></p>
                  <p class="card-sub">Lorem ipsum dolor sit amet consectetur. Dictum sit...</p>
                  <a href="/detail-product"
                     class="button-sm-primary d-none d-md-block py-2 px-5 text-center float-end">Lihat
                     Detail</a>

                  <a href="/detail-product"
                     class="button-sm-primary d-sm-block d-md-none py-2 px-2 text-center d-flex justify-content-center">Lihat
                     Detail &nbsp;</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
               <img src="{{ asset('assets/images/mie_ayam_landscape.png') }}" class="card-img-top product-image"
                  alt="product-image">
               <div class="card-body">
                  <h1 class="card-title">Mie Ayam</h1>
                  <p class="price-text">Rp. 25.000,00<span class="porsi">/porsi</span></p>
                  <p class="card-sub">Lorem ipsum dolor sit amet consectetur. Dictum sit...</p>
                  <a href="/detail-product"
                     class="button-sm-primary d-none d-md-block py-2 px-5 text-center float-end">Lihat
                     Detail</a>

                  <a href="/detail-product"
                     class="button-sm-primary d-sm-block d-md-none py-2 px-2 text-center d-flex justify-content-center">Lihat
                     Detail &nbsp;</a>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="card shadow border border-0 me-lg-2 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
               <img src="{{ asset('assets/images/nasi_goreng.png') }}" class="card-img-top product-image"
                  alt="product-image">
               <div class="card-body">
                  <h1 class="card-title">Nasi Goreng</h1>
                  <p class="price-text">Rp. 23.000,00<span class="porsi">/porsi</span></p>
                  <p class="card-sub">Lorem ipsum dolor sit amet consectetur. Dictum sit...</p>
                  <a href="/detail-product"
                     class="button-sm-primary d-none d-md-block py-2 px-5 text-center float-end">Lihat
                     Detail</a>

                  <a href="/detail-product"
                     class="button-sm-primary d-sm-block d-md-none py-2 px-2 text-center d-flex justify-content-center">Lihat
                     Detail &nbsp;</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection