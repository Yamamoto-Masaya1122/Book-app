@extends('layouts.app')
@section('content')
<div class="mx-auto max-w-xl">
  <form action="{{ route('books.update', $book->id) }}" method="post" class="space-y-5">
    @csrf
    <div>
      <label for="title" class="mb-1 block text-sm font-medium text-gray-700">タイトル</label>
      <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"/>
    </div>
    <div>
      <label for="isbn_code" class="mb-1 block text-sm font-medium text-gray-700">ISBNコード</label>
      <input type="text" id="isbn_code" name="isbn_code" value="{{ old('isbn_code', $book->isbn_code) }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"/>
    </div>
    <div>
      <label for="author" class="mb-1 block text-sm font-medium text-gray-700">著者名</label>
      <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}" class="w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"/>
    </div>
    <div>
      <label for="publishing_company" class="mb-1 block text-sm font-medium text-gray-700">出版社</label>
      <input type="text" id="publishing_company" name="publishing_company" value="{{ old('publishing_company', $book->publishing_company) }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"/>
    </div>
    <div>
      <label for="release_date" class="mb-1 block text-sm font-medium text-gray-700">発売日</label>
      <input type="text" id="release_date" name="release_date" value="{{ old('release_date', $book->release_date) }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"/>
    </div>
    <div>
      <label for="price" class="mb-1 block text-sm font-medium text-gray-700">価格</label>
      <input type="text" id="price" name="price" value="{{ old('price', $book->price) }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"/>
    </div>
    <div>
      <label for="memo" class="mb-1 block text-sm font-medium text-gray-700">メモ</label>
      <textarea id="memo" name="memo" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-400 focus:ring focus:ring-blue-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" rows="3">{{ old('memo', $book->memo) }}</textarea>
    </div>

    <button type="submit" class="rounded-lg border border-blue-500 bg-blue-500 px-5 py-2.5 text-center text-sm font-medium text-white shadow-sm transition-all hover:border-blue-700 hover:bg-blue-700 focus:ring focus:ring-blue-200 disabled:cursor-not-allowed disabled:border-blue-300 disabled:bg-blue-300">登録</button>
  </form>
</div>
@endsection