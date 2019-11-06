# superFastCSS 🚗💨
A MODx snippet to load css (resouces and files) fast using modern html practices.

Per the suggestion of [The Filament Group](https://github.com/filamentgroup/loadCSS#how-to-use-loadcss-recommended-example), you should be preloading your CSS links whenever possible (basically all the time).

To do that, you would write out a link that looks something like this:
```html
<link rel="preload" as="style" href="..." onload="this.onload=null;this.rel='stylesheet'"/>
<!-- Don't forget to include a fallback -->
<noscript>
    <link rel="stylesheet" href="..."/>
</noscript>
```

As projects expand, this can get tedious. To simplify things, I made this snippet. It's still a work in progress, but should work.

```
[[superFastCSS? &links=`https://cdnjs.cloudflare.com/...,18,29,103`]]
```

The parameters include `&links, &cache, &async`.
#### `&links`
`&links` accepts numbers that correspond with resources (Resource IDs) and actual URLs (Such as cdns and the like). 

Any resource IDs are turned into the proper URL, and the CDNs are added as their own link.

The snippet above would output:
```html
<link rel="preload" as="style" href="https://cdnjs.cloudflare.com/..." onload="this.onload=null;this.rel='stylesheet'"/>
...
<link rel="preload" as="style" href="/modx/url/to/resource.html" onload="this.onload=null;this.rel='stylesheet'"/>
<!-- Don't forget to include a fallback -->
<noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/..."/>
    ...
    <link rel="stylesheet" href="/modx/url/to/resource.html"/>
</noscript>
<script>
/** Preload Polyfill from Filament Group **/
</script>
```

#### `&cache`
`&cache` is a flag for determining if the preload polyfill should be sourced from an inline script or a cdn (defaults to https://cdnjs.cloudflare.com/ajax/libs/loadCSS/2.1.0/cssrelpreload.min.js)

If `&cache` is 1, it will output:
```html
<script src="https://cdnjs.cloudflare.com/ajax/libs/loadCSS/2.1.0/cssrelpreload.min.js"></script>
```

If `&cache` is 0, it will output the same as the example snippet.

#### &async
`&async` will add the `defer async` tag to the script tag if `&cache` is also equal to 1.