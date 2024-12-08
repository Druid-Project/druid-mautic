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

/* @bundles/FormBundle/Tests/Collector/FieldCollectorTest.php */
class __TwigTemplate_4ec21bf31ee073b6a12687ce1757a523 extends Template
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

use Mautic\\FormBundle\\Collection\\FieldCollection;
use Mautic\\FormBundle\\Collector\\FieldCollector;
use Mautic\\FormBundle\\Event\\FieldCollectEvent;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

final class FieldCollectorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBuildCollectionForNoObject(): void
    {
        \$dispatcher                               = new class() extends EventDispatcher {
            public int \$dispatchMethodCallCounter = 0;

            public function dispatch(object \$event, string \$eventName = null): object
            {
                ++\$this->dispatchMethodCallCounter;

                \\assert(\$event instanceof FieldCollectEvent);
                Assert::assertSame('contact', \$event->getObject());

                return new FieldCollection();
            }
        };

        \$fieldCollector  = new FieldCollector(\$dispatcher);
        \$fieldCollection = \$fieldCollector->getFields('contact');

        // Calling for the second time to ensure it's cached and the dispatcher is called only once.
        \$fieldCollection = \$fieldCollector->getFields('contact');

        Assert::assertInstanceOf(FieldCollection::class, \$fieldCollection);
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
        return "@bundles/FormBundle/Tests/Collector/FieldCollectorTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Collector/FieldCollectorTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Collector/FieldCollectorTest.php");
    }
}
