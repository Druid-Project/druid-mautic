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

/* @bundles/NotificationBundle/Controller/JsController.php */
class __TwigTemplate_e86eff17ac2678ce983e396f5e8022a3 extends Template
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

namespace Mautic\\NotificationBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Symfony\\Component\\HttpFoundation\\Response;

class JsController extends CommonController
{
    /**
     * We can't user JsonResponse here, because
     * it improperly encodes the data array.
     */
    public function manifestAction(): Response
    {
        \$gcmSenderId = \$this->coreParametersHelper->get('gcm_sender_id', '446150739532');
        \$data        = [
            'start_url'             => '/',
            'gcm_sender_id'         => \$gcmSenderId,
            'gcm_user_visible_only' => true,
        ];

        return new Response(
            json_encode(\$data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES),
            200,
            [
                'Content-Type' => 'application/json',
            ]
        );
    }

    public function workerAction(): Response
    {
        return new Response(
            \"importScripts('https://cdn.onesignal.com/sdks/OneSignalSDK.js');\",
            200,
            [
                'Service-Worker-Allowed' => '/',
                'Content-Type'           => 'application/javascript',
            ]
        );
    }

    public function updaterAction(): Response
    {
        return new Response(
            \"importScripts('https://cdn.onesignal.com/sdks/OneSignalSDK.js');\",
            200,
            [
                'Service-Worker-Allowed' => '/',
                'Content-Type'           => 'application/javascript',
            ]
        );
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
        return "@bundles/NotificationBundle/Controller/JsController.php";
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
        return new Source("", "@bundles/NotificationBundle/Controller/JsController.php", "/app/docroot/app/bundles/NotificationBundle/Controller/JsController.php");
    }
}
