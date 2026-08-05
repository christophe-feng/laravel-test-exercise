<!-- 繼承'layouts.app'這個頁面的版型 -->
@extends('layouts.app')

<!-- @@section 為填寫位置，並命名為'title'，與父層的 @@yield('title') 位置相同 -->
<!-- 在'title'這個區塊放入'Page Title'這段文字-->
<!-- 如果 @@section 為單行簡寫，結尾不需要有結束的閉合標籤 -->
@section('title', 'Page Title')

<!-- 在'sidebar'這個區塊放入以下內容 -->
@section('sidebar')
@@parent

<p>This is appended to the master sidebar.</p>

<!-- 如果 @@section 為區塊寫法，結尾需要有結束的閉合標籤 -->
@endsection

<!-- @@section 為填寫位置，並命名為'content'，與父層的 @@yield('content') 位置相同 -->
<!-- 在'content'這個區塊放入以下內容 -->
@section('content')
<p>This is my body content.</p>
<!-- 如果 @@section 為區塊寫法，結尾需要有結束的閉合標籤 -->
@endsection