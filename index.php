<?php
$links = [
  "/" => "Home",
  "/goham" => "Go Hye Mi",
  "/ssd" => "Song Sam Dong",
  "/jin-k" => "Jin Guk/Hyun Shi Hyuk",
  "/ybh" => "Yoon Baek Hee",
  "/IU" => "Kim Pil Sook",
];

include_once("common/header.php");
?>

<!-- Begin page content -->
<div class="container">
<div class="page-header">
<h1>Kirin Art School</h1>
</div>

<?php
$datas = [
  "Genre" => "Comedy Romance Music",
  "Format" => "Television series",
  "Written by" => "Park Hye-ryun",
  "Directed by" => "Lee Eung-bok",
  "Starring" => "Bae Suzy, Kim Soo-hyun, Ok Taecyeon, Ham Eunjung, Jang Wooyoung, IU",
  "Opening theme" => "Dream High",
  "Ending theme" => "Only Hope",
  "Country of origin" => "South Korea",
  "Original language" => "Korean",
  "Number of seasons" => "1",
  "Number of episodes" => "16 + 1 special (17 total)",
  "Producers" => "Bae Yong-joon, Park Jin-young",
  "Location" => "Seoul, South Korea",
  "Running time" => "Mondays and Tuesdays at 21:55 (9:55 PM) KST",
  "Production companies" => "KeyEast Entertainment, JYP Entertainment, CJ Media",
  "Distributor" => "Korean Broadcasting System (KBS)",
  "Original broadcast channel" => "KBS2",
  "Picture format" => "480i SDTV, 1080i HDTV",
  "Audio format" => "Dolby Digital, DTS Digital Sound, Sony Dynamic Digital Sound",
  "Original run" => "3 January 2011 &mdash; 28 February 2011",
  "Preceded by" => "Marry Me, Mary!",
  "Followed by" => "Detectives in Trouble",
  "Related show" => "Dream High 2",
];
?>
<?php
foreach ($datas as $label => $data) {
?>
<p><strong><?php echo $label; ?>:</strong> <?php echo $data; ?></p>
<?php
}
?>
<p class="text-muted">*information courtesy <a href="//en.wikipedia.org/wiki/Dream_High">Wikipedia</a></p>

</div>

<?php include_once("footer.php"); ?>
