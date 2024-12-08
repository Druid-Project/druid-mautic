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

/* @bundles/LeadBundle/DataFixtures/ORM/LoadLeadListData.php */
class __TwigTemplate_10bd5cc8ff5e78a8456007fae85aca5a extends Template
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
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Model\\ListModel;

class LoadLeadListData extends AbstractFixture implements OrderedFixtureInterface
{
    public function __construct(
        private ListModel \$segmentModel
    ) {
    }

    public function load(ObjectManager \$manager): void
    {
        \$adminUser = \$this->getReference('admin-user');

        \$list = new LeadList();
        \$list->setName('United States');
        \$list->setPublicName('United States');
        \$list->setAlias('us');
        \$list->setCreatedBy(\$adminUser);
        \$list->setIsGlobal(true);
        \$list->setFilters([
            [
                'glue'     => 'and',
                'type'     => 'lookup',
                'field'    => 'country',
                'operator' => '=',
                'filter'   => 'United States',
                'display'  => '',
            ],
        ]);

        \$this->setReference('lead-list', \$list);
        \$manager->persist(\$list);
        \$manager->flush();

        \$this->segmentModel->rebuildListLeads(\$list);
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 5;
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
        return "@bundles/LeadBundle/DataFixtures/ORM/LoadLeadListData.php";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/LoadLeadListData.php", "/app/docroot/app/bundles/LeadBundle/DataFixtures/ORM/LoadLeadListData.php");
    }
}
