<html>
<head>
    <title>TUGAS BESAR 1</title>
</head>
<body bgcolor=#00FF00 text=#000000 align=center>
<h1 align=center>PARSING WEBPAGES DENGAN XPATH</h1>
<hr width=100% align=left>
<table bgcolor=#ffff00 height=80% width=100% border=2>
<tr>
<td align="center"><h2>Berita 1</h2></td>
<td align="center"><h2>Berita 2</h2></td>
<td align="center"><h2>Anggota Kelompok</h2></td>
</tr>
<tr>
<td valign="top">
<?php
$url = 'http://www.beritabola.com/liga-inggris/liga-inggris/63711-aguero-redam-kekhawatiran-terkait-cederanya.html';
$queryXPath = '/html/body/div[2]/div/div[5]/div[2]/div[2]/div/table';
$dom = new DOMDocument();
@$dom->loadHTMLFile($url);
$x = new DOMXPath($dom);
$nodeList = $x->query($queryXPath );
foreach ($nodeList as $node) 
    echo utf8_decode(urldecode($node->nodeValue))."<br/>";
?>
</td>
<td valign="top">
<?php
$url = 'http://www.beritabola.com/liga-inggris/liga-inggris/63710-giggs-enggan-berkomentar-banyak-soal-manajer-mu-berikutnya.html';
$queryXPath = '/html/body/div[2]/div/div[5]/div[2]/div[2]/div/table';
$dom = new DOMDocument();
@$dom->loadHTMLFile($url);
$x = new DOMXPath($dom);
$nodeList = $x->query($queryXPath );
foreach ($nodeList as $node) 
    echo utf8_decode(urldecode($node->nodeValue))."<br/>";
?>
</td>
<td valign="top" width=20%>
<ol>
<li><h4>Rahmat Maulana  :117006148</h4>
<li><h4>Aris Pratama    :117006144</h4>
<li><h4>Andri A Rohman  :117006131</h4>
<li><h4>Abdul Ajis      :117006127</h4>
<li><h4>Azis Abdul Azis :117006138</h4>
</ol>
</td>
</tr>
</body>
</html>
