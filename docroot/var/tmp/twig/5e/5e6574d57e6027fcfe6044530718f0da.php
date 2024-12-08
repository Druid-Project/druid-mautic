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

/* @bundles/UserBundle/Security/UserTokenSetter.php */
class __TwigTemplate_8f24b77db5cc88c546ea3943e8fb65bd extends Template
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

namespace Mautic\\UserBundle\\Security;

use Mautic\\UserBundle\\Entity\\UserRepository;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;

final class UserTokenSetter implements UserTokenSetterInterface
{
    public function __construct(private UserRepository \$userRepository, private TokenStorageInterface \$tokenStorage)
    {
    }

    public function setUser(int \$userId): void
    {
        \$user  = \$this->userRepository->getEntity(\$userId);
        \$token = \$this->tokenStorage->getToken() ?? new DummyToken();

        \$token->setUser(\$user);
        \$this->tokenStorage->setToken(\$token);
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
        return "@bundles/UserBundle/Security/UserTokenSetter.php";
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
        return new Source("", "@bundles/UserBundle/Security/UserTokenSetter.php", "/app/docroot/app/bundles/UserBundle/Security/UserTokenSetter.php");
    }
}
