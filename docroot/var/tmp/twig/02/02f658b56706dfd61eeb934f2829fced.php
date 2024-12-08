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

/* @bundles/LeadBundle/Tests/Segment/RandomParameterNameTest.php */
class __TwigTemplate_c4729add7ff3722fba27fb03c2a858ea extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment;

use Mautic\\LeadBundle\\Segment\\RandomParameterName;
use PHPUnit\\Framework\\TestCase;

class RandomParameterNameTest extends TestCase
{
    public function testGenerateRandomParameterName(): void
    {
        \$generator = new RandomParameterName();

        \$expectedValues = [
            'par0',
            'par1',
            'par2',
            'par3',
            'par4',
            'par5',
            'par6',
            'par7',
            'par8',
            'par9',
            'para',
            'parb',
            'parc',
            'pard',
            'pare',
            'parf',
            'parg',
            'parh',
            'pari',
            'parj',
            'park',
            'parl',
            'parm',
            'parn',
            'paro',
            'parp',
            'parq',
            'parr',
            'pars',
            'part',
            'paru',
            'parv',
            'parw',
            'parx',
            'pary',
            'parz',
            'par10',
            'par11',
        ];

        foreach (\$expectedValues as \$expectedValue) {
            self::assertSame(\$expectedValue, \$generator->generateRandomParameterName());
        }
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
        return "@bundles/LeadBundle/Tests/Segment/RandomParameterNameTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/RandomParameterNameTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Segment/RandomParameterNameTest.php");
    }
}
