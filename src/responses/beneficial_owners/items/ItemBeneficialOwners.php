<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 27.01.2022
 * Time: 18:11
 */

namespace mfteam\kontur\responses\beneficial_owners\items;

use mfteam\kontur\responses\AbstractBaseItem;
use mfteam\kontur\responses\items\person\owner\PersonOwnerFLCollection;
use mfteam\kontur\responses\items\person\owner\PersonOwnerForeignCollection;
use mfteam\kontur\responses\items\person\owner\PersonOwnerOtherCollection;
use mfteam\kontur\responses\items\person\owner\PersonOwnerULCollection;

/**
 * Конечные владельцы
 *
 * Class ItemBeneficialOwners
 * @package mfteam\kontur\responses\beneficial_owners\items
 */
class ItemBeneficialOwners extends AbstractBaseItem
{
    /**
     * @var PersonOwnerFLCollection|null
     */
    protected $beneficialOwnersFL;

    /**
     * @var PersonOwnerULCollection|null
     */
    protected $beneficialOwnersUL;

    /**
     * @var PersonOwnerForeignCollection|null
     */
    protected $beneficialOwnersForeign;

    /**
     * @var PersonOwnerOtherCollection|null
     */
    protected $beneficialOwnersOther;

    /**
     * @return PersonOwnerFLCollection|null
     */
    public function getBeneficialOwnersFL(): ?PersonOwnerFLCollection
    {
        return $this->beneficialOwnersFL;
    }

    /**
     * @param array $data
     */
    public function setBeneficialOwnersFL(array $data = []): void
    {
        $this->beneficialOwnersFL = new PersonOwnerFLCollection($data);
    }

    /**
     * @return PersonOwnerULCollection|null
     */
    public function getBeneficialOwnersUL(): ?PersonOwnerULCollection
    {
        return $this->beneficialOwnersUL;
    }

    /**
     * @param array $data
     */
    public function setBeneficialOwnersUL(array $data = []): void
    {
        $this->beneficialOwnersUL = new PersonOwnerULCollection($data);
    }

    /**
     * @return PersonOwnerForeignCollection|null
     */
    public function getBeneficialOwnersForeign(): ?PersonOwnerForeignCollection
    {
        return $this->beneficialOwnersForeign;
    }

    /**
     * @param array $data
     */
    public function setBeneficialOwnersForeign(array $data = []): void
    {
        $this->beneficialOwnersForeign = new PersonOwnerForeignCollection($data);
    }

    /**
     * @return PersonOwnerOtherCollection|null
     */
    public function getBeneficialOwnersOther(): ?PersonOwnerOtherCollection
    {
        return $this->beneficialOwnersOther;
    }

    /**
     * @param array $data
     */
    public function setBeneficialOwnersOther(array $data = []): void
    {
        $this->beneficialOwnersOther = new PersonOwnerOtherCollection($data);
    }
}
