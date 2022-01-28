<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 12:14
 */

namespace mfteam\kontur\responses\egrl_detail\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\person\shareholder\PersonShareholderFLCollection;
use mfteam\kontur\responses\items\person\shareholder\PersonShareholderOtherCollection;
use mfteam\kontur\responses\items\person\shareholder\PersonShareholderULCollection;

/**
 * Акционеры
 *
 * Class ShareholdersEgrlDetail
 * @package mfteam\kontur\responses\egrl_detail
 */
class ShareholdersEgrlDetail extends AbstractBaseItem
{
    /**
     * @var string|null
     */
    protected $date;

    /**
     * @var PersonShareholderFLCollection|null
     */
    protected $shareholdersFL;

    /**
     * @var PersonShareholderULCollection|null
     */
    protected $shareholdersUL;

    /**
     * @var PersonShareholderOtherCollection|null
     */
    protected $shareholdersOther;

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @return PersonShareholderFLCollection|null
     */
    public function getShareholdersFL(): ?PersonShareholderFLCollection
    {
        return $this->shareholdersFL;
    }

    /**
     * @return PersonShareholderULCollection|null
     */
    public function getShareholdersUL(): ?PersonShareholderULCollection
    {
        return $this->shareholdersUL;
    }

    /**
     * @return PersonShareholderOtherCollection|null
     */
    public function getShareholdersOther(): ?PersonShareholderOtherCollection
    {
        return $this->shareholdersOther;
    }

    /**
     * @param array $data
     */
    public function setShareholdersFL(array $data = []): void
    {
        $this->shareholdersFL = new PersonShareholderFLCollection($data);
    }

    /**
     * @param array $data
     */
    public function setShareholdersUL(array $data = []): void
    {
        $this->shareholdersUL = new PersonShareholderULCollection($data);
    }

    /**
     * @param array $data
     */
    public function setShareholdersOther(array $data = []): void
    {
        $this->shareholdersOther = new PersonShareholderOtherCollection($data);
    }
}
