# STYLEGUIDE — Astra Child Theme Refresh

## 1) Design-Prinzipien
- **Clean & modern:** Reduzierte Farbpalette, klare Typografie, viel Weißraum.
- **Lesbarkeit zuerst:** Begrenzte Textbreite (`max-width: 760px`) und großzügige Zeilenhöhe.
- **Konsistenz:** Einheitliche Spacing-Schritte, Radien, Schatten und Interaktionen.
- **Performance-freundlich:** Nur leichtgewichtiges CSS, keine externen Frameworks.

## 2) Farbpalette (Tokens)
- `--color-bg: #ffffff`
- `--color-surface: #f8fafc`
- `--color-surface-alt: #f3f6fb`
- `--color-text: #1d2735`
- `--color-text-muted: #526178`
- `--color-heading: #111827`
- `--color-primary: #1e5eff`
- `--color-primary-dark: #1747c7`
- `--color-border: #dbe3ef`
- `--color-focus: #2563eb`

## 3) Typografie-Skala
- **Body:** `--fs-body` (`clamp(1rem, 0.96rem + 0.15vw, 1.05rem)`)
- **Small:** `--fs-small` (`0.9rem`)
- **H1:** `--fs-h1` (`clamp(2rem, 1.4rem + 2.2vw, 3.3rem)`)
- **H2:** `--fs-h2` (`clamp(1.6rem, 1.3rem + 1.3vw, 2.45rem)`)
- **H3:** `--fs-h3` (`clamp(1.2rem, 1.1rem + 0.7vw, 1.65rem)`)

## 4) Spacing-System
- `--space-1: 8px`
- `--space-2: 16px`
- `--space-3: 24px`
- `--space-4: 32px`
- `--space-5: 48px`
- `--space-6: 64px`

**Empfehlung für Gutenberg-Blöcke:**
- Zwischen inhaltlichen Hauptsektionen: **48–64px**
- Zwischen Headlines und Fließtext: **16px**
- Zwischen Card-Inhalten: **24px**

## 5) Buttons
### Primary
- Blau gefüllt (`--color-primary`)
- Weißer Text
- Radius: Pill (`999px`)
- Hover: dunkler + leichter Lift + Schatten

### Secondary / Outline
- Transparenter Hintergrund
- Blauer Border + Text
- Hover: softes Blau als Fläche

### Accessibility
- Fokuszustand mit deutlich sichtbarem Ring (`outline: 3px solid --color-focus`)
- Mobile min. 44px Touch-Höhe

## 6) Cards & Sections
- Karten: Weiß, `1px` Border, dezenter Schatten, Radius `--radius-md`
- Sektionen: Alternierende, sehr helle Hintergründe (`surface/surface-alt`)
- Einheitliches Innenpadding in Sektionen

## 7) Navigation & Footer
- Sticky Header mit leichter Transparenz/Blur
- Aktiver Menüpunkt mit softem Hintergrund
- Footer dunkel, klarer Kontrast, gut lesbare Links

## 8) Formulare
- Inputs mit 44px Mindesthöhe
- Einheitliche Border, Radius und Padding
- Focus mit Border-Highlight + softem Schattenring

## 9) Container-Regeln
- Gesamtcontainer: `--container-wide: 1200px`
- Lesespalte für Text: `--container-content: 760px`

## 10) Empfehlungen für konsistente WP-Block-Nutzung
- CTA-Buttons immer als Gutenberg Button Block verwenden
- Karten als Group Block mit zusätzlicher Klasse:
  - `is-style-card`
  - Optional auf Resume: `resume-card`
- Resume-Timeline:
  - Wrapper: `resume-timeline`
  - Eintrag: `resume-item`
  - Metainfo: `resume-meta`
