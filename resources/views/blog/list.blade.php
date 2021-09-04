@extends('layout')
@section('title', 'Blog App')
@section('content')
<table class="blogs">
    <h2>ブログ一覧</h2>
    <thead>
        <tr class="blogTitle">
            <th>記事番号</th>
            <th>作成者</th>
            <th>タイトル</th>
            <th>日付</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $blog)
        <tr class="blogBody">
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->name }}</td>
            <td><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></td>
            <td>{{ $blog->updated_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
