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

/* @bundles/LeadBundle/DataFixtures/ORM/LoadCategoryData.php */
class __TwigTemplate_dc99ecdb900d905b2504c28a950e8147 extends Template
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

namespace Mautic\\LeadBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CategoryBundle\\Entity\\CategoryRepository;
use Mautic\\CoreBundle\\Helper\\CsvHelper;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager): void
    {
        /** @var CategoryRepository \$categoryRepo */
        \$categoryRepo = \$manager->getRepository(Category::class);
        \$categories   = CsvHelper::csv_to_array(__DIR__.'/fakecategorydata.csv');
        foreach (\$categories as \$category) {
            \$categoryEntity = new Category();
            \$categoryEntity->setTitle(\$category['categoryname']);
            \$categoryEntity->setBundle(\$category['categorybundle']);
            \$categoryEntity->setAlias(\$category['categoryalias']);
            \$categoryEntity->setIsPublished(\$category['published']);
            \$categoryRepo->saveEntity(\$categoryEntity);
        }
    }

    public function getOrder(): int
    {
        return 1;
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
        return "@bundles/LeadBundle/DataFixtures/ORM/LoadCategoryData.php";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/LoadCategoryData.php", "/app/docroot/app/bundles/LeadBundle/DataFixtures/ORM/LoadCategoryData.php");
    }
}
