# 🎬 Laravel Movies Database

Un semplice progetto Laravel per interagire con un database MySQL tramite Eloquent ORM, che mostra una lista di film in card grafiche personalizzate.

---

## ✅ Obiettivo

Utilizzare **Eloquent**, l’ORM di Laravel, per recuperare dati da una tabella `movies` e visualizzarli in una pagina web con Blade e componenti personalizzati.

---

## 🗂️ Struttura del progetto

- `app/Models/Movie.php` → Model Eloquent per la tabella `movies`
- `app/Http/Controllers/PageController.php` → Controller per la home
- `resources/views/home.blade.php` → Vista principale con elenco film
- `resources/views/components/card.blade.php` → Componente per le card dei film

---

## 📸 Output

Ogni film è visualizzato in una card con:

- Titolo  
- Titolo originale  
- Nazionalità  
- Data di uscita  
- Voto  

---

## ✨ Bonus

- Layout personalizzato con Blade components  
- Design grafico a piacere con Bootstrap  

---

## 📌 Rotte

- `/` → Mostra l’elenco dei film  
- `/ex` → Visualizza il testo dell’esercizio originale (configurato in `config/ex.php`)  

---

## ✅ Requisiti

- PHP 8.1+  
- Composer  
- MySQL  
- Laravel 12


