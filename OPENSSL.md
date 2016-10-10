
[rfc7292]: https://tools.ietf.org/html/rfc7292
[rfc1321]: https://tools.ietf.org/html/rfc1321
[rfc3280]: https://tools.ietf.org/html/rfc3280
[rfc3447]: https://tools.ietf.org/html/rfc3447
[1]: https://www.openssl.org/
[2]: https://www.openssl.org/docs/standards.html
[3]: https://wiki.ubuntuusers.de/Apache/SSL/

Sammlung von Informationen zu `OpenSSL`
======================================

Das [Cryptographie and SSL/TLS Toolkit][1] `OpenSSL` implementiert eine Reihe von Spezifikationen und Standards für das Verschlüsseln und Signieren von Nachrichten. 

## Anwendung

```shell
# Anzeigen der Versionsnummer und wichtigen Informationen zur Plattform
openssl version -a
```

```shell
# Anlisten der offenen Ports
netstat -tlna

# Aufbau einer SSL-Verbindung und Anzeigen des SSL-Handshakes
openssl s_client -connect localhost:55443
```

## Terminologie 

* Public-Key Cryptography Standards (PKCS) [RFC3447][rfc3447]

## Quellen

* [RFC7292][rfc3280]
* [RFC1321][rfc1321]
* [RFC3280][rfc3280]
* [RFC3447][rfc3447] Public-Key Cryptography Standards (PKCS) #1: RSA Cryptography Specifications
