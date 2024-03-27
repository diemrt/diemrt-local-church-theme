# Local Church - Wordpress custom theme

## Installazione e configurazione

Scaricare il codice sorgente tramite il comando `git clone URL_GITHUB`. 

Una volta scaricato, è possibile testare il tema usando un'istanza locale di wordpress. Il metodo consigliato, è quello di installare Docker e rendelo attivo e funzionante. Una volta fatto, aprire un terminale nella root del progetto ed eseguire il comando `docker compose -f docker-compose.yml up -d`. Una volta completato, il server sarà ragiungibile all'indirizzo: http://localhost:8080, basterà segui i passaggi del sito per configurare completamente wordpress. 

Per configurare il tema, bisognerà importare l'intera cartella di questo progetto sotto la cartella del server `/var/www/html/wp-content/themes/`.

> Laddove non fosse possibile accedere alla cartella da remoto, è possibile creare uno zip del tema e, una volta configurato wordpress, caricarlo nell'apposita sezione **Aspetto>Aggiungi nuovo tema>Carica tema**

### Altre configurazioni del tema custom

Ricordarsi di configurare e verificare i seguenti punti

- Controllare che titolo e motto siano configurati nella sezione **Impostazioni>Generali**
- Verificare di aver inserito tutte le pagine minime al funzionamento, specialmente la pagina Home.
- Verificare che la tua homepage sia settata su "Home" nella sezione **Impostazioni>Lettura>Una pagina statica>Homepage**
- Nella sezione **Aspetto>Menu** configurare i seguenti menu:
  - creare un menù "main", controllando che ci sia il check sul flag **Header Menu** e sul flag **Footer Menu**, e inserisci tutte le pagine da elencare nell'ordine corretto.
- Ricordati di abilitare i Campi Personalizzati per i singoli articoli, nell'editor di wordpress clicca sul simbolo dei tre puntini, dopodiché vai in **Pannelli>Aggiuntivi>Campi personalizzati**, attiva la spunta e clicca sul pulsante mostra

Ulteriori indicazioni e chiarimenti possono essere trovati in questa [guida ufficiale](https://hub.docker.com/_/wordpress).

## Troubleshooting

Nel caso di errori inaspettati da wordpress, è possibile predisporre la modalità di debub iserendo nel file `wp-config.php` il seguente codice:

```
define( 'WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
```

## Struttura

Questa struttura presenta una serie di cartelle e file fondamentali per il corretto funzionamento del tema. La struttura segue le indicazioni della [guida ufficiale](https://developer.wordpress.org/themes/).

## Backup

## Importazione di un backup esistente

Prima di procedere con il backup, assicurarsi che il servizio di hosting abbia abilitato la possibilità di caricare file più grandi di 2MB. Nel caso in cui si abbia accesso ai file di configurazione di wordpress, modificare quanto segue

1. Modifica il file **.htaccess**, aggiunti quanto segue in fondo al file:
   
   ```
    php_value upload_max_filesize 128M
    php_value post_max_size 128M
    php_value memory_limit 256M
    php_value max_execution_time 300
    php_value max_input_time 300
   ```
2. Modifica il file **wp-config.php**, aggiunti quanto segue in fondo al file:
   
   ```
    @ini_set( 'upload_max_filesize' , '128M' );
    @ini_set( 'post_max_size', '128M');
    @ini_set( 'memory_limit', '256M' );
    @ini_set( 'max_execution_time', '300' );
    @ini_set( 'max_input_time', '300' );
   ```