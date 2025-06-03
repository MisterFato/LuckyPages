
# LuckyPages 📄✨

**LuckyPages** è un piccolo ma utile progetto open source per aggiungere **header e footer dinamici** nei PDF generati con `wkhtmltopdf`. Perfetto per chi vuole impaginazioni professionali con data di stampa e numerazione delle pagine, senza complicarsi la vita.

## ✨ Funzionalità

- ✅ Inserisce la **data e ora di stampa** nel footer
- ✅ Mostra **pagina corrente** e **numero totale di pagine**
- ✅ Supporta layout HTML/CSS personalizzabili
- ✅ Compatibile con `wkhtmltopdf` e facile da integrare

## 📦 Requisiti

- PHP ≥ 5.3
- wkhtmltopdf installato e accessibile da terminale

## 🚀 Come funziona

1. Genera i file HTML per `header` e `footer`
2. Integra script JS per stampare `page` e `topage`
3. Esegue `wkhtmltopdf` con le opzioni corrette

Esempio comando:
```bash
wkhtmltopdf --header-html path/to/header.html --footer-html path/to/footer.html input.html output.pdf
```

## 📁 Struttura del progetto

```
LuckyPages/
├── templates/
│   ├── header.html
│   └── footer.html
├── generator.php
├── README.md
```

## 💡 Esempio Footer (HTML)
```html
<body onload='subst();'>
  <table style='width: 100%; font-size: 10px;'>
    <tr>
      <td style='text-align: left;'>Stampato il: 03-06-2025 10:38:17</td>
      <td style='text-align: right;'><span class='page'></span> di <span class='topage'></span></td>
    </tr>
  </table>
</body>
```

## 🤝 Contribuisci

Hai un'idea? Vuoi aggiungere qualcosa?  
Sentiti libero di aprire una [issue](https://github.com/MisterFato/LuckyPages/issues) o inviare una pull request!

## 📜 Licenza

Questo progetto è distribuito sotto licenza **MIT**.

---

> Realizzato con passione da [MisterFato](https://github.com/MisterFato) 💙
