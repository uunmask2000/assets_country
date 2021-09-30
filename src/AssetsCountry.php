<?php
/*
 * @Author: your name
 * @Date: 2021-09-30 08:21:59
 * @LastEditTime: 2021-09-30 09:04:33
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \aa\api\AssetsCountry.php
 */
namespace uunmask2000_kk\AssetsCountry;

class AssetsCountry
{
    public function __construct() {}
    /**
     * 獲取國旗
     *
     * @param $lang
     */
    public function getAssetsCountryFlag($key = 'TW')
    {
        try {
            return 'https://raw.githubusercontent.com/uunmask2000/assets_country/main/src/img/' . strtoupper($key) . '.png';
            //code...
        } catch (\Throwable $th) {
            throw $th;
        }

    }
}
