<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php

use PHPageBuilder\Repositories\PageTranslationRepository;

foreach ((new PageTranslationRepository)->getAll(['route','updated_at']) as $sitemaproute) {
    print('
    <url>
        <loc>'. phpb_config('general.base_url') . $sitemaproute->route .'</loc>
        <lastmod>' . $sitemaproute->updated_at .'</lastmod>
        <priority>' . ($sitemaproute->route === '/' ? '1.00' : '0.50') .'</priority>
    </url>
    ');
}
?>

</urlset>

