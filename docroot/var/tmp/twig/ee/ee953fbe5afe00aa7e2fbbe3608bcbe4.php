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

/* @bundles/NotificationBundle/Api/AbstractNotificationApi.php */
class __TwigTemplate_20c0c42d53ae437dd64b9bd4c78efcfe extends Template
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

namespace Mautic\\NotificationBundle\\Api;

use GuzzleHttp\\Client;
use Mautic\\NotificationBundle\\Entity\\Notification;
use Mautic\\PageBundle\\Model\\TrackableModel;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Psr\\Http\\Message\\ResponseInterface;

abstract class AbstractNotificationApi
{
    public function __construct(
        protected Client \$http,
        protected TrackableModel \$trackableModel,
        protected IntegrationHelper \$integrationHelper
    ) {
    }

    /**
     * @param string \$endpoint One of \"apps\", \"players\", or \"notifications\"
     * @param array  \$data     Array of data to send
     */
    abstract public function send(string \$endpoint, array \$data): ResponseInterface;

    /**
     * @return ResponseInterface
     */
    abstract public function sendNotification(\$id, Notification \$notification);

    /**
     * Convert a non-tracked url to a tracked url.
     *
     * @param string \$url
     *
     * @return string
     */
    public function convertToTrackedUrl(\$url, array \$clickthrough, Notification \$notification)
    {
        /* @var \\Mautic\\PageBundle\\Entity\\Redirect \$redirect */
        \$trackable = \$this->trackableModel->getTrackableByUrl(\$url, 'notification', \$clickthrough['notification']);

        return \$this->trackableModel->generateTrackableUrl(\$trackable, \$clickthrough, [], \$notification->getUtmTags());
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
        return "@bundles/NotificationBundle/Api/AbstractNotificationApi.php";
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
        return new Source("", "@bundles/NotificationBundle/Api/AbstractNotificationApi.php", "/app/docroot/app/bundles/NotificationBundle/Api/AbstractNotificationApi.php");
    }
}
