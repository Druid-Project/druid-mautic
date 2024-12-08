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

/* @bundles/UserBundle/DataFixtures/ORM/LoadUserData.php */
class __TwigTemplate_14e761ae59b31339f9069a41e8a92bf2 extends Template
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
use Mautic\\UserBundle\\Entity\\User;
use Symfony\\Component\\PasswordHasher\\Hasher\\UserPasswordHasher;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['group_mautic_install_data'];
    }

    public function __construct(
        private UserPasswordHasher \$hasher
    ) {
    }

    public function load(ObjectManager \$manager): void
    {
        \$user = new User();
        \$user->setFirstName('Admin');
        \$user->setLastName('User');
        \$user->setUsername('admin');
        \$user->setEmail('admin@yoursite.com');
        \$user->setPassword(\$this->hasher->hashPassword(\$user, 'Maut1cR0cks!'));
        \$user->setRole(\$this->getReference('admin-role'));
        \$manager->persist(\$user);
        \$manager->flush();

        \$this->addReference('admin-user', \$user);

        \$user = new User();
        \$user->setFirstName('Sales');
        \$user->setLastName('User');
        \$user->setUsername('sales');
        \$user->setEmail('sales@yoursite.com');
        \$user->setPassword(\$this->hasher->hashPassword(\$user, 'Maut1cR0cks!'));
        \$user->setRole(\$this->getReference('sales-role'));
        \$manager->persist(\$user);
        \$manager->flush();

        \$this->addReference('sales-user', \$user);
    }

    public function getOrder()
    {
        return 2;
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
        return "@bundles/UserBundle/DataFixtures/ORM/LoadUserData.php";
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
        return new Source("", "@bundles/UserBundle/DataFixtures/ORM/LoadUserData.php", "/app/docroot/app/bundles/UserBundle/DataFixtures/ORM/LoadUserData.php");
    }
}
