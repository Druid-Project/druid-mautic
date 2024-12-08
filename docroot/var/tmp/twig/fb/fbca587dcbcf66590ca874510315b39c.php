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

/* @bundles/CoreBundle/Event/CustomTemplateEvent.php */
class __TwigTemplate_8206bf8d6cf541c09c74c10f045fdeb2 extends Template
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

use Symfony\\Component\\HttpFoundation\\Request;

class CustomTemplateEvent extends AbstractCustomRequestEvent
{
    /**
     * @var string|null
     */
    protected \$template;

    /**
     * @param string|null \$template
     */
    public function __construct(
        Request \$request = null,
        \$template = null,
        protected array \$vars = []
    ) {
        parent::__construct(\$request);

        if (empty(\$template)) {
            throw new \\InvalidArgumentException('\$template is required');
        }

        \$this->template = \$template;
    }

    /**
     * @return string|null
     */
    public function getTemplate()
    {
        return \$this->template;
    }

    /**
     * @param string|null \$template
     *
     * @return CustomTemplateEvent
     */
    public function setTemplate(\$template)
    {
        \$this->template = \$template;

        \$this->stopPropagation();

        return \$this;
    }

    /**
     * @return array
     */
    public function getVars()
    {
        return \$this->vars;
    }

    /**
     * @param array<string, mixed> \$vars
     *
     * @return CustomTemplateEvent
     */
    public function setVars(\$vars)
    {
        \$this->vars = \$vars;

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
        return "@bundles/CoreBundle/Event/CustomTemplateEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/CustomTemplateEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/CustomTemplateEvent.php");
    }
}
