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

/* @bundles/SmsBundle/Tests/Integration/Twilio/TwilioConfigurationFunctionalTest.php */
class __TwigTemplate_8f0df0da68d1588c53791c2005556b76 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\Integration\\Twilio;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\SmsBundle\\Integration\\TwilioIntegration;
use Mautic\\SmsBundle\\Tests\\SmsTestHelperTrait;
use PHPUnit\\Framework\\Assert;

final class TwilioConfigurationFunctionalTest extends MauticMysqlTestCase
{
    use SmsTestHelperTrait;

    public function testSaveTwilioConfig(): void
    {
        \$this->configureTwilioWithArrayTransport();

        \$integration = \$this->getContainer()->get('mautic.integration.twilio');
        \\assert(\$integration instanceof TwilioIntegration);

        \$integrationRepository = \$this->em->getRepository(Integration::class);

        \$integrationConfig = \$integrationRepository->findOneBy(['name' => \$integration->getName()]);
        \\assert(\$integrationConfig instanceof Integration);
        Assert::assertSame('messaging_sid', \$integrationConfig->getFeatureSettings()['messaging_service_sid']);
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
        return "@bundles/SmsBundle/Tests/Integration/Twilio/TwilioConfigurationFunctionalTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/Integration/Twilio/TwilioConfigurationFunctionalTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/Integration/Twilio/TwilioConfigurationFunctionalTest.php");
    }
}
