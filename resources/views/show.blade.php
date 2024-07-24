<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <title>Détails du Produit</title>
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
        }
        .header {
            background-color: #ff6600;
            color: white;
            padding: 15px;
            font-size: 24px;
            text-align: center;
            font-weight: bold;
        }
        .product-details {
            padding: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Centrer les éléments horizontalement */
        }
        .product-image {
            width: 100%; /* Utiliser toute la largeur du parent */
            max-width: 300px; /* Largeur maximale de l'image */
            margin-bottom: 20px;
            text-align: center; /* Centrer l'image */
        }
        .product-image img {
            width: 80%; /* Ajuster la taille de l'image */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product-info {
            flex: 1;
            min-width: 200px;
        }
        h2 {
            color: #ff6600;
            font-size: 28px;
            margin-top: 0;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .detail-row {
            margin-bottom: 15px;
        }
        .detail-label {
            display: inline-block;
            background-color: #ff6600;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            font-weight: bold;
            min-width: 80px;
            margin-right: 10px;
        }
        .detail-value {
            display: inline-block;
            padding: 8px 0;
        }
        .actions {
            margin-top: 20px;
            text-align: center; /* Centrer le bouton de retour */
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
        @media (max-width: 600px) {
            .product-details {
                flex-direction: column;
            }
            .product-image {
                margin-right: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Gestion des Produits</div>
        <div class="product-details">
            <div class="product-image">
                <img src="{{ asset('assets/img/' . $s->image) }}" alt="Image du produit">
            </div>
            <div class="product-info">
                <h2>Détails du Produit</h2>
                <div class="detail-row">
                    <span class="detail-label">ID :</span>
                    <span class="detail-value">{{ $s->id }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Nom :</span>
                    <span class="detail-value">{{ $s->nom }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Type :</span>
                    <span class="detail-value">{{ $s->type }}</span>
                </div>
            </div>
        </div>
        <div class="actions">
            <a href="{{ route('produit.index') }}" class="btn">Retour</a>
        </div>
    </div>
</body>
</html>
