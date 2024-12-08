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

/* @bundles/CoreBundle/Tests/Event/BuildJsEventTest.php */
class __TwigTemplate_3d080d36b0862be33dda137e74f40e6f extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Event;

use Mautic\\CoreBundle\\Event\\BuildJsEvent;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class BuildJsEventTest extends TestCase
{
    public const TEST_JS = <<<JS
/** some comment */
console.log('logging this');
JS;

    public function testMinificationIsONInProd(): void
    {
        \$event = new BuildJsEvent(self::TEST_JS);
        Assert::assertSame('console.log(\\'logging this\\')', \$event->getJs());
    }

    public function testMinificationIsOffInDev(): void
    {
        \$event = new BuildJsEvent(self::TEST_JS, true);
        Assert::assertSame(self::TEST_JS, \$event->getJs());
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
        return "@bundles/CoreBundle/Tests/Event/BuildJsEventTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Event/BuildJsEventTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Event/BuildJsEventTest.php");
    }
}
