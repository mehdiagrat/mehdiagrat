
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <style>
        body {
            background-color: #fff5e6;
            font-family: Arial, sans-serif;
        }
        .contact-form, .product-table {
            width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-form h2, .product-table h2 {
            text-align: center;
            color: DarkOrange;
        }
        .contact-form label {
            display: block;
            margin-top: 10px;
            color: #333;
        }
        .contact-form input,
        .contact-form select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact-form button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: DarkOrange;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #e65c00;
        }
        .product-table table {
            width: 100%;
            border-collapse: collapse;
        }
        .product-table th, .product-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .product-table th {
            background-color: DarkOrange;
            color: white;
        }
        .product-table td img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>


    <div class="product-table">
        <h2>Liste des produits</h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                    <tr>
                        <td>{{ $produit->id }}</td>
                        <td>{{ $produit->nom }}</td>
                        <td>{{ $produit->type }}</td>
                        <td><img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->nom }}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
