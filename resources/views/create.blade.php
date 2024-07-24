<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
   
    <style>
        body {
            background-color: #fff5e6;
            font-family: Arial, sans-serif;
        }
        .contact-form {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-form h2 {
            text-align: center;
            color: DarkOrange;
        }
        .contact-form label {
            display: block;
            margin-top: 10px;
            color: #333;
        }
        .contact-form input,
        .contact-form textarea,
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
    </style>
</head>
<body>

    <div class="contact-form">
        <h2>Ajouter un produit</h2>
        <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="productName">Nom du produit</label>
            <input type="text" name="nom" required>

            <label for="productType">Type de produit</label>
            <select id="productType" name="type" required>
                <option value="">Choisissez le type de produit</option>
                <option value="legume">Légume</option>
                <option value="fruit">Fruit</option>
            </select>

            <label for="productImage">Image du produit</label>
            <input type="file" name="image" accept="image/*" required>

            <button type="submit">Ajouter le produit</button>
        </form>
    </div>

</body>
</html>
