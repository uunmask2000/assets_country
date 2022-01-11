<?php
/*
 * @Arthur: kk
 * @Date: 2022-01-10 17:57:59
 * @LastEditTime: 2022-01-11 10:33:22
 * @LastEditors: your name
 * @Description: 自動生成 [嚴格紀律 Description]
 * @FilePath: \assets_country\src\AssetsCountry.php
 * 嚴格紀律
 */

namespace uunmask2000_kk\AssetsCountry;

use PragmaRX\Countries\Package\Countries;

class AssetsCountry
{
    /**
     * @var string
     */
    protected $img_path = 'https://raw.githubusercontent.com/uunmask2000/assets_country/main/src/img/';
    private $Countries_class;
    public function __construct()
    {
        $this->Countries_class = new Countries();
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
            # 同地區判斷
            switch ($code) {
                case '44':
                    return $this->img_path . strtoupper('UK') . '.png';
                default:
                    foreach ($lists as $key => $value) {
                        if ($value['dial_code'] === $code) {
                            return $this->img_path . strtoupper($value['code']) . '.png';
                        }
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
                $lists[$key]['CountryInfo'] = $this->Countries_class->where('cca2', $value['code'])->toArray();
            }

            return $lists;
            // //code...
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * getCountryFlagByColumn
     *
     * @param string $key
     * @param string $Column
     * 
     * @return mixed
     */
    public function getCountryFlagByColumn($key = 'tw', $Column = 'code')
    {
        try {
            $json  = file_get_contents(__DIR__ . '/json/lists.json');
            $lists = json_decode($json, 1);

            $id = 0;
            if ($Column == 'code') {
                $key =                strtoupper($key);
                switch ($key) {
                    case 'UK':
                        $key = 'GB';
                        $Column = 'code';
                        break;

                    default:
                        # code...
                        break;
                }
            } else if ($Column == 'dial_code') {
                $key =             (int)($key);
                switch ($key) {
                    case '44':
                        $key = 'GB';
                        $Column = 'code';
                        break;

                    default:
                        # code...
                        break;
                }
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
            $output['CountryInfo'] =  $this->Countries_class->where('cca2', $output['code'])->toArray();

            return $output;
            // //code...
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
