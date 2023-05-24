<?php

// Check if the GET request contains the parameter 'url'
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    // Check for optional variables
    $variables = array('sub', 'max', 'original', 'fp', 'alpn', 'type', 'provider');
    $params = array();
    foreach ($variables as $var) {
        if (isset($_GET[$var])) {
            $params[$var] = $_GET[$var];
        }
    }

    // Add the 'sub' variable to the URL
    if (isset($params['sub'])) {
        header('Content-type: application/json;');
        $url .= '/sub/' . $params['sub'];
        unset($params['sub']);
    } else {
        header('Content-type: application/json;');
        $url .= '/sub';
    }

    // Append other variables as query parameters
    if (!empty($params)) {
        header('Content-type: application/json;');
        $url .= '?' . http_build_query($params);
        $url = str_replace("%2C", ",", $url);
    }
    // Use file_get_contents() function to fetch data from the modified URL
    $data = file_get_contents("https://$url");

    // Output the retrieved data
    echo $data;
} else {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https";
    $host = $_SERVER['HTTP_HOST'];
    $url_self = $protocol . "://" . $host;
    echo '<!DOCTYPE html>';
    echo '<body dir="rtl">';
    echo '<h2><font color="green">همه چی درسته</font></h2>';
    echo '<p>';
    echo '<h3>برگرفته از توضیحات ورکر vahidfarid</h3>';
    echo '</p>';
    echo '<p>';
    echo '<h4><font color="red"> هر جایی از متن که عبارت worker_url ذکر شده است را با لینک ورکر خود بدون https:// جایگزین کنید.</font></h4>';
    echo '</p>';
    echo '<p />';
    echo '<p>';
    echo 'این لینک sub را در اپ v2ray خود به شکل زیر کپی کنید. در این صورت یک دامین اتفاقی از خود ورکر به عنوان آی‌پی تمیز انتخاب شده و روی بیشتر اوپراتورها با کیفیت خوب پاسخ خواهد داد:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url">' . $url_self . '?url=worker_url</a>';
    echo '</p>';
    echo '<p>';
    echo 'این لینک sub را همراه با کد اپراتور در اپ v2ray خود کپی کنید. برای مثال در همراه اول به شکل زیر خواهد بود:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&sub=mci">' . $url_self . '?url=worker_url&sub=mci</a>';
    echo '</p>';
    echo '<p>';
    echo 'و یا همین لینک را همراه با آی‌پی تمیز در اپ خود اضافه کنید:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&sub=1.2.3.4">' . $url_self . '?url=worker_url&sub=1.2.3.4</a>';
    echo '</p>';
    echo '<p>';
    echo 'می‌توانید چند آی‌پی تمیز را با کاما جدا کنید. در این صورت برای هر آی‌پی تمیز به تعداد قدید شده، کانفیک ترکیب شده با ورکر تحویل می دهد:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&sub=1.2.3.4,9.8.7.6">' . $url_self . '?url=worker_url&sub=1.2.3.4,9.8.7.6</a>';
    echo '</p>';
    echo '<p>';
    echo 'دقیقا با همین مدل می‌توانید دامین آی‌پی تمیز نیز استفاده کنید:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&sub=mci.ircf.space">' . $url_self . '?url=worker_url&sub=mci.ircf.space</a>';
    echo '</p>';
    echo '<p>';
    echo 'می‌توانید از چند سابدامنین آیءی تمیز نیز استفاده کنید:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&sub=mci.ircf.space,my.domain.me">' . $url_self . '?url=worker_url&sub=mci.ircf.space,my.domain.me</a>';
    echo '</p>';
    echo '<p>';
    echo 'می‌توانید با متغیر max تعداد کانفیگ را مشخص کنید:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&max=200">' . $url_self . '?url=worker_url&max=200</a>';
    echo '</p>';
    echo '<p>';
    echo 'همچنین می‌توانید با متغیر original با عدد 0 یا 1 و یا با yes/no مشخص کنید که کانفیگ‌های اصلی (ترکیب نشده با ورکر) هم در خروجی آورده شوند یا نه:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&sub=1.2.3.4?max=200&original=yes">' . $url_self . '?url=worker_url&sub=1.2.3.4?max=200&original=yes</a>';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&max=200&original=0">' . $url_self . '?url=worker_url&max=200&original=0</a>';
    echo '</p>';
    echo '<p>';
    echo 'در صورت لزوم می توانید با متغیر merge مشخص کنید که کانفیگ‌های ترکیبی حذف شوند:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&max=200&original=yes&merge=no</a>';
    echo '</p>';
    echo '<p>';
    echo 'همچنین می‌توانید fp و alpn را نیز مشخص کنید:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&max=200&fp=chrome&alpn=h2,http/1.1">' . $url_self . '?url=worker_url&max=200&fp=chrome&alpn=h2,http/1.1</a>';
    echo '</p>';
    echo '<p>';
    echo 'در صورت نیاز می‌توانید برای کانفیگ‌های اصلی، تعیین کنید که کدام نوع از کانفیگ‌ها را برای شما لیست کند:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&max=200&type=vmess,ss,ssr,vless">' . $url_self . '?url=worker_url&max=200&type=vmess,ss,ssr,vless</a>';
    echo '</p>';
    echo '<p>';
    echo 'در صورت نیاز می‌توانید لیست پرووایدرها را محدود کنید:';
    echo '</p>';
    echo '<p>';
    echo '<a href="' . $url_self . '?url=worker_url&provider=mahdibland,vpei">' . $url_self . '?url=worker_url&provider=mahdibland,vpei</a>';
    echo '</p>';
    echo '</body>';
}
?>
