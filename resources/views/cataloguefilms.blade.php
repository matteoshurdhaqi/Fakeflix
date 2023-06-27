<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/style.css" />

<body>
    <div class="wrapper overflow-hidden">
        <header>
            <div class="netflixLogo">
                <a id="logo">
                    <img src="/img/logo.png" alt="Logo Image">
                </a>
            </div>
            <nav class="main-nav">
                <a href="/">Home</a>
                <a href="/catalogofilms">Film</a>
                <a href="/catalogoseries">Serie TV</a>

            </nav>
        </header>

        <section class="main-container ">
            <div class="location" id="home">
                <h1 id="home">Film su FakeFlix</h1>
                <div class="box">
                    @foreach ( $films as $film )
                    <a href="{{route('show', ['id'=>$film['id']])}}">
                        <img src="{{$film['cover']}}" alt="">
                    </a>
                    @endforeach

                </div>
            </div>

        </section>

        <footer>

        </footer>
    </div>
</body>

</html>
