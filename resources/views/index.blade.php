<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Chart</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container px-4 mx-auto">
        {{-- with tailwind css --}}
        <div class="p-6 m-20 bg-white rounded shadow">
            <p>Transaksi Bulanan</p>
            {!! $chart->container() !!}
        </div>
    
    </div>
    
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
</body>
</html>