# superFastCSS
A MODx snippet to load css (resouces and files) fast using modern html practices.

Per the suggestion of [The Filament Group](https://github.com/filamentgroup/loadCSS#how-to-use-loadcss-recommended-example), you should be preloading your CSS links whenever possible (basically all the time).

To do that, you would write out a link that looks something like this:
```html
<link rel="preload" as="style" href="..." onload="this.onload=null;this.rel='stylesheet'/>
<!-- Don't forget to include a fallback -->
<noscript>
    <link rel="stylesheet" href="..."/>
</noscript>
```

As projects expand, this can get tedious. To simplify things, I made this snippet. It's still a work in progress, but should work.

```
[[superFastCSS? &links=`https://cdnjs.cloudflare.com/...,18,29,103`]]
```
