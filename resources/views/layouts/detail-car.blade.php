<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Bewerken</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .form-table td {
            padding: 10px;
            vertical-align: middle;
        }

        .form-table td label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-table td input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .submit-button {
            display: block;
            width: 100%;
            background-color: #28a745;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            text-transform: uppercase;
            font-weight: bold;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .submit-button:hover {
            background-color: #218838;
        }

        .form-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .form-table tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h1>Auto Details</h1>

        <!-- Bewerken formulier -->
        <form action="{{ route('alle-autos') }}" method="GET">
            @csrf

            <table class="form-table">
                <div class="toast" style="position: absolute; top: 0; right: 0;" data-delay="10000">
                    <div class="toast-header">
                        <strong class="mr-auto">Informatie</strong>
                        <small>Nu</small>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        10 klanten bekeken deze auto vandaag.
                    </div>
                </div>
                <tr>
                    <td>
                        <label for="brand">Merk</label>
                        <input disabled type="text" id="brand" name="brand" value="{{ old('brand', $car->brand) }}"
                            readonly>
                    </td>
                    <td>
                        <label for="model">Model</label>
                        <input disabled type="text" id="model" name="model" value="{{ old('model', $car->model) }}"
                            readonly>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="mileage">Kilometerstand</label>
                        <input disabled type="text" id="mileage" name="mileage"
                            value="{{ old('mileage', $car->mileage) }}" readonly>
                    </td>
                    <td>
                        <label for="price">Prijs</label>
                        <input disabled type="text" id="price" name="price" value="{{ old('price', $car->price) }}"
                            readonly>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="seats">Aantal zitplaatsen</label>
                        <input disabled type="text" id="seats" name="seats" value="{{ old('seats', $car->seats) }}"
                            readonly>
                    </td>
                    <td>
                        <label for="doors">Aantal deuren</label>
                        <input disabled type="text" id="doors" name="doors" value="{{ old('doors', $car->doors) }}"
                            readonly>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="production_year">Productiejaar</label>
                        <input disabled type="text" id="production_year" name="production_year"
                            value="{{ old('production_year', $car->production_year) }}" readonly>
                    </td>
                    <td>
                        <label for="color">Kleur</label>
                        <input disabled type="text" id="color" name="color" value="{{ old('color', $car->color) }}"
                            readonly>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <label for="image">Afbeelding URL</label>
                        <input disabled type="text" id="image" name="image"
                            value="https://img.freepik.com/vrije-vector/rode-auto-met-het-karakter-van-het-grote-ogenkarton-geisoleerd_1308-46902.jpg"
                            readonly>
                    </td>
                </tr>
            </table>

            <!-- Submit-knop -->
            <button type="submit" class="submit-button">Terug</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                $('.toast').toast('show');
            }, 10000); // 10000 milliseconds = 10 seconds
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>