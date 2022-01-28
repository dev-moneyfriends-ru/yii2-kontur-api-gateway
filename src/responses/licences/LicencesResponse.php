<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 15:36
 */

namespace mfteam\kontur\responses\licences;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\items\document\LicenseCollection;

/**
 * Информация о лицензиях
 *
 * Class LicencesResponse
 * @package mfteam\kontur\responses\licences
 */
class LicencesResponse extends AbstractCompanyResponse
{
    /**
     * @var LicenseCollection|null
     */
    protected $licenses;

    /**
     * @return LicenseCollection|null
     */
    public function getLicenses(): ?LicenseCollection
    {
        return $this->licenses;
    }

    /**
     * @param array $data
     */
    public function setLicenses(array $data): void
    {
        $this->licenses = new LicenseCollection($data);
    }
}
