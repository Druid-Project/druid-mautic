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

/* @bundles/ApiBundle/Event/ClientEvent.php */
class __TwigTemplate_70b7c7b1523a4cf64387419d5ddfa35a extends Template
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

use Mautic\\ApiBundle\\Entity\\oAuth2\\Client;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class ClientEvent extends CommonEvent
{
    private string \$apiMode;

    public function __construct(Client \$client, \$isNew = false)
    {
        \$this->apiMode = 'oauth2';
        \$this->entity  = \$client;
        \$this->isNew   = \$isNew;
    }

    /**
     * Returns the Client entity.
     *
     * @return Client
     */
    public function getClient()
    {
        return \$this->entity;
    }

    /**
     * Returns the api mode.
     */
    public function getApiMode(): string
    {
        return \$this->apiMode;
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
        return "@bundles/ApiBundle/Event/ClientEvent.php";
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
        return new Source("", "@bundles/ApiBundle/Event/ClientEvent.php", "/app/docroot/app/bundles/ApiBundle/Event/ClientEvent.php");
    }
}
