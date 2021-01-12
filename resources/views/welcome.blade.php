@extends('layouts.welcomeapp')

@section('main')

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ARS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .notice {
                align-items: center;
                position: absolute;
                top: 30px;
            }

            .content {
                padding: 0 25px;
                text-align: center;
                position: relative;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .loginbody 
            {
                background-image: url('/img/uniten.jpg');
                background-position: center center;
                background-repeat: no-repeat;
                height: 100vh;
                width: 150%;
                color: white;
            }
            .html
            {
                width: 780px;
                background-image: url('/img/uniten.jpg') no-repeat center top;
                margin: 0 auto;
                height:100%;
            }

            .img-round
            {
                border-radius:30px;
                border-color: #000;
                border-width: 100px;
            }

            .round
            {
                border-radius:20px;
            }
    
            
        </style>

        <div class="flex-center position-ref content">
            <img height="350px" class="img-round" width="1500px" src="/img/uniten.jpg" alt="unitenlogo">
        </div>
        <div class="flex-center position-ref body">
           
                <div class="">
                <br><br>
                    <h1>Student Apartments in UNITEN</h1>
                </div>
        </div>
            <br><br>
        

    <div class="">
        <div class="row">
            <div class="">
                <img src="/img/murni1.jpg" alt="" class="img-round" height="200px">
                <br><br>
                <h3 class="text-center">Kelompok Murni</h3>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="">
                <img src="/img/cendi.jpg" alt="" class="img-round" height="200px">
                <br><br>
                <h3 class="text-center">Kelompok Cendekiawan</h3>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="">
                <img src="/img/amanah.jpg" alt="" class="img-round" height="200px">
                <br><br>
                <h3 class="text-center">Kelompok Amanah</h3>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="">
                <img src="/img/ilmu1.jpg" alt="" class="img-round" height="200px">
                <br><br>
                <h3 class="text-center">Kelompok Ilmu</h3>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>


        
@endsection



