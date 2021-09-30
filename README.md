# 國家資訊 V1.0.0

## composer 倉庫

[composer](https://packagist.org/packages/uunmask2000_kk/assets_country)

### initialize

```

require 'vendor/autoload.php'; 
use uunmask2000_kk\AssetsCountry\AssetsCountry;
$AssetsCountry = new AssetsCountry();

```


### 獲取根據國家(地區)縮碼國旗 getAssetsCountryFlagByCountryCode

```
input
    $key = ?  , default = "TW"
output
    https://raw.githubusercontent.com/uunmask2000/assets_country/main/src/img/TW.png
```

### 獲取根據國家(地區)國碼國旗 getAssetsCountryFlagByPhoneCode

```
input
    $key = ?  , default = "886"
output
    https://raw.githubusercontent.com/uunmask2000/assets_country/main/src/img/TW.png
```
