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

/* @bundles/PointBundle/Tests/Functional/EmailTriggerTest.php */
class __TwigTemplate_2a6da69ab97382e15e249accd664280f extends Template
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

namespace Mautic\\PointBundle\\Tests\\Functional;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\PointBundle\\Entity\\Trigger;
use Mautic\\PointBundle\\Entity\\TriggerEvent;
use Symfony\\Component\\DomCrawler\\Crawler;
use Symfony\\Component\\DomCrawler\\Form;
use Symfony\\Component\\HttpFoundation\\Request;

class EmailTriggerTest extends MauticMysqlTestCase
{
    /**
     * @runInSeparateProcess
     *
     * @preserveGlobalState disabled
     */
    public function testButtonsAreEnabledOnEditSendEmailToUserWhenEmailIsSelected(): void
    {
        \$email = new Email();
        \$email->setName('Some name');
        \$email->setSubject('Some subject');
        \$email->setTemplate('Blank');
        \$email->setCustomHtml('Some html');
        \$this->em->persist(\$email);
        \$this->em->flush();

        \$trigger      = \$this->createTrigger();
        \$triggerEvent = \$this->createTriggerEvent(\$trigger);
        \$triggerEvent->setProperties(['useremail' => ['email' => \$email->getId()]]);

        \$this->em->flush();
        \$this->em->detach(\$trigger);
        \$this->em->detach(\$triggerEvent);

        [\$crawler, \$form] = \$this->fetchForm(\$trigger, \$triggerEvent);

        self::assertEquals(\$email->getId(), \$form->get('pointtriggerevent[properties][useremail][email]')->getValue(), 'Current email should be selected.');
        self::assertNull(\$crawler->selectButton('Preview')->attr('disabled'), 'Preview button should not be disabled.');
        self::assertNull(\$crawler->selectButton('Edit Email')->attr('disabled'), 'Edit Email button should not be disabled.');
        self::assertStringContainsString('\"origin\":\"#pointtriggerevent_properties_useremail_email\"', \$crawler->selectButton('Preview')->attr('onclick'), 'The origin value should be correct.');
    }

    /**
     * @runInSeparateProcess
     *
     * @preserveGlobalState disabled
     */
    public function testButtonsAreDisabledWhenEmailIsNotSelected(): void
    {
        \$trigger      = \$this->createTrigger();
        \$triggerEvent = \$this->createTriggerEvent(\$trigger);

        \$this->em->flush();
        \$this->em->detach(\$trigger);
        \$this->em->detach(\$triggerEvent);

        [\$crawler, \$form] = \$this->fetchForm(\$trigger, \$triggerEvent);

        self::assertEmpty(\$form->get('pointtriggerevent[properties][useremail][email]')->getValue(), 'No email should be selected.');
        self::assertNotNull(\$crawler->selectButton('Preview')->attr('disabled'), 'Preview button should be disabled.');
        self::assertNotNull(\$crawler->selectButton('Edit Email')->attr('disabled'), 'Edit Email button should be disabled.');
    }

    /**
     * @return array{Crawler,Form}
     */
    private function fetchForm(Trigger \$trigger, TriggerEvent \$triggerEvent): array
    {
        \$this->client->request(Request::METHOD_GET, '/s/points/triggers/edit/'.\$trigger->getId());
        self::assertTrue(\$this->client->getResponse()->isSuccessful());

        \$uri = sprintf('/s/points/triggers/events/edit/%s?triggerId=%s', \$triggerEvent->getId(), \$trigger->getId());
        \$this->client->request(Request::METHOD_GET, \$uri, [], [], \$this->createAjaxHeaders());
        self::assertTrue(\$this->client->getResponse()->isSuccessful());

        \$responseData = json_decode(\$this->client->getResponse()->getContent(), true);
        \$crawler      = new Crawler(\$responseData['newContent'], \$this->client->getInternalRequest()->getUri());

        \$form = \$crawler->filterXPath('//form[@name=\"pointtriggerevent\"]')->form();

        return [\$crawler, \$form];
    }

    private function createTrigger(): Trigger
    {
        \$trigger = new Trigger();
        \$trigger->setName('Email Trigger');
        \$this->em->persist(\$trigger);

        return \$trigger;
    }

    private function createTriggerEvent(Trigger \$trigger): TriggerEvent
    {
        \$triggerEvent = new TriggerEvent();
        \$triggerEvent->setTrigger(\$trigger);
        \$triggerEvent->setName('Send email to user');
        \$triggerEvent->setType('email.send_to_user');
        \$triggerEvent->setProperties([]);
        \$this->em->persist(\$triggerEvent);

        return \$triggerEvent;
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
        return "@bundles/PointBundle/Tests/Functional/EmailTriggerTest.php";
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
        return new Source("", "@bundles/PointBundle/Tests/Functional/EmailTriggerTest.php", "/app/docroot/app/bundles/PointBundle/Tests/Functional/EmailTriggerTest.php");
    }
}
