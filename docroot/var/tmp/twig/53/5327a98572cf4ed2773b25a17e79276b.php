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

/* @bundles/SmsBundle/Integration/Twilio/TwilioTransport.php */
class __TwigTemplate_3200fcacdb2b310973a98b6898a37c32 extends Template
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

use libphonenumber\\NumberParseException;
use libphonenumber\\PhoneNumberFormat;
use libphonenumber\\PhoneNumberUtil;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\SmsBundle\\Sms\\TransportInterface;
use Psr\\Log\\LoggerInterface;
use Twilio\\Exceptions\\ConfigurationException;
use Twilio\\Exceptions\\TwilioException;
use Twilio\\Rest\\Client;

class TwilioTransport implements TransportInterface
{
    private ?Client \$client = null;

    public function __construct(
        private Configuration \$configuration,
        private LoggerInterface \$logger
    ) {
    }

    /**
     * @param string \$content
     *
     * @return bool|string
     */
    public function sendSms(Lead \$lead, \$content)
    {
        \$number = \$lead->getLeadPhoneNumber();

        if (null === \$number) {
            return false;
        }

        try {
            \$messagingServiceSid = \$this->configuration->getMessagingServiceSid();
            \$this->configureClient();

            \$this->client->messages->create(
                \$this->sanitizeNumber(\$number),
                \$this->createPayload(\$messagingServiceSid, \$content)
            );

            return true;
        } catch (NumberParseException \$numberParseException) {
            \$this->logger->warning(
                \$numberParseException->getMessage(),
                ['exception' => \$numberParseException]
            );

            return \$numberParseException->getMessage();
        } catch (ConfigurationException \$configurationException) {
            \$message = \$configurationException->getMessage() ?: 'mautic.sms.transport.twilio.not_configured';
            \$this->logger->warning(
                \$message,
                ['exception' => \$configurationException]
            );

            return \$message;
        } catch (TwilioException \$twilioException) {
            \$this->logger->warning(
                \$twilioException->getMessage(),
                ['exception' => \$twilioException]
            );

            return \$twilioException->getMessage();
        }
    }

    /**
     * @param string \$number
     *
     * @return string
     *
     * @throws NumberParseException
     */
    private function sanitizeNumber(\$number)
    {
        \$util   = PhoneNumberUtil::getInstance();
        \$parsed = \$util->parse(\$number, 'US');

        return \$util->format(\$parsed, PhoneNumberFormat::E164);
    }

    /**
     * @return mixed[]
     */
    private function createPayload(string \$messagingServiceSid, string \$content): array
    {
        return [
            'messagingServiceSid' => \$messagingServiceSid,
            'body'                => \$content,
        ];
    }

    /**
     * @throws ConfigurationException
     */
    private function configureClient(): void
    {
        if (\$this->client) {
            // Already configured
            return;
        }

        \$this->client = new Client(
            \$this->configuration->getAccountSid(),
            \$this->configuration->getAuthToken()
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
        return "@bundles/SmsBundle/Integration/Twilio/TwilioTransport.php";
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
        return new Source("", "@bundles/SmsBundle/Integration/Twilio/TwilioTransport.php", "/app/docroot/app/bundles/SmsBundle/Integration/Twilio/TwilioTransport.php");
    }
}
