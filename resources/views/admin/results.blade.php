@extends('admin.layouts.app')
@stack('title')
    <title>Students</title>
@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
    @livewireStyles
</head>
<body>
    @livewire('result')
    @livewireScripts
</body>
</html>
@endsection