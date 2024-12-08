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

/* @bundles/PageBundle/Event/TrackingEvent.php */
class __TwigTemplate_6603cc35533e9af44626085bf7013433 extends Template
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

namespace Mautic\\PageBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Contracts\\EventDispatcher\\Event;

class TrackingEvent extends Event
{
    private ParameterBag \$response;

    public function __construct(
        private Lead \$contact,
        private Request \$request,
        array \$mtcSessionResponses
    ) {
        \$this->response = new ParameterBag(\$mtcSessionResponses);
    }

    public function getContact(): Lead
    {
        return \$this->contact;
    }

    public function getRequest(): Request
    {
        return \$this->request;
    }

    public function getResponse(): ParameterBag
    {
        return \$this->response;
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
        return "@bundles/PageBundle/Event/TrackingEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/TrackingEvent.php", "/app/docroot/app/bundles/PageBundle/Event/TrackingEvent.php");
    }
}
