<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<style>
    /* Reset dan dasar styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

h1 {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    text-align: center;
    margin: 0;
}

h2 {
    margin-top: 20px;
}

/* Styling form */
form {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
}

form div {
    margin-bottom: 15px;
}

form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

form input[type="text"],
form input[type="file"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

form button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

form button:hover {
    background-color: #45a049;
}

/* Styling daftar menu */
ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    background-color: #f9f9f9;
}

ul li img {
    max-width: 100px;
    height: auto;
    display: block;
}

</style>
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
