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

/* @bundles/LeadBundle/Tests/Functional/Entity/CompanyRepositoryTest.php */
class __TwigTemplate_290555b6d2c952734726aa7ace012269 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Functional\\Entity;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Helper\\MailHelper;
use Mautic\\EmailBundle\\Tests\\Helper\\Transport\\SmtpTransport;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Entity\\ListLead;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Mailer\\Mailer;

final class CompanyRepositoryTest extends MauticMysqlTestCase
{
    private SmtpTransport \$transport;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->setUpMailer();
    }

    protected function beforeTearDown(): void
    {
        // Clear owners cache (to leave a clean environment for future tests):
        \$mailHelper = static::getContainer()->get('mautic.helper.mailer');
        \$this->setPrivateProperty(\$mailHelper, 'leadOwners', []);
    }

    public function testEmailSendWithCompanyTokens(): void
    {
        \$suffix   = random_int(10, 100);
        \$companyA = \$this->createCompany('ABC Co.'.\$suffix, 'First Street'.\$suffix);
        \$contactA = \$this->createContact('John'.\$suffix, 'JohnDoe'.\$suffix.'@email.com', \$companyA);
        \$companyB = \$this->createCompany('XYZ Co.'.\$suffix, 'Second Street'.\$suffix);
        \$this->editContact(\$contactA, \$companyB, \$companyA);
        \$segment = \$this->createSegment('Segment A'.\$suffix, 'segment-a-'.\$suffix);
        \$this->addContactsToSegment([\$contactA], \$segment);
        \$emailId = \$this->createEmail('EmailName'.\$suffix, 'Subject'.\$suffix, 'list', \$segment->getId());
        \$this->sendEmailViaApi(\$emailId);
        \$testEmail = function () use (\$suffix): void {
            \$message = \$this->transport->sentMessage;
            Assert::assertSame(\$message->getSubject(), 'Subject'.\$suffix);
            Assert::assertSame(\$message->getTo()[0]->getAddress(), 'JohnDoe'.\$suffix.'@email.com');
            Assert::assertSame(\$message->getTo()[0]->getName(), 'John'.\$suffix);
            \$messageBody = \$message->getBody()->toString();
            Assert::assertStringContainsString('JohnDoe'.\$suffix.'@email.com', \$messageBody);
            Assert::assertStringContainsString('XYZ Co.'.\$suffix, \$messageBody);
            Assert::assertStringContainsString('Second Street'.\$suffix, \$messageBody);
        };
        \$testEmail();
    }

    private function createCompany(string \$name, string \$address1 = ''): Company
    {
        /** @var CompanyModel \$model */
        \$model   = static::getContainer()->get('mautic.lead.model.company');
        \$company = new Company();
        \$company->setIsPublished(true)->setName(\$name)->setAddress1(\$address1);
        \$model->saveEntity(\$company);

        return \$company;
    }

    private function createContact(string \$firstName, string \$email, Company \$company): Lead
    {
        \$crawler     = \$this->client->request(Request::METHOD_GET, '/s/contacts/new');
        \$formCrawler = \$crawler->filter('form[name=lead]');
        \$this->assertSame(1, \$formCrawler->count());

        \$form = \$formCrawler->form();
        \$form->setValues(
            [
                'lead[firstname]' => \$firstName,
                'lead[email]'     => \$email,
                'lead[companies]' => [\$company->getId()],
            ]
        );
        \$this->client->submit(\$form);

        return \$this->em->getRepository(Lead::class)->findOneBy(
            [
                'firstname' => \$firstName,
                'email'     => \$email,
            ]
        );
    }

    private function editContact(Lead \$contact, Company \$primaryCompany, Company \$secondaryCompany): void
    {
        \$crawler     = \$this->client->request(Request::METHOD_GET, '/s/contacts/edit/'.\$contact->getId());
        \$formCrawler = \$crawler->filter('form[name=lead]');
        \$this->assertSame(1, \$formCrawler->count());

        \$form = \$formCrawler->form();
        \$form->setValues(
            [
                'lead[companies]' => [\$primaryCompany->getId(), \$secondaryCompany->getId()],
            ]
        );
        \$this->client->submit(\$form);
    }

    private function createSegment(string \$name, string \$alias): LeadList
    {
        \$segment = new LeadList();
        \$segment->setName(\$name);
        \$segment->setPublicName(\$name);
        \$segment->setAlias(\$alias);
        \$this->em->persist(\$segment);
        \$this->em->flush();

        return \$segment;
    }

    /**
     * @param array<Lead> \$contacts
     */
    private function addContactsToSegment(array \$contacts, LeadList \$segment): void
    {
        foreach (\$contacts as \$contact) {
            \$reference = new ListLead();
            \$reference->setLead(\$contact);
            \$reference->setList(\$segment);
            \$reference->setDateAdded(new \\DateTime());
            \$this->em->persist(\$reference);
        }

        \$this->em->flush();
    }

    private function createEmail(string \$name, string \$subject, string \$emailType, int \$segmentId = null): int
    {
        \$payload = [
            'name'       => \$name,
            'subject'    => \$subject,
            'emailType'  => \$emailType,
            'customHtml' => '{contactfield=email} {contactfield=companyname} {contactfield=companyaddress1}',
        ];

        if ('list' === \$emailType) {
            \$payload['lists'] = [\$segmentId];
        }

        \$this->client->request('POST', '/api/emails/new', \$payload);
        \$clientResponse = \$this->client->getResponse();
        \$response       = json_decode(\$clientResponse->getContent(), true);

        return \$response['email']['id'];
    }

    private function setUpMailer(): void
    {
        \$mailHelper = static::getContainer()->get('mautic.helper.mailer');
        \$transport  = new SmtpTransport();
        \$mailer     = new Mailer(\$transport);
        \$this->setPrivateProperty(\$mailHelper, 'mailer', \$mailer);
        \$this->setPrivateProperty(\$mailHelper, 'transport', \$transport);
        \$this->transport = \$transport;
    }

    /**
     * @param mixed \$value
     */
    private function setPrivateProperty(MailHelper \$object, string \$property, \$value): void
    {
        \$reflector = new \\ReflectionProperty(\$object::class, \$property);
        \$reflector->setAccessible(true);
        \$reflector->setValue(\$object, \$value);
    }

    private function sendEmailViaApi(int \$emailId): void
    {
        \$this->client->request('POST', \"/api/emails/{\$emailId}/send\");
        \$clientResponse = \$this->client->getResponse();
        Assert::assertSame(200, \$clientResponse->getStatusCode(), \$clientResponse->getContent());
        Assert::assertSame(
            json_decode(\$clientResponse->getContent(), true, 512, JSON_THROW_ON_ERROR),
            [
                'success'          => 1,
                'sentCount'        => 1,
                'failedRecipients' => 0,
            ],
            \$clientResponse->getContent()
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
        return "@bundles/LeadBundle/Tests/Functional/Entity/CompanyRepositoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Functional/Entity/CompanyRepositoryTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Functional/Entity/CompanyRepositoryTest.php");
    }
}
