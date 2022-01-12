{{-- Aqui va los elementos que siempre van a estar en la página web: distribución y elementos sin contenido --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - @yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
        <div class="logo">
            <h1>symblog</h1>
            <p>creating a blog in Symfony2</p>
        </div>
    </header>
    <main>
    @section("content")

    @show
    </main>
    <aside>
        @section("aside")
        <div>
            <h3>Tag cloud</h3>
            <p>
                paradise code zero trusting alive php misdirection binary 
                daftpunk leaky hacked symfony2 one grid pool dead magic
            </p>
        </div>
        <div>
            <h3>Latest Comments</h3>
            <p>
                Gary commented on 'Nowadays people only want to die'
                [2021-09-04 10:40 AM]
            </p>
        </div>

        @show
    </aside>
</body>
</html>
