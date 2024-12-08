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

/* @bundles/LeadBundle/Tests/Helper/IdentifyCompanyHelperTest.php */
class __TwigTemplate_ed6f572aba4be2503ded187b93b8bb7f extends Template
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

use Mautic\\LeadBundle\\Helper\\IdentifyCompanyHelper;
use Mautic\\LeadBundle\\Model\\CompanyModel;

class IdentifyCompanyHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testDomainExistsRealDomain(): void
    {
        \$helper     = new IdentifyCompanyHelper();
        \$reflection = new \\ReflectionClass(IdentifyCompanyHelper::class);
        \$method     = \$reflection->getMethod('domainExists');
        \$method->setAccessible(true);
        \$result = \$method->invokeArgs(\$helper, ['hello@mautic.org']);

        \$this->assertTrue(is_string(\$result));
        \$this->assertGreaterThan(0, strlen(\$result));
    }

    public function testDomainExistsWithFakeDomain(): void
    {
        \$helper     = new IdentifyCompanyHelper();
        \$reflection = new \\ReflectionClass(IdentifyCompanyHelper::class);
        \$method     = \$reflection->getMethod('domainExists');
        \$method->setAccessible(true);
        \$result = \$method->invokeArgs(\$helper, ['hello@domain.fake']);

        \$this->assertFalse(\$result);
    }

    public function testFindCompanyByName(): void
    {
        \$company = [
            'company' => 'Mautic',
        ];

        \$expected = [
            'companyname'    => 'Mautic',
        ];

        \$model = \$this->getMockBuilder(CompanyModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$model->expects(\$this->once())
            ->method('checkForDuplicateCompanies')
            ->willReturn([]);

        \$model->expects(\$this->any())
            ->method('fetchCompanyFields')
            ->willReturn([['alias' => 'companyname']]);

        \$helper     = new IdentifyCompanyHelper();
        \$reflection = new \\ReflectionClass(IdentifyCompanyHelper::class);
        \$method     = \$reflection->getMethod('findCompany');
        \$method->setAccessible(true);
        [\$resultCompany, \$entities] = \$method->invokeArgs(\$helper, [\$company, \$model]);

        \$this->assertEquals(\$expected, \$resultCompany);
    }

    public function testFindCompanyByNameWithValidEmail(): void
    {
        \$company = [
            'company'      => 'Mautic',
            'companyemail' => 'hello@mautic.org',
        ];

        \$expected = [
            'companyname'    => 'Mautic',
            'companyemail'   => 'hello@mautic.org',
        ];

        \$model = \$this->getMockBuilder(CompanyModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$model->expects(\$this->once())
            ->method('checkForDuplicateCompanies')
            ->willReturn([]);

        \$model->expects(\$this->any())
            ->method('fetchCompanyFields')
            ->willReturn([['alias' => 'companyname']]);

        \$helper     = new IdentifyCompanyHelper();
        \$reflection = new \\ReflectionClass(IdentifyCompanyHelper::class);
        \$method     = \$reflection->getMethod('findCompany');
        \$method->setAccessible(true);
        [\$resultCompany, \$entities] = \$method->invokeArgs(\$helper, [\$company, \$model]);

        \$this->assertEquals(\$expected, \$resultCompany);
    }

    public function testFindCompanyByNameWithValidEmailAndCustomWebsite(): void
    {
        \$company = [
            'company'        => 'Mautic',
            'companyemail'   => 'hello@mautic.org',
            'companywebsite' => 'https://mautic.org',
        ];

        \$expected = [
            'companyname'    => 'Mautic',
            'companywebsite' => 'https://mautic.org',
            'companyemail'   => 'hello@mautic.org',
        ];

        \$model = \$this->getMockBuilder(CompanyModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$model->expects(\$this->once())
            ->method('checkForDuplicateCompanies')
            ->willReturn([]);

        \$model->expects(\$this->any())
            ->method('fetchCompanyFields')
            ->willReturn([['alias' => 'companyname']]);

        \$helper     = new IdentifyCompanyHelper();
        \$reflection = new \\ReflectionClass(IdentifyCompanyHelper::class);
        \$method     = \$reflection->getMethod('findCompany');
        \$method->setAccessible(true);
        [\$resultCompany, \$entities] = \$method->invokeArgs(\$helper, [\$company, \$model]);

        \$this->assertEquals(\$expected, \$resultCompany);
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
        return "@bundles/LeadBundle/Tests/Helper/IdentifyCompanyHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Helper/IdentifyCompanyHelperTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Helper/IdentifyCompanyHelperTest.php");
    }
}
