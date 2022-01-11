<?php
/*
 * @Arthur: kk
 * @Date: 2022-01-10 17:57:59
 * @LastEditTime: 2022-01-11 08:52:06
 * @LastEditors: your name
 * @Description: 自動生成 [嚴格紀律 Description]
 * @FilePath: \assets_country\src\AssetsCountry.php
 * 嚴格紀律
 */

namespace uunmask2000_kk\AssetsCountry;

class AssetsCountry
{
    /**
     * @var string
     */
    protected $img_path = 'https://raw.githubusercontent.com/uunmask2000/assets_country/main/src/img/';
    public function __construct()
    {
    }
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

    /**
     * 獲取所有國家(地區)國碼國旗
     *
     * @return array $lists
     */
    public function getAllAssetsCountryFlag()
    {
        try {
            $json  = file_get_contents(__DIR__ . '/json/lists.json');
            $lists = json_decode($json, 1);

            foreach ($lists as $key => $value) {
                $lists[$key]['flag'] = $this->img_path . strtoupper($value['code']) . '.png';
            }

            return $lists;
            // //code...
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getCountryFlagByColumn($key = 'tw', $Column = 'code')
    {
        try {
            $json  = file_get_contents(__DIR__ . '/json/lists.json');
            $lists = json_decode($json, 1);

            $id = 0;
            if ($Column == 'code') {
                $key =                strtoupper($key);
            } else if ($Column == 'code') {
                $key =             (int)($key);
            }

            try {
                $id = array_search(
                    $key,
                    array_column($lists, $Column)
                );
            } catch (\Throwable $th) {
                //throw $th;
            }

            $output = $lists[$id];
            $output['flag'] =  $this->img_path . strtoupper($output['code']) . '.png';

            return $output ;
            // //code...
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
