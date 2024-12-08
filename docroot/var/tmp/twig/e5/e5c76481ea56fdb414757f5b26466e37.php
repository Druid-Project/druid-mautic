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

/* @bundles/PageBundle/Event/RedirectGenerationEvent.php */
class __TwigTemplate_9e6509e3683c8c4db8216b196f2c6aa8 extends Template
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

namespace Mautic\\PageBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\PageBundle\\Entity\\Redirect;

class RedirectGenerationEvent extends CommonEvent
{
    public function __construct(
        private Redirect \$redirect,
        private array \$clickthrough
    ) {
    }

    /**
     * Set or overwrite a value in the clickthrough.
     *
     * @param string \$key
     * @param mixed  \$value
     */
    public function setInClickthrough(\$key, \$value): void
    {
        \$this->clickthrough[\$key] = \$value;
    }

    /**
     * Get the redirect from the event.
     *
     * @return Redirect
     */
    public function getRedirect()
    {
        return \$this->redirect;
    }

    /**
     * Get the modified clickthrough from the event.
     *
     * @return array
     */
    public function getClickthrough()
    {
        return \$this->clickthrough;
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
        return "@bundles/PageBundle/Event/RedirectGenerationEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/RedirectGenerationEvent.php", "/app/docroot/app/bundles/PageBundle/Event/RedirectGenerationEvent.php");
    }
}
