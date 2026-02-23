# DEPLOY — PR Änderungen auf den Server übernehmen

## Voraussetzungen
- Zugriff auf dein Git-Repository (lokal oder Server)
- Schreibzugriff auf die WordPress-Installation
- Backup-Möglichkeit (Dateien + Datenbank)

## 1) Vor dem Deployment
1. **Backup erstellen** (Pflicht)
   - `wp-content/themes/astra-child`
   - Datenbank-Backup
2. In Staging testen (wenn vorhanden).

## 2) Änderungen aus dem PR übernehmen

### Option A: Git-basiertes Deployment (empfohlen)
1. Auf dem Server ins Theme-Repo wechseln.
2. PR-Branch oder Main aktualisieren:
   ```bash
   git fetch --all
   git checkout <target-branch>
   git pull
   ```
3. Sicherstellen, dass nur Dateien im Ordner `astra-child/` geändert wurden.

### Option B: Manuelles Deployment
1. Aus dem gemergten Stand nur folgende Dateien hochladen:
   - `astra-child/style.css`
   - `astra-child/STYLEGUIDE.md`
   - `astra-child/CONTENT-STRUCTURE.md`
   - `astra-child/RESUME-GUIDE.md`
   - `astra-child/DEPLOY.md`
2. Vorhandene Dateien im Zielordner ersetzen.

## 3) Nach dem Deployment
1. WordPress-/Plugin-Cache leeren.
2. CDN-Cache leeren (falls aktiv).
3. Browser Hard-Reload (`Cmd/Ctrl + Shift + R`).
4. Sichtprüfung Desktop + Mobile durchführen.

## 4) Quick QA Checkliste
- Header sticky, Navigation mit Hover/Active State sichtbar
- Typografie skaliert sauber (H1/H2/H3)
- Buttons (Primary/Secondary) inkl. Focus-Ring
- Formulareingaben mit modernem Focus-Verhalten
- Resume-Seite mit Timeline/Tags konsistent
- Print Preview der Resume-Seite kontrollieren

## 5) Rollback
Falls etwas nicht passt:
```bash
git log --oneline -n 5
git revert <commit_hash>
git push
```
Oder Backup des `astra-child` Ordners zurückspielen.
