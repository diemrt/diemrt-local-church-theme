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

Questa struttura presenta una serie di cartelle e file fondamentali per il corretto funzionamento del tema. Tutti i file non elencati sono da considerare opzionali, ma comunque utili al fine di rispettare dei buoni principi di programmazione. La struttura segue le indicazioni della [guida ufficiale](https://developer.wordpress.org/themes/basics/template-hierarchy/) di Wordpress.

```
.
├── assets/
│   ├── css/
│   ├── fonts/
│   ├── images/
│   └── js/
├── classes/
├── inc/
├── templates/
├── template-parts/
├── index.php
├── style.css
└── ...
```

### `assets/`

Viene usata per salvare tutti i contenuti principali del sito, tra cui immagini, file css e altro.

### `classes/`

Viene usato per creare ogni classe php per gestire le logiche custom all'interno di wordpress.

### `inc/`

Sta per 'include', serve per inserire tutti i file da includere come dipendenze esterne.

### `template-parts/`

Permette di suddividere il tema in più parti logiche, in modo da non avere tutto in un singolo file. 

### `templates/`

Contiene tutti i file usati per gestire il tema. 

### `index.php`

File non opzionale, viene usato da wordpress come punto di ingresso per elaborare correttamente il tema.

### `style.css`

File non opzionale, viene usato da wordpress per gestire lo stile del tema e per raccogliere alcuni metadati del tema stesso.