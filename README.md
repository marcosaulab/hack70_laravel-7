# Recap - Blog


1. creo un database e poi conentto Laravel al database tramite .env

2. Fortify (Autenticazione e Registrazione)

3. Creare le Migrations/Model/Controller:
    - users (già fornita da laravel)
    - categories: id | name
    - articles: id | title | subtitle | body | img | user_id | category_id
    - tags: id | name
    - article_tag: id | article_id | tag_id


Per non rompere i vincoli di integrità referenziale posso applicare i 2 seguenti approcci:

1. approccio
->onDelete('cascade'): cancella a cascata tutti gli articoli che hanno come category_id l'id della categoria 
                     che è stata cancellata

2. approccio
->onDelete('set null'): setta a null il campo user_id di tutti gli articoli che hanno come utente 
                        lo stesso del valore di user_id



4. Inserisco in DatabaseSeeder le funzioni per riempire alcune tabella con dati di default


## Models

1. User (già fornito da Laravel) 
2. Article (tabella articles)
3. Category (tabella categories)
4. Tag (tabella tags)



## Relazioni

1. user 1 - N article 
2. category 1 - N article
3. article N - N tag


## Crud su Articoli 

Rotta -> funzione controller -> vista


## Middleware (auth)
E' una Classe la quale ogni volta che viene lanciata  una richiesta fa dei controlli. In questo caso controlla se l'utente è autenticato. Se lo è mostra la rotta che sto richiedendo, se non lo è fa un redirect alla login