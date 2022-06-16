<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 12:10
 */

namespace mfteam\kontur\components;

use mfteam\kontur\KonturGateway;
use mfteam\kontur\KonturGatewayFactory;
use mfteam\kontur\requests\company\CompanyRequest;
use mfteam\kontur\requests\company\CompanyRequestInterface;
use mfteam\kontur\requests\DateRequest;
use mfteam\kontur\requests\PassportRequest;
use mfteam\kontur\requests\person\PersonRequest;
use mfteam\kontur\requests\person\PersonRequestInterface;
use mfteam\kontur\responses\analytics\AnalyticsResponse;
use mfteam\kontur\responses\bank_accounts\BankAccountsResponse;
use mfteam\kontur\responses\beneficial_owners\BeneficialOwnersResponse;
use mfteam\kontur\responses\brief_report\BriefReportResponse;
use mfteam\kontur\responses\buh\BuhResponse;
use mfteam\kontur\responses\check_passport\CheckPassportResponse;
use mfteam\kontur\responses\company_bankruptcy\CompanyBankruptcyResponse;
use mfteam\kontur\responses\contacts\ContactsResponse;
use mfteam\kontur\responses\egrl_detail\EgrlDetailResponse;
use mfteam\kontur\responses\excerpt\ExcerptResponse;
use mfteam\kontur\responses\finan_values\FinanValuesResponse;
use mfteam\kontur\responses\fns_blocked_bank_accounts\FnsBlockedBankAccountsResponse;
use mfteam\kontur\responses\founders_history\FoundersHistoryResponse;
use mfteam\kontur\responses\fsa\FsaResponse;
use mfteam\kontur\responses\fssp\FsspResponse;
use mfteam\kontur\responses\fts_debtors\FtsDebtorsResponse;
use mfteam\kontur\responses\inspections\InspectionsResponse;
use mfteam\kontur\responses\licences\LicencesResponse;
use mfteam\kontur\responses\pep_search\PepSearchResponse;
use mfteam\kontur\responses\person_bankruptcy\PersonBankruptcyResponse;
use mfteam\kontur\responses\petitioners_of_arbitration\PetitionersOfArbitrationResponse;
use mfteam\kontur\responses\purchases\PurchasesOfCustomerResponse;
use mfteam\kontur\responses\purchases\PurchasesOfParticipantResponse;
use mfteam\kontur\responses\req\ReqResponse;
use mfteam\kontur\responses\req_mon\ReqMonResponse;
use mfteam\kontur\responses\sanctioned_persons\SanctionedPersonsResponse;
use mfteam\kontur\responses\sites\SitesResponse;
use mfteam\kontur\responses\taxes\TaxesResponse;
use yii\base\Component;
use yii\base\InvalidConfigException;

/**
 * Компонент общения с API Контур.Фокус
 *
 * Class KonturGatewayComponent
 * @package mfteam\kontur\components
 *
 * @method ReqResponse[] req(CompanyRequestInterface $request) Базовые реквизиты
 * @method AnalyticsResponse[] analytics(CompanyRequestInterface $request) Расширенная аналитика
 * @method EgrlDetailResponse[] egrDetails(CompanyRequestInterface $request) Расширенные сведения на основе ЕГРЮЛ/ЕГРИП
 * @method FoundersHistoryResponse[] foundersHistory(CompanyRequestInterface $request) История владения организацией
 * @method BriefReportResponse[] briefReport(CompanyRequestInterface $request) Экспресс-отчет по контрагенту
 * @method ReqMonResponse[] reqMon(DateRequest $request) Экспресс-отчет по контрагенту
 * @method BuhResponse[] buh(CompanyRequestInterface $request) Показатели бухгалтерской отчетности
 * @method FinanValuesResponse[] finanValues(CompanyRequestInterface $request) Автоматический финансовый анализ
 * @method TaxesResponse[] taxes(CompanyRequestInterface $request) Уплаченные налоги и сборы
 * @method CompanyBankruptcyResponse[] companyBankruptcy(CompanyRequestInterface $request) Информация о банкротстве ЮЛ
 * @method BankAccountsResponse[] bankAccounts(CompanyRequestInterface $request) Банки, в которых ранее были найдены счета организации
 * @method FnsBlockedBankAccountsResponse[] fnsBlockedBankAccounts(CompanyRequestInterface $request) Решения налоговых органов о приостановлении операций по счетам
 * @method FtsDebtorsResponse[] ftsDebtors(CompanyRequestInterface $request) Вхождение в перечень должников ФТС
 * @method FsspResponse[] fssp(CompanyRequestInterface $request) Исполнительные производства
 * @method PetitionersOfArbitrationResponse[] petitionersOfArbitration(CompanyRequestInterface $request) Статистика по истцам в арбитраже
 * @method LicencesResponse[] licences(CompanyRequestInterface $request) Информация о лицензиях
 * @method FsaResponse[] fsa(CompanyRequestInterface $request) Сертификаты и декларации соответствия
 * @method InspectionsResponse[] inspections(CompanyRequestInterface $request) Плановые и внеплановые проверки из ЕРП
 * @method SitesResponse[] sites(CompanyRequestInterface $request) Плановые и внеплановые проверки из ЕРП
 * @method ContactsResponse[] contacts(CompanyRequestInterface $request) Справочник телефонов
 * @method ReqResponse[] companyAffiliatesReq(CompanyRequestInterface $request) Реквизиты организаций, связанных с компанией
 * @method EgrlDetailResponse[] companyAffiliatesEgrDetails(CompanyRequestInterface $request) Расширенные сведения организаций, связанных с компанией
 * @method AnalyticsResponse[] companyAffiliatesAnalytics(CompanyRequestInterface $request) Аналитика организаций, связанных с компанией
 * @method ReqResponse[] personAffiliatesReq(CompanyRequestInterface $request) Реквизиты организаций, связанных с человеком
 * @method EgrlDetailResponse[] personAffiliatesEgrDetails(CompanyRequestInterface $request) Расширенные сведения организаций, связанных с человеком
 * @method AnalyticsResponse[] personAffiliatesAnalytics(CompanyRequestInterface $request) Аналитика организаций, связанных с человеком
 * @method BeneficialOwnersResponse[] beneficialOwners(CompanyRequestInterface $request) Конечные бенефициары
 * @method ExcerptResponse excerpt(CompanyRequestInterface $request) Выписка из ЕГРЮЛ/ЕГРИП
 * @method PersonBankruptcyResponse[] personBankruptcy(PersonRequestInterface $request) Информация о банкротстве ФЛ
 * @method SanctionedPersonsResponse[] sanctionedPersons(PersonRequestInterface $request) Вхождение ФЛ в санкционные списки
 * @method CheckPassportResponse[] checkPassport(PassportRequest $request) Проверка паспортов
 * @method PepSearchResponse[] pepSearch(PersonRequest $request) Поиск публичных должностных лиц
 * @method PepSearchResponse[] allPeps(PersonRequest $request) Полный список публичных должностных лиц
 * @method PurchasesOfCustomerResponse[] purchasesOfCustomer(CompanyRequest $request) Закупки заказчика
 * @method PurchasesOfParticipantResponse[] purchasesOfParticipant(CompanyRequest $request) Закупки участника
 */
class KonturGatewayComponent extends Component
{
    /**
     * Api ключ
     *
     * @var string
     */
    public $apiKey;

    /**
     * Шлюз
     *
     * @var KonturGateway
     */
    private $gateway;

    /**
     * @inheritDoc
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();

        if (empty($this->apiKey) === true) {
            throw new InvalidConfigException('Api Key is required.');
        }

        $this->initGateway();
    }

    /**
     * Инициализация шлюза
     *
     * @return void
     */
    private function initGateway()
    {
        $apiKey = $this->apiKey;
        $this->gateway = KonturGatewayFactory::instanceHttp($apiKey);
    }

    /**
     * @inheritDoc
     */
    public function __call($name, $params)
    {
        $gateway = $this->gateway;

        return $gateway->$name($params);
    }
}
