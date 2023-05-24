<?php

function create_url()
{
    $data = json_decode(file_get_contents("workers.json"), true);
    $url = "";
    foreach ($data as $key => $value) {
        if ($key === "worker") {
            $url = "https://" . $value;
        } elseif ($key === "sub") {
            if ($value !== "") {
                $url .= "/sub/" . $value;
            } else {
                $url .= "/sub";
            }
        } else {
            if ($value !== "") {
                if (strpos($url, "?") !== false) {
                    $url .= "&" . $key . "=" . $value;
                } else {
                    $url .= "?" . $key . "=" . $value;
                }
            }
        }
    }
    return $url;
}

function save_sub()
{
    $url = create_url();
    echo $url;
    file_put_contents('worker-sub.txt', file_get_contents($url));
}

save_sub();
?>
