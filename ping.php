<?php
$ip =   "104.21.55.203";
exec("ping -n 3 $ip", $output, $status);
print_r($output[9]);
// $host="192.168.0.104";

// exec("ping -c 4 " . $host, $output, $result);

// print_r($output);

// if ($result == 0)

// echo "Ping successful!";

// else

// echo "Ping unsuccessful!"
?>