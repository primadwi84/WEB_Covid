<x-aple-layout>
<!-- <h1 class="text-3xl text-black pb-6">{{$title}}</h1> -->
<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <div class="jumbotron jumbotron-fluid bg-primary text-white">
            <div class="container text-center">
                <h4 class="display-4">Corona Virus</h4>
                <p class="lead">
                    <h4>
                        PANTAU PENYEBARAN VIRUS COVID-19 DI INDONESIA
                        <br>SECARA REAL-TIME
                        <br>Mari bersama menjaga kesehatan diri kita.
                    </h4>
                </p>
            </div>
        </div>

        <style type="text/css">
            .box
            {
                padding: 30px 40px;
                border-radius: 5px;
            }
        
        </style>
        <div class="container">
            <div class="row">
            
                <div class="col-md-3">
                    <div class="bg-danger box text-white">
                        <div class="row">
                            <div class ="col-md-3">
                                <h6 scope="col" >Positif</h6>
                                    @foreach ($data as $dataCovid)
                                        <h4>{{ $dataCovid['positif']}}</h4>
                                    @endforeach
                                <h6>orang</h6>
                            </div>
                            <div class="col-md-6">
                                <img src="img/sad.svg" style= "width: 100px; margin-left: 63px;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="bg-info box text-white">
                        <div class="row">
                            <div class ="col-md-3">
                                <h6 scope="col" >Meninggal</h6>
                                    @foreach ($data as $dataCovid)
                                        <h4>{{ $dataCovid['meninggal']}}</h4>
                                    @endforeach
                                <h6>orang</h6>
                            </div>
                            <div class="col-md-6">
                                <img src="img/cry.svg" style= "width: 100px; margin-left: 60px;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="bg-secondary box text-white">
                        <div class="row">
                            <div class ="col-md-3">
                                <h6 scope="col" >Dirawat</h6>
                                    @foreach ($data as $dataCovid)
                                        <h4>{{ $dataCovid['dirawat']}}</h4>
                                    @endforeach
                                <h6>orang</h6>
                            </div>
                            <div class="col-md-6">
                                <img src="img/sad.svg" style= "width: 100px; margin-left: 60px;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="bg-success box text-white">
                        <div class="row">
                            <div class ="col-md-3">
                                <h6 scope="col" >Sembuh</h6>
                                    @foreach ($data as $dataCovid)
                                        <h4>{{ $dataCovid['sembuh']}}</h4>
                                    @endforeach
                                <h6>orang</h6>
                            </div>
                            <div class="col-md-6">
                                <img src="img/happy.svg" style= "width: 100px; margin-left: 60px;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="bg-primary box text-white">
                        <div class="row">
                            <div class ="col-md-6">
                                <h2>INDONESIA</h2> 
                                <h5> Positif: {{ $dataCovid['positif']}}</h5> 
                                <h5> Meninggal: {{ $dataCovid['meninggal']}}</h5> 
                                <h5> Dirawat: {{ $dataCovid['dirawat']}}</h5> 
                                <h5> Sembuh: {{ $dataCovid['sembuh']}}</h5> 
                            </div>
                            <div class="col-md-4">
                                <img src="img/indonesia.svg" style= "width: 150px;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="bg-primary text-center text-white mt-3 bt-2 pb-2">
            Created by. Dwi Prima
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
    </body>
    </html>

   
</x-aple-layout>

