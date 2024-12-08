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

/* @bundles/CoreBundle/Tests/Unit/Helper/SearchStringHelperTest.php */
class __TwigTemplate_4ce8fd5c9bd4175df99f4aa9533a8aed extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\SearchStringHelper;

class SearchStringHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNegativeGroup(): void
    {
        \$result = SearchStringHelper::parseSearchString('email:!(test@example.%)');

        \$this->assertArrayHasKey('email', \$result->commands);
        \$this->assertEquals('email', \$result->root[0]->command);
        \$this->assertEquals('test@example.%', \$result->root[0]->string);
        \$this->assertEquals(1, \$result->root[0]->not);
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/SearchStringHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/SearchStringHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/SearchStringHelperTest.php");
    }
}
