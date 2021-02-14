<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
      let ajax_url = "{{ route('ajax') }}",
          token = "{{ csrf_token() }}";
  </script>
  <script src="{{ mix('js/app.js') }}"></script>
</head>
<style>
    nav a.active{
      background-color: #ccc;
    }
</style>
<body>
    <nav>
        <a class="{{ request()->is('/') ? 'active': null }}" href="{{ url('/') }}">Anasayfa</a>
        <a class="{{ request()->is('account') ? 'active': null }}" href="{{ url('/account') }}">Hesap</a>
        <a class="{{ request()->is('profile') ? 'active': null }}" href="{{ url('/profile') }}">Profil</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>