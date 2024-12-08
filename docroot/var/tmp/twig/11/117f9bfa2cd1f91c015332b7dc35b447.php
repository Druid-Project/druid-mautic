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

/* @bundles/LeadBundle/Tests/Helper/FormFieldHelperTest.php */
class __TwigTemplate_237587d83523b2cf24c64e21c4a8fdec extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Helper;

use Mautic\\LeadBundle\\Helper\\FormFieldHelper;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

final class FormFieldHelperTest extends TestCase
{
    private ?string \$defaultUploadDir;

    protected function setUp(): void
    {
        \$this->defaultUploadDir    = \$_ENV['MAUTIC_UPLOAD_DIR'] ?? null;
        \$_ENV['MAUTIC_UPLOAD_DIR'] = __DIR__; // may not be set unless Symfony is booted
    }

    protected function tearDown(): void
    {
        \$_ENV['MAUTIC_UPLOAD_DIR'] = \$this->defaultUploadDir;
    }

    public function testDefaultCountryList(): void
    {
        \$list  = FormFieldHelper::getCountryChoices();
        \$first = array_shift(\$list);
        \$last  = array_pop(\$list);
        Assert::assertEquals('Afghanistan', \$first);
        Assert::assertEquals('Zimbabwe', \$last);
    }

    public function testCustomCountryList(): void
    {
        \$_ENV['MAUTIC_UPLOAD_DIR'] = __DIR__.'/files';
        \$list                      = FormFieldHelper::getCountryChoices();
        \$first                     = array_shift(\$list);
        \$last                      = array_pop(\$list);
        Assert::assertEquals('Middle Earth', \$first);
        Assert::assertEquals('Fillory', \$last);
    }

    public function testDefaultRegionList(): void
    {
        \$list               = FormFieldHelper::getRegionChoices();
        \$firstCountry       = array_shift(\$list);
        \$firstCountryRegion = array_shift(\$firstCountry);
        \$lastCountry        = array_pop(\$list);
        \$lastCountryRegion  = array_pop(\$lastCountry);
        Assert::assertEquals('Alabama', \$firstCountryRegion);
        Assert::assertEquals('St. Maarten', \$lastCountryRegion);
    }

    public function testCustomRegionList(): void
    {
        \$_ENV['MAUTIC_UPLOAD_DIR'] = __DIR__.'/files';
        \$list                      = FormFieldHelper::getRegionChoices();
        \$firstCountry              = array_shift(\$list);
        \$firstCountryRegion        = array_shift(\$firstCountry);
        \$lastCountry               = array_pop(\$list);
        \$lastCountryRegion         = array_pop(\$lastCountry);
        Assert::assertEquals('The Westlands', \$firstCountryRegion);
        Assert::assertEquals('Darkling Woods', \$lastCountryRegion);
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
        return "@bundles/LeadBundle/Tests/Helper/FormFieldHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Helper/FormFieldHelperTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Helper/FormFieldHelperTest.php");
    }
}
