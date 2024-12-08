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

/* @bundles/EmailBundle/Event/EmailOpenEvent.php */
class __TwigTemplate_66ff88cffa5f9efaae0924680fe01102 extends Template
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
use Mautic\\EmailBundle\\Entity\\Stat;
use Symfony\\Component\\HttpFoundation\\Request;

class EmailOpenEvent extends CommonEvent
{
    private ?Email \$email;

    /**
     * @param Request \$request
     * @param bool    \$firstTime
     */
    public function __construct(
        Stat \$stat,
        private \$request,
        private \$firstTime = false
    ) {
        \$this->entity    = \$stat;
        \$this->email     = \$stat->getEmail();
    }

    /**
     * Returns the Email entity.
     *
     * @return Email
     */
    public function getEmail()
    {
        return \$this->email;
    }

    /**
     * Get email request.
     *
     * @return string
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * @return Stat
     */
    public function getStat()
    {
        return \$this->entity;
    }

    /**
     * Returns if this is first time the email is read.
     *
     * @return bool
     */
    public function isFirstTime()
    {
        return \$this->firstTime;
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
        return "@bundles/EmailBundle/Event/EmailOpenEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/EmailOpenEvent.php", "/app/docroot/app/bundles/EmailBundle/Event/EmailOpenEvent.php");
    }
}
