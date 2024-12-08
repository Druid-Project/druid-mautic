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

/* @bundles/SmsBundle/Tests/SmsTestHelperTrait.php */
class __TwigTemplate_7367bd3f8f1c80d81a4cd3dce6624f2e extends Template
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

namespace Mautic\\SmsBundle\\Tests;

use Mautic\\SmsBundle\\Integration\\TwilioIntegration;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

trait SmsTestHelperTrait
{
    private function configureTwilioWithArrayTransport(): ArrayTransport
    {
        \$this->testSymfonyCommand('mautic:plugins:install');
        \$messagingServiceSid = 'messaging_sid';

        \$integration = \$this->getContainer()->get('mautic.integration.twilio');
        \\assert(\$integration instanceof TwilioIntegration);

        \$crawler  = \$this->client->request(Request::METHOD_GET, 's/plugins/config/'.\$integration->getName());
        \$response = \$this->client->getResponse();

        Assert::assertSame(Response::HTTP_OK, \$response->getStatusCode(), \$response->getContent());

        \$saveButton = \$crawler->selectButton('integration_details[buttons][save]');
        \$form       = \$saveButton->form();

        \$form['integration_details[apiKeys][username]']->setValue('test_username');
        \$form['integration_details[apiKeys][password]']->setValue('test_password');
        \$form['integration_details[isPublished]']->setValue('1');
        \$form['integration_details[featureSettings][messaging_service_sid]']->setValue(\$messagingServiceSid);

        \$this->client->submit(\$form);

        \$response = \$this->client->getResponse();
        Assert::assertSame(Response::HTTP_OK, \$response->getStatusCode(), \$response->getContent());

        \$transportChain = \$this->getContainer()->get('mautic.sms.transport_chain');
        \\assert(\$transportChain instanceof TransportChain);

        // Replaces Twilio transport with ArrayTransport
        \$transport = new ArrayTransport();
        \$transportChain->addTransport('mautic.sms.twilio.transport', \$transport, 'Array SMS Transport', 'Twilio');

        return \$transport;
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
        return "@bundles/SmsBundle/Tests/SmsTestHelperTrait.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/SmsTestHelperTrait.php", "/app/docroot/app/bundles/SmsBundle/Tests/SmsTestHelperTrait.php");
    }
}
