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

/* @bundles/LeadBundle/Tests/Entity/LeadCategoryRepositoryFunctionalTest.php */
class __TwigTemplate_48b4fc88cbc6412e684969eb871144cb extends Template
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
use Mautic\\CoreBundle\\Tests\\Functional\\CreateTestEntitiesTrait;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @runTestsInSeparateProcesses
 *
 * @preserveGlobalState disabled
 */
class LeadCategoryRepositoryFunctionalTest extends MauticMysqlTestCase
{
    use CreateTestEntitiesTrait;

    /**
     * @var array<string, bool>
     */
    private \$categoryFlags = [
        'one'   => true,
        'two'   => false,
        'three' => true,
    ];

    public function testCategoriesOnContactPreferences(): void
    {
        \$lead       = \$this->createLead('John', 'Doe', 'john@doe.com');
        \$categories = \$this->createCategories();
        \$this->setLeadCategories(\$lead, \$categories);

        \$crawler    = \$this->client->request(Request::METHOD_GET, '/s/contacts/contactFrequency/'.\$lead->getId());
        \$response   = \$this->client->getResponse();

        \$this->assertTrue(\$response->isOk());

        \$subscribedCats = \$crawler->filter('select[id=\"lead_contact_frequency_rules_global_categories\"]')->filter('option[selected=\"selected\"]');

        \$this->assertCount(2, \$subscribedCats, \$crawler->html());
    }

    /**
     * @return mixed[]
     */
    private function createCategories(): array
    {
        \$categories = [];
        foreach (\$this->categoryFlags as \$suffix => \$name) {
            \$categories[\$suffix] = \$this->createCategory('Category '.\$suffix, 'category '.\$suffix);
        }

        \$this->em->flush();

        return \$categories;
    }

    /**
     * @param mixed[] \$categories
     */
    private function setLeadCategories(Lead \$lead, array \$categories): void
    {
        foreach (\$this->categoryFlags as \$key => \$flag) {
            \$this->createLeadCategory(\$lead, \$categories[\$key], \$flag);
        }

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
        return "@bundles/LeadBundle/Tests/Entity/LeadCategoryRepositoryFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/LeadCategoryRepositoryFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/LeadCategoryRepositoryFunctionalTest.php");
    }
}
