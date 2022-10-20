const mix = require("laravel-mix");

mix.js("ressource/js/app.js", "public/js")
    .vue()
    .postCss("ressources/css/app.css", "public/css", [
        require("postCss-import"),
        require("tailwindcss"),
        require("autoprefixer"),
    ]);
