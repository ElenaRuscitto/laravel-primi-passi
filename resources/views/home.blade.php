<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primo Laravel</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body class="bg-primary-subtle">

    <div class="container">
        <h1 class=" text-center my-5">Ciao {{ $name }}</h1>


        <div class="d-flex align-items-center  justify-content-center my-5">
            <img src="https://emoji.slack-edge.com/T91QPE3BP/ugodeughi/52e1ebbdd180b4d6.jpg" alt="" class="rounded">
        </div>


        <button type="button" class="btn btn-link my-5"><a href="/">Torna indietro</a></button>
    </div>



</body>
</html>
