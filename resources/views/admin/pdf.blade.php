<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    li {
        list-style: none;
    }

</style>

<body>
    <ul>
        <li>
            <p style="font-weight: 600;font-size:1rem">Id: {{$item->id}}</p>
        </li>
        <li>
            <p style="font-weight: 600;font-size:1rem">Tanggal: {{date('d F, Y', strtotime($item->created_at))}}</p>
        </li>
        <li>
            <p class="mt-2" style="font-weight: 600;font-size:1rem">Status: {{$item->status}}</p>
        </li>
    </ul>

    <div class="" style="text-align: center">
        <div class="title">
            <h3>Laporan</h3>
        </div>
        <p>{{$item->laporan}}</p>
    </div>
</body>

</html>
