@extends('admin.layouts.app')
@stack('title')
    <title>Title</title>
@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
    @livewireStyles
</head>
<body>
    @livewire('category')
    @livewireScripts
</body>
</html>
@endsection