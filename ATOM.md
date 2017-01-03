[IMG001]: ./vendors/atom.io/atom-rocket.gif
[LINK001]: http://flight-manual.atom.io/getting-started/sections/atom-basics/

# ATOM - A hackable text editor

![ATOM Logo][IMG001]

* * *

## What is *Atom*

> Atom is a text editor that's modern, approachable, yet hackable to the core—a tool you can customize to do anything but also use productively without ever touching a config file.


- <https://atom.io/>
- <https://github.com/atom/>

Anm. des Autors: *Atom* ist ein hoch-anpassbarer flexibler Texteditor mit
Fokus auf *Keyboard*-basierten Kontrollstrukturen:

`Ctrl` + `Shift` + `P`

 Dieses Kommando ruft die *Command-Palette* auf.

 `Ctrl` + `,`

 Aufruf der *Settings View*.

 `Ctrl` + `s`

 Aufruf der Funktion *Save file*.

 `Ctrl` + `Shift` + `s`

 Aufruf der Funktion *Save file as*.

Weitere Informationen finden Sie im [*Atom Flight-Manual*][LINK001].


## Using *Atom* behind Proxies

Zum Anpassen der *Proxy*-Einstellungen rufen Sie in der Settings View
`Ctrl` + `,` die Funktion `Open Config Folder` aus. Fügen Sie die unten
stehenden Zeilen in die Datei `.apmrc` ein:

```
; Proxy configuration
; See: https://github.com/atom/apm/issues/338
proxy=http://your-proxy.company.com:8080
strict-ssl=false
