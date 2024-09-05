<!-- resources/views/layouts/aanbod-plaatsen.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aanbod Plaatsen</title>
</head>
<body>
<h1>Aanbod Plaatsen</h1>

<!-- Form to submit data -->
<form action="{{ route('aanbod.submit') }}" method="POST">
    @csrf
    <input type="text" name="license_plate" placeholder="Kentekenplaat" required>
    <button type="submit">Submit</button>
</form>
</body>
</html>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
