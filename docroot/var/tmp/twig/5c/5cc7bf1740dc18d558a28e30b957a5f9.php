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

/* @bundles/UserBundle/DataFixtures/ORM/LoadRoleData.php */
class __TwigTemplate_d1d3581df7eb703cfe7dc64aea82c61f extends Template
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

namespace Mautic\\UserBundle\\DataFixtures\\ORM;

use Doctrine\\Bundle\\FixturesBundle\\FixtureGroupInterface;
use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Model\\RoleModel;

class LoadRoleData extends AbstractFixture implements OrderedFixtureInterface, FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['group_mautic_install_data'];
    }

    public function __construct(
        private RoleModel \$roleModel
    ) {
    }

    public function load(ObjectManager \$manager): void
    {
        if (!\$this->hasReference('admin-role')) {
            \$role = new Role();
            \$role->setName('Administrators');
            \$role->setDescription('Has access to everything.');
            \$role->setIsAdmin(1);
            \$manager->persist(\$role);
            \$manager->flush();

            \$this->addReference('admin-role', \$role);
        }

        \$role = new Role();
        \$role->setName('Sales Team');
        \$role->setDescription('Has access to sales');
        \$role->setIsAdmin(0);

        \$permissions = [
            'user:profile' => ['editname'],
            'lead:leads'   => ['full'],
        ];
        \$this->roleModel->setRolePermissions(\$role, \$permissions);

        \$manager->persist(\$role);
        \$manager->flush();

        \$this->addReference('sales-role', \$role);
    }

    public function getOrder()
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
        return "@bundles/UserBundle/DataFixtures/ORM/LoadRoleData.php";
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
        return new Source("", "@bundles/UserBundle/DataFixtures/ORM/LoadRoleData.php", "/app/docroot/app/bundles/UserBundle/DataFixtures/ORM/LoadRoleData.php");
    }
}
