<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PE Candidate Assignment</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <form method="POST" action="/logout" style="text-align:right; padding:12px;">
        @csrf
        <button type="submit" style="padding:8px; background:#cecece; cursor:pointer;">Logout</button>
    </form>
    <livewire:destination-explorer />
</body>
</html>
