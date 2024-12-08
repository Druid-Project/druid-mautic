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

/* @bundles/LeadBundle/Tests/Controller/LeadControllerListingPageTest.php */
class __TwigTemplate_f8d31be9d807be2f459e514adc06e104 extends Template
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

use Doctrine\\ORM\\Exception\\ORMException;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;

final class LeadControllerListingPageTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['contact_columns'] = ['name', 'location', 'email'];

        parent::setUp();
    }

    /**
     * @param string[] \$location
     *
     * @dataProvider dataForContactListing
     *
     * @throws ORMException
     */
    public function testContactListingForLocation(array \$location, string \$expected): void
    {
        \$this->createContact(\$location);

        \$crawler    = \$this->client->request('GET', 's/contacts');
        \$rowContent = \$crawler->filterXPath(\"//table[@id='leadTable']//tbody//tr\");

        Assert::assertStringEndsWith(\$expected, \$rowContent->text());
    }

    /**
     * @return iterable<string, array<int, string|string[]>>
     */
    public function dataForContactListing(): iterable
    {
        yield 'With no location' => [
            // Location Details
            [
                'setCity'    => '',
                'setState'   => '',
                'setCountry' => '',
            ],
            // Expected suffice
            'John Doe john@doe.example.com',
        ];

        yield 'With whole location details' => [
            // Location Details
            [
                'setCity'    => 'Pune',
                'setState'   => 'MH',
                'setCountry' => 'India',
            ],
            // Expected suffice
            'John Doe Pune, MH john@doe.example.com',
        ];

        yield 'With only City for location' => [
            // Location Details
            [
                'setCity'    => 'Pune',
                'setState'   => '',
                'setCountry' => '',
            ],
            // Expected suffice
            'John Doe Pune john@doe.example.com',
        ];
    }

    /**
     * @param string[] \$location
     *
     * @throws ORMException
     */
    private function createContact(array \$location = []): void
    {
        \$contact = new Lead();
        \$contact->setFirstname('John');
        \$contact->setLastname('Doe');
        \$contact->setEmail('john@doe.example.com');

        foreach (\$location as \$name => \$value) {
            if (empty(\$value)) {
                continue;
            }
            \$contact->\$name(\$value);
        }

        \$this->em->persist(\$contact);
        \$this->em->flush();
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
        return "@bundles/LeadBundle/Tests/Controller/LeadControllerListingPageTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/LeadControllerListingPageTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Controller/LeadControllerListingPageTest.php");
    }
}
