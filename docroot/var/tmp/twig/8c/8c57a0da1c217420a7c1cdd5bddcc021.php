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

/* @bundles/UserBundle/Event/UserEvent.php */
class __TwigTemplate_b8315e470ce4d8c2b6e0d6b0dee8ef71 extends Template
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
use Mautic\\UserBundle\\Entity\\User;

class UserEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(User &\$user, \$isNew = false)
    {
        \$this->entity = &\$user;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the User entity.
     *
     * @return User
     */
    public function getUser()
    {
        return \$this->entity;
    }

    /**
     * Sets the User entity.
     */
    public function setUser(User \$user): void
    {
        \$this->entity = \$user;
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
        return "@bundles/UserBundle/Event/UserEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/UserEvent.php", "/app/docroot/app/bundles/UserBundle/Event/UserEvent.php");
    }
}
