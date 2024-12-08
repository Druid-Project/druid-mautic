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

/* @bundles/FormBundle/Collection/ObjectCollection.php */
class __TwigTemplate_e162a22ee8028becd57f494746c32412 extends Template
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

namespace Mautic\\FormBundle\\Collection;

use Mautic\\FormBundle\\Crate\\ObjectCrate;

/**
 * @extends \\ArrayIterator<int,ObjectCrate>
 */
final class ObjectCollection extends \\ArrayIterator
{
    /**
     * @return array<string,string>
     */
    public function toChoices(): array
    {
        \$choices = [];

        /** @var ObjectCrate \$object */
        foreach (\$this as \$object) {
            \$choices[\$object->getName()] = \$object->getKey();
        }

        return \$choices;
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
        return "@bundles/FormBundle/Collection/ObjectCollection.php";
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
        return new Source("", "@bundles/FormBundle/Collection/ObjectCollection.php", "/app/docroot/app/bundles/FormBundle/Collection/ObjectCollection.php");
    }
}
