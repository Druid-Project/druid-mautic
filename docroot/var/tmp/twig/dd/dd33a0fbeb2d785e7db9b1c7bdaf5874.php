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

/* @bundles/UserBundle/Event/LogoutEvent.php */
class __TwigTemplate_1ed2bb1658ef8f16b09578607e32f356 extends Template
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

use Mautic\\UserBundle\\Entity\\User;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Contracts\\EventDispatcher\\Event;

class LogoutEvent extends Event
{
    private array \$session = [];

    public function __construct(
        private User \$user,
        private Request \$request
    ) {
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return \$this->user;
    }

    /**
     * Add value to session after it's been cleared.
     */
    public function setPostSessionItem(\$key, \$value): void
    {
        \$this->session[\$key] = \$value;
    }

    /**
     * Get session items to be added after session has been cleared.
     *
     * @return array
     */
    public function getPostSessionItems()
    {
        return \$this->session;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
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
        return "@bundles/UserBundle/Event/LogoutEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/LogoutEvent.php", "/app/docroot/app/bundles/UserBundle/Event/LogoutEvent.php");
    }
}
