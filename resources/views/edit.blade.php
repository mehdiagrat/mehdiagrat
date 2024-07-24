<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <title>Éditer le Produit</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
        }
        .header {
            background-color: #ff6600;
            color: white;
            padding: 15px;
            font-size: 24px;
            text-align: center;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .actions {
            text-align: center;
        }
        .btn {
            display: inline-block;
            background-color: #ff6600;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .btn:hover {
            background-color: #e55a00;
        }
        .btn-cancel {
            background-color: #ccc;
            color: #333;
        }
        .btn-cancel:hover {
            background-color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Éditer le Produit</div>
        <form action="{{ route('produit.update', $a->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id" value="{{ $a->id }}" readonly>
            </div>

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text"  name="nom" value="{{ old('name', $a->name) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description">{{ old('description', $a->description) }}</textarea>
            </div>

            <div class="actions">
                <button type="submit" class="btn">Mettre à jour</button>
                <a href="{{ route('produit.index') }}" class="btn btn-cancel">Annuler</a>
            </div>
        </form>
    </div>
</body>
</html>
