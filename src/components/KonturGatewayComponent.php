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
 * ?????????????????? ?????????????? ?? API ????????????.??????????
 *
 * Class KonturGatewayComponent
 * @package mfteam\kontur\components
 *
 * @method ReqResponse[] req(CompanyRequestInterface $request) ?????????????? ??????????????????
 * @method AnalyticsResponse[] analytics(CompanyRequestInterface $request) ?????????????????????? ??????????????????
 * @method EgrlDetailResponse[] egrDetails(CompanyRequestInterface $request) ?????????????????????? ???????????????? ???? ???????????? ??????????/??????????
 * @method FoundersHistoryResponse[] foundersHistory(CompanyRequestInterface $request) ?????????????? ???????????????? ????????????????????????
 * @method BriefReportResponse[] briefReport(CompanyRequestInterface $request) ????????????????-?????????? ???? ??????????????????????
 * @method ReqMonResponse[] reqMon(DateRequest $request) ????????????????-?????????? ???? ??????????????????????
 * @method BuhResponse[] buh(CompanyRequestInterface $request) ???????????????????? ?????????????????????????? ????????????????????
 * @method FinanValuesResponse[] finanValues(CompanyRequestInterface $request) ???????????????????????????? ???????????????????? ????????????
 * @method TaxesResponse[] taxes(CompanyRequestInterface $request) ???????????????????? ???????????? ?? ??????????
 * @method CompanyBankruptcyResponse[] companyBankruptcy(CompanyRequestInterface $request) ???????????????????? ?? ?????????????????????? ????
 * @method BankAccountsResponse[] bankAccounts(CompanyRequestInterface $request) ??????????, ?? ?????????????? ?????????? ???????? ?????????????? ?????????? ??????????????????????
 * @method FnsBlockedBankAccountsResponse[] fnsBlockedBankAccounts(CompanyRequestInterface $request) ?????????????? ?????????????????? ?????????????? ?? ?????????????????????????????? ???????????????? ???? ????????????
 * @method FtsDebtorsResponse[] ftsDebtors(CompanyRequestInterface $request) ?????????????????? ?? ???????????????? ?????????????????? ??????
 * @method FsspResponse[] fssp(CompanyRequestInterface $request) ???????????????????????????? ????????????????????????
 * @method PetitionersOfArbitrationResponse[] petitionersOfArbitration(CompanyRequestInterface $request) ???????????????????? ???? ???????????? ?? ??????????????????
 * @method LicencesResponse[] licences(CompanyRequestInterface $request) ???????????????????? ?? ??????????????????
 * @method FsaResponse[] fsa(CompanyRequestInterface $request) ?????????????????????? ?? ???????????????????? ????????????????????????
 * @method InspectionsResponse[] inspections(CompanyRequestInterface $request) ???????????????? ?? ?????????????????????? ???????????????? ???? ??????
 * @method SitesResponse[] sites(CompanyRequestInterface $request) ???????????????? ?? ?????????????????????? ???????????????? ???? ??????
 * @method ContactsResponse[] contacts(CompanyRequestInterface $request) ???????????????????? ??????????????????
 * @method ReqResponse[] companyAffiliatesReq(CompanyRequestInterface $request) ?????????????????? ??????????????????????, ?????????????????? ?? ??????????????????
 * @method EgrlDetailResponse[] companyAffiliatesEgrDetails(CompanyRequestInterface $request) ?????????????????????? ???????????????? ??????????????????????, ?????????????????? ?? ??????????????????
 * @method AnalyticsResponse[] companyAffiliatesAnalytics(CompanyRequestInterface $request) ?????????????????? ??????????????????????, ?????????????????? ?? ??????????????????
 * @method ReqResponse[] personAffiliatesReq(CompanyRequestInterface $request) ?????????????????? ??????????????????????, ?????????????????? ?? ??????????????????
 * @method EgrlDetailResponse[] personAffiliatesEgrDetails(CompanyRequestInterface $request) ?????????????????????? ???????????????? ??????????????????????, ?????????????????? ?? ??????????????????
 * @method AnalyticsResponse[] personAffiliatesAnalytics(CompanyRequestInterface $request) ?????????????????? ??????????????????????, ?????????????????? ?? ??????????????????
 * @method BeneficialOwnersResponse[] beneficialOwners(CompanyRequestInterface $request) ???????????????? ??????????????????????
 * @method ExcerptResponse excerpt(CompanyRequestInterface $request) ?????????????? ???? ??????????/??????????
 * @method PersonBankruptcyResponse[] personBankruptcy(PersonRequestInterface $request) ???????????????????? ?? ?????????????????????? ????
 * @method SanctionedPersonsResponse[] sanctionedPersons(PersonRequestInterface $request) ?????????????????? ???? ?? ?????????????????????? ????????????
 * @method CheckPassportResponse[] checkPassport(PassportRequest $request) ???????????????? ??????????????????
 * @method PepSearchResponse[] pepSearch(PersonRequest $request) ?????????? ?????????????????? ?????????????????????? ??????
 * @method PepSearchResponse[] allPeps(PersonRequest $request) ???????????? ???????????? ?????????????????? ?????????????????????? ??????
 * @method PurchasesOfCustomerResponse[] purchasesOfCustomer(CompanyRequest $request) ?????????????? ??????????????????
 * @method PurchasesOfParticipantResponse[] purchasesOfParticipant(CompanyRequest $request) ?????????????? ??????????????????
 */
class KonturGatewayComponent extends Component
{
    /**
     * Api ????????
     *
     * @var string
     */
    public $apiKey;

    /**
     * ????????
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
     * ?????????????????????????? ??????????
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
