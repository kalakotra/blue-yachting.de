# SEO-Inhalte blue-yachting.de – Änderungen im CMS

Stand: 24.11.2026 · Grundlage: Audit vom 16.11.2026 und Crawl der Live-Seite vom 24.11.2026 (161 Seiten)
Erstellt von YouWillLikeIT · Bezug: Pull Request `ywli/tseo-20261124`

Dieses Dokument enthält alle **inhaltlichen** SEO-Änderungen. Die technischen Änderungen (Canonical, hreflang,
robots.txt, Sitemap, strukturierte Daten, Weiterleitungen) stecken im Code und brauchen keine Redaktion –
mit zwei Ausnahmen: die Firmendaten in Abschnitt 1 und das Vorschaubild müssen einmalig im CMS gepflegt werden.

**Reihenfolge:** Erst den Pull Request deployen und `dev/build` ausführen (neue Felder), dann dieses Dokument abarbeiten.

---

## 0. So werden die Änderungen eingetragen

### Meta-Titel und Meta-Beschreibung

Neu gibt es pro Seite das Feld **„Meta-Titel“** (Seite bearbeiten → Reiter *Inhalt* → Bereich *Metadaten*, direkt über *Meta-Beschreibung*).

- **Meta-Titel leer:** Der Browser-Titel bleibt wie bisher „Seitentitel » blue-yachting.de“.
- **Meta-Titel gefüllt:** Er wird **unverändert** als Browser-Titel ausgegeben, ohne Zusatz. Den Markennamen also bei Bedarf selbst anhängen.
- Seitentitel, Menütitel und H1 ändern sich dadurch **nicht**.

Zwei Wege:

1. **Einzelne Seite** (empfohlen): Seite öffnen → *Metadaten* → Felder ausfüllen → **Speichern** → prüfen → **Veröffentlichen**.
2. **Meta Editor** (Menü links, *Meta Editor*): Tabelle aller Seiten mit Titel und Beschreibung, schnell für viele Seiten.
   **Achtung:** Der Meta Editor schreibt bei bereits veröffentlichten Seiten **sofort live** – es gibt keinen Entwurfsschritt.
   Längenhinweise im Meta Editor: Titel 30–60 Zeichen, Beschreibung 120–158 Zeichen.

### Regeln für neue Texte

| | Meta-Titel | Meta-Beschreibung |
|---|---|---|
| Länge | 50–60 Zeichen (max. 60) | 120–158 Zeichen |
| Inhalt | Hauptbegriff vorne (Modell, Thema), dann Nutzen | Konkreter Nutzen, ein Fakt aus der Seite, sanfte Handlungsaufforderung |
| Nicht | „blue-yachting.de“ doppelt, nur Modellname, Beitragsnummer vorne | Dateinamen/Stichwortketten („Sunbeam-29.1-segelboot-…“), Füllsätze („Mehr unter blue-yachting.de“) |

Ansprache: durchgehend **„Sie“**.

---

## 1. Einmalig: Einstellungen → Reiter „SEO“ (neu)

*Einstellungen* (Zahnrad links unten) → Reiter **SEO**. Diese Angaben speisen die strukturierten Daten (LocalBusiness) für Google.
Solange *Firmenname*, *Straße*, *PLZ* und *Ort* nicht ausgefüllt sind, wird kein Firmen-Markup ausgegeben.

| Feld | Eintrag |
|---|---|
| Firmenname | Blue Sailing GmbH |
| Straße und Hausnummer | Ferdinand-Porsche-Str. 13 |
| PLZ | 28237 |
| Ort | Bremen |
| Ländercode | DE |
| Logo | Logo als PNG oder JPG (nicht SVG), mindestens 112 × 112 px, quadratisch oder breit |
| Standard-Vorschaubild | **Neu erstellen:** 1200 × 630 px, JPG, z. B. eine Allures oder Garcia unter Segeln mit Logo. Ersetzt das bisherige 23 × 34 px kleine Bild, das in WhatsApp, LinkedIn und Facebook als leere Vorschau erschien. |
| Standard-Beschreibung | Blue Yachting aus Bremen: Exklusiv-Importeur für Allures, Garcia, RM Yachts und Sunbeam in Deutschland, Österreich und der Schweiz. |

Bitte die Adresse mit dem Impressum abgleichen – sie muss überall identisch sein (Impressum, Kontaktseite, Google-Unternehmensprofil).

Unter *Einstellungen → Main* prüfen: **TelephoneLink** im Format `+4942134660250` (ohne Leerzeichen) – wird für den Telefon-Link und die strukturierten Daten verwendet.

---

## 2. Hauptseiten: Meta-Titel und Meta-Beschreibung

Diese Seiten verkaufen – sie haben Priorität. „Aktuell“ zeigt den Stand der Live-Seite am 24.11.2026.


### `/de/`

- **Meta-Titel** (59): Yachthändler in Bremen – Neuboote & Service | Blue Yachting
- **Meta-Beschreibung** (157): Blue Sailing GmbH aus Bremen: Exklusiv-Importeur für Allures, Garcia, RM Yachts und Sunbeam in Deutschland, Österreich und der Schweiz. Beratung und Service.
- Aktuell: „Finden Sie bei uns tolle Yachten, Gebrauchtboote, Neuboote und vieles mehr. Alles dazu finden Sie hier bei uns auf | blue-yachting.de.“

### `/de/neuboote/`

- **Meta-Titel** (55): Neue Segelyachten kaufen – Allures, Garcia, RM, Sunbeam
- **Meta-Beschreibung** (143): Neue Segelyachten von Allures, Garcia, RM Yachts und Sunbeam: Blue Yachting ist Exklusiv-Importeur für Deutschland, Österreich und die Schweiz.
- Aktuell: „Wir sind Ihr Exklusiv Importeur und Vertreter für RM Yachts, ALLURES Yachting, GARCIA Yachts, ELAN Yachts und HH Catamarans für Deutschland, Österreich und die deutschsprachige Schweiz“

### `/de/neuboote/allures-yachting/`

- **Meta-Titel** (46): Allures Yachting – Aluminium-Blauwasseryachten
- **Meta-Beschreibung** (158): Allures Yachting aus Cherbourg baut Blauwasser-Segelyachten aus Aluminium für die große Reise. Alle Modelle, Beratung und Verkauf bei Blue Yachting in Bremen.
- Aktuell: „Wer auf die ganz große Reise gehen möchte, wird die ALLURES Yachten bevorzugen. Sie sind die perfekten Langfahrtsegelyachten. Mehr unter blue-yachting.de.“

### `/de/neuboote/allures-yachting/allures-40-9/`

- **Meta-Titel** (45): Allures 40.9 – kompakte Blauwasser-Segelyacht
- **Meta-Beschreibung:** aktuelle Beschreibung behalten (146 Zeichen, passt).

### `/de/neuboote/allures-yachting/allures-45-9/`

- **Meta-Titel** (50): Allures 45.9 – Blauwasser-Segelyacht aus Aluminium
- **Meta-Beschreibung** (141): Die Allures 45.9 verbindet Komfort, Sicherheit und Performance für Blauwasserreisen auf allen Meeren. Beratung und Verkauf bei Blue Yachting.
- Aktuell: *leer*

### `/de/neuboote/allures-yachting/allures-51-9/`

- **Meta-Titel** (44): Allures 51.9 – Flaggschiff für die Langfahrt
- **Meta-Beschreibung** (148): Die Allures 51.9 ist das Flaggschiff von Allures Yachting: luxuriöser Komfort und hohe Seetüchtigkeit für die Langfahrt. Beratung bei Blue Yachting.
- Aktuell: *leer*

### `/de/neuboote/allures-yachting/allures-horizon-47/`

- **Meta-Titel** (55): Allures Horizon 47 – Aluminium-Segelyacht für Langfahrt
- **Meta-Beschreibung** (134): Allures Horizon 47: Aluminiumrumpf, Kompositdeck, Integralschwert und Doppelruder – Entwurf von Berret-Racoupeau für Blauwasserreisen.
- Aktuell: „Allures Horizon 47 - 47 Fuß Segelyacht für die Langfahrt / Blauwassersegeln“

### `/de/neuboote/allures-yachting/allures-yachting-werft/`

- **Meta-Titel** (47): Allures Yachting Werft in Cherbourg – seit 2003
- **Meta-Beschreibung** (150): Seit 2003 baut Allures Yachting in Cherbourg Blauwasser-Segelyachten, entworfen mit Berret-Racoupeau. Lernen Sie die Werft und ihre Geschichte kennen.
- Aktuell: *leer*

### `/de/neuboote/garcia-yachts/`

- **Meta-Titel** (56): Garcia Yachts – Aluminium-Segelyachten aus der Normandie
- **Meta-Beschreibung** (153): Seit 1974 baut Garcia Yachts in der Normandie Segelyachten aus Aluminium; über 350 Garcias segeln von der Arktis bis zur Antarktis. Modelle und Beratung.
- Aktuell: „Seit 1974 werden von GARCIA Yachten in der französischen Normandie aus Aluminium gebaut. Erfahren Sie mehr über den Spezialisten unter blue-yachting.de.“

### `/de/neuboote/garcia-yachts/garcia-explocat-52/`

- **Meta-Titel** (55): Garcia Explocat 52 – Aluminium-Katamaran für Blauwasser
- **Meta-Beschreibung** (152): Der Garcia Explocat 52 verbindet die Robustheit von Aluminium mit dem Wohnkomfort eines Katamarans – gebaut für große Blauwassertörns. Beratung bei uns.
- Aktuell: „GARCIA Explocat 52 - der Aluminium Katamaran für wirklich alle Breiten“

### `/de/neuboote/garcia-yachts/garcia-exploration-45/`

- **Meta-Titel** (48): Garcia Exploration 45 – Aluminium-Explorer-Yacht
- **Meta-Beschreibung** (158): Garcia Exploration 45: Vollaluminium-Segelyacht mit Integralschwert, entwickelt mit Segellegende Jimmy Cornell. Infos, Beratung und Verkauf bei Blue Yachting.
- Aktuell: *leer*

### `/de/neuboote/garcia-yachts/garcia-exploration-52/`

- **Meta-Titel** (54): Garcia Exploration 52 – mit Komfort um die Welt segeln
- **Meta-Beschreibung** (153): Garcia Exploration 52: Aluminium-Segelyacht mit 52 Fuß für grenzenlose Entdeckungen – die große Schwester der Exploration 45. Beratung bei Blue Yachting.
- Aktuell: *leer*

### `/de/neuboote/garcia-yachts/garcia-exploration-60/`

- **Meta-Titel** (46): Garcia Exploration 60 – Luxus-Expeditionsyacht
- **Meta-Beschreibung** (147): Garcia Exploration 60: Aluminium-Expeditionsyacht für weltweite Reisen, maximale Sicherheit und Werterhalt. Beratung und Verkauf bei Blue Yachting.
- Aktuell: „GARCIA Exploration 60: hochwertige Aluminium-Expeditionsyacht für weltweite Reisen, maximale Sicherheit und Werterhalt. Beratung bei Blue Yachting Deutschland.“

### `/de/neuboote/garcia-yachts/garcia-yachts-werft/`

- **Meta-Titel** (54): Garcia Yachts Werft – über 40 Jahre Aluminium-Yachtbau
- **Meta-Beschreibung** (153): Garcia Yachts ist seit über 40 Jahren eine Referenz im Custom-Yachtbau aus Aluminium; mehr als 350 Yachten sind weltweit unterwegs. Die Werft im Porträt.
- Aktuell: *leer*

### `/de/neuboote/rm-yachts/`

- **Meta-Titel** (52): RM Yachts – Performance-Segelyachten aus La Rochelle
- **Meta-Beschreibung** (152): RM Yachts aus La Rochelle fertigt schnelle Fahrtenyachten aus Sperrholz-Epoxid, entworfen von Marc Lombard. Alle Modelle und Beratung bei Blue Yachting.
- Aktuell: „RM Yachts aus La Rochelle fertig Performance Segelyachten in einem spannenden Materialmix aus Sperrholz und Epoxy. Erfahren Sie mehr auf blue-yachrting.de“

### `/de/neuboote/rm-yachts/rm1080/`

- **Meta-Titel** (48): RM1080 – 36-Fuß-Blauwasser-Cruiser von RM Yachts
- **Meta-Beschreibung** (156): Die RM1080 ist ein 36-Fuß-Blauwasser-Cruiser von RM Yachts aus La Rochelle – für Kurz- und Langfahrt, Küsten- und Fahrtensegeln. Beratung bei Blue Yachting.
- Aktuell: *leer*

### `/de/neuboote/rm-yachts/rm1180/`

- **Meta-Titel** (47): RM1180 – Performance-Fahrtenyacht von RM Yachts
- **Meta-Beschreibung** (149): RM1180 von RM Yachts: Design von Marc Lombard – eine moderne Fahrtenyacht, bei der Stil und Segelleistung zusammenpassen. Beratung bei Blue Yachting.
- Aktuell: *leer*

### `/de/neuboote/rm-yachts/rm1380/`

- **Meta-Titel** (50): RM1380 – Flaggschiff von RM Yachts aus Holz-Epoxid
- **Meta-Beschreibung** (158): Die RM1380 ist das Flaggschiff von RM Yachts: Holz-Epoxid-Komposit aus La Rochelle, entworfen von Marc Lombard. Infos, Beratung und Verkauf bei Blue Yachting.
- Aktuell: *leer*

### `/de/neuboote/rm-yachts/rm890/`

- **Meta-Titel** (43): RM 890+ – kompakte Segelyacht von RM Yachts
- **Meta-Beschreibung** (138): Die RM 890+ ist die direkte Erbin der ersten RM-Modelle und seit 2013 eine Referenz in ihrer Klasse. Infos und Beratung bei Blue Yachting.
- Aktuell: *leer*

### `/de/neuboote/rm-yachts/rm970/`

- **Meta-Titel** (43): RM 970+ – Europäische Yacht des Jahres 2017
- **Meta-Beschreibung** (146): Die RM 970+ gewann 2016 den Design Award des Voile Magazine und wurde 2017 zur Europäischen Yacht des Jahres gekürt. Beratung und Verkauf bei uns.
- Aktuell: *leer*

### `/de/neuboote/sunbeam-yachts/`

- **Meta-Titel** (59): Sunbeam Yachts – handgefertigte Segelyachten aus Österreich
- **Meta-Beschreibung** (151): Sunbeam Yachts: in Handarbeit gefertigte Segelyachten mit modernem Design, hohem Komfort und guten Segeleigenschaften – für Binnen- und Küstengewässer.
- Aktuell: „Sunbeam Yachts steht für hochwertige, handgefertigte Segelyachten mit modernem Design, höchstem Komfort und exzellenten Segeleigenschaften. Entdecke Premium-Yachten für Binnen und Küstengewässer“

### `/de/neuboote/sunbeam-yachts/29-1-gt-gran-turismo-performance-festkiel-segelboot/`

- **Meta-Titel** (56): Sunbeam 29.1 GT – Daysailer mit Festkiel und Performance
- **Meta-Beschreibung** (155): Die Sunbeam 29.1 GT ist die leichtere, auf Leistung getrimmte Variante der Sunbeam 29.1 – mit 1,75 m tiefem Festkiel. Infos und Beratung bei Blue Yachting.
- Aktuell: „Sunbeam-29.1-GT-segelboot-festkiel-preis-test“

### `/de/neuboote/sunbeam-yachts/29-1-segeboot-daysailer-performance-schwenkkiel/`

- **Meta-Titel** (54): Sunbeam 29.1 – Daysailer und Weekender mit Schwenkkiel
- **Meta-Beschreibung** (148): Die Sunbeam 29.1 ist Weekender, Daysailer und Allrounder in einem: sportlich, komfortabel und mit Schwenkkiel. Infos und Beratung bei Blue Yachting.
- Aktuell: „Sunbeam-29.1-segelboot-daysailer-preis-test
“

### `/de/neuboote/sunbeam-yachts/32-1-lifestyle-segelboot-familienyacht/`

- **Meta-Titel** (54): Sunbeam 32.1 – Familienyacht mit futuristischem Design
- **Meta-Beschreibung** (151): Die Sunbeam 32.1 bricht mit Konventionen: futuristisches Design, das polarisiert – ein Lifestyle-Segelboot für die Familie. Beratung bei Blue Yachting.
- Aktuell: „Sunbeam-32.1-segelboot-yacht-preis-test“

### `/de/neuboote/sunbeam-yachts/sunbeam-22-1/`

- **Meta-Titel** (45): Sunbeam 22.1 – kleines, sportliches Segelboot
- **Meta-Beschreibung** (153): Die Sunbeam 22.1 ist das kleinste Segelboot der österreichischen Werft: jung, elegant und sportlich – einfach zu segeln und trailerbar. Beratung bei uns.
- Aktuell: „Sunbeam-22.1-segelboot-trailer-preis-test“

### `/de/neuboote/sunbeam-yachts/sunbeam-28-1/`

- **Meta-Titel** (44): Sunbeam 28.1 – Segelyacht von Sunbeam Yachts
- **Meta-Beschreibung:** erst eintragen, wenn die Seite Inhalt hat (siehe Abschnitt 5).

### `/de/neuboote/sunbeam-yachts/sunbeam-36-2/`

- **Meta-Titel** (49): Sunbeam 36.2 – das Flaggschiff von Sunbeam Yachts
- **Meta-Beschreibung** (155): Die Sunbeam 36.2 ist das Flaggschiff von Sunbeam: 11,02 m lang, 3,42 m breit und passend für die meisten Liegeplätze an Nord- und Ostsee. Beratung bei uns.
- Aktuell: „Sunbeam-32.1-segelboot-yacht-preis-test“

### `/de/gebrauchtboote/`

- **Meta-Titel** (43): Gebrauchte Segelyachten & Katamarane kaufen
- **Meta-Beschreibung** (157): Hochwertige gebrauchte Segelyachten, Katamarane und Motoryachten – jede Yacht von uns persönlich besichtigt und geprüft. Aktuelle Angebote bei Blue Yachting.
- Aktuell: „Wir vermarkten ausschließlich hochwertige Segelyachten, Katamarane und Motoryachten. Alle angebotenen Yachten wurden von uns persönlich besichtigt und inspiziert.“

### `/de/service/`

- **Meta-Titel** (48): Yacht-Service in Bremerhaven – Wartung und Refit
- **Meta-Beschreibung** (148): Wartung und Refit für Ihre Yacht: Mit unserer Basis in Bremerhaven und eigenen Servicemitarbeitern kümmern wir uns mit Liebe zum Detail um Ihr Boot.
- Aktuell: „Mit unserer Basis in Bremerhaven und eigenen Servicemitarbeiter bieten wir eine Vielzahl von Wartungsarbeiten und Refitarbeiten. Wir kümmern uns mit Liebe zum Detail um Ihr Eigentum.“

### `/de/service/hs-segelreisen/`

- **Meta-Titel** (56): HS Segelreisen – Mitsegeln auf der Garcia Exploration 52
- **Meta-Beschreibung** (152): Unser Partner HS Segelreisen segelt die Garcia Exploration 52 „Polaris“: exklusive Segelreisen, Trainings und Meilentörns an Bord einer Blauwasseryacht.
- Aktuell: *leer*

### `/de/service/janssen-maritimes-gmbh/`

- **Meta-Titel** (58): Janssen Maritimes Bremerhaven – Boote, Motoren, Ausrüstung
- **Meta-Beschreibung** (152): Janssen Maritimes GmbH in Bremerhaven gehört seit 2022 zu Blue Yachting: Wassersport-Fachgeschäft für Boote, Motoren und Ausrüstung mit eigenem Service.
- Aktuell: „Janssen Maritimes, Bremerhaven ist ein Teil von Blue Yachting | www.blue-yachting.de“

### `/de/service/oesterreich/`

- **Meta-Titel** (49): Blue Yachting in Österreich – Partner am Attersee
- **Meta-Beschreibung** (154): Franz Mittendorfer betreut mit seinem Yachtservice in Schörfling am Attersee das Verkaufsgebiet Österreich – mit mobilem Auslieferungsservice an den Seen.
- Aktuell: *leer*

### `/de/service/oxley-sails/`

- **Meta-Titel** (59): Oxley Sails Bora und Levante – Allroundsegel für Blauwasser
- **Meta-Beschreibung** (149): Die Oxley-Segel Bora und Levante ersetzen Spinnaker oder Gennaker: ruhigere Fahrt und besseres Handling unter Autopilot – ideal für Blauwassersegler.
- Aktuell: *leer*

### `/de/service/yachtfinanzierung/`

- **Meta-Titel** (48): Yachtfinanzierung und Leasing – Boot finanzieren
- **Meta-Beschreibung** (147): Boot finanzieren oder Yacht leasen: günstige Angebote für Finanzierung und Leasing neuer und gebrauchter Yachten über unseren Finanzierungspartner.
- Aktuell: *leer*

### `/de/blog/`

- **Meta-Titel** (45): Segel-Blog: Yachten, Reviere und Werftbesuche
- **Meta-Beschreibung** (142): Geschichten vom Segeln und vom Leben an Bord: Reiseberichte, Werftbesuche, Yachttests und News zu Yachten von Allures, Garcia, RM und Sunbeam.
- Aktuell: „Unser Blog wir unregelmäßig mit kleinen Geschichten aus unserem Alltag, interessanten Reiseerlebnissen unserer Kunden, Reiseberichten, Neuigkeiten und Hinweisen aktualisiert.“

### `/de/kontakt/`

- **Meta-Titel** (33): Kontakt – Blue Yachting in Bremen
- **Meta-Beschreibung** (155): Kontakt zu Blue Yachting in Bremen: Beratung zu Allures, Garcia, RM Yachts und Sunbeam, Kauf und Service. Rufen Sie an oder nutzen Sie das Anfrageformular.
- Aktuell: *leer*

### `/de/kontakt/newsletter/`

- **Meta-Titel** (46): Newsletter – Blauwasser-News von Blue Yachting
- **Meta-Beschreibung** (149): Exklusive Einblicke in die Welt der Blauwasseryachten, Geschichten und aktuelle Angebote – einmal im Monat per E-Mail. Jetzt zum Newsletter anmelden.
- Aktuell: *leer*

### `/de/kontakt/impressum/`

- **Meta-Titel** (37): Impressum – Blue Sailing GmbH, Bremen
- **Meta-Beschreibung** (152): Impressum der Website blue-yachting.de: Anbieterkennzeichnung der Blue Sailing GmbH mit Sitz in Bremen, Kontaktdaten und Angaben gemäß Telemediengesetz.
- Aktuell: *leer*

### `/de/kontakt/datenschutz/`

- **Meta-Titel** (36): Datenschutzerklärung – Blue Yachting
- **Meta-Beschreibung** (136): Datenschutzerklärung von blue-yachting.de: welche personenbezogenen Daten wir verarbeiten, zu welchem Zweck und welche Rechte Sie haben.
- Aktuell: *leer*

Die englische Startseite `/en/` zeigt derzeit deutschen Text – siehe Abschnitt 6, bevor dort Metadaten gepflegt werden.

---

## 3. Blog: fehlende Meta-Beschreibungen (46 Beiträge)

Diese Beiträge haben keine Meta-Beschreibung; Google schneidet dann beliebigen Text aus der Seite aus.

| Beitrag | Meta-Beschreibung (Vorschlag) | Zeichen |
|---|---|---|

| `/de/blog/10-hs-segelreisen/` | Mitsegeln auf der Garcia Exploration 52: Mit HS Segelreisen haben Sie die seltene Chance, eine echte Blauwasseryacht auf einem Törn selbst zu erleben. | 150 |
| `/de/blog/11-der-traum-kat/` | Die Eigner der ersten HH Catamarans Ocean 50 erzählen, wie sie zu HH gekommen sind und warum sie sich für die OC 50 als Traum-Katamaran entschieden haben. | 154 |
| `/de/blog/14-die-praxis-app/` | Zwölf Stunden Segelpraxis in der Hosentasche: Wir stellen die App „Skipper-Praxis“ vor und zeigen, was sie Seglerinnen und Seglern an Bord bietet. | 146 |
| `/de/blog/16-vorsegelfragen/` | Welches Rigg passt zu welcher Art des Segelns? Ein Blick auf Vorsegel und Riggtypen – von den IOR-Zeiten bis zu modernen Fahrten- und Blauwasseryachten. | 152 |
| `/de/blog/17-drei-spannende-premieren/` | Blue Yachting auf der boot 2023 in Düsseldorf: drei spannende Premieren auf einer der größten Indoor-Bootsmessen, vom 21. bis 29. Januar 2023. | 142 |
| `/de/blog/18-segeln-zum-weihnachtsmarkt/` | Segeln im Winter – und warum nicht mal zum Weihnachtsmarkt? Detlef Jens über ruhige Häfen, Kaminofen an Bord und den besonderen Reiz der kalten Saison. | 151 |
| `/de/blog/20-die-erste-oder-zweite-allures-51-9/` | Baunummer 1 oder Baunummer 2? Wir berichten von der ersten Allures 51.9 auf der boot Düsseldorf und was das neue Allures-Flaggschiff auszeichnet. | 145 |
| `/de/blog/21-rm-yachten-die-bauweise/` | Leicht, fest und langlebig: Warum RM Yachts seit über 35 Jahren auf Sperrholz-Epoxid setzt und was diese Bauweise für Segler bedeutet. | 134 |
| `/de/blog/22-katrina-westphal/` | Architektin und Seglerin: Katrina Westphal, die Sie vielleicht schon auf unseren Messeständen getroffen haben, über zwei Leidenschaften in einer Seele. | 151 |
| `/de/blog/24-der-neue-standard-hh44/` | Der HH44 Katamaran setzt neue Standards für zeitgemäße Blauwasseryachten – mit akribisch entwickelten Rümpfen und Anhängen. Ein Blick auf das Konzept. | 150 |
| `/de/blog/25-kopenhagen-fuer-segler/` | Kopenhagen für Segler: Keine europäische Metropole lässt sich so gut mit der eigenen Yacht ansteuern. Tipps zu Liegeplätzen, Kultur und Kulinarik. | 146 |
| `/de/blog/26-live-erleben-elan-gt6-und-rm1180/` | Elan GT6 und RM1180 live erleben: Vom 12. bis 14. Mai 2023 zeigten wir beide Yachten auf Deutschlands größter In-Water Boat Show in der ancora Marina. | 150 |
| `/de/blog/27-ile-de-brehat/` | Die Ile de Bréhat gilt als eine der zauberhaftesten Inseln der Bretagne. Ein Revierbericht über die Blumeninsel, ihre Ankerplätze und Besonderheiten. | 149 |
| `/de/blog/28-cannes-im-september/` | Ein heißer Spätsommer in Cannes: Warum die Saison an der Côte d’Azur erst im September richtig beginnt – und was Segler dort erwartet. | 134 |
| `/de/blog/29-rm-1380/` | RM 1380: Savoir-vivre trifft savoir-voile. Unser Eindruck vom Flaggschiff von RM Yachts – gesehen im Hafen und auf dem Wasser vor La Rochelle. | 142 |
| `/de/blog/30-belle-ile-und-morbihan/` | Segeln zwischen Algen und Austern: Belle Ile und der Golf von Morbihan sind reizvolle, aber anspruchsvolle Reviere in der südlichen Bretagne. | 141 |
| `/de/blog/32-elan-gt6-explorer/` | Elan GT6 Explorer: eine zeitgemäße Interpretation der Langfahrtyacht, entwickelt mit Humphreys Yacht Design und dem Porsche Design Studio. | 138 |
| `/de/blog/33-was-bedeutet-performance-bei-der-hh44/` | Was bedeutet Performance beim Katamaran HH44? Wie der Luxury Performance Catamaran die Maßstäbe für moderne Hochsee-Fahrtenkats verschiebt. | 139 |
| `/de/blog/34-martinique/` | Regatten, Rum und Regenwald: Martinique ist ein Stück Europa in den Tropen – mit Le Marin als einem der besten Yachtzentren der südlichen Karibik. | 146 |
| `/de/blog/36-winter-in-der-algarve/` | Wunderbare Algarve: Warum viele Fahrtenyachten auf dem Weg nach Süden einen Winter dort bleiben – und wie es danach zu den Kanaren oder ins Mittelmeer geht. | 156 |
| `/de/blog/37-blue-yachting-auf-der-boot-2024/` | Blue Yachting auf der boot 2024 in Düsseldorf: Sie finden uns mit drei Ständen in Halle 16, unter anderem mit der neuen RM1380 von RM Yachts. | 141 |
| `/de/blog/38-the-winner-is-hh66/` | Der HH66 Katamaran gewinnt die erste Regatta der neuen Maxi-Multihull-Serie in der Karibik. Ein Bericht über Rennen, Boot und Crew. | 131 |
| `/de/blog/39-hemingway-und-der-hh44/` | Hemingway und der HH44: Unterwegs zur Multihull-Messe in La Grande Motte am Rand der Camargue – und an Bord des neuen HH44 Katamarans. | 134 |
| `/de/blog/40-elan-gt6-oder-elan-e6/` | Elan GT6 oder Elan E6 – welche Yacht passt zu Ihnen? Wir vergleichen die beiden Flaggschiffe der slowenischen Werft und ihre Modellreihen. | 138 |
| `/de/blog/41-essen-im-aquarium/` | Seafood speisen unter Wasser: ein besonderes Restaurant an Norwegens Südkap, wo Skagerrak und Nordsee aufeinandertreffen – ein Ziel für Segler. | 143 |
| `/de/blog/42-mittsommer-auf-hanoe/` | Mittsommer auf Hanö: Ein Törnbericht von der zauberhaften schwedischen Insel – Ankunft im Morgengrauen, ruhige Abdeckung und dunkelgrüne Wälder. | 144 |
| `/de/blog/45-joie-de-vivre-auf-langfahrt/` | Joie de Vivre auf Langfahrt: Die neue Elan GT6 X ist eine elegante, sportliche und robuste Interpretation der Explorer-Yacht für das Blauwassersegeln. | 150 |
| `/de/blog/46-cannes-yachting-festival/` | Unsere Yachten auf dem Cannes Yachting Festival: Warum der September an der Côte d’Azur für Bootsinteressierte die beste Zeit für einen Besuch ist. | 147 |
| `/de/blog/47-grand-large-yachts-in-cherbourg/` | Werftbesuch in Cherbourg bei Grand Large Yachts: wie Allures und Garcia gebaut werden und warum der Hafen strategisch so günstig liegt. | 135 |
| `/de/blog/48-le-tour-du-monde/` | Le Tour du Monde in Brest: die legendäre Seglerbar in der Marina Moulin Blanc, mit Blick über den Hafen und die Rade de Brest. | 126 |
| `/de/blog/allures-39-9-samai/` | Blogempfehlung SY Samai: Wie Michael Gramse nach einem Kojencharter in die Antarktis seinen Traum von der eigenen Allures 39.9 verwirklicht hat. | 144 |
| `/de/blog/buecher-von-jimmy-cornell/` | Die Segelbücher von Jimmy Cornell gibt es neu überarbeitet auf Deutsch. Wir stellen „Segelreisen weltweit“ und den erfahrenen Weltumsegler vor. | 143 |
| `/de/blog/das-integralschwert/` | Das Integralschwert als Designkonzept für Blauwasseryachten: Welche Vorteile es bei der Auswahl einer Langfahrtyacht bietet und worauf Sie achten sollten. | 154 |
| `/de/blog/detlef-jens/` | Buchtipp für Segler: „Triple Timpe“ von Detlef Jens vereint drei spannende Yachtkrimis – ideale Lektüre für die Winterpause unter Deck. | 135 |
| `/de/blog/ein-starker-auftritt-auf-der-boot-die-neue-elan-impression-43/` | Ein starker Auftritt auf der boot: Die neue Elan Impression 43, entworfen vom Vater-Sohn-Team Rob und Tom Humphreys von Humphreys Yacht Design. | 143 |
| `/de/blog/elan-e6-gesegelt/` | Probesegeln mit Spaß: Die Elan E6 vor Portorož bei 20 Knoten Wind, kurzer Welle und Sonne – unser Eindruck von der slowenischen Segelyacht. | 139 |
| `/de/blog/elan/` | Die Elan GT-Serie im Überblick: ein Blick auf die Yachten und ein Gespräch mit den Konstrukteuren von Humphreys Yacht Design über das Konzept. | 142 |
| `/de/blog/elektroantrieb-fuer-die-segelyacht-elan-kooperiert-mit-oceanvolt/` | Elektroantrieb für die Segelyacht: Elan kooperiert mit Oceanvolt. Was elektrische Antriebe heute leisten und wie sie an Bord integriert werden. | 143 |
| `/de/blog/hh-catamarans-ecodrive-hybrid-antrieb/` | Nachhaltig unterwegs mit HH Catamarans: Wie der EcoDrive-Hybridantrieb moderne Performance-Katamarane energieautark macht. | 122 |
| `/de/blog/hh44-decklayout/` | Einfach segeln: Decklayout und Handling des Performance-Cruising-Katamarans HH44 – schnell, aber zugleich einfach und entspannt zu segeln. | 138 |
| `/de/blog/marstrand/` | Marstrand: Herrenclub, Piratennest und königlicher Spielplatz. Ein Revierporträt der kleinen schwedischen Insel mit großer Vergangenheit. | 137 |
| `/de/blog/nantucket/` | Nantucket – die Insel von Ahab, Hilfiger und Co. und jeden Sommer Treffpunkt klassischer Yachten. Ein Besuch an der Ostküste der USA. | 133 |
| `/de/blog/rm-yachts-design/` | Das besondere Designkonzept von RM Yachts: Warum die modernen RM-Yachten an Hochseerennyachten wie die Open 60 erinnern – und was das bringt. | 141 |
| `/de/blog/wann-wird-aus-einem-fahrtenschiff-eine-expeditionsyacht/` | Wann wird aus einem Fahrtenschiff eine Expeditionsyacht? Pete Goss erklärt, worauf es bei der Wahl einer Yacht für abgelegene Reviere ankommt. | 142 |
| `/de/blog/weltumsegelung-jimmy-cornell-garcia-exploration-arktis/` | Mit Garcia und Jimmy Cornell ins ewige Eis: der Start der High Latitudes Challenge und warum die Wahl des richtigen Segelboots entscheidend ist. | 144 |
| `/de/blog/windsteueranlagen-fuer-segelyachten/` | Windsteueranlagen für Segelyachten: Erleben Windsteuersysteme eine Renaissance? Ein Überblick über die Systeme am Markt und ihre Vorteile an Bord. | 146 |

---

## 4. Blog: zu lange Seitentitel (62 Beiträge)

Bei 62 Beiträgen ist der Browser-Titel länger als 60 Zeichen und wird in Google abgeschnitten – meist, weil die
Beitragsnummer („#114 - “) vorne steht und „ » blue-yachting.de“ angehängt wird.
**Lösung:** Feld *Meta-Titel* mit dem Vorschlag füllen. Die Überschrift im Beitrag und die Nummerierung im Blog bleiben unverändert.

| Beitrag | Aktueller Titel | Meta-Titel (Vorschlag) | Zeichen |
|---|---|---|---|

| `/de/blog/20-die-erste-oder-zweite-allures-51-9/` | #20 - Die erste, oder zweite, Allures 51.9 | Die erste, oder zweite, Allures 51.9 | 36 |
| `/de/blog/33-was-bedeutet-performance-bei-der-hh44/` | #33 - Was bedeutet Performance bei der HH44? | Was bedeutet Performance bei der HH44? | 38 |
| `/de/blog/43-garcia-60-nowhere-you-cant-go/` | #43 - Garcia Exploration 60: Nowhere you can't go! | Garcia Exploration 60: Nowhere you can't go! | 44 |
| `/de/blog/60-vom-blauwassersegeln-allures-yacht-atlantik-erfahrungen/` | #60 – Vom Blauwasser-Matrosen zum ALLURES-Kenner | Vom Blauwasser-Matrosen zum ALLURES-Kenner | 42 |
| `/de/blog/63-feste-sprayhood-carbon-mast-rollbaum-allures-51-9/` | #63 - Feste Sprayhood und mehr für die ALLURES 51.9 | Feste Sprayhood und mehr für die ALLURES 51.9 | 45 |
| `/de/blog/allures-51-9-segelyacht-aluminium-wikinger-route-groenland-neufundland/` | #87 - Mit der ALLURES 51.9 auf der legendären Wikinger-Route | Mit der Allures 51.9 auf der legendären Wikinger-Route | 54 |
| `/de/blog/allures-horizon-47-neues-blauwasser-yacht-konzept/` | #80 - Es werde Licht! Die neue ALLURES Horizon 47 | Es werde Licht! Die neue ALLURES Horizon 47 | 43 |
| `/de/blog/aluminium-bootsbaumaterial-vorteile-garcia-allures-yachten/` | #85 - Traum-Material für Traum-Yachten: Aluminium! | Traum-Material für Traum-Yachten: Aluminium! | 44 |
| `/de/blog/aluminium-segel-katamaran-garcia-exolocat-52-uebergabe/` | #66 - Auslieferung eines ExploCat 52 von Garcia in Cherbourg | Auslieferung eines ExploCat 52 von Garcia in Cherbourg | 54 |
| `/de/blog/aluminium-segelyachten-wertbestaendig-preis-2026-kaufen-garcia-yachts/` | #114 - Mit Aluminium auf Erfolgskurs: Garcia Yachts in Cannes 2026! | Mit Aluminium auf Erfolgskurs: Garcia Yachts in Cannes 2026! | 60 |
| `/de/blog/auslieferung-segelyacht-service-blue-yachting-elan-gt6x/` | #61 – So sieht eine professionelle Yacht-Übergabe aus! | So sieht eine professionelle Yacht-Übergabe aus! | 48 |
| `/de/blog/auslieferung-uebergabe-hh-catamarans-katamaran/` | #54 - Destination Florida: HH 52 „TABOO“ kommt aus der Werft | Destination Florida: HH 52 „TABOO“ kommt aus der Werft | 54 |
| `/de/blog/baufortschritt-allures-horizon-47-aluminium-yacht/` | #99 - Der Rumpf der neuen ALLURES Horizon 47 nimmt Gestalt an | Der Rumpf der neuen ALLURES Horizon 47 nimmt Gestalt an | 55 |
| `/de/blog/blue-yachting-auch-fuer-oesterreich-schweiz-bootskauf/` | #94 - Yachtkauf für Österreicher und Schweizer: Bei BLUE YACHTING herzlich willkommen! | Yachtkauf für Österreicher und Schweizer \| Blue Yachting | 56 |
| `/de/blog/blue-yachting-neuer-sunbeam-haendler/` | #89 - Ihr neuer SUNBEAM-Spezialist in Norddeutschland | Ihr neuer SUNBEAM-Spezialist in Norddeutschland | 47 |
| `/de/blog/boot-duesseldorf-mit-blue-yachting-garcia-allures-sunbeam/` | #95 - Viele Segel-Projekte nehmen an Fahrt auf | Viele Segel-Projekte nehmen an Fahrt auf | 40 |
| `/de/blog/bootsbau-legende-paul-hakes-hh-katamarane/` | #74 - „Yachten und Menschen: Das gehört einfach zusammen!“ | „Yachten und Menschen: Das gehört einfach zusammen!“ | 52 |
| `/de/blog/bootsbegutachtung-kaufberatung-survey-sicherheit-gebrauchtboot-kaufen/` | #83 - Sicherheit beim Gebrauchtbootkauf von Aluminium-Yachten | Sicherheit beim Gebrauchtbootkauf von Aluminium-Yachten | 55 |
| `/de/blog/bootskauf-sunbeam-32-1-werterhalt-qualitaet-preis/` | #112 - “Genau richtig!” – Die SUNBEAM 32.1 als Familien-Segelboot | “Genau richtig!” – Die SUNBEAM 32.1 als Familien-Segelboot | 58 |
| `/de/blog/bootsmarkt-ausblick-2026-yachthandel/` | #92 - “Man redet wieder mehr über Bootskauf & Segelprojekte“ | “Man redet wieder mehr über Bootskauf & Segelprojekte“ | 54 |
| `/de/blog/bootsrundgang-sunbeam-29-1-innen-aussen-walkthrough/` | #96 - Das ist die SUNBEAM 29.1 „All White“-Edition | Das ist die SUNBEAM 29.1 „All White“-Edition | 44 |
| `/de/blog/bootsrundgang-sunbeam-32-1-segelyacht-test-kaufen-preis/` | #98 - Alles, nur nicht Mainstream: SUNBEAM 32.1 | Alles, nur nicht Mainstream: SUNBEAM 32.1 | 41 |
| `/de/blog/das-integralschwert/` | Das Integralschwert als Designkonzept für Blauwasser Segelyachten | Integralschwert: Designkonzept für Blauwasseryachten | 52 |
| `/de/blog/das-perfekte-segelboot-ostsee-9-meter-klasse-rm-8-90/` | #69 - Das ideale Ostsee-Segelboot: RM Yacht 8.90 | Das ideale Ostsee-Segelboot: RM Yacht 8.90 | 42 |
| `/de/blog/elan-vertragshaendler-in-deutschland/` | #86 - ELAN YACHTS startet mit neuem Luxus-Performance-Schiff durch. | ELAN Yachts startet mit neuem Luxus-Performance-Schiff | 54 |
| `/de/blog/elan-yachts-experience-center-eye/` | #53 – Ab Frühling für ELAN-Eigner in spe: Das EYE ist für Sie geöffnet! | ELAN Experience Center EYE: geöffnet für Eigner in spe | 54 |
| `/de/blog/elektroantrieb-fuer-die-segelyacht-elan-kooperiert-mit-oceanvolt/` | Elektroantrieb für die Segelyacht - Elan kooperiert mit Oceanvolt | Elektroantrieb für Segelyachten: Elan und Oceanvolt | 51 |
| `/de/blog/empfehlung-oxley-segel-erfahrungen-qualitaet/` | #90 - “Geht einfach segeln und habt Spaß!“ | “Geht einfach segeln und habt Spaß!“ | 36 |
| `/de/blog/erfahrungen-mit-rm-yachten-8-90/` | #65 - Die ersten 2.000 Seemeilen mit der RM 8.90 | Die ersten 2.000 Seemeilen mit der RM 8.90 | 42 |
| `/de/blog/gestiegene-nachfrage-nach-qualitaet-boot-2025/` | #55 – Qualität wird wieder mehr nachgefragt: Auf der BOOT 2025 | Qualität wird wieder mehr nachgefragt: Auf der BOOT 2025 | 56 |
| `/de/blog/grand-large-world-odyssee-dauer-preis-kosten/` | #77 - Mit der „Grand Large World Odyssey” und Ihrer Allures oder Garcia um die Welt? | Grand Large World Odyssey mit Allures oder Garcia | 49 |
| `/de/blog/hh-44-katamaran-besichtigen-la-grande-motte-multihull-show/` | #67 - HH 44: „Das schönste Boot der ganzen Messe!“ | HH 44: „Das schönste Boot der ganzen Messe!“ | 44 |
| `/de/blog/hh-katamaran-werft-china-produktion-xiamen/` | #52 – Die Katamaran-Manufaktur: Zukunftswerft Xiamen für HH CATAMARANS | HH Catamarans: die Katamaran-Werft in Xiamen | 44 |
| `/de/blog/hochsee-offshore-segeln-garcia-exploration-45/` | #93 - Interview mit GARCIA Exploration 45-Abenteurern | Interview mit GARCIA Exploration 45-Abenteurern | 47 |
| `/de/blog/integralschwert-kielschwert-bei-aluminiumyachten/` | #59 – Alles zum Integralschwert bei Alu-Yachten | Alles zum Integralschwert bei Alu-Yachten | 41 |
| `/de/blog/interview-guido-dwersteg-segeln-mit-garcia-exploration/` | #84 - „Amwind-Segeln mit 35 Grad AWA … das ist schon mehr als exzellent!“ | Interview: Amwind-Segeln mit der Garcia Exploration | 51 |
| `/de/blog/isabelle-olivier-racoupeau-allures-horizon-47-designer/` | #103 - Isabelle und Olivier Racoupeau: Das Power-Couple des Yacht-Designs | Isabelle und Olivier Racoupeau – Yachtdesigner-Paar | 51 |
| `/de/blog/lebenstraum-eigene-yacht-erfuellen/` | #110 - “Endlich kann es so richtig losgehen!“ | “Endlich kann es so richtig losgehen!“ | 38 |
| `/de/blog/luxusyacht-gebrauchtboot-sonderangebot-hh-katamaran-hh66/` | #79 - Luxus-Kat in Voll-Carbon: Ihre Gebrauchtyacht-Chance! | Luxus-Kat in Voll-Carbon: Ihre Gebrauchtyacht-Chance! | 53 |
| `/de/blog/neu-rm-980-segelboot-ostsee-performance-preis/` | #91 - Kampfansage an 10-Meter Performance-Boote! | Kampfansage an 10-Meter Performance-Boote! | 42 |
| `/de/blog/professionelle-kielmontage-segelyacht-elan-impression-43/` | #72 - Montage eines Kiels: Fachleute am Werk! | Montage eines Kiels: Fachleute am Werk! | 39 |
| `/de/blog/rm-yachts-sehen-werftbesuch-la-rochelle/` | #58 – RM YACHTS beim Salon Privé in La Rochelle erleben | RM YACHTS beim Salon Privé in La Rochelle erleben | 49 |
| `/de/blog/rm-yachts-testen-in-frankreich/` | #78 - RM YACHTS, La Rochelle und ein perfektes Wochenende | RM YACHTS, La Rochelle und ein perfektes Wochenende | 51 |
| `/de/blog/segeln-im-schwedischen-schaerengarten/` | #75 - Grüße aus dem Sommerloch: Segeln im Schärengarten | Grüße aus dem Sommerloch: Segeln im Schärengarten | 49 |
| `/de/blog/segelyacht-elan-impression-43-rundgang/` | #51 - Das perfekte Segelboot: Elan Impression 43 | Das perfekte Segelboot: Elan Impression 43 | 42 |
| `/de/blog/so-segelt-der-explocat-52-garcia-performance/` | #82 - Der SUV der Meere: Explocat 52 getestet! | Der SUV der Meere: Explocat 52 getestet! | 40 |
| `/de/blog/sunbeam-segelboot-probesegeln-attersee/` | #105 - “Wie in der Karibik!” - Probesegeln bei SUNBEAM | “Wie in der Karibik!” - Probesegeln bei SUNBEAM | 47 |
| `/de/blog/sunbeam-segelyachten-bei-der-deutschen-marine/` | #111 - Die Deutsche Marine setzt auf Qualität: SUNBEAM für die Segelausbildung | Deutsche Marine setzt auf Sunbeam für die Segelausbildung | 57 |
| `/de/blog/traumyacht-individuell-ausstatten-blauwasser-technik-equipment/` | #88 - Eine Blauwasser-Yacht technisch perfekt ausrüsten: Wie geht man das an? | Blauwasseryacht technisch perfekt ausrüsten – so geht’s | 55 |
| `/de/blog/vorschau-cannes-yachting-festival-2025-blauwasser-yachten/` | #71 - Blauwasser-Highlights beim Cannes Yachting Festival 2025 | Blauwasser-Highlights beim Cannes Yachting Festival 2025 | 56 |
| `/de/blog/vorteile-von-centerboard-yachten/` | #70 - „… das ist eben der Vorteil von Centerboard-Yachten!“ | „… das ist eben der Vorteil von Centerboard-Yachten!“ | 53 |
| `/de/blog/warum-allures-45-9-die-perfekte-blauwasser-yacht-aluminium-segelboot/` | #104 - Einmal vor Samoa den Anker werfen ... | Einmal vor Samoa den Anker werfen | 33 |
| `/de/blog/warum-bootsmessen-auch-fuer-bootshaendler-extrem-wichtig-sind/` | #115 - Am Puls der Branche: Die andere Seite der Bootsmessen. | Am Puls der Branche: Die andere Seite der Bootsmessen | 53 |
| `/de/blog/was-interessiert-blauwasser-segler-am-meisten/` | #100 - Was den (Blauwasser-) Segler interessiert … | Was den (Blauwasser-) Segler interessiert … | 43 |
| `/de/blog/was-kostet-allures-horizon-47-segelyacht-blauwasser/` | #116 - Blauwasser par excellence: ALLURES horizon 47! | Blauwasser par excellence: ALLURES horizon 47! | 46 |
| `/de/blog/weltumsegelung-jimmy-cornell-garcia-exploration-arktis/` | #49 - Weltumsegelung-Jimmy-Cornell-Garcia-Exploration-Arktis | Mit Garcia und Jimmy Cornell ins ewige Eis | 42 |
| `/de/blog/weltumsegelung-nordwest-passage-jimmy-cornell/` | #56 – Mit der Garcia und Jimmy Cornell durch die Nordwest-Passage | Mit der Garcia und Jimmy Cornell durch die Nordwest-Passage | 59 |
| `/de/blog/whaly-boot-kaufen-preis-haendler-deutschland/` | #62 – Die vielseitigsten, unkaputtbarsten, praktischsten Trailerboote der Welt? | Whaly-Boote: vielseitige Trailerboote kaufen | 44 |
| `/de/blog/yachtausruester-schiffsausstatter-bremerhaven-geschichte-janssen-maritimes/` | #108 - Ein Bremerhavener Urgestein: JANSSEN MARITIMES | Ein Bremerhavener Urgestein: JANSSEN MARITIMES | 46 |
| `/de/blog/yachtfestival-cannes-2025-bericht/` | #81 - Leise, und doch fulminant: Das war Cannes 2025 | Leise, und doch fulminant: Das war Cannes 2025 | 46 |
| `/de/blog/yachtwerft-bootsservice-antifouling-wartung-bremerhaven/` | #68 - Frühlings-Auslieferungen und Boots-Kommissionierungen bei BLUE YACHTING | Frühlings-Auslieferungen und Kommissionierung in Bremerhaven | 60 |
| `/de/blog/yamaha-aussenborder-motoren-preis-qualitaet-wartung-pflege/` | #101 - Nicht ohne Außenborder: Mit Yamaha durchstarten | Nicht ohne Außenborder: Mit Yamaha durchstarten | 47 |

Für **neue Beiträge**: Seitentitel ohne Nummer vorne formulieren oder direkt einen Meta-Titel bis 60 Zeichen vergeben.

---

## 5. Seiten mit zu wenig oder fehlerhaftem Inhalt

| Seite | Befund | Maßnahme |
|---|---|---|
| `/de/neuboote/sunbeam-yachts/sunbeam-28-1/` | Nur 2 Wörter (die Überschrift). | Modellbeschreibung, technische Daten als Text, Bilder ergänzen (Umfang wie Sunbeam 29.1). Ist das Modell nicht mehr im Programm: Seite depublizieren – wir richten dann eine 301-Weiterleitung auf `/de/neuboote/sunbeam-yachts/` ein. |
| `/de/neuboote/` | 16 Wörter, **zwei H1**, Meta-Beschreibung nennt **ELAN Yachts und HH Catamarans**, die nicht mehr im Programm sind. | Meta-Beschreibung ersetzen (Abschnitt 2). Zweite H1 („Segel setzen: …“) als Überschrift 2 formatieren. Einleitung auf 150–300 Wörter ausbauen: Marken, Bootstypen, Beratung, Probesegeln. |
| `/de/gebrauchtboote/` | Nur ein eingebettetes Fenster (iframe) mit externen Angeboten, **keine H1**, 8 Wörter eigener Text. Google wertet den Inhalt des iframes nicht dieser Seite zu. | H1 „Gebrauchte Segelyachten und Katamarane“ und 150–300 Wörter Einleitung über dem iframe: Auswahlkriterien („persönlich besichtigt und inspiziert“), Inzahlungnahme, Kontakt. |
| `/de/service/` | 1 Wort Text. | Kurze Einleitung zu Service, Werkstatt Bremerhaven, Partnern (150–200 Wörter). |
| `/de/service/yachtfinanzierung/` | 62 Wörter. | Ablauf der Finanzierung/des Leasings, für Neu- und Gebrauchtboote, Ansprechpartner. |
| `/de/service/oesterreich/` | 39 Wörter. | Leistungen von Franz Mittendorfer, Reviere (Attersee, Adria), Kontaktdaten. |
| `/de/neuboote/rm-yachts/rm890/`, `/rm1080/` | 81 bzw. 82 Wörter. | Auf mindestens 300 Wörter ausbauen: Einsatzzweck, Unterschiede zu den Schwestermodellen, technische Daten als Text, passende Blogbeiträge verlinken. |
| `/de/neuboote/rm-yachts/` | Meta-Beschreibung mit Tippfehlern („fertig“, „blue-yachrting.de“). | Durch Vorschlag aus Abschnitt 2 ersetzen. |
| Sunbeam-Modellseiten 22.1, 29.1, 29.1 GT, 32.1, 36.2 | Meta-Beschreibungen sind Stichwortketten („Sunbeam-29.1-segelboot-daysailer-preis-test“); die 36.2 hat die Beschreibung der 32.1. | Durch Vorschläge aus Abschnitt 2 ersetzen. |
| `/de/kontakt/impressum/`, `/de/kontakt/datenschutz/` | Text wird per JuraFOX-Script nachgeladen, daher keine H1 im HTML. | Im Inhaltsfeld eine Überschrift 1 „Impressum“ bzw. „Datenschutzerklärung“ über dem JuraFOX-Platzhalter einfügen. |

---

## 6. Englische Version

`/en/` (Startseite) und die englischen Seiten zeigen überwiegend **deutschen Text**. Für Google ist das doppelter Inhalt,
und englischsprachige Besucher finden keine passende Seite.

Bitte entscheiden:

- **Variante A – Englisch pflegen:** Startseite, Neuboote-Übersicht, die vier Markenseiten, Kontakt übersetzen (keine maschinelle 1:1-Übersetzung) und mit eigenen Metadaten versehen.
- **Variante B – Englisch einstellen:** Englische Seiten depublizieren. Der Code gibt hreflang-Verweise nur noch für Seiten aus, die in beiden Sprachen veröffentlicht sind – es entstehen also keine fehlerhaften Sprachverweise.

---

## 7. Interne Links auf entfernte Seiten

ELAN Yachts und HH Catamarans sind nicht mehr im Programm; ihre Seiten liefern 404. Der Code leitet diese Adressen ab dem
Deployment per 301 auf `/de/neuboote/` um. Besser für Leser ist trotzdem, die Links im Text anzupassen:
entweder entfernen (Text bleibt) oder auf einen passenden Blogbeitrag verlinken.

**Bitte bestätigen:** Ist `/de/neuboote/` das richtige Ziel der Weiterleitung, oder soll auf eine eigene Seite verwiesen werden (z. B. Gebrauchtboote)?

| Link-Ziel (404) | In Beiträgen |
|---|---|

| `/de/neuboote/hh-catamarans/` | `/de/blog/24-der-neue-standard-hh44/`<br>`/de/blog/46-cannes-yachting-festival/`<br>`/de/blog/allures-45-9-messeboot-ancora-yachtfestival/`<br>`/de/blog/aluminium-segel-katamaran-garcia-exolocat-52-uebergabe/`<br>`/de/blog/ausblick-blauwasser-jahr-2025-kommentar-nils-schuerg/`<br>`/de/blog/blue-yachting-auch-fuer-oesterreich-schweiz-bootskauf/`<br>`/de/blog/boot-duesseldorf-mit-blue-yachting-garcia-allures-sunbeam/`<br>`/de/blog/bootsbau-legende-paul-hakes-hh-katamarane/`<br>`/de/blog/gestiegene-nachfrage-nach-qualitaet-boot-2025/`<br>`/de/blog/hh-44-katamaran-besichtigen-la-grande-motte-multihull-show/`<br>`/de/blog/hh-katamaran-werft-china-produktion-xiamen/`<br>`/de/blog/professionelle-kielmontage-segelyacht-elan-impression-43/`<br>`/de/blog/vorschau-cannes-yachting-festival-2025-blauwasser-yachten/` |
| `/de/neuboote/elan-yachts/` | `/de/blog/60-vom-blauwassersegeln-allures-yacht-atlantik-erfahrungen/`<br>`/de/blog/elan-yachts-experience-center-eye/`<br>`/de/blog/gestiegene-nachfrage-nach-qualitaet-boot-2025/` |
| `/de/neuboote/elan-yachts/impression/impression-43/` | `/de/blog/ein-starker-auftritt-auf-der-boot-die-neue-elan-impression-43/`<br>`/de/blog/professionelle-kielmontage-segelyacht-elan-impression-43/` |
| `/de/neuboote/elan-yachts/gt-serie/elan-gt6/` | `/de/blog/gestiegene-nachfrage-nach-qualitaet-boot-2025/` |

Außerdem: Auf `/de/neuboote/garcia-yachts/` verweist ein Link auf `/neuboote/allures-yachting/` (ohne `/de/`).
Diese Adresse liefert eine Kopie der Allures-Seite. Link auf `/de/neuboote/allures-yachting/` ändern.

---

## 8. Überschriften im Editor

51 Seiten springen von der H1 direkt zur H3 oder haben keine bzw. zwei H1. Für Suchmaschinen und Screenreader
muss die Gliederung lückenlos sein.

- Pro Seite genau **eine** Überschrift 1 (kommt automatisch aus dem Template).
- Zwischenüberschriften im Text als **„Überschrift 2“**, Unterpunkte darunter als „Überschrift 3“.
- Überschriften nicht wegen der Schriftgröße wählen – das Aussehen lässt sich über die Formatvorlagen anpassen.

Betroffen sind vor allem Blogbeiträge ab #50 sowie die Modellseiten Allures 40.9/45.9, Allures-Übersicht und Garcia Exploration 60
(einige Sprünge, z. B. auf Kontakt und in der Blog-Übersicht, stammen aus dem Template – die werden im Arbeitspaket Barrierefreiheit im Code korrigiert).

---

## 9. Alternativtexte für Bilder

Rund 1.000 Bilder haben einen Dateinamen als Alternativtext (z. B. „RM1380 Heck Eyoy“, „Garcia Exploration 52 Garcia Explocat 52
sailing Cherbourg 1x“, „topbild“), weitere rund 960 einen leeren. Der Alternativtext kommt aus dem Feld **Titel** der Datei
(*Dateien* → Bild anklicken → *Titel*).

Regeln:

- Beschreiben, was zu sehen ist und warum es auf der Seite steht: „Allures 45.9 unter Gennaker vor Cherbourg“, „Salon der Garcia Exploration 52 mit Blick zum Navigationstisch“.
- Keine Dateinamen, keine Kürzel („1x“, „Eyoy“), nicht mit „Bild von …“ beginnen, max. ca. 125 Zeichen.
- Rein dekorative Bilder (Hintergründe, Trennbilder) bekommen einen leeren Titel.

Reihenfolge nach Wirkung: Modellseiten zuerst (Garcia Exploration 52, Allures 45.9 und 40.9, Explocat 52, RM970, Allures 51.9,
RM890, RM1380, Exploration 45), dann die Werftseiten, dann die Blogbeiträge mit Bildstrecken.

Die Vorschaubilder in der Blog-Übersicht (113 Bilder) sollten als dekorativ markiert werden, weil der Beitragstitel daneben steht.
Das ist eine Template-Änderung und gehört zum Arbeitspaket Barrierefreiheit – hier ist keine Redaktion nötig.

---

## 10. Checkliste nach dem Eintragen

- [ ] Einstellungen → SEO ausgefüllt, Vorschaubild 1200 × 630 px hochgeladen
- [ ] Abschnitt 2: alle Hauptseiten gepflegt und veröffentlicht
- [ ] Abschnitt 3 und 4: Blog-Metadaten gepflegt
- [ ] Abschnitt 5: Inhalte ergänzt (Sunbeam 28.1, Neuboote, Gebrauchtboote, Service)
- [ ] Abschnitt 6: Entscheidung Englisch getroffen
- [ ] Abschnitt 7: Links angepasst, Weiterleitungsziel bestätigt
- [ ] Google Search Console: `https://www.blue-yachting.de/sitemap.xml` einreichen, danach „URL-Prüfung“ für Startseite und Neuboote
- [ ] Vorschau testen: Link in WhatsApp/LinkedIn teilen oder https://www.opengraph.xyz/ verwenden

