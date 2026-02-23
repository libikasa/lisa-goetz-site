# Deployment-Anleitung (Astra Child Theme)

## 1) Änderungen aus GitHub holen

Auf deinem Server im Projektverzeichnis:

```bash
git fetch origin
git checkout <dein-branch-oder-main>
git pull
```

## 2) Child Theme deployen

Den Inhalt aus `astra-child/` nach WordPress kopieren:

```bash
rsync -av --delete astra-child/ /pfad/zu/wordpress/wp-content/themes/astra-child/
```

Alternative ohne rsync:

```bash
cp -r astra-child/* /pfad/zu/wordpress/wp-content/themes/astra-child/
```

## 3) Cache leeren

- WordPress/Plugin Cache leeren (falls aktiv)
- CDN Cache leeren (falls aktiv)
- Browser Hard Refresh (Cmd/Ctrl + Shift + R)

## 4) Test-Checkliste

### Desktop
- Header/Navigations-Hover und Active-Zustände sichtbar
- Typografie-Hierarchie (H1/H2/H3) konsistent
- Buttons (Primary/Secondary) korrekt mit Hover + Fokus
- Formulareingaben: Fokus, Placeholder, Fehlerrahmen sichtbar
- Cards/Container mit konsistentem Radius/Schatten

### Mobile (ca. 390px Breite)
- Lesbare Schriftgrößen und saubere Zeilenumbrüche
- Ausreichende Touch-Flächen für Buttons/Menu
- Gleichmäßige Abstände zwischen Sektionen
- Mobiles Menü mit stimmigen Paddings

## 5) Rollback (falls nötig)

```bash
git log --oneline -n 5
git checkout <letzter-stabiler-commit> -- astra-child
rsync -av --delete astra-child/ /pfad/zu/wordpress/wp-content/themes/astra-child/
```
