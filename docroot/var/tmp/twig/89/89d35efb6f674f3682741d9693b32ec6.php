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

/* @bundles/CoreBundle/Event/BuildJsEvent.php */
class __TwigTemplate_46dd507f958d5c5bba15449e619a466b extends Template
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

use MatthiasMullie\\Minify;
use Symfony\\Contracts\\EventDispatcher\\Event;

class BuildJsEvent extends Event
{
    /**
     * @param bool   \$debugMode
     * @param string \$js
     */
    public function __construct(
        protected \$js,
        protected \$debugMode = false
    ) {
    }

    /**
     * @return string
     */
    public function getJs()
    {
        return \$this->debugMode ? \$this->js : (new Minify\\JS(\$this->js))->minify();
    }

    /**
     * Append JS.
     *
     * @param string \$js
     * @param string \$section The section name. Shows when in debug mode
     *
     * @return \$this
     */
    public function appendJs(\$js, \$section = '')
    {
        if (\$section && \$this->debugMode) {
            \$slashes = str_repeat('/', strlen(\$section) + 10);
            \$this->js .= <<<JS
\\n
{\$slashes}
// {\$section} Start
{\$slashes}
\\n
JS;
        }

        \$this->js .= \$js;

        if (\$section && \$this->debugMode) {
            \$this->js .= <<<JS
\\n
{\$slashes}
// {\$section} End
{\$slashes}
JS;
        }

        return \$this;
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
        return "@bundles/CoreBundle/Event/BuildJsEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/BuildJsEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/BuildJsEvent.php");
    }
}
