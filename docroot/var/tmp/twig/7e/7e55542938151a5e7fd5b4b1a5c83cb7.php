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

/* @bundles/DynamicContentBundle/Event/DynamicContentEvent.php */
class __TwigTemplate_96d1ab175dc069869cdf5ed84cf32a78 extends Template
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

namespace Mautic\\DynamicContentBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\DynamicContentBundle\\Entity\\DynamicContent;

class DynamicContentEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(DynamicContent \$entity, \$isNew = false)
    {
        \$this->entity = \$entity;
        \$this->isNew  = \$isNew;
    }

    /**
     * @return DynamicContent
     */
    public function getDynamicContent()
    {
        return \$this->entity;
    }

    public function setDynamicContent(DynamicContent \$entity): void
    {
        \$this->entity = \$entity;
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
        return "@bundles/DynamicContentBundle/Event/DynamicContentEvent.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Event/DynamicContentEvent.php", "/app/docroot/app/bundles/DynamicContentBundle/Event/DynamicContentEvent.php");
    }
}
