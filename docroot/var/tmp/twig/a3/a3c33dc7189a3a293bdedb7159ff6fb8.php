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

/* @bundles/FormBundle/Tests/Collector/MappedObjectCollectorTest.php */
class __TwigTemplate_3d7ee61d27ff25e71a4d057f73ecc25d extends Template
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
use Mautic\\FormBundle\\Collection\\MappedObjectCollection;
use Mautic\\FormBundle\\Collector\\FieldCollectorInterface;
use Mautic\\FormBundle\\Collector\\MappedObjectCollector;
use PHPUnit\\Framework\\Assert;

final class MappedObjectCollectorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBuildCollectionForNoObject(): void
    {
        \$fieldCollector                            = new class() implements FieldCollectorInterface {
            public int \$getFieldsMethodCallCounter = 0;

            public function getFields(string \$object): FieldCollection
            {
                ++\$this->getFieldsMethodCallCounter;

                return new FieldCollection();
            }
        };

        \$mappedObjectCollector = new MappedObjectCollector(\$fieldCollector);
        \$objectCollection      = \$mappedObjectCollector->buildCollection('');
        Assert::assertInstanceOf(MappedObjectCollection::class, \$objectCollection);
        Assert::assertCount(0, \$objectCollection);
        Assert::assertEquals(0, \$fieldCollector->getFieldsMethodCallCounter);
    }

    public function testBuildCollectionForOneObject(): void
    {
        \$fieldCollector                            = new class() implements FieldCollectorInterface {
            public int \$getFieldsMethodCallCounter = 0;

            public function getFields(string \$object): FieldCollection
            {
                Assert::assertSame(\$object, 'contact');
                ++\$this->getFieldsMethodCallCounter;

                return new FieldCollection();
            }
        };

        \$mappedObjectCollector = new MappedObjectCollector(\$fieldCollector);
        \$objectCollection      = \$mappedObjectCollector->buildCollection('contact');
        Assert::assertInstanceOf(MappedObjectCollection::class, \$objectCollection);
        Assert::assertCount(1, \$objectCollection);
        Assert::assertEquals(1, \$fieldCollector->getFieldsMethodCallCounter);
    }

    public function testBuildCollectionForMultipleObjects(): void
    {
        \$fieldCollector                            = new class() implements FieldCollectorInterface {
            public int \$getFieldsMethodCallCounter = 0;

            public function getFields(string \$object): FieldCollection
            {
                Assert::assertContains(\$object, ['company', 'contact']);
                ++\$this->getFieldsMethodCallCounter;

                return new FieldCollection();
            }
        };

        \$mappedObjectCollector = new MappedObjectCollector(\$fieldCollector);
        \$objectCollection      = \$mappedObjectCollector->buildCollection('contact', 'company');
        Assert::assertInstanceOf(MappedObjectCollection::class, \$objectCollection);
        Assert::assertCount(2, \$objectCollection);
        Assert::assertEquals(2, \$fieldCollector->getFieldsMethodCallCounter);
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
        return "@bundles/FormBundle/Tests/Collector/MappedObjectCollectorTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Collector/MappedObjectCollectorTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Collector/MappedObjectCollectorTest.php");
    }
}
