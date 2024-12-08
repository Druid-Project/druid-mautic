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

/* @bundles/UserBundle/Event/AuthenticationContentEvent.php */
class __TwigTemplate_f432ca9bb8e37bcac0ea86f2e87b0380 extends Template
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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Contracts\\EventDispatcher\\Event;

class AuthenticationContentEvent extends Event
{
    /**
     * @var array
     */
    protected \$content = [];

    /**
     * @var bool
     */
    protected \$postLogout = false;

    public function __construct(
        protected Request \$request
    ) {
        \$this->postLogout = \$request->getSession()->get('post_logout', false);
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * @return bool
     */
    public function isLogout()
    {
        return \$this->postLogout;
    }

    public function addContent(\$content): void
    {
        \$this->content[] = \$content;
    }

    public function getContent(): string
    {
        return implode(\"\\n\\n\", \$this->content);
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
        return "@bundles/UserBundle/Event/AuthenticationContentEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/AuthenticationContentEvent.php", "/app/docroot/app/bundles/UserBundle/Event/AuthenticationContentEvent.php");
    }
}
