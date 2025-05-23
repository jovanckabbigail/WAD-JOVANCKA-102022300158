<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Cafe</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div>
        <a href="{{ route('welcome') }}">Home</a> |
        <a href="{{ route('menus.index') }}">View Full Menu</a> |
        @if (Auth::check())
            <span>Welcome, {{ Auth::user()->name }}!</span>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endif
    </div>

    <h1>Menu Cafe</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($menus as $menu)
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>Rp {{ number_format($menu->price, 2, ',', '.') }}</td>
                    <td>{{ $menu->category }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Tidak ada data menu.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>