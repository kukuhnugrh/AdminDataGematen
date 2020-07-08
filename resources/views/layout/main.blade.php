<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Admin Data GMA KLATEN</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container">
                <a class="navbar-brand" href="#">GEMATEN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a name="dataUmat" id="dataUmat" class="nav-item nav-link active" href="{{ url('/')}}">Data Umat</a>
                        <a name="dataPribadi" id="dataPribadi" class="nav-item nav-link active" href="{{ url('/umatPribadi')}}">Data Pribadi</a>
                    </div>
                </div>
                <div class="form-inline">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </div>
            </div>
        </nav>
        
        @yield('container')
        @yield('js')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    </body>
</html>

<script>
    $(document).ready(function(){
        $('a[name=dataPribadi]').on('click', function(){
            $.ajax({
                url: '/',
                type: "GET",
                dataType: "json",
                success:function(data){
                    document.getElementById('dataPribadi').setAttribute("class", "nav-item nav-link active");
                    document.getElementById('dataUmat').setAttribute("class", "nav-item nav-link deactive");
                }
            });
        });
        

    $(document).ready(function(){
        $('a[name=dataUmat]').on('click', function(){
            $.ajax({
                url: '/umatPribadi',
                type: "GET",
                dataType: "json",
                success:function(data){
                    document.getElementById('dataUmat').setAttribute("class", "nav-item nav-link active");
                    document.getElementById('dataPribadi').setAttribute("class", "nav-item nav-link deactive");
                }
            });
        });
    });
</script>

