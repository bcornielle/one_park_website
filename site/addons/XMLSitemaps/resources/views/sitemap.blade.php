{!! $xmlHeader !!}
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-image/1.1 http://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach($sitemap->getPaginatedItems() as $item)
    <url>
        <loc>{{ $item->getLocation() }}</loc>
        <lastmod>{{ $item->getLastModified()->format( 'Y-m-d\TH:i:sP' ) }}</lastmod>
    </url>
@endforeach
</urlset>