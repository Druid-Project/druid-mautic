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

/* @bundles/LeadBundle/Tests/Deduplicate/CompanyDeduperTest.php */
class __TwigTemplate_ab1174c46430965b1a4b6e0d9a6be986 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Deduplicate;

use Mautic\\LeadBundle\\Deduplicate\\CompanyDeduper;
use Mautic\\LeadBundle\\Entity\\CompanyRepository;
use Mautic\\LeadBundle\\Exception\\UniqueFieldNotFoundException;
use Mautic\\LeadBundle\\Model\\FieldModel;

class CompanyDeduperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|FieldModel
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$fieldModel;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|CompanyRepository
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$companyRepository;

    protected function setUp(): void
    {
        \$this->fieldModel = \$this->getMockBuilder(FieldModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->companyRepository = \$this->getMockBuilder(CompanyRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testUniqueFieldNotFoundException(): void
    {
        \$this->expectException(UniqueFieldNotFoundException::class);
        \$this->fieldModel->method('getFieldList')->willReturn([]);
        \$this->getDeduper()->checkForDuplicateCompanies([]);
    }

    /**
     * @return CompanyDeduper
     */
    private function getDeduper()
    {
        return new CompanyDeduper(
            \$this->fieldModel,
            \$this->companyRepository
        );
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
        return "@bundles/LeadBundle/Tests/Deduplicate/CompanyDeduperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Deduplicate/CompanyDeduperTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Deduplicate/CompanyDeduperTest.php");
    }
}
