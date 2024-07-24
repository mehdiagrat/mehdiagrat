<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <title>Liste des produits</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 800px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .product-table {
            padding: 30px;
        }
        .product-table h2 {
            text-align: center;
            color: #ff6600;
            font-size: 28px;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .product-table table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px;
        }
        .product-table th, .product-table td {
            padding: 15px;
            text-align: left;
        }
        .product-table th {
            background-color: #ff6600;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .product-table tr {
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }
        .product-table tr:hover {
            background-color: #f0f0f0;
            transform: scale(1.02);
        }
        .product-table td {
            font-family: 'Georgia', 'Times New Roman', Times, serif;
            font-size: 16px;
            border-bottom: 1px solid #e0e0e0;
        }
        .product-table td img {
            max-width: 80px;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .product-table td img:hover {
            transform: scale(1.1);
        }
        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 12px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        .btn-show {
            background-color: #4CAF50;
            color: white;
        }
        .btn-edit {
            background-color: #2196F3;
            color: white;
        }
        .btn-delete {
            background-color: #f44336;
            color: white;
        }
        .btn-add {
            background-color: #ff6600;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            margin-bottom: 20px;
            display: block;
            width: fit-content;
        }
        .btn:hover {
            opacity: 0.8;
            transform: scale(1.05);
        }
        @media (max-width: 600px) {
            .container {
                width: 95%;
            }
            .product-table {
                padding: 20px;
            }
            .product-table th, .product-table td {
                padding: 10px;
            }
            .btn {
                padding: 6px 10px;
                font-size: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="product-table">
            <h2>Liste des produits</h2>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Image</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produits as $produit)
                        <tr>
                            <td>{{ $produit->id }}</td>
                            <td>{{ $produit->nom }}</td>
                            <td>{{ $produit->type }}</td>
                            <td><img src="{{ asset('assets/img/' . $produit->image) }}" width="80" height="80"></td>
                            <td>
                                <a href="{{ route('produit.show', $produit->id) }}" class="btn btn-show">Show</a>
                            </td>
                            <td>
                                <a href="{{ route('produit.edit', $produit->id) }}" class="btn btn-edit">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('produit.destroy', $produit->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
