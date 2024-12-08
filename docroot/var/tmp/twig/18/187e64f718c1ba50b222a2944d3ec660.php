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

/* @bundles/ApiBundle/Event/ApiSerializationContextEvent.php */
class __TwigTemplate_03e4858df8fe18b17f6168eaa2f7c6d0 extends Template
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

declare(strict_types=1);

namespace Mautic\\ApiBundle\\Event;

use FOS\\RestBundle\\Context\\Context;
use Mautic\\CoreBundle\\Event\\CommonEvent;
use Symfony\\Component\\HttpFoundation\\Request;

final class ApiSerializationContextEvent extends CommonEvent
{
    public function __construct(private Context \$context, private Request \$request)
    {
    }

    public function getContext(): Context
    {
        return \$this->context;
    }

    public function setContext(Context \$context): void
    {
        \$this->context = \$context;
    }

    public function getRequest(): Request
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
        return "@bundles/ApiBundle/Event/ApiSerializationContextEvent.php";
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
        return new Source("", "@bundles/ApiBundle/Event/ApiSerializationContextEvent.php", "/app/docroot/app/bundles/ApiBundle/Event/ApiSerializationContextEvent.php");
    }
}
