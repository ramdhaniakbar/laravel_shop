<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Masuk Ke Akun Anda</title>
   @include('includes.styles')
</head>

<body class="overflow-hidden" style="padding-top: 0;">
   <div class="container">
      <div class="row vh-100 d-flex justify-content-center align-items-center">
         <form class="col-xl-6 col-md-8 col-sm-8 col-8 form-auth">
            <h1 class="auth-title mb-lg-5 mb-4">Masuk Ke Akun Anda</h1>
            <div class="mb-4">
               <input type="email" class="form-input col-lg-12 col-12" placeholder="Masukkan email">
            </div>
            <div class=" mb-3">
               <input type="password" class="form-input col-lg-12 col-12" placeholder="Masukkan password">
            </div>
            <div class=" mb-4">
               <a href="/register" class="link">Belum punya akun?</a>
            </div>
            <button type="button" class="btn-main col-lg-12 col-12">Daftar</button>
         </form>
      </div>
   </div>

   @include('includes.scripts')
</body>

</html>