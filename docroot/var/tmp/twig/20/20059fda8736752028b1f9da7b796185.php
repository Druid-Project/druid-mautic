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

/* @bundles/PageBundle/DataFixtures/ORM/LoadPageCategoryData.php */
class __TwigTemplate_6ed84ce5186aa73baa5f5d6d40eb7f32 extends Template
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

namespace Mautic\\PageBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CategoryBundle\\Model\\CategoryModel;

class LoadPageCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function __construct(
        private CategoryModel \$categoryModel
    ) {
    }

    public function load(ObjectManager \$manager): void
    {
        \$today  = new \\DateTime();
        \$cat    = new Category();
        \$events = 'Events';

        \$cat->setBundle('page');
        \$cat->setDateAdded(\$today);
        \$cat->setTitle(\$events);
        \$cat->setAlias(strtolower(\$events));

        \$this->categoryModel->getRepository()->saveEntity(\$cat);
        \$this->setReference('page-cat-1', \$cat);
    }

    public function getOrder()
    {
        return 6;
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
        return "@bundles/PageBundle/DataFixtures/ORM/LoadPageCategoryData.php";
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
        return new Source("", "@bundles/PageBundle/DataFixtures/ORM/LoadPageCategoryData.php", "/app/docroot/app/bundles/PageBundle/DataFixtures/ORM/LoadPageCategoryData.php");
    }
}
