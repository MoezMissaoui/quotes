<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <h1>Random quote in every request</h1>
        </div>
        <div class="row mt-5">

            @foreach ($quotes as $quote)
                <div class="col-md-4">
                    <div class="card p-2 m-2">
                        <p>{{ $quote }}</p>
                    </div>
                </div>
            @endforeach

            @empty($quotes)
                <div class="col-md-12">
                    <div class="card p-2 m-2">
                        <p>There is no quotes :(</p>
                    </div>
                </div>
            @endempty

        </div>
    </div>
</body>
</html>
