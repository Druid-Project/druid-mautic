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

/* @bundles/FormBundle/Tests/Collector/ObjectCollectorTest.php */
class __TwigTemplate_408cd96ab7afdd4000da8be507c10ecc extends Template
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

namespace Mautic\\FormBundle\\Tests\\Collector;

use Mautic\\FormBundle\\Collection\\ObjectCollection;
use Mautic\\FormBundle\\Collector\\ObjectCollector;
use Mautic\\FormBundle\\Event\\ObjectCollectEvent;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

final class ObjectCollectorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBuildCollectionForNoObject(): void
    {
        \$dispatcher                               = new class() extends EventDispatcher {
            public int \$dispatchMethodCallCounter = 0;

            public function dispatch(object \$event, string \$eventName = null): object
            {
                ++\$this->dispatchMethodCallCounter;

                Assert::assertInstanceOf(ObjectCollectEvent::class, \$event);

                return new ObjectCollection();
            }
        };

        \$objectCollector  = new ObjectCollector(\$dispatcher);
        \$objectCollection = \$objectCollector->getObjects();

        // Calling for the second time to ensure it's cached and the dispatcher is called only once.
        \$objectCollection = \$objectCollector->getObjects();

        Assert::assertInstanceOf(ObjectCollection::class, \$objectCollection);
        Assert::assertEquals(1, \$dispatcher->dispatchMethodCallCounter);
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
        return "@bundles/FormBundle/Tests/Collector/ObjectCollectorTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Collector/ObjectCollectorTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Collector/ObjectCollectorTest.php");
    }
}
