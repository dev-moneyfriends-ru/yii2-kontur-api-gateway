<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 26.01.2022
 * Time: 19:45
 */

namespace mfteam\kontur\responses\buh\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Бухгалтерская форма
 *
 * Class BuhForm
 * @package mfteam\kontur\responses\buh\items
 */
class BuhForm extends AbstractBaseItem
{
    /** @var string */
    public const SONO = 'SONO';

    /** @var string */
    public const SMALL = 'Small';

    /** @var string  */
    public const LARGE = 'Large';

    /**
     * @var int|null
     */
    protected $year;

    /**
     * @var string|null
     */
    protected $organizationType;

    /**
     * @var ItemBuhFormCollection|null
     */
    protected $form1;

    /**
     * @var ItemBuhFormCollection|null
     */
    protected $form2;

    /**
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * @return string|null
     */
    public function getOrganizationType(): ?string
    {
        return $this->organizationType;
    }

    /**
     * @return ItemBuhFormCollection|null
     */
    public function getForm1(): ?ItemBuhFormCollection
    {
        return $this->form1;
    }

    /**
     * @return ItemBuhFormCollection|null
     */
    public function getForm2(): ?ItemBuhFormCollection
    {
        return $this->form2;
    }

    /**
     * @param array $data
     */
    public function setForm1(array $data = []): void
    {
        $this->form1 = new ItemBuhFormCollection($data);
    }

    /**
     * @param array $data
     */
    public function setForm2(array $data = []): void
    {
        $this->form2 = new ItemBuhFormCollection($data);
    }
}
