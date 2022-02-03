<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 15:24
 */

namespace mfteam\kontur\responses\analytics\items;

use mfteam\kontur\responses\AbstractBaseItem;

/**
 * Маркеры автоматической проверки и числовые индикаторы
 *
 * Class Analytics
 * @package mfteam\kontur\responses\items
 */
class Analytics extends AbstractBaseItem
{
    /**
     * @var int|null
     */
    protected $q1001;

    /**
     * @var int|null
     */
    protected $s1001;

    /**
     * @var int|null
     */
    protected $q1002;

    /**
     * @var float|null
     */
    protected $s1002;

    /**
     * @var bool|null
     */
    protected $m1003;

    /**
     * @var bool|null
     */
    protected $m1004;

    /**
     * @var bool|null
     */
    protected $m1005;

    /**
     * @var bool|null
     */
    protected $m1006;

    /**
     * @var float|null
     */
    protected $s1007;

    /**
     * @var float|null
     */
    protected $s1008;

    /**
     * @var int|null
     */
    protected $q2001;

    /**
     * @var int|null
     */
    protected $q2002;

    /**
     * @var int|null
     */
    protected $q2003;

    /**
     * @var int|null
     */
    protected $q2004;

    /**
     * @var float|null
     */
    protected $s2001;

    /**
     * @var float|null
     */
    protected $s2002;

    /**
     * @var float|null
     */
    protected $s2003;

    /**
     * @var float|null
     */
    protected $s2004;

    /**
     * @var int|null
     */
    protected $q2011;

    /**
     * @var int|null
     */
    protected $q2012;

    /**
     * @var int|null
     */
    protected $q2013;

    /**
     * @var int|null
     */
    protected $q2014;

    /**
     * @var int|null
     */
    protected $q2015;

    /**
     * @var int|null
     */
    protected $q2016;

    /**
     * @var int|null
     */
    protected $q2017;

    /**
     * @var int|null
     */
    protected $q2018;

    /**
     * @var int|null
     */
    protected $q2019;

    /**
     * @var float|null
     */
    protected $s2011;

    /**
     * @var float|null
     */
    protected $s2012;

    /**
     * @var float|null
     */
    protected $s2013;

    /**
     * @var float|null
     */
    protected $s2014;

    /**
     * @var float|null
     */
    protected $s2015;

    /**
     * @var float|null
     */
    protected $s2016;

    /**
     * @var float|null
     */
    protected $s2017;

    /**
     * @var float|null
     */
    protected $s2018;

    /**
     * @var float|null
     */
    protected $s2019;

    /**
     * @var int|null
     */
    protected $q2021;

    /**
     * @var int|null
     */
    protected $q2022;

    /**
     * @var int|null
     */
    protected $q2023;

    /**
     * @var int|null
     */
    protected $q2024;

    /**
     * @var int|null
     */
    protected $q2025;

    /**
     * @var float|null
     */
    protected $s2021;

    /**
     * @var float|null
     */
    protected $s2022;

    /**
     * @var float|null
     */
    protected $s2023;

    /**
     * @var float|null
     */
    protected $s2024;

    /**
     * @var float|null
     */
    protected $s2025;

    /**
     * @var int|null
     */
    protected $q2031;

    /**
     * @var int|null
     */
    protected $q2032;

    /**
     * @var int|null
     */
    protected $q2033;

    /**
     * @var int|null
     */
    protected $q2034;

    /**
     * @var int|null
     */
    protected $q2035;

    /**
     * @var float|null
     */
    protected $s2031;

    /**
     * @var float|null
     */
    protected $s2032;

    /**
     * @var float|null
     */
    protected $s2033;

    /**
     * @var float|null
     */
    protected $s2034;

    /**
     * @var float|null
     */
    protected $s2035;

    /**
     * @var bool|null
     */
    protected $m4001;

    /**
     * @var int|null
     */
    protected $q4002;

    /**
     * @var float|null
     */
    protected $s4002;

    /**
     * @var int|null
     */
    protected $q4003;

    /**
     * @var float|null
     */
    protected $s4003;

    /**
     * @var int|null
     */
    protected $q4004;

    /**
     * @var float|null
     */
    protected $s4004;

    /**
     * @var int|null
     */
    protected $q4005;

    /**
     * @var float|null
     */
    protected $s4005;

    /**
     * @var bool|null
     */
    protected $m5001;

    /**
     * @var bool|null
     */
    protected $m5008;

    /**
     * @var bool|null
     */
    protected $m5002;

    /**
     * @var bool|null
     */
    protected $m5003;

    /**
     * @var bool|null
     */
    protected $m5004;

    /**
     * @var bool|null
     */
    protected $m5005;

    /**
     * @var bool|null
     */
    protected $m5009;

    /**
     * @var bool|null
     */
    protected $m5010;

    /**
     * @var bool|null
     */
    protected $m5006;

    /**
     * @var bool|null
     */
    protected $m5007;

    /**
     * @var int|null
     */
    protected $q6001;

    /**
     * @var bool|null
     */
    protected $m6002;

    /**
     * @var float|null
     */
    protected $s6003;

    /**
     * @var float|null
     */
    protected $s6004;

    /**
     * @var float|null
     */
    protected $s6005;

    /**
     * @var float|null
     */
    protected $s6006;

    /**
     * @var float|null
     */
    protected $s6007;

    /**
     * @var float|null
     */
    protected $s6008;

    /**
     * @var float|null
     */
    protected $s6009;

    /**
     * @var float|null
     */
    protected $s6010;

    /**
     * @var float|null
     */
    protected $s6011;

    /**
     * @var float|null
     */
    protected $s6012;

    /**
     * @var float|null
     */
    protected $s6013;

    /**
     * @var int|null
     */
    protected $d6014;

    /**
     * @var string|null
     */
    protected $e6014;

    /**
     * @var bool|null
     */
    protected $m7001;

    /**
     * @var bool|null
     */
    protected $m7002;

    /**
     * @var bool|null
     */
    protected $m7003;

    /**
     * @var bool|null
     */
    protected $m7004;

    /**
     * @var int|null
     */
    protected $q7005;

    /**
     * @var int|null
     */
    protected $q7006;

    /**
     * @var int|null
     */
    protected $q7007;

    /**
     * @var int|null
     */
    protected $q7008;

    /**
     * @var int|null
     */
    protected $q7009;

    /**
     * @var string|null
     */
    protected $d7010;

    /**
     * @var bool|null
     */
    protected $m7010;

    /**
     * @var bool|null
     */
    protected $m7013;

    /**
     * @var int|null
     */
    protected $q7026;

    /**
     * @var bool|null
     */
    protected $m7014;

    /**
     * @var bool|null
     */
    protected $m7015;

    /**
     * @var string|null
     */
    protected $e7014;

    /**
     * @var string|null
     */
    protected $d7014;

    /**
     * @var bool|null
     */
    protected $m7016;

    /**
     * @var int|null
     */
    protected $q7017;

    /**
     * @var int|null
     */
    protected $q7018;

    /**
     * @var int|null
     */
    protected $q7019;

    /**
     * @var int|null
     */
    protected $q7020;

    /**
     * @var int|null
     */
    protected $q7021;

    /**
     * @var int|null
     */
    protected $q7022;

    /**
     * @var bool|null
     */
    protected $m7022;

    /**
     * @var bool|null
     */
    protected $m7026;

    /**
     * @var bool|null
     */
    protected $m7023;

    /**
     * @var bool|null
     */
    protected $m7024;

    /**
     * @var bool|null
     */
    protected $m7025;

    /**
     * @var bool|null
     */
    protected $m7027;

    /**
     * @var bool|null
     */
    protected $m7028;

    /**
     * @var bool|null
     */
    protected $m7029;

    /**
     * @var bool|null
     */
    protected $m7030;

    /**
     * @var bool|null
     */
    protected $m7031;

    /**
     * @var bool|null
     */
    protected $m7032;

    /**
     * @var bool|null
     */
    protected $m7033;

    /**
     * @var bool|null
     */
    protected $m7034;

    /**
     * @var bool|null
     */
    protected $m7035;

    /**
     * @var bool|null
     */
    protected $m7036;

    /**
     * @var bool|null
     */
    protected $m7037;

    /**
     * @var bool|null
     */
    protected $m7038;

    /**
     * @var bool|null
     */
    protected $m7039;

    /**
     * @var bool|null
     */
    protected $m7049;

    /**
     * @var bool|null
     */
    protected $m7041;

    /**
     * @var bool|null
     */
    protected $m7042;

    /**
     * @var bool|null
     */
    protected $m7043;

    /**
     * @var bool|null
     */
    protected $m7044;

    /**
     * @var bool|null
     */
    protected $m7045;

    /**
     * @var bool|null
     */
    protected $m7046;

    /**
     * @var int|null
     */
    protected $q8001;

    /**
     * @var bool|null
     */
    protected $m8001;

    /**
     * @var bool|null
     */
    protected $m8002;

    /**
     * @var bool|null
     */
    protected $m8003;

    /**
     * @var bool|null
     */
    protected $m8004;

    /**
     * @var bool|null
     */
    protected $m8005;

    /**
     * @var bool|null
     */
    protected $m8006;

    /**
     * @var bool|null
     */
    protected $m8007;

    /**
     * @var bool|null
     */
    protected $m8008;

    /**
     * @var bool|null
     */
    protected $m8009;

    /**
     * @var bool|null
     */
    protected $m8010;

    /**
     * @var bool|null
     */
    protected $m8011;

    /**
     * @var bool|null
     */
    protected $m8012;

    /**
     * @var int|null
     */
    protected $q9001;

    /**
     * @var int|null
     */
    protected $q9002;

    /**
     * @var int|null
     */
    protected $q9003;

    /**
     * @var int|null
     */
    protected $q9004;

    /**
     * @var int|null
     */
    protected $q1101;

    /**
     * @var int|null
     */
    protected $q1102;

    /**
     * @return int|null
     */
    public function getQ1001(): ?int
    {
        return $this->q1001;
    }

    /**
     * @return int|null
     */
    public function getS1001(): ?int
    {
        return $this->s1001;
    }

    /**
     * @return int|null
     */
    public function getQ1002(): ?int
    {
        return $this->q1002;
    }

    /**
     * @return float|null
     */
    public function getS1002(): ?float
    {
        return $this->s1002;
    }

    /**
     * @return bool|null
     */
    public function getM1003(): ?bool
    {
        return $this->m1003;
    }

    /**
     * @return bool|null
     */
    public function getM1004(): ?bool
    {
        return $this->m1004;
    }

    /**
     * @return bool|null
     */
    public function getM1005(): ?bool
    {
        return $this->m1005;
    }

    /**
     * @return bool|null
     */
    public function getM1006(): ?bool
    {
        return $this->m1006;
    }

    /**
     * @return float|null
     */
    public function getS1007(): ?float
    {
        return $this->s1007;
    }

    /**
     * @return float|null
     */
    public function getS1008(): ?float
    {
        return $this->s1008;
    }

    /**
     * @return int|null
     */
    public function getQ2001(): ?int
    {
        return $this->q2001;
    }

    /**
     * @return int|null
     */
    public function getQ2002(): ?int
    {
        return $this->q2002;
    }

    /**
     * @return int|null
     */
    public function getQ2003(): ?int
    {
        return $this->q2003;
    }

    /**
     * @return int|null
     */
    public function getQ2004(): ?int
    {
        return $this->q2004;
    }

    /**
     * @return float|null
     */
    public function getS2001(): ?float
    {
        return $this->s2001;
    }

    /**
     * @return float|null
     */
    public function getS2002(): ?float
    {
        return $this->s2002;
    }

    /**
     * @return float|null
     */
    public function getS2003(): ?float
    {
        return $this->s2003;
    }

    /**
     * @return float|null
     */
    public function getS2004(): ?float
    {
        return $this->s2004;
    }

    /**
     * @return int|null
     */
    public function getQ2011(): ?int
    {
        return $this->q2011;
    }

    /**
     * @return int|null
     */
    public function getQ2012(): ?int
    {
        return $this->q2012;
    }

    /**
     * @return int|null
     */
    public function getQ2013(): ?int
    {
        return $this->q2013;
    }

    /**
     * @return int|null
     */
    public function getQ2014(): ?int
    {
        return $this->q2014;
    }

    /**
     * @return int|null
     */
    public function getQ2015(): ?int
    {
        return $this->q2015;
    }

    /**
     * @return int|null
     */
    public function getQ2016(): ?int
    {
        return $this->q2016;
    }

    /**
     * @return int|null
     */
    public function getQ2017(): ?int
    {
        return $this->q2017;
    }

    /**
     * @return int|null
     */
    public function getQ2018(): ?int
    {
        return $this->q2018;
    }

    /**
     * @return int|null
     */
    public function getQ2019(): ?int
    {
        return $this->q2019;
    }

    /**
     * @return float|null
     */
    public function getS2011(): ?float
    {
        return $this->s2011;
    }

    /**
     * @return float|null
     */
    public function getS2012(): ?float
    {
        return $this->s2012;
    }

    /**
     * @return float|null
     */
    public function getS2013(): ?float
    {
        return $this->s2013;
    }

    /**
     * @return float|null
     */
    public function getS2014(): ?float
    {
        return $this->s2014;
    }

    /**
     * @return float|null
     */
    public function getS2015(): ?float
    {
        return $this->s2015;
    }

    /**
     * @return float|null
     */
    public function getS2016(): ?float
    {
        return $this->s2016;
    }

    /**
     * @return float|null
     */
    public function getS2017(): ?float
    {
        return $this->s2017;
    }

    /**
     * @return float|null
     */
    public function getS2018(): ?float
    {
        return $this->s2018;
    }

    /**
     * @return float|null
     */
    public function getS2019(): ?float
    {
        return $this->s2019;
    }

    /**
     * @return int|null
     */
    public function getQ2021(): ?int
    {
        return $this->q2021;
    }

    /**
     * @return int|null
     */
    public function getQ2022(): ?int
    {
        return $this->q2022;
    }

    /**
     * @return int|null
     */
    public function getQ2023(): ?int
    {
        return $this->q2023;
    }

    /**
     * @return int|null
     */
    public function getQ2024(): ?int
    {
        return $this->q2024;
    }

    /**
     * @return int|null
     */
    public function getQ2025(): ?int
    {
        return $this->q2025;
    }

    /**
     * @return float|null
     */
    public function getS2021(): ?float
    {
        return $this->s2021;
    }

    /**
     * @return float|null
     */
    public function getS2022(): ?float
    {
        return $this->s2022;
    }

    /**
     * @return float|null
     */
    public function getS2023(): ?float
    {
        return $this->s2023;
    }

    /**
     * @return float|null
     */
    public function getS2024(): ?float
    {
        return $this->s2024;
    }

    /**
     * @return float|null
     */
    public function getS2025(): ?float
    {
        return $this->s2025;
    }

    /**
     * @return int|null
     */
    public function getQ2031(): ?int
    {
        return $this->q2031;
    }

    /**
     * @return int|null
     */
    public function getQ2032(): ?int
    {
        return $this->q2032;
    }

    /**
     * @return int|null
     */
    public function getQ2033(): ?int
    {
        return $this->q2033;
    }

    /**
     * @return int|null
     */
    public function getQ2034(): ?int
    {
        return $this->q2034;
    }

    /**
     * @return int|null
     */
    public function getQ2035(): ?int
    {
        return $this->q2035;
    }

    /**
     * @return float|null
     */
    public function getS2031(): ?float
    {
        return $this->s2031;
    }

    /**
     * @return float|null
     */
    public function getS2032(): ?float
    {
        return $this->s2032;
    }

    /**
     * @return float|null
     */
    public function getS2033(): ?float
    {
        return $this->s2033;
    }

    /**
     * @return float|null
     */
    public function getS2034(): ?float
    {
        return $this->s2034;
    }

    /**
     * @return float|null
     */
    public function getS2035(): ?float
    {
        return $this->s2035;
    }

    /**
     * @return bool|null
     */
    public function getM4001(): ?bool
    {
        return $this->m4001;
    }

    /**
     * @return int|null
     */
    public function getQ4002(): ?int
    {
        return $this->q4002;
    }

    /**
     * @return float|null
     */
    public function getS4002(): ?float
    {
        return $this->s4002;
    }

    /**
     * @return int|null
     */
    public function getQ4003(): ?int
    {
        return $this->q4003;
    }

    /**
     * @return float|null
     */
    public function getS4003(): ?float
    {
        return $this->s4003;
    }

    /**
     * @return int|null
     */
    public function getQ4004(): ?int
    {
        return $this->q4004;
    }

    /**
     * @return float|null
     */
    public function getS4004(): ?float
    {
        return $this->s4004;
    }

    /**
     * @return int|null
     */
    public function getQ4005(): ?int
    {
        return $this->q4005;
    }

    /**
     * @return float|null
     */
    public function getS4005(): ?float
    {
        return $this->s4005;
    }

    /**
     * @return bool|null
     * @deprecated
     */
    public function getM5001(): ?bool
    {
        return $this->m5001;
    }

    /**
     * @return bool|null
     */
    public function getM5008(): ?bool
    {
        return $this->m5008;
    }

    /**
     * @return bool|null
     */
    public function getM5002(): ?bool
    {
        return $this->m5002;
    }

    /**
     * @return bool|null
     */
    public function getM5003(): ?bool
    {
        return $this->m5003;
    }

    /**
     * @return bool|null
     */
    public function getM5004(): ?bool
    {
        return $this->m5004;
    }

    /**
     * @return bool|null
     */
    public function getM5005(): ?bool
    {
        return $this->m5005;
    }

    /**
     * @return bool|null
     */
    public function getM5009(): ?bool
    {
        return $this->m5009;
    }

    /**
     * @return bool|null
     */
    public function getM5010(): ?bool
    {
        return $this->m5010;
    }

    /**
     * @return bool|null
     */
    public function getM5006(): ?bool
    {
        return $this->m5006;
    }

    /**
     * @return bool|null
     */
    public function getM5007(): ?bool
    {
        return $this->m5007;
    }

    /**
     * @return int|null
     */
    public function getQ6001(): ?int
    {
        return $this->q6001;
    }

    /**
     * @return bool|null
     */
    public function getM6002(): ?bool
    {
        return $this->m6002;
    }

    /**
     * @return float|null
     */
    public function getS6003(): ?float
    {
        return $this->s6003;
    }

    /**
     * @return float|null
     */
    public function getS6004(): ?float
    {
        return $this->s6004;
    }

    /**
     * @return float|null
     */
    public function getS6005(): ?float
    {
        return $this->s6005;
    }

    /**
     * @return float|null
     */
    public function getS6006(): ?float
    {
        return $this->s6006;
    }

    /**
     * @return float|null
     */
    public function getS6007(): ?float
    {
        return $this->s6007;
    }

    /**
     * @return float|null
     */
    public function getS6008(): ?float
    {
        return $this->s6008;
    }

    /**
     * @return float|null
     */
    public function getS6009(): ?float
    {
        return $this->s6009;
    }

    /**
     * @return float|null
     */
    public function getS6010(): ?float
    {
        return $this->s6010;
    }

    /**
     * @return float|null
     */
    public function getS6011(): ?float
    {
        return $this->s6011;
    }

    /**
     * @return float|null
     */
    public function getS6012(): ?float
    {
        return $this->s6012;
    }

    /**
     * @return float|null
     */
    public function getS6013(): ?float
    {
        return $this->s6013;
    }

    /**
     * @return int|null
     */
    public function getD6014(): ?int
    {
        return $this->d6014;
    }

    /**
     * @return string|null
     */
    public function getE6014(): ?string
    {
        return $this->e6014;
    }

    /**
     * @return bool|null
     */
    public function getM7001(): ?bool
    {
        return $this->m7001;
    }

    /**
     * @return bool|null
     */
    public function getM7002(): ?bool
    {
        return $this->m7002;
    }

    /**
     * @return bool|null
     */
    public function getM7003(): ?bool
    {
        return $this->m7003;
    }

    /**
     * @return bool|null
     */
    public function getM7004(): ?bool
    {
        return $this->m7004;
    }

    /**
     * @return int|null
     */
    public function getQ7005(): ?int
    {
        return $this->q7005;
    }

    /**
     * @return int|null
     */
    public function getQ7006(): ?int
    {
        return $this->q7006;
    }

    /**
     * @return int|null
     */
    public function getQ7007(): ?int
    {
        return $this->q7007;
    }

    /**
     * @return int|null
     */
    public function getQ7008(): ?int
    {
        return $this->q7008;
    }

    /**
     * @return int|null
     */
    public function getQ7009(): ?int
    {
        return $this->q7009;
    }

    /**
     * @return string|null
     */
    public function getD7010(): ?string
    {
        return $this->d7010;
    }

    /**
     * @return bool|null
     */
    public function getM7010(): ?bool
    {
        return $this->m7010;
    }

    /**
     * @return bool|null
     */
    public function getM7013(): ?bool
    {
        return $this->m7013;
    }

    /**
     * @return int|null
     */
    public function getQ7026(): ?int
    {
        return $this->q7026;
    }

    /**
     * @return bool|null
     */
    public function getM7014(): ?bool
    {
        return $this->m7014;
    }

    /**
     * @return bool|null
     */
    public function getM7015(): ?bool
    {
        return $this->m7015;
    }

    /**
     * @return string|null
     */
    public function getE7014(): ?string
    {
        return $this->e7014;
    }

    /**
     * @return string|null
     */
    public function getD7014(): ?string
    {
        return $this->d7014;
    }

    /**
     * @return bool|null
     */
    public function getM7016(): ?bool
    {
        return $this->m7016;
    }

    /**
     * @return int|null
     */
    public function getQ7017(): ?int
    {
        return $this->q7017;
    }

    /**
     * @return int|null
     */
    public function getQ7018(): ?int
    {
        return $this->q7018;
    }

    /**
     * @return int|null
     */
    public function getQ7019(): ?int
    {
        return $this->q7019;
    }

    /**
     * @return int|null
     */
    public function getQ7020(): ?int
    {
        return $this->q7020;
    }

    /**
     * @return int|null
     */
    public function getQ7021(): ?int
    {
        return $this->q7021;
    }

    /**
     * @return int|null
     */
    public function getQ7022(): ?int
    {
        return $this->q7022;
    }

    /**
     * @return bool|null
     */
    public function getM7022(): ?bool
    {
        return $this->m7022;
    }

    /**
     * @return bool|null
     */
    public function getM7026(): ?bool
    {
        return $this->m7026;
    }

    /**
     * @return bool|null
     */
    public function getM7023(): ?bool
    {
        return $this->m7023;
    }

    /**
     * @return bool|null
     */
    public function getM7024(): ?bool
    {
        return $this->m7024;
    }

    /**
     * @return bool|null
     */
    public function getM7025(): ?bool
    {
        return $this->m7025;
    }

    /**
     * @return bool|null
     */
    public function getM7027(): ?bool
    {
        return $this->m7027;
    }

    /**
     * @return bool|null
     */
    public function getM7028(): ?bool
    {
        return $this->m7028;
    }

    /**
     * @return bool|null
     */
    public function getM7029(): ?bool
    {
        return $this->m7029;
    }

    /**
     * @return bool|null
     */
    public function getM7030(): ?bool
    {
        return $this->m7030;
    }

    /**
     * @return bool|null
     */
    public function getM7031(): ?bool
    {
        return $this->m7031;
    }

    /**
     * @return bool|null
     */
    public function getM7032(): ?bool
    {
        return $this->m7032;
    }

    /**
     * @return bool|null
     */
    public function getM7033(): ?bool
    {
        return $this->m7033;
    }

    /**
     * @return bool|null
     */
    public function getM7034(): ?bool
    {
        return $this->m7034;
    }

    /**
     * @return bool|null
     */
    public function getM7035(): ?bool
    {
        return $this->m7035;
    }

    /**
     * @return bool|null
     */
    public function getM7036(): ?bool
    {
        return $this->m7036;
    }

    /**
     * @return bool|null
     */
    public function getM7037(): ?bool
    {
        return $this->m7037;
    }

    /**
     * @return bool|null
     */
    public function getM7038(): ?bool
    {
        return $this->m7038;
    }

    /**
     * @return bool|null
     */
    public function getM7039(): ?bool
    {
        return $this->m7039;
    }

    /**
     * @return bool|null
     */
    public function getM7049(): ?bool
    {
        return $this->m7049;
    }

    /**
     * @return bool|null
     */
    public function getM7041(): ?bool
    {
        return $this->m7041;
    }

    /**
     * @return bool|null
     */
    public function getM7042(): ?bool
    {
        return $this->m7042;
    }

    /**
     * @return bool|null
     */
    public function getM7043(): ?bool
    {
        return $this->m7043;
    }

    /**
     * @return bool|null
     */
    public function getM7044(): ?bool
    {
        return $this->m7044;
    }

    /**
     * @return bool|null
     */
    public function getM7045(): ?bool
    {
        return $this->m7045;
    }

    /**
     * @return bool|null
     */
    public function getM7046(): ?bool
    {
        return $this->m7046;
    }

    /**
     * @return int|null
     */
    public function getQ8001(): ?int
    {
        return $this->q8001;
    }

    /**
     * @return bool|null
     */
    public function getM8001(): ?bool
    {
        return $this->m8001;
    }

    /**
     * @return bool|null
     */
    public function getM8002(): ?bool
    {
        return $this->m8002;
    }

    /**
     * @return bool|null
     */
    public function getM8003(): ?bool
    {
        return $this->m8003;
    }

    /**
     * @return bool|null
     */
    public function getM8004(): ?bool
    {
        return $this->m8004;
    }

    /**
     * @return bool|null
     */
    public function getM8005(): ?bool
    {
        return $this->m8005;
    }

    /**
     * @return bool|null
     */
    public function getM8006(): ?bool
    {
        return $this->m8006;
    }

    /**
     * @return bool|null
     */
    public function getM8007(): ?bool
    {
        return $this->m8007;
    }

    /**
     * @return bool|null
     */
    public function getM8008(): ?bool
    {
        return $this->m8008;
    }

    /**
     * @return bool|null
     */
    public function getM8009(): ?bool
    {
        return $this->m8009;
    }

    /**
     * @return bool|null
     */
    public function getM8010(): ?bool
    {
        return $this->m8010;
    }

    /**
     * @return bool|null
     */
    public function getM8011(): ?bool
    {
        return $this->m8011;
    }

    /**
     * @return bool|null
     */
    public function getM8012(): ?bool
    {
        return $this->m8012;
    }

    /**
     * @return int|null
     */
    public function getQ9001(): ?int
    {
        return $this->q9001;
    }

    /**
     * @return int|null
     */
    public function getQ9002(): ?int
    {
        return $this->q9002;
    }

    /**
     * @return int|null
     */
    public function getQ9003(): ?int
    {
        return $this->q9003;
    }

    /**
     * @return int|null
     */
    public function getQ9004(): ?int
    {
        return $this->q9004;
    }

    /**
     * @return int|null
     */
    public function getQ1101(): ?int
    {
        return $this->q1101;
    }

    /**
     * @return int|null
     */
    public function getQ1102(): ?int
    {
        return $this->q1102;
    }
}