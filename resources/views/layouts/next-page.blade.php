<!-- resources/views/layouts/next-page.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }
        .form-group label {
            margin-bottom: 5px;
        }
        .form-group input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group .readonly-field {
            background-color: #eee;
        }
        .form-group .small-input {
            width: calc(50% - 10px);
        }
        .form-group .inline-group {
            display: flex;
            justify-content: space-between;
        }
        .form-group .inline-group input {
            flex: 1;
            margin-right: 10px;
        }
        .license-plate {
            background-color: #ffd700;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .submit-button {
            background-color: #d2691e;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        .submit-button:hover {
            background-color: #c15a1b;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1 class="form-title">Nieuw aanbod</h1>

    <!-- License Plate Display -->
    <div class="license-plate">{{ $inputText }}</div>

    <!-- Display prefilled form field -->
    <form action="{{ route('aanbod.submit') }}" method="POST">
        @csrf

        <!-- Merk -->
        <div class="form-group">
            <label for="brand">Merk</label>
            <input type="text" id="brand" name="brand" class="readonly-field" value="OPEL" readonly>
        </div>

        <!-- Model -->
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" id="model" name="model" class="readonly-field" value="CORSA" readonly>
        </div>

        <!-- Inline group for Zitplaatsen, Aantal deuren, Massa rijklaar -->
        <div class="form-group inline-group">
            <div class="form-group small-input">
                <label for="zitplaatsen">Zitplaatsen</label>
                <input type="text" id="zitplaatsen" name="zitplaatsen" class="readonly-field" value="5" readonly>
            </div>
            <div class="form-group small-input">
                <label for="aantal_deuren">Aantal deuren</label>
                <input type="text" id="aantal_deuren" name="aantal_deuren" class="readonly-field" value="4" readonly>
            </div>
            <div class="form-group small-input">
                <label for="massa_rijklaar">Massa rijklaar</label>
                <input type="text" id="massa_rijklaar" name="massa_rijklaar" class="readonly-field" value="1163" readonly>
            </div>
        </div>

        <!-- Inline group for Jaar van productie, Kleur -->
        <div class="form-group inline-group">
            <div class="form-group small-input">
                <label for="jaar_van_productie">Jaar van productie</label>
                <input type="text" id="jaar_van_productie" name="jaar_van_productie" class="readonly-field" value="2014" readonly>
            </div>
            <div class="form-group small-input">
                <label for="kleur">Kleur</label>
                <input type="text" id="kleur" name="kleur" class="readonly-field" value="WIT" readonly>
            </div>
        </div>

        <!-- Kilometerstand -->
        <div class="form-group">
            <label for="kilometerstand">Kilometerstand</label>
            <input type="text" id="kilometerstand" name="kilometerstand">
        </div>

        <!-- Vraagprijs -->
        <div class="form-group">
            <label for="vraagprijs">Vraagprijs</label>
            <input type="text" id="vraagprijs" name="vraagprijs">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit-button">Aanbod afronden</button>
    </form>
</div>

</body>
</html>
