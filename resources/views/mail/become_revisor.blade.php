<!DOCTYPE html>
<html lang="en">

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div style="display: flex; justify-content: center;">
        <h1 style="color:#00A97F; font-size:60px;">Presto.it</h1>
      </div>
      
      <div style="text-align: center;">
        <h2>Un utente ha richiesto di lavorare con noi</h2>
        <h3>Ecco i suoi dati:</h3>
        <p style="margin-bottom: 0;">Nome: {{ $user->name }}</p>
        <p style="margin-bottom: 0;">Email: {{ $user->email }}</p>
        <p style="margin-bottom: 0;">Messaggio: {{ $user->message }}</p>
        <br>
        <p>Se vuoi renderlo revisore clicca qui</p>
        <a href="{{ route('make.revisor', compact('user')) }}" style="display: inline-block; background-color: #343a40; color: #fff; padding: 0.5rem 1rem; margin-bottom: 1rem; text-decoration: none;">Rendi revisore</a>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
