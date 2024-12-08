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

/* @bundles/UserBundle/Tests/Security/UserTokenSetterTest.php */
class __TwigTemplate_3718469c93e8f5dcddf89582e495def1 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Security;

use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Entity\\UserRepository;
use Mautic\\UserBundle\\Security\\UserTokenSetter;
use PHPUnit\\Framework\\MockObject\\MockObject;

class UserTokenSetterTest extends AbstractMauticTestCase
{
    public function testSetUserMakesTheUserAvailableToUserHelper(): void
    {
        /** @var MockObject|UserRepository \$userRepo */
        \$userRepo = \$this->createMock(UserRepository::class);
        \$user     = new User();

        \$userRepo->method('getEntity')
            ->with(1)
            ->willReturn(\$user);

        \$userTokenSetter = new UserTokenSetter(\$userRepo, \$this->getContainer()->get('security.token_storage'));

        \$userTokenSetter->setUser(1);

        /** @var UserHelper \$userHelper */
        \$userHelper = \$this->getContainer()->get('mautic.helper.user');

        \$this->assertSame(\$user, \$userHelper->getUser());
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
        return "@bundles/UserBundle/Tests/Security/UserTokenSetterTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Security/UserTokenSetterTest.php", "/app/docroot/app/bundles/UserBundle/Tests/Security/UserTokenSetterTest.php");
    }
}
