# Instructions DAY 1 ✔
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui è definita una classe Production

All'interno della classe dovrete gestire:
- titolo
- una lingua 
- un voto (su una scala da 1 a 10). 
La classe deve avere le sue variabili d'istanza, il costruttore e i metodi.
Istanziate poi almeno due oggetti Production e stampate a schermo i loro valori.

## BONUS 1 ✔
Creare un layout completo per stampare a schermo una lista di produzioni. 
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice:
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

## BONUS 2 ✔
Create una classe Genre (gli attributi potrebbero essere nome e descrizione) e fate in modo che la classe Production accetti un genere nel costruttore. 
Aggiornate le informazioni stampate a schermo con il genere.

# Instructions DAY 2 ✔
Aggiungete al lavoro di ieri le classi Movie e TVSerie

 La classe Movie gestisce due proprietà: 
- profitti 
- durata

La classe TVSerie gestisce il numero di stagioni.

## P.S. 
Se vuoi aggiungere altre proprietà alle due classi, fai pure! Queste sono solo una base.

Facciamo in modo che Movie e TVSerie ereditino le proprietà di base dalla classe Production.

Creiamo delle istanze di Movie e TVSerie e stampiamo le informazioni a schermo.

## BONUS ✔
Facciamo in modo che la classe Production accetti più di un genere.

# ---------- EN ----------

# Instructions DAY 1 ✔
This afternoon, review the basic concepts of class, variables, and instance methods that we covered this morning and create an index.php file in which a class Production is defined.

Within the class, you should manage:
- title
- a language
- a rating (on a scale from 1 to 10).
The class must have its instance variables, constructor, and methods.
Then instantiate at least two Production objects and print their values on the screen.

## BONUS 1 ✔
Create a complete layout to display a list of productions on the screen.
Let's pay attention to the organization of the code, dividing it into appropriate files and folders.
For example, we can organize the code by:
- creating a file dedicated to data (such as arrays of objects) that we could call db.php
- putting each class in its own file and maybe grouping all the classes in a dedicated folder that we can call Models
- organizing the layout by dividing the structure and contents into dedicated files and partials.

## BONUS 2 ✔
Create a Genre class (the attributes could be name and description) and ensure that the Production class accepts a genre in the constructor.
Update the information printed on the screen with the genre.

# Instructions DAY 2 ✔
Add the Movie and TVSerie classes to yesterday's work.

 The Movie class manages two properties:
- profits
- duration

The TVSerie class manages the number of seasons.

## P.S.
Feel free to add more properties to the two classes if you wish! These are just a base.

Let's ensure that Movie and TVSerie inherit the basic properties from the Production class.

Create instances of Movie and TVSerie and print the information on the screen.

## BONUS ✔
Ensure that the Production class accepts more than one genre.