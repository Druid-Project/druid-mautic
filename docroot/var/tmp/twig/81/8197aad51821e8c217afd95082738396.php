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

/* @bundles/SmsBundle/Integration/Twilio/Configuration.php */
class __TwigTemplate_c69db2ad8c858d3ab0ddd439d802301d extends Template
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

namespace Mautic\\SmsBundle\\Integration\\Twilio;

use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Twilio\\Exceptions\\ConfigurationException;

class Configuration
{
    /**
     * @var string
     */
    private \$messagingServiceSid;

    /**
     * @var string
     */
    private \$accountSid;

    /**
     * @var string
     */
    private \$authToken;

    public function __construct(
        private IntegrationHelper \$integrationHelper
    ) {
    }

    /**
     * @return string
     *
     * @throws ConfigurationException
     */
    public function getMessagingServiceSid()
    {
        \$this->setConfiguration();

        return \$this->messagingServiceSid;
    }

    /**
     * @return string
     *
     * @throws ConfigurationException
     */
    public function getAccountSid()
    {
        \$this->setConfiguration();

        return \$this->accountSid;
    }

    /**
     * @return string
     *
     * @throws ConfigurationException
     */
    public function getAuthToken()
    {
        \$this->setConfiguration();

        return \$this->authToken;
    }

    /**
     * @throws ConfigurationException
     */
    private function setConfiguration(): void
    {
        if (\$this->accountSid) {
            return;
        }

        \$integration = \$this->integrationHelper->getIntegrationObject('Twilio');

        if (!\$integration || !\$integration->getIntegrationSettings()->getIsPublished()) {
            throw new ConfigurationException();
        }

        \$this->messagingServiceSid = \$integration->getIntegrationSettings()->getFeatureSettings()['messaging_service_sid'];
        if (empty(\$this->messagingServiceSid)) {
            throw new ConfigurationException();
        }

        \$keys = \$integration->getDecryptedApiKeys();
        if (empty(\$keys['username']) || empty(\$keys['password'])) {
            throw new ConfigurationException();
        }

        \$this->accountSid = \$keys['username'];
        \$this->authToken  = \$keys['password'];
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
        return "@bundles/SmsBundle/Integration/Twilio/Configuration.php";
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
        return new Source("", "@bundles/SmsBundle/Integration/Twilio/Configuration.php", "/app/docroot/app/bundles/SmsBundle/Integration/Twilio/Configuration.php");
    }
}
