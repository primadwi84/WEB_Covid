<x-aple-layout>
<h1 class="text-3xl text-black pb-6">{{$title}}</h1>
<div class=" max-w-7xl mx-auto ...">
<div class='bg-white overflow-hidden shadow-xl sm::rounded-lg px-4 py-4'>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
                <table class="table">
            <thead class ="bg-primary text-white">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Positif</th>
                    <th scope="col">Sembuh</th>
                    <th scope="col">Meninggal</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 0;
                @endphp
                @foreach ($data as $dataCovid)
                @php
                    $no++;
                @endphp
                <tr>
                    <th scope="row">{{$no}}</th>
                    <td>{{ $dataCovid['attributes']['Provinsi']}}</td>
                    <td>{{ $dataCovid['attributes']['Kasus_Posi']}}</td>
                    <td>{{ $dataCovid['attributes']['Kasus_Semb']}}</td>
                    <td>{{ $dataCovid['attributes']['Kasus_Meni']}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>  
    </body>
</html>
</div>  
</div>  
</div>  
</x-aple-layout>
