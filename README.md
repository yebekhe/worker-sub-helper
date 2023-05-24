# README

This PHP code defines two functions, `create_url()` and `save_sub()`, that work together to create a URL based on data in a JSON file and save the result to a file.

## Usage

To use this code you should follow these steps:

1. Ensure that there is a file called "workers.json" in the same directory as the PHP script.
2. Call the `save_sub()` function.

The `save_sub()` function will call `create_url()`, which reads from the "workers.json" file and constructs a URL based on the contents. The resulting URL is then used to fetch data and save it to a file called "worker-sub".

## Functionality

### create_url()

The `create_url()` function reads from a JSON file called "workers.json", which should contain data in the following format:

```
{
  "worker": "your.workers.dev",
  "sub": "mci.ircf.space",
  "max": "",
  "original": "",
  "fp": "",
  "alpn": "",
  "type": "",
  "provider": ""
}
```

- `"worker"` specifies the worker subscription you want to get its data. you can find cloudflare workers subscription code in [vfarid's repo](https://github.com/vfarid/v2ray-worker-sub)
- `"sub"` is an optional term for operator or clean ip/domain to append to the URL.
- Any additional key/value pairs will be treated as query parameters to add to the URL.

The function constructs a URL string based on this data and returns it.

### save_sub()

The `save_sub()` function calls `create_url()` to get a URL and then uses `file_get_contents()` to fetch the data at that URL. The resulting data is saved to a file called "worker-sub" using `file_put_contents()`. This function does not return anything.

## Potential Issues

There are a few potential issues with this code:

- If the "workers.json" file is missing or malformed, the `create_url()` function may throw errors or return unexpected results.
- If the server specified in `"worker"` is down or returns an error, `file_get_contents()`

## How to Use

- Press `Use this tepmlate` and or press on `<> Code` and download repository zip file and create a private repository for yourself.
- Navigate to settings tab and in `Actions -> General` check Workflow premissions section and select `Read and Write Premissions` and check `Allow Github Actions to create and approve pull requests` and press `Save`
- Create a bot in telegram using [BotFather](https://t.me/BotFather) and Find your userid of telegram account with [@userinfobot](https://t.me/userinfobot)
- Next again in settings tab and in `Secrets and Variables -> Actions` create 2 Repository secret : `TELEGRAM_TO` for your telegram userid and `TELEGRAM_TOKEN` for your telegram bot token which created in previous step
- Navigate to Code tab and Edit workers.json for your needs 
- Ok that all of it :) now github will send your subscription file every 60 minutes to your telegram account!


