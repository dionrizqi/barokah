<?php header('Content-type: application/xml; charset="ISO-8859-1"',true);  ?>
<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
<loc>https://extreme-maintenance.com/</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/home/</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/about</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/business/predictive-maintenance</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/business/prevenitve-maintenance</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/business/operation-maintenance</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/business/reliability-center-maintenance</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/business/easy-maintenance</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/experience</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/clients</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/articles</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/contact</loc>
<lastmod>2021-08-18T13:10:56+00:00</lastmod>
<priority>0.80</priority>
</url>
<?php foreach($artikel as $data) { ?>
<url>
<loc>https://extreme-maintenance.com/articles/show/<?=$data->link?></loc>
<lastmod><?=date(DATE_W3C, strtotime($data->created))?></lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>https://extreme-maintenance.com/articles/download/<?=$data->pdf?></loc>
<lastmod><?=date(DATE_W3C, strtotime($data->created))?></lastmod>
<priority>0.64</priority>
</url>
<?php } ?>
</urlset>