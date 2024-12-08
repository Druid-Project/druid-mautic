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

/* @bundles/SmsBundle/Tests/EventListener/SmsSubscriberTokenTest.php */
class __TwigTemplate_2fb5b5a39b2212b2154d3da840713001 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\EventListener;

use Mautic\\AssetBundle\\Entity\\Asset;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\PageBundle\\Entity\\Page;
use Mautic\\SmsBundle\\Entity\\Sms;
use Mautic\\SmsBundle\\Model\\SmsModel;
use Mautic\\SmsBundle\\Tests\\SmsTestHelperTrait;
use PHPUnit\\Framework\\Assert;

final class SmsSubscriberTokenTest extends MauticMysqlTestCase
{
    use SmsTestHelperTrait;

    public function testSmsTokenReplacement(): void
    {
        \$transport = \$this->configureTwilioWithArrayTransport();
        \$smsModel  = \$this->getContainer()->get('mautic.sms.model.sms');
        \\assert(\$smsModel instanceof SmsModel);

        \$contactModel = \$this->getContainer()->get('mautic.lead.model.lead');
        \\assert(\$contactModel instanceof LeadModel);

        \$page = new Page();
        \$page->setTitle('Test Page');
        \$page->setAlias('test-page');

        \$this->em->persist(\$page);

        \$asset = new Asset();
        \$asset->setPath('test.jpg');
        \$asset->setTitle('test');
        \$asset->setAlias('test');

        \$this->em->persist(\$asset);

        \$contact = new Lead();
        \$contact->setFirstname('John');
        \$contact->setPhone('1234567890');

        \$this->em->persist(\$contact);
        \$this->em->flush();

        \$sms = new Sms();
        \$sms->setName('Test SMS');
        \$sms->setMessage(\"Hello {contactfield=firstname}, download {assetlink={\$asset->getId()}} or visit {pagelink={\$page->getId()}} or https://mautic.org\");

        \$smsModel->saveEntity(\$sms);
        \$smsModel->sendSms(\$sms, \$contactModel->getEntity(\$contact->getId()));

        Assert::assertCount(1, \$transport->smses);

        \$ctRegex        = 'ct=([a-zA-Z0-9%]+)';
        \$domainRegex    = 'https?:\\/\\/([a-zA-Z0-9.-]+)';
        \$assetLinkRegex = \$domainRegex.'\\/asset\\/'.\$asset->getId().':test\\?'.\$ctRegex;
        \$pageLinkregex  = \$domainRegex.'\\/test-page\\?'.\$ctRegex;
        \$trackingRegex  = \$domainRegex.'\\/r\\/([a-zA-Z0-9]+)\\?'.\$ctRegex;

        Assert::assertMatchesRegularExpression(
            \"/Hello John, download {\$assetLinkRegex} or visit {\$pageLinkregex} or {\$trackingRegex}/\",
            \$transport->smses[0]['content']
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
        return "@bundles/SmsBundle/Tests/EventListener/SmsSubscriberTokenTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/EventListener/SmsSubscriberTokenTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/EventListener/SmsSubscriberTokenTest.php");
    }
}
