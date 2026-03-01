<?php
function getFilesize($file, $digits = 2)
{
if (is_file($file)) {
$filePath = $file;
if (!realpath($filePath)) {
$filePath = $_SERVER["DOCUMENT_ROOT"] . $filePath;
}
$fileSize = filesize($filePath);
$sizes = array("TB", "GB", "MB", "KB", "B");
$total = count($sizes);
while ($total-- && $fileSize > 1024) {
$fileSize /= 1024;
}
return round($fileSize, $digits) . " " . $sizes[$total];
}
return false;
}
$folderName="maps";
$files=scandir($folderName);
$numFiles=count($files);
echo "<ol>";
for($i=2; $i<$numFiles; $i++)
{
$sizeFile=getFilesize($folderName."/".$files[$i]);
echo "<li>".$files[$i].": ".$sizeFile."</li>";
}
echo "</ol>";
?>