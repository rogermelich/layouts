<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .wrapper {
        display: flex;
        flex-flow: row wrap;
    }

    header, nav, section, footer {
        border: 1px solid darkred;
    }

    header {
        flex: 1 100%;
    }

    nav {
        flex: 1 auto;
    }

    .content {
        flex: 1 85%;
    }

    footer {
        flex: 1 100%;
    }

    @media all and (min-width: 600px) {
        header {
            order: 1;
        }

        nav {
            order: 2;
        }

        .content {
            order: 3;
        }

        footer {
            order: 4;
        }
    }
</style>

<body>

<div class="wrapper">
    <header>HEADER HERE</header>
    <nav>
        <ul>
            <li>Lorem.</li>
            <li>Ducimus.</li>
            <li>Aliquid.</li>
            <li>Explicabo?</li>
            <li>Sed.</li>
        </ul>
    </nav>
    <section class="content">
        <header>CONTENT HEADER HERE!!</header>
        <section>Seccio 1</section>
        <section>Seccio 2</section>
        <section>Seccio 3</section>
    </section>
    <footer>
        CopyRight Roger Melich
    </footer>
</div>
</body>
</html>