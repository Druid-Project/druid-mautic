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

/* @bundles/UserBundle/Tests/Entity/UserTest.php */
class __TwigTemplate_bd61fed4ed2ea21398a35dba0c01e953 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Entity;

use Mautic\\UserBundle\\Entity\\User;

class UserTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testEraseCredentials(): void
    {
        \$user = new User();
        \$user->setPlainPassword('test');
        \$user->setCurrentPassword('test');
        \$user->eraseCredentials();
        \$this->assertNull(\$user->getPlainPassword());
        \$this->assertNull(\$user->getCurrentPassword());
    }

    public function testUserIsGuest(): void
    {
        \$user = new User(true);
        \$this->assertTrue(\$user->isGuest());
    }

    public function testUserIsNotGuest(): void
    {
        \$user = new User();
        \$this->assertFalse(\$user->isGuest());
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
        return "@bundles/UserBundle/Tests/Entity/UserTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Entity/UserTest.php", "/app/docroot/app/bundles/UserBundle/Tests/Entity/UserTest.php");
    }
}
