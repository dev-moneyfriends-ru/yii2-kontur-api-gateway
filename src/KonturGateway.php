<?php
/**
 * Created by PhpStorm.
 * User: itily
 * Date: 24.01.2022
 * Time: 12:10
 */

namespace mfteam\kontur;

use Exception;
use mfteam\kontur\exceptions\KonturBadRequestException;
use mfteam\kontur\exceptions\KonturForbiddenException;
use mfteam\kontur\exceptions\KonturNotFoundException;
use mfteam\kontur\exceptions\KonturTooManyRequestException;
use mfteam\kontur\requests\company\CompanyRequestInterface;
use mfteam\kontur\requests\DateRequest;
use mfteam\kontur\requests\PassportRequest;
use mfteam\kontur\requests\person\PersonRequest;
use mfteam\kontur\requests\person\PersonRequestInterface;
use mfteam\kontur\responses\analytics\AnalyticsResponse;
use mfteam\kontur\responses\bank_accounts\BankAccountsResponse;
use mfteam\kontur\responses\beneficial_owners\BeneficialOwnersResponse;
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
use mfteam\kontur\responses\CollectionResponse;
use mfteam\kontur\responses\licences\LicencesResponse;
use mfteam\kontur\responses\pep_search\PepSearchResponse;
use mfteam\kontur\responses\person_bankruptcy\PersonBankruptcyResponse;
use mfteam\kontur\responses\petitioners_of_arbitration\PetitionersOfArbitrationResponse;
use mfteam\kontur\responses\req\ReqResponse;
use mfteam\kontur\responses\brief_report\BriefReportResponse;
use mfteam\kontur\responses\req_mon\ReqMonResponse;
use mfteam\kontur\responses\sanctioned_persons\SanctionedPersonsResponse;
use mfteam\kontur\responses\sites\SitesResponse;
use mfteam\kontur\responses\taxes\TaxesResponse;

/**
 * Шлюз общения с API Контур.Фокус
 *
 * Class KonturGateway
 * @package mfteam\kontur\components
 */
class KonturGateway
{
    /**
     * Api клиент
     *
     * @var KonturApiClientInterface
     */
    protected $apiClient;

    /**
     * @param KonturApiClientInterface $apiClient
     */
    public function __construct(KonturApiClientInterface $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * Базовые реквизиты
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Freq
     *
     * @param CompanyRequestInterface $request
     *
     * @return ReqResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function req(CompanyRequestInterface $request): array
    {
        $response = $this->get('req', $request->toArray());

        return $this
            ->createCollection($response, ReqResponse::class)
            ->getItems();
    }

    /**
     * Расширенная аналитика
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Fanalytics
     *
     * @param CompanyRequestInterface $request
     *
     * @return AnalyticsResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function analytics(CompanyRequestInterface $request): array
    {
        $response = $this->get('analytics', $request->toArray());

        return $this
            ->createCollection($response, AnalyticsResponse::class)
            ->getItems();
    }

    /**
     * Расширенные сведения на основе ЕГРЮЛ/ЕГРИП
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FegrDetails
     *
     * @param CompanyRequestInterface $request
     *
     * @return EgrlDetailResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function egrDetails(CompanyRequestInterface $request): array
    {
        $response = $this->get('egrDetails', $request->toArray());

        return $this
            ->createCollection($response, EgrlDetailResponse::class)
            ->getItems();
    }

    /**
     * История владения организацией
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FfoundersHistory
     *
     * @param CompanyRequestInterface $request
     *
     * @return FoundersHistoryResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function foundersHistory(CompanyRequestInterface $request): array
    {
        $response = $this->get('foundersHistory', $request->toArray());

        return $this
            ->createCollection($response, FoundersHistoryResponse::class)
            ->getItems();
    }

    /**
     * Экспресс-отчет по контрагенту
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FbriefReport
     *
     * @param CompanyRequestInterface $request
     *
     * @return BriefReportResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function briefReport(CompanyRequestInterface $request): array
    {
        $response = $this->get('briefReport', $request->toArray());

        return $this
            ->createCollection($response, BriefReportResponse::class)
            ->getItems();
    }

    /**
     * Экспресс-отчет по контрагенту
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FbriefReport
     *
     * @param DateRequest $request
     *
     * @return ReqMonResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function reqMon(DateRequest $request): array
    {
        $response = $this->get('req/mon', $request->toArray());

        return $this
            ->createCollection($response, ReqMonResponse::class)
            ->getItems();
    }

    /**
     * Показатели бухгалтерской отчетности
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Fbuh
     *
     * @param CompanyRequestInterface $request
     *
     * @return BuhResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function buh(CompanyRequestInterface $request): array
    {
        $response = $this->get('buh', $request->toArray());

        return $this
            ->createCollection($response, BuhResponse::class)
            ->getItems();
    }

    /**
     * Автоматический финансовый анализ
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FfinanValues
     *
     * @param CompanyRequestInterface $request
     *
     * @return FinanValuesResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function finanValues(CompanyRequestInterface $request): array
    {
        $response = $this->get('finanValues', $request->toArray());

        return $this
            ->createCollection($response, FinanValuesResponse::class)
            ->getItems();
    }

    /**
     * Уплаченные налоги и сборы
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Ftaxes
     *
     * @param CompanyRequestInterface $request
     *
     * @return TaxesResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function taxes(CompanyRequestInterface $request): array
    {
        $response = $this->get('taxes', $request->toArray());

        return $this
            ->createCollection($response, TaxesResponse::class)
            ->getItems();
    }

    /**
     * Информация о банкротстве ЮЛ
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FcompanyBankruptcy
     *
     * @param CompanyRequestInterface $request
     *
     * @return CompanyBankruptcyResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function companyBankruptcy(CompanyRequestInterface $request): array
    {
        $response = $this->get('companyBankruptcy', $request->toArray());

        return $this
            ->createCollection($response, CompanyBankruptcyResponse::class)
            ->getItems();
    }

    /**
     * Банки, в которых ранее были найдены счета организации
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FbankAccounts
     *
     * @param CompanyRequestInterface $request
     *
     * @return BankAccountsResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function bankAccounts(CompanyRequestInterface $request): array
    {
        $response = $this->get('bankAccounts', $request->toArray());

        return $this
            ->createCollection($response, BankAccountsResponse::class)
            ->getItems();
    }

    /**
     * Решения налоговых органов о приостановлении операций по счетам
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FfnsBlockedBankAccounts
     *
     * @param CompanyRequestInterface $request
     *
     * @return FnsBlockedBankAccountsResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function fnsBlockedBankAccounts(CompanyRequestInterface $request): array
    {
        $response = $this->get('fnsBlockedBankAccounts', $request->toArray());

        return $this
            ->createCollection($response, FnsBlockedBankAccountsResponse::class)
            ->getItems();
    }

    /**
     * Вхождение в перечень должников ФТС
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FftsDebtors
     *
     * @param CompanyRequestInterface $request
     *
     * @return FtsDebtorsResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function ftsDebtors(CompanyRequestInterface $request): array
    {
        $response = $this->get('ftsDebtors', $request->toArray());

        return $this
            ->createCollection($response, FtsDebtorsResponse::class)
            ->getItems();
    }

    /**
     * Исполнительные производства
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Ffssp
     *
     * @param CompanyRequestInterface $request
     *
     * @return FsspResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function fssp(CompanyRequestInterface $request): array
    {
        $response = $this->get('fssp', $request->toArray());

        return $this
            ->createCollection($response, FsspResponse::class)
            ->getItems();
    }

    /**
     * Статистика по истцам в арбитраже
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FpetitionersOfArbitration
     *
     * @param CompanyRequestInterface $request
     *
     * @return PetitionersOfArbitrationResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function petitionersOfArbitration(CompanyRequestInterface $request): array
    {
        $response = $this->get('petitionersOfArbitration', $request->toArray());

        return $this
            ->createCollection($response, PetitionersOfArbitrationResponse::class)
            ->getItems();
    }

    /**
     * Информация о лицензиях
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Flicences
     *
     * @param CompanyRequestInterface $request
     *
     * @return LicencesResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function licences(CompanyRequestInterface $request): array
    {
        $response = $this->get('licences', $request->toArray());

        return $this
            ->createCollection($response, LicencesResponse::class)
            ->getItems();
    }

    /**
     * Сертификаты и декларации соответствия
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Ffsa
     *
     * @param CompanyRequestInterface $request
     *
     * @return FsaResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function fsa(CompanyRequestInterface $request): array
    {
        $response = $this->get('fsa', $request->toArray());

        return $this
            ->createCollection($response, FsaResponse::class)
            ->getItems();
    }

    /**
     * Плановые и внеплановые проверки из ЕРП
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Finspections
     *
     * @param CompanyRequestInterface $request
     *
     * @return InspectionsResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function inspections(CompanyRequestInterface $request): array
    {
        $response = $this->get('inspections', $request->toArray());

        return $this
            ->createCollection($response, InspectionsResponse::class)
            ->getItems();
    }

    /**
     * Плановые и внеплановые проверки из ЕРП
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Finspections
     *
     * @param CompanyRequestInterface $request
     *
     * @return SitesResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function sites(CompanyRequestInterface $request): array
    {
        $response = $this->get('sites', $request->toArray());

        return $this
            ->createCollection($response, SitesResponse::class)
            ->getItems();
    }

    /**
     * Справочник телефонов
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Fcontacts
     *
     * @param CompanyRequestInterface $request
     *
     * @return ContactsResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function contacts(CompanyRequestInterface $request): array
    {
        $response = $this->get('contacts', $request->toArray());

        return $this
            ->createCollection($response, ContactsResponse::class)
            ->getItems();
    }

    /**
     * Реквизиты организаций, связанных с компанией
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FcompanyAffiliates%2Freq
     *
     * @param CompanyRequestInterface $request
     *
     * @return ReqResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function companyAffiliatesReq(CompanyRequestInterface $request): array
    {
        $response = $this->get('companyAffiliates/req', $request->toArray());

        return $this
            ->createCollection($response, ReqResponse::class)
            ->getItems();
    }

    /**
     * Расширенные сведения организаций, связанных с компанией
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FcompanyAffiliates%2FegrDetails
     *
     * @param CompanyRequestInterface $request
     *
     * @return EgrlDetailResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function companyAffiliatesEgrDetails(CompanyRequestInterface $request): array
    {
        $response = $this->get('companyAffiliates/egrDetails', $request->toArray());

        return $this
            ->createCollection($response, EgrlDetailResponse::class)
            ->getItems();
    }

    /**
     * Аналитика организаций, связанных с компанией
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FcompanyAffiliates%2Fanalytics
     *
     * @param CompanyRequestInterface $request
     *
     * @return AnalyticsResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function companyAffiliatesAnalytics(CompanyRequestInterface $request): array
    {
        $response = $this->get('companyAffiliates/analytics', $request->toArray());

        return $this
            ->createCollection($response, AnalyticsResponse::class)
            ->getItems();
    }

    /**
     * Реквизиты организаций, связанных с человеком
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FpersonAffiliates%2Freq
     *
     * @param CompanyRequestInterface $request
     *
     * @return ReqResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function personAffiliatesReq(CompanyRequestInterface $request): array
    {
        $response = $this->get('personAffiliates/req', $request->toArray());

        return $this
            ->createCollection($response, ReqResponse::class)
            ->getItems();
    }

    /**
     * Расширенные сведения организаций, связанных с человеком
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FpersonAffiliates%2FegrDetails
     *
     * @param CompanyRequestInterface $request
     *
     * @return EgrlDetailResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function personAffiliatesEgrDetails(CompanyRequestInterface $request): array
    {
        $response = $this->get('personAffiliates/egrDetails', $request->toArray());

        return $this
            ->createCollection($response, EgrlDetailResponse::class)
            ->getItems();
    }

    /**
     * Аналитика организаций, связанных с человеком
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FpersonAffiliates%2Fanalytics
     *
     * @param CompanyRequestInterface $request
     *
     * @return AnalyticsResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function personAffiliatesAnalytics(CompanyRequestInterface $request): array
    {
        $response = $this->get('personAffiliates/analytics', $request->toArray());

        return $this
            ->createCollection($response, AnalyticsResponse::class)
            ->getItems();
    }

    /**
     * Конечные бенефициары
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FbeneficialOwners
     *
     * @param CompanyRequestInterface $request
     *
     * @return BeneficialOwnersResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function beneficialOwners(CompanyRequestInterface $request): array
    {
        $response = $this->get('beneficialOwners', $request->toArray());

        return $this
            ->createCollection($response, BeneficialOwnersResponse::class)
            ->getItems();
    }

    /**
     * Выписка из ЕГРЮЛ/ЕГРИП
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2Fexcerpt
     *
     * @param CompanyRequestInterface $request
     *
     * @return ExcerptResponse
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     * @throws KonturNotFoundException
     * @throws Exception
     */
    public function excerpt(CompanyRequestInterface $request): ExcerptResponse
    {
        $content = $this->download('excerpt', $request->toArray());

        return new ExcerptResponse([
            'content' => $content,
        ]);
    }

    /**
     * Информация о банкротстве ФЛ
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FpersonBankruptcy
     *
     * @param PersonRequestInterface $request
     *
     * @return PersonBankruptcyResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function personBankruptcy(PersonRequestInterface $request): array
    {
        $response = $this->get('personBankruptcy', $request->toArray());

        return $this
            ->createCollection($response, PersonBankruptcyResponse::class)
            ->getItems();
    }

    /**
     * Вхождение ФЛ в санкционные списки
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FsanctionedPersons
     *
     * @param PersonRequestInterface $request
     *
     * @return SanctionedPersonsResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function sanctionedPersons(PersonRequestInterface $request): array
    {
        $response = $this->get('sanctionedPersons', $request->toArray());

        return $this
            ->createCollection($response, SanctionedPersonsResponse::class)
            ->getItems();
    }

    /**
     * Проверка паспортов
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FcheckPassport
     *
     * @param PassportRequest $request
     *
     * @return CheckPassportResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function checkPassport(PassportRequest $request): array
    {
        $response = $this->get('checkPassport', $request->toArray());

        return $this
            ->createCollection($response, CheckPassportResponse::class)
            ->getItems();
    }

    /**
     * Поиск публичных должностных лиц
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FpepSearch
     *
     * @param PersonRequest $request
     *
     * @return PepSearchResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function pepSearch(PersonRequest $request): array
    {
        $response = $this->get('pepSearch', $request->toArray());

        return $this
            ->createCollection($response, PepSearchResponse::class)
            ->getItems();
    }

    /**
     * Полный список публичных должностных лиц
     *
     * @see https://developer.kontur.ru/doc/focus/method?type=get&path=%2Fapi3%2FpepSearch
     *
     * @param PersonRequest $request
     *
     * @return PepSearchResponse[]
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     */
    public function allPeps(PersonRequest $request): array
    {
        $response = $this->get('allPeps', $request->toArray());

        return $this
            ->createCollection($response, PepSearchResponse::class)
            ->getItems();
    }

    /**
     * GET запрос
     *
     * @param string $path
     * @param array $data
     *
     * @return array
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     * @throws Exception
     */
    private function get(string $path, array $data = []): array
    {
        return $this
            ->apiClient
            ->sendGetQuery($path, $data);
    }

    /**
     * GET запрос
     *
     * @param string $path
     * @param array $data
     *
     * @return string
     * @throws KonturBadRequestException
     * @throws KonturForbiddenException
     * @throws KonturTooManyRequestException
     * @throws KonturNotFoundException
     * @throws Exception
     */
    private function download(string $path, array $data = []): string
    {
        return $this
            ->apiClient
            ->sendDownloadQuery($path, $data);
    }

    /**
     * Формирование коллекции ответа от сервера
     *
     * @param array $data
     * @param string $dataClass
     *
     * @return CollectionResponse
     */
    private function createCollection(array $data, string $dataClass): CollectionResponse
    {
        return new CollectionResponse($dataClass, $data);
    }
}
