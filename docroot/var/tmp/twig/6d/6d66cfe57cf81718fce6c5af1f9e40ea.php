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

/* @bundles/LeadBundle/Tests/Controller/ImportControllerTest.php */
class __TwigTemplate_bb49bad8d6051cce2c3a2625cdef9be5 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Command\\ImportCommand;
use Mautic\\LeadBundle\\Entity\\Import;
use Mautic\\LeadBundle\\Entity\\ImportRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\Request;

final class ImportControllerTest extends MauticMysqlTestCase
{
    public function testImportWithoutFile(): void
    {
        \$crawler = \$this->client->request(Request::METHOD_GET, '/s/contacts/import/new');
        \$form    = \$crawler->selectButton('Upload')->form();
        \$crawler = \$this->client->submit(\$form);

        Assert::assertStringContainsString('Please select a CSV file to upload', \$crawler->html(), \$crawler->html());
    }

    /**
     * Setting the phone field as required to test the validation.
     * Phone is not part of the csv fixture so it won't be auto-mapped.
     */
    public function testImportMappingRequiredFieldValidation(): void
    {
        \$this->setPhoneFieldIsRequired(true);

        \$crawler    = \$this->client->request(Request::METHOD_GET, '/s/contacts/import/new');
        \$uploadForm = \$crawler->selectButton('Upload')->form();
        \$file       = new UploadedFile(__DIR__.'/../Fixtures/contacts.csv', 'contacs.csv', 'itext/csv');

        \$uploadForm['lead_import[file]']->setValue((string) \$file);

        \$crawler     = \$this->client->submit(\$uploadForm);
        \$mappingForm = \$crawler->selectButton('Import')->form();
        \$crawler     = \$this->client->submit(\$mappingForm);

        Assert::assertStringContainsString('Some required fields are missing. You must map the field \"Phone.\"', \$crawler->html());
    }

    /**
     *  @dataProvider validateDataProvider
     */
    public function testImportMappingAndImport(string \$skipIfExist, string \$expectedName): void
    {
        \$this->createLead('john@doe.email', 'Johny');
        \$crawler    = \$this->client->request(Request::METHOD_GET, '/s/contacts/import/new');
        \$uploadForm = \$crawler->selectButton('Upload')->form();
        \$file       = new UploadedFile(__DIR__.'/../Fixtures/contacts.csv', 'contacs.csv', 'itext/csv');

        \$uploadForm['lead_import[file]']->setValue((string) \$file);

        \$crawler     = \$this->client->submit(\$uploadForm);
        \$mappingForm = \$crawler->selectButton('Import')->form();
        \$mappingForm['lead_field_import[skip_if_exists]']->setValue(\$skipIfExist);
        \$crawler     = \$this->client->submit(\$mappingForm);

        Assert::assertStringContainsString('Import process was successfully created. You will be notified when finished.', \$crawler->html());

        /** @var ImportRepository \$importRepository */
        \$importRepository = \$this->em->getRepository(Import::class);

        /** @var Import \$importEntity */
        \$importEntity = \$importRepository->findOneBy(['originalFile' => 'contacts.csv']);

        \$fields = ['email' => 'email', 'firstname' => 'firstname', 'lastname' => 'lastname'];

        Assert::assertNotNull(\$importEntity);
        Assert::assertSame(2, \$importEntity->getLineCount());
        Assert::assertSame(Import::QUEUED, \$importEntity->getStatus());
        Assert::assertSame('lead', \$importEntity->getObject());
        Assert::assertSame(\$fields, \$importEntity->getProperties()['fields']);
        Assert::assertSame(array_values(\$fields), \$importEntity->getProperties()['headers']);

        \$this->testSymfonyCommand(ImportCommand::COMMAND_NAME);

        \$this->em->clear();

        /** @var Import \$importEntity */
        \$importEntity = \$importRepository->findOneBy(['originalFile' => 'contacts.csv']);

        Assert::assertNotNull(\$importEntity);
        Assert::assertSame(2, \$importEntity->getLineCount());
        Assert::assertSame(1, \$importEntity->getInsertedCount());
        Assert::assertSame(1, \$importEntity->getUpdatedCount());
        Assert::assertSame(Import::IMPORTED, \$importEntity->getStatus());

        /** @var LeadRepository \$importRepository */
        \$leadRepository = \$this->em->getRepository(Lead::class);

        /** @var Lead[] \$contacts */
        \$contacts = \$leadRepository->findBy(['email' => ['john@doe.email', 'ferda@mravenec.email']], ['email' => 'desc']);
        Assert::assertSame(\$expectedName, \$contacts[0]->getFirstname());
        Assert::assertCount(2, \$contacts);

        \$crawler    = \$this->client->request(Request::METHOD_GET, '/s/contacts/import/view/'.\$importEntity->getId());
        Assert::assertStringContainsString('No failed rows found', \$crawler->html(), 'No failed rows exist.');
    }

    private function setPhoneFieldIsRequired(bool \$required): void
    {
        /** @var LeadFieldRepository \$fieldRepository */
        \$fieldRepository = \$this->em->getRepository(LeadField::class);

        /** @var LeadField \$phoneField */
        \$phoneField = \$fieldRepository->findOneBy(['alias' => 'phone']);

        \$phoneField->setIsRequired(\$required);
        \$fieldRepository->saveEntity(\$phoneField);
    }

    private function createLead(string \$email = null, string \$firstName = ''): Lead
    {
        \$lead = new Lead();
        if (!empty(\$email)) {
            \$lead->setEmail(\$email);
        }
        \$lead->setFirstname(\$firstName);
        \$this->em->persist(\$lead);

        return \$lead;
    }

    /**
     * @return mixed[]
     */
    public function validateDataProvider(): iterable
    {
        yield ['0', 'John'];
        yield ['1', 'Johny'];
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
        return "@bundles/LeadBundle/Tests/Controller/ImportControllerTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/ImportControllerTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Controller/ImportControllerTest.php");
    }
}
