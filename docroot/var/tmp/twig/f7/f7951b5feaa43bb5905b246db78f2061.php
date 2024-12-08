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

/* @bundles/LeadBundle/Tests/Deduplicate/Helper/MergeValueHelperTest.php */
class __TwigTemplate_78e014c1bdb9c2088275398505fca30b extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Deduplicate\\Helper;

use Mautic\\LeadBundle\\Deduplicate\\Exception\\ValueNotMergeableException;
use Mautic\\LeadBundle\\Deduplicate\\Helper\\MergeValueHelper;

class MergeValueHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetMergeValueWhenNewAndOldValuesAreIdentical(): void
    {
        \$newerValue     = 'bbb';
        \$olderValue     = 'bbb';
        \$winnerValue    = null;
        \$defaultValue   = null;
        \$newIsAnonymous = false;

        \$this->expectException(ValueNotMergeableException::class);
        MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);
    }

    public function testGetMergeValueWhenNewAndWinnerValuesAreIdentical(): void
    {
        \$newerValue     = 'bbb';
        \$olderValue     = 'aaa';
        \$winnerValue    = 'bbb';
        \$defaultValue   = null;
        \$newIsAnonymous = false;

        \$this->expectException(ValueNotMergeableException::class);
        MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);
    }

    public function testGetMergeValueWhenNewerValueIsNotNull(): void
    {
        \$newerValue     = 'aaa';
        \$olderValue     = 'bbb';
        \$winnerValue    = 'bbb';
        \$defaultValue   = null;
        \$newIsAnonymous = false;

        \$value = MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);

        \$this->assertSame('aaa', \$value);
    }

    public function testGetMergeValueWhenNewerValueIsNotNullAndSameAsDefaultValueForAnonymousContact(): void
    {
        \$newerValue     = 'aaa';
        \$olderValue     = 'bbb';
        \$winnerValue    = 'bbb';
        \$defaultValue   = 'aaa';
        \$newIsAnonymous = true;

        \$value = MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);

        \$this->assertSame('bbb', \$value);
    }

    public function testGetMergeValueWhenNewerValueIsNotNullAndSameAsDefaultValueForIdentifiedContact(): void
    {
        \$newerValue     = 'aaa';
        \$olderValue     = 'bbb';
        \$winnerValue    = 'bbb';
        \$defaultValue   = 'aaa';
        \$newIsAnonymous = false;

        \$value = MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);

        \$this->assertSame('aaa', \$value);
    }

    public function testGetMergeValueWhenNewerValueIsNull(): void
    {
        \$newerValue     = null;
        \$olderValue     = 'bbb';
        \$winnerValue    = 'bbb';
        \$defaultValue   = null;
        \$newIsAnonymous = false;

        \$value = MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);

        \$this->assertSame('bbb', \$value);
    }

    public function testGetMergeValueWhenNewerValueIsNotNullAndDefaultValueIsZero(): void
    {
        \$newerValue     = 0;
        \$olderValue     = 1;
        \$winnerValue    = 1;
        \$defaultValue   = 0;
        \$newIsAnonymous = true;

        \$value = MergeValueHelper::getMergeValue(\$newerValue, \$olderValue, \$winnerValue, \$defaultValue, \$newIsAnonymous);

        \$this->assertSame(\$winnerValue, \$value);
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
        return "@bundles/LeadBundle/Tests/Deduplicate/Helper/MergeValueHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Deduplicate/Helper/MergeValueHelperTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Deduplicate/Helper/MergeValueHelperTest.php");
    }
}
