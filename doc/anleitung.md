# KleiderOrdnung.Berlin

## Anleitung

<ul>
<li><a href="#aktualisieren">Inhalte bearbeiten und aktualisieren</a>
  <ul>
    <li><a href="#news">News-Beiträge (Blog Posts)</a>
    <li><a href="#stories">Stories (Testimonials) und Angebote</a>
    <li><a href="#pages">Seiten (AGB, Datenschutz, Impressum, etc.)</a>
  </ul>
</li>
<li><a href="#exportieren">Daten sichern (exportieren)</a></li>
<li><a href="#updaten">WordPress aktualisieren</a></li>
</ul>

<a name="aktualisieren" id="aktualisieren"></a>
### Inhalte bearbeiten und aktualisieren

Bestimmte Inhalte können im Administrationsbereichs (WP-Admin) bearbeitet werden:
- Texte
- Angebote
- Stories (Testimonials)
- News
- Instagram-Platzhalter aktualisieren
- Fotos / Bilder (Mediathek)

Auf der Startseite (Dashboard) des Administrationsbereichs sind die Links zum Bearbeiten, zum Aktualisieren und zu dieser Anleitung zusammengefasst.

Die folgenden Screenshots zeigen beispielhaft, wo welche Daten verändert und veröffentlicht werden.

<a name="news" id="news"></a>
#### News-Beiträge (Blog Posts)

Auf der Startseite erscheinen immer die neusten 3 Beiträge der jeweiligen Sprache (deutsch oder englisch) mit Titel, Beitragsbild und Kategorie.

**Erstellen** anklicken, um einen neuen Beitrag zu verfassen, **Titel** und ggf. **Text** verfassen, ein **Beitragsbild** festlegen (öffnet die Mediathek mit der Möglichkeit, ein neues Bild hochzuladen oder ein bestehendes auszuwählen), eine **Kategorie** zuzuweisen (auch hier kann eine neue angelegt werden).

Schließlich auf **veröffentlichen** klicken...

... und dann durch anlicken des Plus-Zeichens neben der amerikanischen Flagge einen englische Version des gleichen Beitrags erstellen. Beitragsbild und passende Kategorie werden, wenn möglich, automatisch übernommen. Auch der englische Beitrag muss **veröffentlicht** werden.

![Screenshot der beschriebenen Schritte beim Bearbeiten von News-Beiträgen](anleitung-news-bearbeiten.png)

In dieser Screenshot-Collage sind die verschiedenen Schritte zum erstellen und veröffentlichen mit blauen Pfeilen und Kreisen markiert. Die grünen Pfeile zeigen auf die entsprechenden Elemente, wie sie später auf der Homepage aussehen.

Bestehende Inhalte können zum Bearbeiten geöffnet und verändert werden. Anstelle des Veröffentlichen-Buttons gibt es dann einen blauen Button zum **aktualisieren**.

<a name="stories" id="stories"></a>
#### Stories (Testimonials) und Angebote

Auch andere Inhalte wie Stories (Testimonials) und Angebote lassen sich auf ähnliche Weise erstellen und verändern. Es gibt jeweils eine Übersichtsseite mit bestehenden Inhalten, Links zum bearbeiten und löschen, und einen Button zum **erstellen**.

Alles ist jeweils **mehrsprachig** angelegt, die Standardsprache ist deutsch, und Übersetzungen müssen separat erstellt und veröffentlicht werden. **Bilder** können hochgeladen oder aus der Mediathek ausgewählt werden.

Stories und Angebote haben zusätzlich ein Feld **Positionsnummer** um ihre Platzierung auf der Homepage zu bestimmen.

![Screenshot: Stories bearbeiten](anleitung-stories-bearbeiten.png)

**Angebote** sind ein komplexer Beitragstyp. Außer den üblichen Elementen wie Überschrift, Beitragsbild und Freitext gibt es jeweils die Aufzählungsliste "Was Du erhältst" und einen Bereich mit Preisinformationen, außerdem eine Strichzeichnung (Icon) neben der Überschrift.

Das Layout richtet sich nach dem grafischen Design, somit wechselt die seitliche Anordnung von Text und Bild immer ab und kann nicht abweichend bestimmt werden. Entsprechend benötigt es etwas mehr Fantasie oder einen Klick auf **Vorschau**, um sich das Endergebnis vorzustellen.

**Weitere Angebote** sind ein Spezialfall der Angebote, die dreispaltig ohne Beitragsbilder angezeigt werden. Sie unterscheiden sich von den "großen" Angeboten nur dadurch, dass sie sich in der **Kategorie "Weitere Angebote"** befinden.

<a name="pages" id="pages"></a>
#### Seiten (AGB, Datenschutz, Impressum, etc.)

Im Gegensatz zu den oben beschriebenen Beiträgen haben **Seiten** keine vorgegebene Struktur. Hier kann mithilfe des Block-Editors frei getextet und gestaltet werden. Es ist auch möglich, vorformatierte Textpassagen aus anderen Dokumenten einzufügen.

Sprachen / Übersetzungen funktionieren genau wie bei den Beiträgen, also gibt es die Seite "Datenschutzerklärung" auch in einer englischen Version als "Privacy Statement".

Die Startseite (Homepage / Frontpage) ist ein Sonderfall und kann nicht unter "Seiten" bearbeitet werden.

Neue Seiten erscheinen nicht automatisch im Menü oder in der Fußzeile, sind aber öffentlich verfügbar und können beispielsweise als Landingpage für Event o.ä. verlinkt werden.

![Screenshot der Seitenübersicht und vom Bearbeiten einer Seite im Block-Editor](anleitung-seiten-bearbeiten.png)

<a name="exportieren" id="exportieren"></a>
### Daten sichern (exportieren)

#### XML-Exportdatei

In einer einfachen Datensicherung (XML-Exportdatei) sind die aktuellen Textinhalte, eingegangene Kontaktformulare sowie manche Einstellungen enthalten. Die ist schnell und einfach unter **Werkzeuge** -> **Export** zu erstellen und herunterzuladen.

#### Backups und Archive

Zusätzliche können vollständige Backups bzw. Archive erstellt werden. Das ist aufwändiger und für eine einfache Website normalerweise nicht nötig, wenn Bilder und Videos zusätzlich noch an anderer Stelle gespeichert sind.

<a name="updaten" id="updaten"></a>
### WordPress aktualisieren

**Warum** aktualisieren? Sicherheitsupdates sind der wichtigste Grund.

**Wie** aktualisieren? Zunächst vergewissern, dass die Seite aktuell korrekt funktioniert. Wenn das der Fall ist, alle Daten sichern (exportieren), dann auf der Seite "Aktualisierungen" alle anstehenden Aktualisierungen auswählen und auf "aktualisieren" klicken.

**Nach** der Aktualisierung muss möglicherweise der Cache (Zwischenspeicher) geleert / aktualisiert werden, in den Einstellungen von W3Total Cache, siehe Link im Dashboard (TODO). 
