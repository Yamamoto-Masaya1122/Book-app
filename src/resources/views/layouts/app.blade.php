<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite('resources/css/app.css')
</head>
<body>
  <!-- サイドバー -->
  @include('layouts.sidebar')
  <!-- メインコンテンツ（ヘッダーとメイン部分） -->
  <div class="ml-[12%] w-[88%]">
    <!-- ヘッダー -->
    <header class="text-gray-600 body-font bg-gray-200">
      @include('layouts.header')
    </header>
    <!-- メインコンテンツ -->
    <main class="p-4">
      @yield('content')
    </main>
  </div>
</body>
</html>
