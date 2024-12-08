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

/* @bundles/LeadBundle/Tests/Entity/DoNotContactRepositoryFunctionalTest.php */
class __TwigTemplate_7f7cce93dd411a34edf47a0384d3416b extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\DoNotContactRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;

final class DoNotContactRepositoryFunctionalTest extends MauticMysqlTestCase
{
    public function testGetChannelList(): void
    {
        \$john = \$this->createContact('Company A');
        \$jane = \$this->createContact('Company B');
        \$josh = \$this->createContact('Company B');

        \$this->createDnc('email', \$josh, DoNotContact::IS_CONTACTABLE);
        \$this->createDnc('email', \$john, DoNotContact::UNSUBSCRIBED);
        \$this->createDnc('sms', \$john, DoNotContact::BOUNCED);
        \$this->createDnc('sms', \$jane, DoNotContact::MANUAL);

        \$this->em->flush();

        \$repository = \$this->em->getRepository(DoNotContact::class);
        \\assert(\$repository instanceof DoNotContactRepository);

        \$allDncRecords = \$repository->getChannelList(null);
        \$allSmsRecords = \$repository->getChannelList('sms');

        Assert::assertCount(3, \$allDncRecords, 'Get all records for all channels (dangerous, do not use, there is no limit. One would expect this to return all 4 records, but they are grouped by contact ID.');
        Assert::assertCount(2, \$allSmsRecords, 'Get all records for sms channel (dangerous, do not use, there is no limit.');
        Assert::assertCount(0, \$repository->getChannelList('sms', []), 'Get all records for sms channel where the user filtered for a contact that do not exist. It must return an empty array. Not all DNC records.');
        Assert::assertCount(1, \$repository->getChannelList('sms', [\$john->getId()]));
        Assert::assertCount(2, \$repository->getChannelList('sms', [\$john->getId(), \$jane->getId(), \$josh->getId()]));
        Assert::assertSame(['email' => (string) DoNotContact::IS_CONTACTABLE], \$allDncRecords[\$josh->getId()]);
        Assert::assertSame(['email' => (string) DoNotContact::UNSUBSCRIBED, 'sms' => (string) DoNotContact::BOUNCED], \$allDncRecords[\$john->getId()]);
        Assert::assertSame(['sms' => (string) DoNotContact::MANUAL], \$allDncRecords[\$jane->getId()]);
        Assert::assertSame((string) DoNotContact::BOUNCED, \$allSmsRecords[\$john->getId()]);
        Assert::assertSame((string) DoNotContact::MANUAL, \$allSmsRecords[\$jane->getId()]);
    }

    public function createDnc(string \$channel, Lead \$contact, int \$reason): DoNotContact
    {
        \$dnc = new DoNotContact();
        \$dnc->setChannel(\$channel);
        \$dnc->setLead(\$contact);
        \$dnc->setReason(\$reason);
        \$dnc->setDateAdded(new \\DateTime());
        \$this->em->persist(\$dnc);

        return \$dnc;
    }

    private function createContact(string \$firstName): Lead
    {
        \$lead = new Lead();
        \$lead->setFirstname(\$firstName);
        \$this->em->persist(\$lead);

        return \$lead;
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
        return "@bundles/LeadBundle/Tests/Entity/DoNotContactRepositoryFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/DoNotContactRepositoryFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/DoNotContactRepositoryFunctionalTest.php");
    }
}
