# Local Church - Wordpress custom theme

## Struttura

Questa struttura presenta una serie di cartelle e file fondamentali per il corretto funzionamento del tema. Tutti i file non elencati sono da considerare opzionali, ma comunque utili al fine di rispettare dei buoni principi di programmazione. 

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