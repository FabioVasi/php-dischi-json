<?php
/*
Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
Bonus (da fare entro domani prima della correzione)
Al click su un disco, recuperare e mostrare i dati del disco selezionato.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div id="app">

        <header>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"/></svg>
            </a>
        </header>

        <main>
            <div class="container">
                <div class="row">

                    <div class="dark modal fade" :id="`${disc.author.replace(/\s+/g, '')}${index}`" tabindex="-1" :aria-labelledby="`${disc.author.replace(/\s+/g, '')}${index}Label`" aria-hidden="true" v-for="(disc, index) in list" :key="`${disc.author.replace(/\s+/g, '')}${index}`">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="disc card border-0 h-100 modal-body">
                                    <img class="img-card-top py-4 px-5" :src="disc.poster" alt="">
                                    <div class="card-body text-center text-white">
                                        <h3>{{disc.title}}</h3>
                                        <p>{{disc.author}}</p>
                                        <h5>{{disc.year}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-4 g-5" v-for="(disc, index) in list" :key="`${disc.author.replace(/\s+/g, '')}${index}`">
                        <div class="disc card border-0 h-100" data-bs-toggle="modal" :data-bs-target="`#${disc.author.replace(/\s+/g, '')}${index}`" :id="`${disc.author.replace(/\s+/g, '')}${index}`">
                            <img class="img-card-top py-4 px-5" :src="disc.poster" alt="">
                            <div class="card-body text-center text-white">
                                <h3>{{disc.title}}</h3>
                                <p>{{disc.author}}</p>
                                <h5>{{disc.year}}</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>

    </div>
  
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>
</html>