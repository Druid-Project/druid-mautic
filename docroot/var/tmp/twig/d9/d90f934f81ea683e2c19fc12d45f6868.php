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

/* @bundles/CoreBundle/Event/CustomContentEvent.php */
class __TwigTemplate_5482258083373688c814bc123dc994b3 extends Template
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

use Symfony\\Contracts\\EventDispatcher\\Event;

class CustomContentEvent extends Event
{
    /**
     * @var array
     */
    protected \$content = [];

    /**
     * @var array
     */
    protected \$templates = [];

    /**
     * @param string      \$viewName
     * @param string|null \$context
     */
    public function __construct(
        protected \$viewName,
        protected \$context = null,
        protected array \$vars = []
    ) {
    }

    /**
     * Check if the context is applicable.
     *
     * @param string      \$viewName
     * @param string|null \$context
     */
    public function checkContext(\$viewName, \$context): bool
    {
        return \$viewName === \$this->viewName && \$context === \$this->context;
    }

    /**
     * @param string \$content
     */
    public function addContent(\$content): void
    {
        \$this->content[] = \$content;
    }

    /**
     * @param string \$template
     */
    public function addTemplate(\$template, array \$vars = []): void
    {
        \$this->templates[] = [
            'template' => \$template,
            'vars'     => \$vars,
        ];
    }

    /**
     * @return mixed
     */
    public function getViewName()
    {
        return \$this->viewName;
    }

    /**
     * @return string|null
     */
    public function getContext()
    {
        return \$this->context;
    }

    /**
     * @return array
     */
    public function getVars()
    {
        return \$this->vars;
    }

    /**
     * @return array
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * @return array
     */
    public function getTemplates()
    {
        return \$this->templates;
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
        return "@bundles/CoreBundle/Event/CustomContentEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/CustomContentEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/CustomContentEvent.php");
    }
}
