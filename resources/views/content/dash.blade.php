@extends('layouts.app')
@section('content')

<div class="container">
    <div class="grid lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1 gap-2">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <i class="fa-solid fa-users"></i>
            <span>Users</span>
        </div>
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <i class="fa-brands fa-product-hunt"></i>
            <span>Products</span>
        </div>
    </div>
</div>
@endsection