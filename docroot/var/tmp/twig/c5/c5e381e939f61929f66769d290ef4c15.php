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

/* @bundles/LeadBundle/Deduplicate/CompanyDeduper.php */
class __TwigTemplate_94876364f6027862a19c7feffbc45625 extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate;

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\CompanyRepository;
use Mautic\\LeadBundle\\Exception\\UniqueFieldNotFoundException;
use Mautic\\LeadBundle\\Model\\FieldModel;

class CompanyDeduper
{
    use DeduperTrait;

    public function __construct(
        FieldModel \$fieldModel,
        private CompanyRepository \$companyRepository
    ) {
        \$this->fieldModel        = \$fieldModel;
        \$this->object            = 'company';
    }

    /**
     * @return Company[]
     *
     * @throws UniqueFieldNotFoundException
     */
    public function checkForDuplicateCompanies(array \$queryFields): array
    {
        \$uniqueData = \$this->getUniqueData(\$queryFields);
        if (empty(\$uniqueData)) {
            throw new UniqueFieldNotFoundException();
        }

        return \$this->companyRepository->getCompaniesByUniqueFields(\$uniqueData);
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
        return "@bundles/LeadBundle/Deduplicate/CompanyDeduper.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/CompanyDeduper.php", "/app/docroot/app/bundles/LeadBundle/Deduplicate/CompanyDeduper.php");
    }
}
