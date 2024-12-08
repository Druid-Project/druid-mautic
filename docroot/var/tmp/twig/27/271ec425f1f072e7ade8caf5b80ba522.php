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

/* @bundles/LeadBundle/Tests/Entity/CompanyLeadRepositoryTest.php */
class __TwigTemplate_e2986fc598b5bba7290d313a10300ca4 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\LeadBundle\\Entity\\CompanyLeadRepository;
use Mautic\\LeadBundle\\Exception\\PrimaryCompanyNotFoundException;

class CompanyLeadRepositoryTest extends \\PHPUnit\\Framework\\TestCase
{
    /** @var \\PHPUnit\\Framework\\MockObject\\MockObject|CompanyLeadRepository */
    private \$repoMock;

    public function setUp(): void
    {
        parent::setUp();
        \$this->repoMock = \$this->getMockBuilder(CompanyLeadRepository::class)
            ->onlyMethods(['getCompaniesByLeadId'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testGetPrimaryCompanyByLeadIdThrowsExceptionIfPrimaryIsMissing(): void
    {
        \$this->repoMock->expects(\$this->once())
            ->method('getCompaniesByLeadId')
            ->willReturn([
                [
                    'company_name' => 'ACME #1',
                    'is_primary'   => false,
                ],
            ]);

        \$this->expectException(PrimaryCompanyNotFoundException::class);
        \$this->repoMock->getPrimaryCompanyByLeadId(1);
    }

    public function testGetPrimaryCompanyByLeadIdReturnsCorrectRecord(): void
    {
        \$this->repoMock->expects(\$this->once())
            ->method('getCompaniesByLeadId')
            ->willReturn([
                [
                    'company_name' => 'ACME #1',
                    'is_primary'   => false,
                ],
                [
                    'company_name' => 'ACME #2',
                    'is_primary'   => true,
                ],
                [
                    'company_name' => 'ACME #3',
                    'is_primary'   => false,
                ],
            ]);

        \$primary = \$this->repoMock->getPrimaryCompanyByLeadId(1);

        \$this->assertEquals(
            [
                'company_name' => 'ACME #2',
                'is_primary'   => true,
            ],
            \$primary
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
        return "@bundles/LeadBundle/Tests/Entity/CompanyLeadRepositoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/CompanyLeadRepositoryTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/CompanyLeadRepositoryTest.php");
    }
}
