# my-space
Sammlung von Scripten und Informationen

## Aufruf von `keytool`

Verwandte Themen:

* [Java Keytool](http://docs.oracle.com/javase/6/docs/technotes/tools/windows/keytool.html)
* [openssl](https://www.openssl.org/) 

```shell
# Importieren des Schlüssels der Zertifizierungsstelle in vorhandenen Keystore
sudo keytool -importcert -file your.cer -keystore jks/your.jks -storetype jks -v

# Anlisten der enthaltenen Keys
keytool -list -keystore your.jks
```
* http://tech.europace.de/java-ssl-konfiguration-mit-keystores/


### Importieren eines .p12 Schlüsselfiles in einen .jks Keystore im Format PKCS12

```shell
keytool -importkeystore -srckeystore your.p12 -srcstoretype pkcs12 -destkeystore your.jks -deststoretype jks
```

* https://en.wikipedia.org/wiki/PKCS_12

### Prüfen eines Zertifikates mit `openssl`

```shell
openssl x509 -noout -text -in your.cer
```

Quellen:
* [OpenSSL Zertifikate](https://wiki.magenbrot.net/linux/kryptographie/openssl-zertifikate)

