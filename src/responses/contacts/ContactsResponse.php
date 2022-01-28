<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 16:50
 */

namespace mfteam\kontur\responses\contacts;

use mfteam\kontur\responses\AbstractCompanyResponse;
use mfteam\kontur\responses\items\misc\ContactPhones;

/**
 * Справочник телефонов
 *
 * Class ContactsResponse
 * @package mfteam\kontur\responses\contacts
 */
class ContactsResponse extends AbstractCompanyResponse
{
    /**
     * @var ContactPhones|null
     */
    protected $contactPhones;

    /**
     * @return ContactPhones|null
     */
    public function getContactPhones(): ?ContactPhones
    {
        return $this->contactPhones;
    }

    /**
     * @param array $data
     * @return void
     */
    public function setContactPhones(array $data = []): void
    {
        $this->contactPhones = new ContactPhones($data);
    }
}
