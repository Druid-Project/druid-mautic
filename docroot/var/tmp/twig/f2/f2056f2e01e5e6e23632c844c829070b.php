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

/* @bundles/LeadBundle/DataFixtures/ORM/LoadCompanyData.php */
class __TwigTemplate_3ae7d4a2aeee3920699a2a8a79fc15a2 extends Template
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

namespace Mautic\\LeadBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CoreBundle\\Helper\\CsvHelper;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Model\\CompanyModel;

class LoadCompanyData extends AbstractFixture implements OrderedFixtureInterface
{
    public function __construct(
        private CompanyModel \$companyModel
    ) {
    }

    public function load(ObjectManager \$manager): void
    {
        \$today     = new \\DateTime();
        \$companies = CsvHelper::csv_to_array(__DIR__.'/fakecompanydata.csv');
        foreach (\$companies as \$count => \$l) {
            \$company = new Company();
            \$company->setDateAdded(\$today);
            foreach (\$l as \$col => \$val) {
                \$company->addUpdatedField(\$col, \$val);
            }
            \$this->companyModel->getRepository()->saveEntity(\$company);

            \$this->setReference('company-'.\$count, \$company);
        }
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 4;
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
        return "@bundles/LeadBundle/DataFixtures/ORM/LoadCompanyData.php";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/LoadCompanyData.php", "/app/docroot/app/bundles/LeadBundle/DataFixtures/ORM/LoadCompanyData.php");
    }
}
