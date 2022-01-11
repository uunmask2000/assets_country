# 國家資訊 V1.0.0 - main

## composer 倉庫

[composer](https://packagist.org/packages/uunmask2000_kk/assets_country)

### initialize

```text

require 'vendor/autoload.php'; 
use uunmask2000_kk\AssetsCountry\AssetsCountry;
$AssetsCountry = new AssetsCountry();

```text


### 獲取根據國家(地區)縮碼國旗 getAssetsCountryFlagByCountryCode

```text
input
    $key = ?  , default = "TW"
output
    https://raw.githubusercontent.com/uunmask2000/assets_country/main/src/img/TW.png
```text

### 獲取根據國家(地區)國碼國旗 getAssetsCountryFlagByPhoneCode

```text
input
    $key = ?  , default = "886"
output
    https://raw.githubusercontent.com/uunmask2000/assets_country/main/src/img/TW.png
```text

### 獲取所有國家(地區)國碼國旗 getAllAssetsCountryFlag

```text
input

output
    []
```text
### 獲取國家(地區)資訊，利用 code or dial_code getCountryFlagByColumn

```text
input

output
    []
```text
