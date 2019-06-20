<!DOCTYPE html>
<html lang="ja">

<head>
  @include('head')
</head>

<body>
  @include('header')
  <main>
    @yield('content')
  </main>
  @if(Auth::check())
  <script>
    document.getElementById('logout').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
  </script>
  @endif
  @yield('scripts')
</body>

</html>
