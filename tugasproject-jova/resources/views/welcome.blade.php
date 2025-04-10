<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .button:hover {
            background-color: #45a049;
        }
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
    <h1>Welcome to Our Cafe</h1>
    <a href="{{ route('menus.index') }}" class="button">View Full Menu</a>

    <h2>Our Menu</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Menu Name</th>
                <th>Price</th>
                <th>Category</th>
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
                    <td colspan="4">No Data Menu.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>