<?php
/*
 * @Author: your name
 * @Date: 2021-09-30 08:21:59
 * @LastEditTime: 2021-09-30 09:31:23
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \aa\api\AssetsCountry.php
 */
namespace uunmask2000_kk\AssetsCountry;

class AssetsCountry
{
    /**
     * @var string
     */
    protected $img_path = 'https://raw.githubusercontent.com/uunmask2000/assets_country/main/src/img/';
    public function __construct() {}
    /**
     * 獲取根據國家(地區)縮碼國旗
     *
     * @param $lang
     */
    public function getAssetsCountryFlagByCountryCode($key = 'TW')
    {
        try {
            return $this->img_path . strtoupper($key) . '.png';
            //code...
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * 獲取根據國家(地區)國碼國旗
     *
     * @param $lang
     */
    public function getAssetsCountryFlagByPhoneCode($code = '886')
    {
        try {
            $json  = file_get_contents(__DIR__ . '/json/lists.json');
            $lists = json_decode($json, 1);

            foreach ($lists as $key => $value) {
                if ($value['dial_code'] === $code) {
                    return $this->img_path . strtoupper($value['code']) . '.png';
                }
            }
            // //code...
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
