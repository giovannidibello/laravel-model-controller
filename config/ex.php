<?php

return <<<HTML

Oggi facciamo la nostra prima vera interazione con il database utilizzando Eloquent, l’ORM di Laravel!<br>
1 - Create un nuovo progetto Laravel<br>
2 - Tramite phpMyAdmin o MySQL Workbench create un nuovo database <strong>laravel_model_controller</strong><br>
3 - Importate nel vostro database la tabella <code>movies</code> in allegato<br>
4 - Inserite le vostre credenziali per il database nel file <code>.env</code><br>
5 - Create un model <code>Movie.php</code> col comando <code>php artisan make:model Movie</code><br>
6 - Create un controller che gestirà la rotta / col comando <code>php artisan make:controller Guest/PageController</code><br>
7 - All’interno della funzione <code>index()</code> del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.<br><br>

<strong>Bonus</strong><br>
Inventare una grafica a piacere per il sito e realizzarne il layout, aggiungendo lo stile con SASS.<br>
HTML;
