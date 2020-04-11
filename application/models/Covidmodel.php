<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Covidmodel extends CI_Model
{
    public function getApi($status)
    {
        switch ($status) {
            case 'region':
                $url = "https://api.kawalcorona.com";
                break;
            case 'provinsi':
                $url = "https://api.kawalcorona.com/indonesia/provinsi";

                break;
            case 'indonesia':
                $url = "https://api.kawalcorona.com/indonesia";
                break;

            default:

                # code...
                break;
        }

        $json = file_get_contents($url);
        $data = json_decode($json);
        $api = [];
        switch ($status) {
            case 'region':
                foreach ($data as $d) {
                    array_push(
                        $api,
                        [
                            'OBJECTID' => $d->attributes->OBJECTID,
                            'Country_Region' => $d->attributes->Country_Region,
                            'Last_Update' => $d->attributes->Last_Update,
                            'Confirmed' => $d->attributes->Confirmed,
                            'Deaths' => $d->attributes->Deaths,
                            'Recovered' => $d->attributes->Recovered,
                            'Active' => $d->attributes->Active
                        ]
                    );
                }
                break;
            case 'provinsi':
                foreach ($data as $d) {
                    array_push(
                        $api,
                        [
                            'FID' => $d->attributes->FID,
                            'Provinsi' => $d->attributes->Provinsi,
                            'Kasus_Posi' => $d->attributes->Kasus_Posi,
                            'Kasus_Semb' => $d->attributes->Kasus_Semb,
                            'Kasus_Meni' => $d->attributes->Kasus_Meni,
                        ]
                    );
                }
                break;
            case 'indonesia':
                foreach ($data as $d) {
                    array_push(
                        $api,
                        [
                            'name' => $d->name,
                            'positif' => $d->positif,
                            'sembuh' => $d->sembuh,
                            'meninggal' => $d->meninggal
                        ]
                    );
                }

                break;

            default:
                # code...
                break;
        }
        return $api;
    }

    public function getApiWorld($status)
    {
        switch ($status) {
            case 'positif':
                $url = "https://api.kawalcorona.com/positif";
                break;
            case 'sembuh':
                $url = "https://api.kawalcorona.com/sembuh";
                break;

            case 'meninggal':
                $url = "https://api.kawalcorona.com/meninggal";
                break;

            default:
                # code...
                break;
        }
        $json = file_get_contents($url);
        $data = json_decode($json);
        $api = $data->value;

        return $api;
    }
}
