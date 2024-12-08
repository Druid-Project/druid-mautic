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

/* @bundles/FormBundle/Event/FormEvent.php */
class __TwigTemplate_d853577917d98bf37b13139a2dd184a9 extends Template
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

namespace Mautic\\FormBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\FormBundle\\Entity\\Form;

class FormEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Form &\$form, \$isNew = false)
    {
        \$this->entity = &\$form;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Form entity.
     *
     * @return Form
     */
    public function getForm()
    {
        return \$this->entity;
    }

    /**
     * Sets the Form entity.
     */
    public function setForm(Form \$form): void
    {
        \$this->entity = \$form;
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
        return "@bundles/FormBundle/Event/FormEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/FormEvent.php", "/app/docroot/app/bundles/FormBundle/Event/FormEvent.php");
    }
}
