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

/* @bundles/EmailBundle/Event/EmailEvent.php */
class __TwigTemplate_9b47faa703f8267604f6ca9a8bd730a2 extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\EmailBundle\\Entity\\Email;

class EmailEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Email &\$email, \$isNew = false)
    {
        \$this->entity = &\$email;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Email entity.
     *
     * @return Email
     */
    public function getEmail()
    {
        return \$this->entity;
    }

    /**
     * Sets the Email entity.
     */
    public function setEmail(Email \$email): void
    {
        \$this->entity = \$email;
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
        return "@bundles/EmailBundle/Event/EmailEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/EmailEvent.php", "/app/docroot/app/bundles/EmailBundle/Event/EmailEvent.php");
    }
}
