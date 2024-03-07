# Local Church - Wordpress custom theme

## Installazione

Scaricare il codice sorgente tramite il comando `git clone URL_GITHUB`. 

Una volta scaricato, è possibile testare il tema usando un'istanza locale di wordpress. Il metodo consigliato, è quello di installare Docker e rendelo attivo e funzionante. Una volta fatto, aprire un terminale nella root del progetto ed eseguire il comando `docker compose -f docker-compose.yml up -d`. Una volta completato, il server sarà ragiungibile all'indirizzo: http://localhost:8080, basterà segui i passaggi del sito per configurare completamente wordpress. 

Per configurare il tema, bisognerà importare l'intera cartella di questo progetto sotto la cartella del server `/var/www/html/wp-content/themes/`. 

Ulteriori indicazioni e chiarimenti possono essere trovati in questa [guida ufficiale](https://hub.docker.com/_/wordpress).

## Troubleshooting

Nel caso di errori inaspettati da wordpress, è possibile predisporre la modalità di debub iserendo nel file `wp-config.php` il seguente codice:

```
define( 'WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
```


## Struttura

Questa struttura presenta una serie di cartelle e file fondamentali per il corretto funzionamento del tema. La struttura segue le indicazioni della guida ufficiale di Wordpress, in riferimento solo alla categoria [Classic Theme](https://developer.wordpress.org/themes/classic-themes/your-first-theme/#classic-theme), fare riferimento alla documentazione.