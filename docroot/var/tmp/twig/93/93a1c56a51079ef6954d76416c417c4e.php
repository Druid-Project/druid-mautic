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

/* @bundles/ApiBundle/Event/ApiEntityEvent.php */
class __TwigTemplate_b455c46a0b24e3be4d98349354cdf9a1 extends Template
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

namespace Mautic\\ApiBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Symfony\\Component\\HttpFoundation\\Request;

class ApiEntityEvent extends CommonEvent
{
    /**
     * @param object \$entity
     */
    public function __construct(
        protected \$entity,
        protected array \$entityRequestParameters,
        private Request \$request
    ) {
    }

    /**
     * @return object
     */
    public function getEntity()
    {
        return \$this->entity;
    }

    /**
     * @return array
     */
    public function getEntityRequestParameters()
    {
        return \$this->entityRequestParameters;
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
        return "@bundles/ApiBundle/Event/ApiEntityEvent.php";
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
        return new Source("", "@bundles/ApiBundle/Event/ApiEntityEvent.php", "/app/docroot/app/bundles/ApiBundle/Event/ApiEntityEvent.php");
    }
}
