# my-space
Sammlung von Scripten und Informationen

## Aufruf von `keytool`

```shell
# Importieren des Schlüssels der Zertifizierungsstelle in vorhandenen Keystore
sudo keytool -importcert -file your.cer -keystore jks/your.jks -storetype jks -v

# Anlisten der enthaltenen Keys
keytool -list -keystore your.jks
```
