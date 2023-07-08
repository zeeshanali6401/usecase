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
    @livewire('student')
    @livewireScripts
</body>
</html>
@endsection