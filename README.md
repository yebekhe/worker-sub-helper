# worker sub helper

This is a PHP script called **worker sub helper**. It can be used to fetch data from a worker URL by accepting a GET request with the parameter 'url' and optional variables such as 'sub', 'max', 'original', 'fp', 'alpn', 'type', and 'provider'.

این یک اسکریپت PHP به نام **worker sub helper** است. با استفاده از آن می‌توانید با دریافت یک درخواست GET با پارامتر 'url' و متغیرهای اختیاری مانند 'sub'، 'max'، 'original'، 'fp'، 'alpn'، 'type' و 'provider'، اطلاعاتی را از یک URL ورکر دریافت کنید.

You can use this script not only with [vfarid's worker subscription](https://github.com/vfarid/v2ray-worker-sub) but also for any subscription link that is filtered.

شما می‌توانید از این اسکریپت نه تنها با [ورکر vfarid](https://github.com/vfarid/v2ray-worker-sub) بلکه هر لینک سابسکریپشن فیلتر شده دیگری استفاده کنید.

## Usage

To use the **worker sub helper** script, simply call the PHP file with the 'url' parameter in a GET request. For example:

برای استفاده از اسکریپت **worker sub helper** ، به سادگی فایل PHP را با پارامتر 'url' در درخواست GET فراخوانی کنید. به عنوان مثال:

```
http://example.com/worker_sub_helper.php?url=worker_url
```

This will fetch data from the worker URL 'https://worker_url/sub'. You can add optional variables and parameters to modify the URL further, as shown in the examples on the HTML page.

با این کار، اطلاعاتی را از URL ورکر 'https://worker_url/sub' دریافت خواهد شد. شما می‌توانید متغیرها و پارامترهای دلخواه دیگری را برای تغییر URL فراهم کنید، همانطور که در نمونه‌های موجود در صفحه HTML نشان داده شده است.

you can use CodeSandbox or any other platforms that support PHP.

شما می‌توانید از CodeSandbox یا هر سایر پلتفرم‌هایی که PHP را پشتیبانی می‌کنند، استفاده کنید.

## License

This script is released under the MIT license. You are free to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copiesof the script, subject to the conditions of the license. See the LICENSE file for more information.

این اسکریپت تحت مجوز MIT منتشر شده است. شما آزاد هستید از این اسکریپت استفاده کنید، کپی کنید، اصلاح کنید، ادغام کنید، منتشر کنید، توزیع کنید، زیرمجوز بگیرید و/یا نسخه‌های این اسکریپت را بفروشید، با رعایت شرایط مجوز. برای کسب اطلاعات بیشتر به فایل LICENSE مراجعه کنید.
