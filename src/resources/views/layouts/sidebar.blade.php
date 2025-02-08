<aside class="w-[15%] bg-gray-800 text-white h-screen fixed top-0 left-0">
  <div class="ml-3 mt-6 text-xl">書籍管理システム</div>
  <nav class="space-y-4 mt-16 p-4">
    <a href="#" class="block text-lg text-white hover:text-gray-400">
      <i class="fa-solid fa-house mr-4"></i>
      ダッシュボード
    </a>
    <a href="{{route('books.index')}}" class="block text-lg text-white hover:text-gray-400">
      <i class="fa-solid fa-book mr-4"></i>
      書籍一覧
    </a>
    <a href="#" class="block text-lg text-white hover:text-gray-400">
      <i class="fa-solid fa-user mr-4"></i>
      管理者一覧
    </a>
  </nav>
</aside>