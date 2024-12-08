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

/* @bundles/LeadBundle/Helper/PrimaryCompanyHelper.php */
class __TwigTemplate_c6cbdf7f6bd575375114b63e56af8a92 extends Template
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

use Mautic\\LeadBundle\\Entity\\CompanyLeadRepository;
use Mautic\\LeadBundle\\Entity\\Lead;

class PrimaryCompanyHelper
{
    public function __construct(
        private CompanyLeadRepository \$companyLeadRepository
    ) {
    }

    /**
     * @return array|null
     */
    public function getProfileFieldsWithPrimaryCompany(Lead \$lead)
    {
        return \$this->mergeInPrimaryCompany(
            \$this->companyLeadRepository->getCompaniesByLeadId(\$lead->getId()),
            \$lead->getProfileFields()
        );
    }

    /**
     * @return array
     */
    public function mergePrimaryCompanyWithProfileFields(\$contactId, array \$profileFields)
    {
        return \$this->mergeInPrimaryCompany(
            \$this->companyLeadRepository->getCompaniesByLeadId(\$contactId),
            \$profileFields
        );
    }

    /**
     * @return array
     */
    private function mergeInPrimaryCompany(array \$companies, array \$profileFields)
    {
        foreach (\$companies as \$company) {
            if (empty(\$company['is_primary'])) {
                continue;
            }

            unset(\$company['id'], \$company['score'], \$company['date_added'], \$company['date_associated'], \$company['is_primary']);

            return array_merge(\$profileFields, \$company);
        }

        return \$profileFields;
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
        return "@bundles/LeadBundle/Helper/PrimaryCompanyHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/PrimaryCompanyHelper.php", "/app/docroot/app/bundles/LeadBundle/Helper/PrimaryCompanyHelper.php");
    }
}
