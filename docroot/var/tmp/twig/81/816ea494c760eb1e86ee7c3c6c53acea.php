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

/* @bundles/LeadBundle/Tests/Entity/CompanyUnitTest.php */
class __TwigTemplate_1fc50005a71b0f7209b874d872a2bbdf extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\LeadBundle\\Entity\\Company;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

final class CompanyUnitTest extends TestCase
{
    public function testChanges(): void
    {
        \$company = new Company();

        Assert::assertSame([], \$company->getChanges());

        \$company->setEmail('john.doe@email.com');
        \$company->setScore(2);
        \$company->setName('Acquia');
        \$company->setAddress1('Acquia avenue');
        \$company->setAddress2('1234');
        \$company->setPhone('123456789');
        \$company->setCity('Boston');
        \$company->setState('MA');
        \$company->setZipcode('MA1234');
        \$company->setCountry('US');
        \$company->setWebsite('acquia.com');
        \$company->setIndustry('DXP');
        \$company->setDescription('Supports open source');

        Assert::assertSame(
            [
                'companyemail'       => [null, 'john.doe@email.com'],
                'score'              => [0, 2],
                'companyname'        => [null, 'Acquia'],
                'companyaddress1'    => [null, 'Acquia avenue'],
                'companyaddress2'    => [null, '1234'],
                'companyphone'       => [null, '123456789'],
                'companycity'        => [null, 'Boston'],
                'companystate'       => [null, 'MA'],
                'companyzipcode'     => [null, 'MA1234'],
                'companycountry'     => [null, 'US'],
                'companywebsite'     => [null, 'acquia.com'],
                'companyindustry'    => [null, 'DXP'],
                'companydescription' => [null, 'Supports open source'],
            ],
            \$company->getChanges()
        );

        \$company->setEmail('john.doe@email.com - updated');
        \$company->setScore(5);
        \$company->setName('Acquia - updated');
        \$company->setAddress1('Acquia avenue - updated');
        \$company->setAddress2('1234 - updated');
        \$company->setPhone('123456789 - updated');
        \$company->setCity('Boston - updated');
        \$company->setState('MA - updated');
        \$company->setZipcode('MA1234 - updated');
        \$company->setCountry('US - updated');
        \$company->setWebsite('acquia.com - updated');
        \$company->setIndustry('DXP - updated');
        \$company->setDescription('Supports open source - updated');

        Assert::assertSame(
            [
                'companyemail'       => ['john.doe@email.com', 'john.doe@email.com - updated'],
                'score'              => [2, 5],
                'companyname'        => ['Acquia', 'Acquia - updated'],
                'companyaddress1'    => ['Acquia avenue', 'Acquia avenue - updated'],
                'companyaddress2'    => ['1234', '1234 - updated'],
                'companyphone'       => ['123456789', '123456789 - updated'],
                'companycity'        => ['Boston', 'Boston - updated'],
                'companystate'       => ['MA', 'MA - updated'],
                'companyzipcode'     => ['MA1234', 'MA1234 - updated'],
                'companycountry'     => ['US', 'US - updated'],
                'companywebsite'     => ['acquia.com', 'acquia.com - updated'],
                'companyindustry'    => ['DXP', 'DXP - updated'],
                'companydescription' => ['Supports open source', 'Supports open source - updated'],
            ],
            \$company->getChanges()
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
        return "@bundles/LeadBundle/Tests/Entity/CompanyUnitTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/CompanyUnitTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/CompanyUnitTest.php");
    }
}
