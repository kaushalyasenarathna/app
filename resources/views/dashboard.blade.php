<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    .logout {
        margin-left: 50rem;
    }

    .card-body {
        background-color: #B4045F;
        height: 16rem;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 25px;
    }

    h4 .btn {
        height: 10rem;
        font-size: 2rem;
        color: white;




    }

    h1 {
        font-weight: bold;

        margin-left: 5rem;
        font-family: 'Poppins', sans-serif;
    }

   
    h2 {
        text-align: center;
        color: #E6BF52;
        font-weight: bold;
        font-family: 'Poppins', sans-serif;
    }

    .card-text {
        color:white;
        font:  12px;;
        text-decoration: none;
    }


    body {
        background-color: #FDD7E4;
    }

    form {
        margin-left: 50rem;
    }
    img{
        width: 20rem;
        height: 12rem;
    }
    </style>
    </head>

<body>


    <main>


        <section class="py-5 text-center container">
            <div class="row py-lg-2"></div>
        </section>

        <div class="logout">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-jet-responsive-nav-link>
            </form>
        </div>

        <form class="d-flex" action="{{ route('dashboard') }}" method="GET">
            <input placeholder="Search here..." type="text" value="{{ request('search') }}" name="search"
                weight="10rem">
            <button class="mx-2 btn btn-primary text-light" value="search">
                search
            </button>

        </form>
      
        <span class="table-add float-right mb-3 mr-2">
            <a class="btn btn-primary rounded-pill" href="{{route('article.create') }}">create</a>
        </span>

        <div class="album py-5">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($article as $data )
                    <div class="col">
                        <div class="card-body">
                            <div class="container">
                                <div class="card img-fluid" ">
                                    <img class="card-img-top" src="images/{{ $data->image}}" alt="Card image"
                                        >
                                    <div class="card-img-overlay">
                                        <h4 class="card-title">{{ $data->title }} </h4>
                                        <p class="card-text">{{ $data->description }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</body>
</html>