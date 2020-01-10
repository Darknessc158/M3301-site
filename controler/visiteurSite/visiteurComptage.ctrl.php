<?php
$hostname_visitors = "soysauceduck99.ddns.net";
$database_visitors = "scale";
$username_visitors = "admincave";
$password_visitors = "cave";

$visitors = mysqli_connect($hostname_visitors, $username_visitors, $password_visitors,$database_visitors) or rigger_error(mysql_error(),E_USER_ERROR);

 function getBrowser(){

 $agent = isset($_SERVER['HTTP_USER_AGENT'])
               ? strtolower($_SERVER['HTTP_USER_AGENT'])
               : '';
 $name = 'NA';


 if (preg_match('/MSIE/i', $agent) && !preg_match('/Opera/i', $agent)) {
     $name = 'Internet Explorer';
 } elseif (preg_match('/Firefox/i', $agent)) {
     $name = 'Mozilla Firefox';
 } elseif (preg_match('/Chrome/i', $agent)) {
     $name = 'Google Chrome';
 } elseif (preg_match('/Safari/i', $agent)) {
     $name = 'Apple Safari';
 } elseif (preg_match('/Opera/i', $agent)) {
     $name = 'Opera';
 } elseif (preg_match('/Netscape/i', $agent)) {
     $name = 'Netscape';
 }

 return $name;
}

function selfURL() {
$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];
}

function strleft($s1, $s2) { return substr($s1, 0, strpos($s1, $s2)); }

function paginate($start,$limit,$total,$filePath,$otherParams) {
    global $lang;

    $allPages = ceil($total/$limit);

    $currentPage = floor($start/$limit) + 1;

    $pagination = "";
    if ($allPages>10) {
        $maxPages = ($allPages>9) ? 9 : $allPages;

        if ($allPages>9) {
            if ($currentPage>=1&&$currentPage<=$allPages) {
                $pagination .= ($currentPage>4) ? " ... " : " ";

                $minPages = ($currentPage>4) ? $currentPage : 5;
                $maxPages = ($currentPage<$allPages-4) ? $currentPage : $allPages - 4;

                for($i=$minPages-4; $i<$maxPages+5; $i++) {
                    $pagination .= ($i == $currentPage) ? "<a href=\"#\"
                    class=\"current\">".$i."</a> " : "<a href=\"".$filePath."?
                    start=".(($i-1)*$limit).$otherParams."\">".$i."</a> ";
                }
                $pagination .= ($currentPage<$allPages-4) ? " ... " : " ";
            } else {
                $pagination .= " ... ";
            }
        }
    } else {
        for($i=1; $i<$allPages+1; $i++) {
        $pagination .= ($i==$currentPage) ? "<a href=\"#\" class=\"current\">".$i."</a> "
        : "<a href=\"".$filePath."?start=".(($i-1)*$limit).$otherParams."\">".$i."</a> ";
        }
    }

    if ($currentPage>1) $pagination = "<a href=\"".$filePath."?
    start=0".$otherParams."\">FIRST</a> <a href=\"".$filePath."?
    start=".(($currentPage-2)*$limit).$otherParams."\"><</a> ".$pagination;
    if ($currentPage<$allPages) $pagination .= "<a href=\"".$filePath."?
    start=".($currentPage*$limit).$otherParams."\">></a> <a href=\"".$filePath."?
    start=".(($allPages-1)*$limit).$otherParams."\">LAST</a>";

    echo '<div class="pages">' . $pagination . '</div>';
}
 ?>
