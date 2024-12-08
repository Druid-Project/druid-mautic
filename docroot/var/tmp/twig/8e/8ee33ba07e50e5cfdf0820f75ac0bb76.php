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

/* @bundles/LeadBundle/Tests/Helper/PrimaryCompanyHelperTest.php */
class __TwigTemplate_5198161072995a7e0210d7428fea08ba extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Helper;

use Mautic\\LeadBundle\\Entity\\CompanyLeadRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Helper\\PrimaryCompanyHelper;
use PHPUnit\\Framework\\Exception;

class PrimaryCompanyHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var CompanyLeadRepository|Exception
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$leadRepository;

    protected function setUp(): void
    {
        \$this->leadRepository = \$this->createMock(CompanyLeadRepository::class);

        \$this->leadRepository->expects(\$this->once())
            ->method('getCompaniesByLeadId')
            ->willReturn(
                [
                    [
                        'score'           => 0,
                        'date_added'      => '2018-06-02 00:00:00',
                        'date_associated' => '2018-06-02 00:00:00',
                        'is_primary'      => 1,
                        'companywebsite'  => 'https://foo.com',
                    ],
                    [
                        'score'           => 0,
                        'date_added'      => '2018-06-02 00:00:00',
                        'date_associated' => '2018-06-02 00:00:00',
                        'is_primary'      => 0,
                        'companywebsite'  => 'https://bar.com',
                    ],
                ]
            );
    }

    public function testProfileFieldsReturnedWithPrimaryCompany(): void
    {
        \$lead = \$this->createMock(Lead::class);
        \$lead->expects(\$this->once())
            ->method('getProfileFields')
            ->willReturn(
                [
                    'email' => 'test@test.com',
                ]
            );

        \$profileFields = \$this->getPrimaryCompanyHelper()->getProfileFieldsWithPrimaryCompany(\$lead);

        \$this->assertEquals(['email' => 'test@test.com', 'companywebsite' => 'https://foo.com'], \$profileFields);
    }

    public function testPrimaryCompanyMergedIntoProfileFields(): void
    {
        \$leadFields = [
            'email' => 'test@test.com',
        ];

        \$profileFields = \$this->getPrimaryCompanyHelper()->mergePrimaryCompanyWithProfileFields(1, \$leadFields);

        \$this->assertEquals(['email' => 'test@test.com', 'companywebsite' => 'https://foo.com'], \$profileFields);
    }

    /**
     * @return PrimaryCompanyHelper
     */
    private function getPrimaryCompanyHelper()
    {
        return new PrimaryCompanyHelper(\$this->leadRepository);
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
        return "@bundles/LeadBundle/Tests/Helper/PrimaryCompanyHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Helper/PrimaryCompanyHelperTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Helper/PrimaryCompanyHelperTest.php");
    }
}
