# RESUME-GUIDE — Modernes CV für WordPress Seite

## 1) Ziel des Layouts
- Recruiter- und Entscheider-freundlich: in < 60 Sekunden erfassbar
- Mobile lesbar (kurze Absätze, klare Abschnitte)
- Klare Story: **Profil → Skills → Erfahrung → Belege → CTA**

## 2) Empfohlene CV-Struktur

### A) Profil / Headline + Summary (2–3 Zeilen)
**Beispiel Headline:**
„Senior Digital Consultant | UX, Content Strategy & Web Performance“

**Beispiel Summary:**
„Ich unterstütze Unternehmen dabei, digitale Auftritte klarer, schneller und überzeugender zu gestalten. Mein Schwerpunkt liegt auf nutzerzentrierter Struktur, schlanker Umsetzung und messbaren Verbesserungen bei Conversion und Performance.“

---

### B) Skills als Tags/Chips
Empfohlene Kategorien:
- Strategy
- UX/UI
- Content
- SEO Basics
- WordPress
- Performance
- Stakeholder Management

**Darstellung:** kurze Chips, max. 1–2 Zeilen je Kategorie.

---

### C) Berufserfahrung (Timeline)
Pro Job:
- **Rolle**
- **Firma**
- **Zeitraum**
- **3–6 Bulletpoints** mit aktivem Verb + Ergebnis

**Formel für starke Bullets:**
`Aktion + Kontext + messbares Ergebnis`

**Beispiel:**
- „Relaunch-Struktur für B2B-Website entwickelt und die Kontaktanfragen nach 3 Monaten um 28 % gesteigert.“
- „Content- und Navigationsarchitektur überarbeitet, wodurch die Absprungrate auf Kernseiten um 19 % sank.“
- „Technische Optimierungen umgesetzt und den mobilen PageSpeed-Wert von 61 auf 84 verbessert.“

---

### D) Projekte (2–4 Highlights)
Pro Projekt:
- Ziel
- Rolle
- Vorgehen
- Ergebnis (möglichst mit Kennzahl)

---

### E) Ausbildung & Zertifikate
- Max. 3–5 relevante Einträge
- Neueste zuerst

---

### F) Tools / Tech Stack
Beispiel:
- WordPress, Gutenberg, Astra
- Google Analytics / Search Console
- Figma
- Notion / Jira
- HTML/CSS (Frontend-nah)

---

### G) Abschlussbereich (CTAs)
- Primary: **„CV als PDF herunterladen“**
- Secondary: **„Kontakt aufnehmen“**

## 3) Textverbesserungen (kürzer, aktiver)

### Statt
„Ich war verantwortlich für die Unterstützung bei verschiedenen Aufgaben rund um die Website.“

### Besser
„Ich habe Website-Prozesse strukturiert, Prioritäten definiert und die Umsetzung bis zum Launch gesteuert.“

### Statt
„Ich habe mich um die Verbesserung der Nutzererfahrung gekümmert.“

### Besser
„Ich habe die Nutzerführung neu konzipiert und die Conversion auf zentralen Seiten signifikant erhöht.“

### Statt
„Teamübergreifende Zusammenarbeit war Teil meiner Aufgaben.“

### Besser
„Ich habe Marketing, Sales und Entwicklung auf ein gemeinsames Zielbild ausgerichtet und Entscheidungswege verkürzt.“

## 4) Gutenberg-Klassen für das neue Theme-CSS
- Header-Wrapper: `resume-header`
- Summary-Text: `resume-summary`
- Skills-Wrapper: `resume-tags`
- Einzel-Tag: `resume-tag`
- Timeline-Wrapper: `resume-timeline`
- Experience-Entry: `resume-item`
- Meta-Zeile (Firma/Zeitraum): `resume-meta`
- Inhaltskarten: `resume-card`

## 5) Print-friendly Empfehlungen
Vorhandene Print-Styles in `style.css` nutzen:
- Header/Footer ausblenden
- Schatten entfernen
- Rahmen vereinfachen
- Seitenumbrüche in Timeline/Karten vermeiden (`break-inside: avoid`)

Zusätzlich empfohlen:
1. Bei langen CVs Abschnitte mit `page-break-before` sinnvoll trennen.
2. URLs in Klammern hinter Linktext schreiben (wenn Ausdruck für Bewerbung gedacht ist).
3. PDF aus Browser-Dialog mit aktivierter Hintergrundgrafik testen.
