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

/* @bundles/CoreBundle/Event/UpgradeEvent.php */
class __TwigTemplate_f217feaf5736b5d27d416e05c5b7a649 extends Template
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

use Symfony\\Contracts\\EventDispatcher\\Event;

class UpgradeEvent extends Event
{
    public function __construct(
        protected array \$status
    ) {
    }

    /**
     * @return array
     */
    public function getStatus()
    {
        return \$this->status;
    }

    public function isSuccessful(): bool
    {
        if (array_key_exists('success', \$this->status)) {
            return (bool) \$this->status['success'];
        }

        return false;
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
        return "@bundles/CoreBundle/Event/UpgradeEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/UpgradeEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/UpgradeEvent.php");
    }
}
