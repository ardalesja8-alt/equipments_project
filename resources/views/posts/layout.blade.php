<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tattoo Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { background: #f2ede6; font-family: 'Segoe UI', sans-serif; }
        .navbar { background: #2b1a12 !important; }
        .navbar-brand { font-weight: 900; font-size: 26px; color: #fff !important; }
        .navbar-brand span { color: #ff6b35; }
        .nav-link { color: #e8d5c4 !important; font-weight: 600; }
        .nav-link:hover, .nav-link.active { color: #fff !important; }
        .card { border: none; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); }
        .btn-tattoo { background: #ff6b35; color: #fff; border: none; font-weight: 700; }
        .btn-tattoo:hover { background: #e85a24; color: #fff; }
        .table thead th { background: #2b1a12; color: #fff; border: none; }
        .form-control { border-radius: 10px; }
        .form-control:focus { border-color: #ff6b35; box-shadow: 0 0 0 0.2rem rgba(255,107,53,0.15); }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('posts.index') }}">Tattoo <span>Shop</span> 🎨</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Menu List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('posts.create') }}">+ Add Menu</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="{{ route('posts.index') }}">All Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Menu List</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success d-flex justify-content-between align-items-center rounded-3">
            <span><i class="bi bi-check-circle-fill"></i> {{ session('success') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
