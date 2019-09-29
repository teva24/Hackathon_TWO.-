
(function() {
        var $flag = true;
if ($.cookie('eve') == null ) {
  $flag = false;
}

if ($flag) {
    ("#link").attr("href","account.php");
    ("#image").attr("src","img/icons/avatar.svg");
}
else {
     ("#image").attr("src","img/icons/login.svg");
    ("#link").attr("href","login.php");
}
});