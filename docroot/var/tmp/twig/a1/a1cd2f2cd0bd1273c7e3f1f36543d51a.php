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

/* @bundles/WebhookBundle/Controller/AjaxController.php */
class __TwigTemplate_1845d2bc6c2f03cc6aac2ee2f9c1d962 extends Template
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

namespace Mautic\\WebhookBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\WebhookBundle\\Http\\Client;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    public function sendHookTestAction(Request \$request, Client \$client): \\Symfony\\Component\\HttpFoundation\\JsonResponse
    {
        \$url = InputHelper::url(\$request->request->get('url'));

        // validate the URL
        if ('' == \$url || !\$url) {
            // default to an error message
            \$dataArray = [
                'success' => 1,
                'html'    => '<div class=\"has-error\"><span class=\"help-block\">'
                    .\$this->translator->trans('mautic.webhook.label.no.url')
                    .'</span></div>',
            ];

            return \$this->sendJsonResponse(\$dataArray);
        }

        // get the selected types
        \$selectedTypes = InputHelper::cleanArray(\$request->request->get('types'));
        \$payloadPaths  = \$this->getPayloadPaths(\$selectedTypes);
        \$payloads      = \$this->loadPayloads(\$payloadPaths);
        \$now           = new \\DateTime();

        \$payloads['timestamp'] = \$now->format('c');

        // set the response
        /** @var Psr\\Http\\Message\\ResponseInterface \$response */
        \$response = \$client->post(\$url, \$payloads, InputHelper::string(\$request->request->get('secret')));

        // default to an error message
        \$dataArray = [
            'success' => 1,
            'html'    => '<div class=\"has-error\"><span class=\"help-block\">'
                .\$this->translator->trans('mautic.webhook.label.warning')
                .'</span></div>',
        ];

        // if we get a 2xx response convert to success message
        if (2 == substr(\$response->getStatusCode(), 0, 1)) {
            \$dataArray['html'] =
                '<div class=\"has-success\"><span class=\"help-block\">'
                .\$this->translator->trans('mautic.webhook.label.success')
                .'</span></div>';
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    /*
     * Get an array of all the payload paths we need to load
     *
     * @param \$types array
     * @return array
     */
    /**
     * @return non-falsy-string[]
     */
    public function getPayloadPaths(\$types): array
    {
        \$payloadPaths = [];

        foreach (\$types as \$type) {
            // takes an input like mautic.lead_on_something
            // converts to array pieces using _
            \$typePath = explode('_', \$type);

            // pull the prefix into its own variable
            \$prefix = \$typePath[0];

            // now that we have the remove it from the array
            unset(\$typePath[0]);

            // build the event name by putting the pieces back together
            \$eventName = implode('_', \$typePath);

            // default the path to core
            \$payloadPath = \$this->factory->getSystemPath('bundles', true);

            // if plugin is in first part of the string this is an addon
            // input is plugin.bundlename or mautic.bundlename
            if (strpos('plugin.', \$prefix)) {
                \$payloadPath = \$this->factory->getSystemPath('plugins', true);
            }

            \$prefixParts = explode('.', \$prefix);

            \$bundleName = array_pop(\$prefixParts);

            \$payloadPath .= '/'.ucfirst(\$bundleName).'Bundle/Assets/WebhookPayload/'.\$bundleName.'_'.\$eventName.'.json';

            \$payloadPaths[\$type] = \$payloadPath;
        }

        return \$payloadPaths;
    }

    /*
     * Iterate through the paths and get the json payloads
     *
     * @param  \$paths array
     * @return \$payload array
     */
    /**
     * @return mixed[]
     */
    public function loadPayloads(\$paths): array
    {
        \$payloads = [];

        foreach (\$paths as \$key => \$path) {
            if (file_exists(\$path)) {
                \$payloads[\$key] = json_decode(file_get_contents(\$path), true);
            }
        }

        return \$payloads;
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
        return "@bundles/WebhookBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/WebhookBundle/Controller/AjaxController.php", "/app/docroot/app/bundles/WebhookBundle/Controller/AjaxController.php");
    }
}
