<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | Sahabat Difabel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Tailwind CSS 2.2.19 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .bg-login {
      position: relative;
      background-image: url('{{ asset('assets/img/bg_login.jpg') }}');
      background-size: cover;
      background-position: center;
    }

    .bg-login::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.3); /* Opacity set here */
      z-index: -1; /* Pastikan gambar berada di atas pseudo-element */
    }
  </style>
</head>

<body class="bg-login">
  <main>
    <div class="min-h-screen flex items-center justify-center">
      <!-- Atur lebar yang lebih besar untuk layar yang lebih luas dengan `lg:max-w-xl` -->
      <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md lg:max-w-xl">
          <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">SAHABAT DIFABEL</h2>
  
          <!-- Alert untuk notifikasi sukses -->
          @if (session('success'))
              <div class="mb-4 p-4 text-green-700 rounded-lg" role="alert">
                  {{ session('success') }}
              </div>
          @endif

          <!-- Alert untuk notifikasi kesalahan -->
          @if ($errors->any())
              <div class="mb-4 p-4 text-red-700 bg-red-100 rounded-lg" role="alert">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
  
          <!-- Form -->
          <form action="{{ route('login') }}" method="POST">
              @csrf
              <div class="mb-4">
                  <label for="email" class="block text-blue-700 font-semibold mb-2">Email</label>
                  <input type="text" id="email" name="email" class="w-full p-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Masukkan email anda" required>
              </div>
              <div class="mb-4">
                  <label for="password" class="block text-blue-700 font-semibold mb-2">Password</label>
                  <input minlength="8" type="password" id="password" name="password" class="w-full p-3 border border-blue-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Masukkan password anda" required>
              </div>
  
              <!-- Button Login -->
              <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-lg font-semibold transition duration-300 shadow-lg">
                  Login
              </button>
          </form>
      </div>
    </div>
  </main>

</body>

</html>
