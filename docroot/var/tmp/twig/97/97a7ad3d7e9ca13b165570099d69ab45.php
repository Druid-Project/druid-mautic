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

/* @bundles/ApiBundle/ApiEvents.php */
class __TwigTemplate_470383245fd305f8f73d0e10d9ba67d3 extends Template
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

namespace Mautic\\ApiBundle;

final class ApiEvents
{
    /**
     * The mautic.client_pre_save event is thrown right before an API client is persisted.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ClientEvent instance.
     *
     * @var string
     */
    public const CLIENT_PRE_SAVE = 'mautic.client_pre_save';

    /**
     * The mautic.client_post_save event is thrown right after an API client is persisted.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ClientEvent instance.
     *
     * @var string
     */
    public const CLIENT_POST_SAVE = 'mautic.client_post_save';

    /**
     * The mautic.client_post_delete event is thrown after an API client is deleted.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ClientEvent instance.
     *
     * @var string
     */
    public const CLIENT_POST_DELETE = 'mautic.client_post_delete';

    /**
     * The mautic.build_api_route event is thrown to build Mautic API routes.
     *
     * The event listener receives a Mautic\\CoreBundle\\Event\\RouteEvent instance.
     *
     * @var string
     */
    public const BUILD_ROUTE = 'mautic.build_api_route';

    /**
     * The mautic.api_on_entity_pre_save event is thrown after an entity about to be saved via API.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ApiEntityEvent instance.
     *
     * @var string
     */
    public const API_ON_ENTITY_PRE_SAVE = 'mautic.api_on_entity_pre_save';

    /**
     * The mautic.api_on_entity_post_save event is thrown after an entity is saved via API.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ApiEntityEvent instance.
     *
     * @var string
     */
    public const API_ON_ENTITY_POST_SAVE = 'mautic.api_on_entity_post_save';

    /**
     * The mautic.api_pre_serialization_context event is dispatched before the serialization context is created for the view.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ApiSerializationContextEvent instance.
     *
     * @var string
     */
    public const API_PRE_SERIALIZATION_CONTEXT = 'mautic.api_pre_serialization_context';

    /**
     * The mautic.api_post_serialization_context event is dispatched after the serialization context is created for the view.
     *
     * The event listener receives a Mautic\\ApiBundle\\Event\\ApiSerializationContextEvent instance.
     *
     * @var string
     */
    public const API_POST_SERIALIZATION_CONTEXT = 'mautic.api_post_serialization_context';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ApiBundle/ApiEvents.php";
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
        return new Source("", "@bundles/ApiBundle/ApiEvents.php", "/app/docroot/app/bundles/ApiBundle/ApiEvents.php");
    }
}
