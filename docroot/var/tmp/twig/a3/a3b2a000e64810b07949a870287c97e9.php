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

/* @bundles/FormBundle/Collector/MappedObjectCollector.php */
class __TwigTemplate_2560063122e9c81a397e8f8c5f20eafc extends Template
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

namespace Mautic\\FormBundle\\Collector;

use Mautic\\FormBundle\\Collection\\MappedObjectCollection;

final class MappedObjectCollector implements MappedObjectCollectorInterface
{
    public function __construct(
        private FieldCollectorInterface \$fieldCollector
    ) {
    }

    public function buildCollection(string ...\$objects): MappedObjectCollection
    {
        \$mappedObjectCollection = new MappedObjectCollection();

        foreach (\$objects as \$object) {
            if (\$object) {
                \$mappedObjectCollection->offsetSet(\$object, \$this->fieldCollector->getFields(\$object));
            }
        }

        return \$mappedObjectCollection;
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
        return "@bundles/FormBundle/Collector/MappedObjectCollector.php";
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
        return new Source("", "@bundles/FormBundle/Collector/MappedObjectCollector.php", "/app/docroot/app/bundles/FormBundle/Collector/MappedObjectCollector.php");
    }
}
