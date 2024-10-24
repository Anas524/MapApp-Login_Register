const mix = require('laravel-mix');

// Compile JavaScript (script.js)
mix.js('resources/js/script.js', 'public/js');

// Compile CSS (style.css)
// Since it's a plain CSS file (not SCSS), use the `.postCss()` method
mix.postCss('resources/css/style.css', 'public/css');

// Optional: Versioning for production (cache busting)
if (mix.inProduction()) {
    mix.version();
}
