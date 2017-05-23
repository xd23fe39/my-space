# SED

- http://sed.sourceforge.net/sed1line_de.html

Erste Zeile von *file* ausgeben.

```
cat file | sed -n '1p'
sed -n '1p' file
``` 

#### Aufruf von `cut`, `tr` und `awk`

```
# alle eingebundenen Dateisystem die mehr als 50 Prozent belegt sind
df -h | cut -c1-12,37-41 | tr '%' ' ' | awk '{if ($2 > 50) print $1;}'
```
