<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/LeadBundle/Helper/IdentifyCompanyHelper.php */
class __TwigTemplate_10396741382b12151aba052d34c7ccac extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Exception\\UniqueFieldNotFoundException;
use Mautic\\LeadBundle\\Model\\CompanyModel;

class IdentifyCompanyHelper
{
    /**
     * @param array \$data
     * @param mixed \$lead
     */
    public static function identifyLeadsCompany(\$data, \$lead, CompanyModel \$companyModel): array
    {
        \$addContactToCompany = true;

        \$parameters = self::normalizeParameters(\$data);

        if (!self::hasCompanyParameters(\$parameters, \$companyModel)) {
            return [null, false, null];
        }

        try {
            \$companies = \$companyModel->checkForDuplicateCompanies(\$parameters);
        } catch (UniqueFieldNotFoundException) {
            return [null, false, null];
        }

        if (!empty(\$companies)) {
            \$companyEntity = end(\$companies);
            \$companyData   = \$companyEntity->getProfileFields();

            if (\$lead) {
                \$companyLeadRepo = \$companyModel->getCompanyLeadRepository();
                \$companyLead     = \$companyLeadRepo->getCompaniesByLeadId(\$lead->getId(), \$companyEntity->getId());
                if (!empty(\$companyLead)) {
                    \$addContactToCompany = false;
                }
            }
        } else {
            \$companyData = \$parameters;

            // create new company
            \$companyEntity = new Company();
            \$companyModel->setFieldValues(\$companyEntity, \$companyData, true);
            \$companyModel->saveEntity(\$companyEntity);
            \$companyData['id'] = \$companyEntity->getId();
        }

        return [\$companyData, \$addContactToCompany, \$companyEntity];
    }

    public static function findCompany(array \$data, CompanyModel \$companyModel): array
    {
        \$parameters = self::normalizeParameters(\$data);

        if (!self::hasCompanyParameters(\$parameters, \$companyModel)) {
            return [[], []];
        }

        try {
            \$companyEntities = \$companyModel->checkForDuplicateCompanies(\$parameters);
        } catch (UniqueFieldNotFoundException) {
            return [[], []];
        }

        \$companyData     = \$parameters;
        if (!empty(\$companyEntities)) {
            \$key               = array_key_last(\$companyEntities);
            \$companyData['id'] = \$companyEntities[\$key]->getId();
        }

        return [\$companyData, \$companyEntities];
    }

    private static function hasCompanyParameters(array \$parameters, CompanyModel \$companyModel): bool
    {
        \$companyFields = \$companyModel->fetchCompanyFields();
        foreach (\$parameters as \$alias => \$value) {
            foreach (\$companyFields as \$companyField) {
                if (\$companyField['alias'] === \$alias) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * @param mixed[] \$parameters
     *
     * @return mixed[]
     */
    private static function normalizeParameters(array \$parameters): array
    {
        if (isset(\$parameters['company'])) {
            \$parameters['companyname'] = filter_var(\$parameters['company']);
            unset(\$parameters['company']);
        }

        \$fields= ['country', 'city', 'state'];
        foreach (\$fields as \$field) {
            if (isset(\$parameters[\$field]) && !isset(\$parameters['company'.\$field])) {
                \$parameters['company'.\$field] = \$parameters[\$field];
                unset(\$parameters[\$field]);
            }
        }

        return \$parameters;
    }

    /**
     * Checks if email address' domain has a DNS MX record. Returns the domain if found.
     *
     * @param string \$email
     *
     * @return string|false
     */
    protected static function domainExists(\$email)
    {
        if (!strstr(\$email, '@')) { // not a valid email adress
            return false;
        }

        [\$user, \$domain]     = explode('@', \$email);
        \$arr                 = dns_get_record(\$domain, DNS_MX);

        if (empty(\$arr)) {
            return false;
        }

        if (\$arr[0]['host'] === \$domain) {
            return \$domain;
        }

        return false;
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Helper/IdentifyCompanyHelper.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/LeadBundle/Helper/IdentifyCompanyHelper.php", "/app/docroot/app/bundles/LeadBundle/Helper/IdentifyCompanyHelper.php");
    }
}
