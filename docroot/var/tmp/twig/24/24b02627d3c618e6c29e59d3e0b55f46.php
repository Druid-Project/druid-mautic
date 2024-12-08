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

/* @bundles/FormBundle/Event/ObjectCollectEvent.php */
class __TwigTemplate_e91d70687c55046bfb3d658fe7ce4b3c extends Template
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

namespace Mautic\\FormBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\FormBundle\\Collection\\ObjectCollection;
use Mautic\\FormBundle\\Crate\\ObjectCrate;

final class ObjectCollectEvent extends CommonEvent
{
    private ObjectCollection \$objects;

    public function __construct()
    {
        \$this->objects = new ObjectCollection();
    }

    public function appendObject(ObjectCrate \$object): void
    {
        \$this->objects->append(\$object);
    }

    public function getObjects(): ObjectCollection
    {
        return \$this->objects;
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
        return "@bundles/FormBundle/Event/ObjectCollectEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/ObjectCollectEvent.php", "/app/docroot/app/bundles/FormBundle/Event/ObjectCollectEvent.php");
    }
}
