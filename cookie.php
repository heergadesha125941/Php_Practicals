<?php
#analyse:

#create cookie
//setcookie("user","heer",time() + 300);
echo "cookie generated";
echo "<br>";
#edit cookie
//setcookie("user","developer",time() + 300);
echo $_COOKIE['user'];
#delete cookie
setcookie("user","heer",time() - 300);
//encrypt cookie

function enc_cookie($data)
{
        $data = $data . "345%$";
        setcookie("user", "$data", time() + 300);
        echo $_COOKIE['user'];
}
enc_cookie("heer");

?>