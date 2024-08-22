<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>

    <!-- Form untuk menambahkan barang baru -->
    <form action="{{ url('/dashboard') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" required>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" required>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" required>
        </div>
        <button type="submit">Add Menu</button>
    </form>

    <!-- List barang yang sudah dibuat -->
    <h2>Existing Menus</h2>
    <ul>
        @foreach($menus as $menu)
            <li>
                <strong>{{ $menu->name }}</strong><br>
                {{ $menu->description }}<br>
                Price: {{ $menu->price }}<br>
                <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" width="100">
            </li>
        @endforeach
    </ul>
</body>
</html>
