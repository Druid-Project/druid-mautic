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

/* @bundles/UserBundle/Event/RoleEvent.php */
class __TwigTemplate_3322140b6177f670b942a28d77d977d3 extends Template
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

namespace Mautic\\UserBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\UserBundle\\Entity\\Role;

class RoleEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Role &\$role, \$isNew = false)
    {
        \$this->entity = &\$role;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Role entity.
     *
     * @return Role
     */
    public function getRole()
    {
        return \$this->entity;
    }

    /**
     * Sets the Role entity.
     */
    public function setRole(Role \$role): void
    {
        \$this->entity = \$role;
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
        return "@bundles/UserBundle/Event/RoleEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/RoleEvent.php", "/app/docroot/app/bundles/UserBundle/Event/RoleEvent.php");
    }
}
