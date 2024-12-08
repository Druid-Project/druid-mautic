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

/* @bundles/CoreBundle/Event/RouteEvent.php */
class __TwigTemplate_ad1f6c3f90f852b9d5c05437a65fea20 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Component\\Config\\Loader\\Loader;
use Symfony\\Component\\Routing\\RouteCollection;
use Symfony\\Contracts\\EventDispatcher\\Event;

class RouteEvent extends Event
{
    protected RouteCollection \$collection;

    /**
     * @param string \$type
     */
    public function __construct(
        protected Loader \$loader,
        protected \$type = 'main'
    ) {
        \$this->collection = new RouteCollection();
    }

    /**
     * @param string \$path
     */
    public function addRoutes(\$path): void
    {
        \$this->collection->addCollection(\$this->loader->import(\$path));
    }

    /**
     * @return RouteCollection
     */
    public function getCollection()
    {
        return \$this->collection;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
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
        return "@bundles/CoreBundle/Event/RouteEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/RouteEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/RouteEvent.php");
    }
}
