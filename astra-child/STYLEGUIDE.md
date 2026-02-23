# Astra Child Theme Styleguide

## 1) Farben

- **Primary:** `#2f5cff` (interaktive Hauptfarbe: Links, Primary Buttons)
- **Primary Dark:** `#1f44d6` (Hover/Active)
- **Secondary:** `#0ea5a1` (akzentuierende Elemente)
- **Text:** `#1b2430`
- **Text Muted:** `#5a6676`
- **Surface:** `#f8fafe`
- **Border:** `#dbe3f0`
- **Error:** `#b42318`

## 2) Typografie

- **Body:** `1rem`, Line Height `1.65`
- **Small:** `0.875rem`
- **H1:** `clamp(2rem, 1.6rem + 2.2vw, 3rem)`
- **H2:** `clamp(1.5rem, 1.2rem + 1.2vw, 2.1rem)`
- **H3:** `1.125rem`

Regel: klare Hierarchie, kurze Zeilenbreiten und genügend Zeilenhöhe für Lesbarkeit.

## 3) Spacing-System

8pt-ähnliche Skala:

- `--space-1`: 8px
- `--space-2`: 16px
- `--space-3`: 24px
- `--space-4`: 32px
- `--space-5`: 48px
- `--space-6`: 64px

Regel: Vertikale Abstände standardisiert über diese Tokens vergeben, statt Einzelwerte pro Komponente.

## 4) Buttons

### Primary
- Hintergrund: Primary
- Text: Weiß
- Radius: 12px
- Hover: Primary Dark + leichter Lift (`translateY(-1px)`)

### Secondary / Outline
- Hintergrund: transparent
- Border + Text: Primary
- Hover: sehr leichte Primary-Tönung

### Accessibility
- Sichtbarer `:focus-visible` Ring (3px)
- Mindesthöhe für Touch: 44px+ (`min-height: 2.75rem`)

## 5) Cards / Container

- Hintergrund: Weiß
- Border: `1px solid #dbe3f0`
- Radius: 16px
- Schatten: dezent (`0 2px 8px rgba(19,39,72,0.08)`)
- Innenabstand: standardmäßig 24px (mobil ggf. geringer)

Kurzbeispiel (HTML-Klasse):

```html
<div class="card">
  <h3>Titel</h3>
  <p>Inhalt im Card-Layout.</p>
  <a class="button" href="#">Mehr erfahren</a>
</div>
```
