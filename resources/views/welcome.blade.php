<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Botanique Addu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="/css/lightboxgallery-min.css">
        <link rel="stylesheet" href="/css/style.css">
        <!-- Styles -->
       
    </head>
    <body>

        <div class="header">
            <div class="container">
            <h1>Botanique Addu</h1>
            <h2>+960 7905838</h2>
            <h3>Addu City</h3>
            </div>
        </div>
         
        <div class="container">
        <div class="lightboxgallery-gallery clearfix">
            <a class="lightboxgallery-gallery-item" target="_blank" href="https://s-ec.bstatic.com/images/hotel/max1024x768/132/132680097.jpg" data-title="Rahul Anil" data-alt="Rahul Anil" data-desc="A lightweight jQuery lightbox gallery plugin.">
            <div>
                <img src="https://s-ec.bstatic.com/images/hotel/max1024x768/132/132680097.jpg" title="Rahul Anil" alt="Rahul Anil">
                <div class="lightboxgallery-gallery-item-content">
                <span class="lightboxgallery-gallery-item-title">Rahul Anil</span>
                </div>
            </div>
            </a>
            <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/aidan-meyer.jpg" data-title="Aidan Meyer" data-alt="Aidan Meyer" data-desc="">
            <div>
                <img src="https://kawshar.github.io/lightboxgallery/aidan-meyer_thumb.jpg" title="Aidan Meyer" alt="Aidan Meyer">
                <div class="lightboxgallery-gallery-item-content">
                <span class="lightboxgallery-gallery-item-title">Aidan Meyer</span>
                </div>
            </div>
            </a>
            <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/allef-vinicius.jpg" data-title="Allef Vinicius" data-alt="Allef Vinicius" data-desc="">
            <div>
                <img src="https://kawshar.github.io/lightboxgallery/allef-vinicius_thumb.jpg" title="Allef Vinicius" alt="Allef Vinicius">
                <div class="lightboxgallery-gallery-item-content">
                <span class="lightboxgallery-gallery-item-title">Allef Vinicius</span>
                </div>
            </div>
            </a>
            <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/austin-mabe.jpg" data-title="Austin Mabe" data-alt="Austin Mabe" data-desc="">
            <div>
                <img src="https://kawshar.github.io/lightboxgallery/austin-mabe_thumb.jpg" title="Austin Mabe" alt="Austin Mabe">
                <div class="lightboxgallery-gallery-item-content">
                <span class="lightboxgallery-gallery-item-title">Austin Mabe</span>
                </div>
            </div>
            </a>
            <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/aidan-doe.jpg" data-title="Aidan Doe" data-alt="Aidan Doe" data-desc="">
            <div>
                <img src="https://kawshar.github.io/lightboxgallery/aidan-doe_thumb.jpg" title="Aidan Doe" alt="Aidan Doe">
                <div class="lightboxgallery-gallery-item-content">
                <span class="lightboxgallery-gallery-item-title">Aidan Doe</span>
                </div>
            </div>
            </a>
            <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/alexandru-zdrobau.jpg" data-title="Alexandru Zdrobau" data-alt="Alexandru Zdrobau" data-desc="">
            <div>
                <img src="https://kawshar.github.io/lightboxgallery/alexandru-zdrobau_thumb.jpg" title="Alexandru Zdrobau" alt="Alexandru Zdrobau">
                <div class="lightboxgallery-gallery-item-content">
                <span class="lightboxgallery-gallery-item-title">Alexandru Zdrobau</span>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="footer">
        <div class="container">
        &copy; <a target="_blank" href="https://github.com/kawshar">Kawshar Ahmed</a> | Images from <a target="_blank" href="https://unsplash.com/">Unsplash</a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/lightboxgallery-min.js"></script>
    <script type="text/javascript">
    jQuery(function($) {
        $(document).on('click', '.lightboxgallery-gallery-item', function(event) {
        event.preventDefault();
        $(this).lightboxgallery({
            showCounter: true,
            showTitle: true,
            showDescription: true
        });
        });
    });
  </script>

    </body>
</html>
