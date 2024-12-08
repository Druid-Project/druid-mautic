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

/* @bundles/UserBundle/Security/Authentication/Token/PluginToken.php */
class __TwigTemplate_20e913b574c0170d7c7f1e5278b8063d extends Template
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

namespace Mautic\\UserBundle\\Security\\Authentication\\Token;

use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AbstractToken;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Guard\\Token\\GuardTokenInterface;

class PluginToken extends AbstractToken implements GuardTokenInterface
{
    private ?string \$providerKey;

    /**
     * @param UserInterface|string|null \$user
     * @param array<string>             \$roles
     */
    public function __construct(
        ?string \$providerKey,
        private ?string \$authenticatingService = null,
        \$user = null,
        private string \$credentials = '',
        array \$roles = [],
        private ?Response \$response = null
    ) {
        parent::__construct(\$roles);

        if ('' === \$providerKey) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        if (null !== \$user) {
            \$this->setUser(\$user);
        }
        \$this->providerKey           = \$providerKey;

        \$this->setAuthenticated(count(\$roles) > 0);
    }

    public function getCredentials(): string
    {
        return \$this->credentials;
    }

    public function getProviderKey(): ?string
    {
        return \$this->providerKey;
    }

    public function getAuthenticatingService(): ?string
    {
        return \$this->authenticatingService;
    }

    public function getResponse(): ?Response
    {
        return \$this->response;
    }

    /**
     * @return array<int, mixed>
     */
    public function __serialize(): array
    {
        return array_merge([\$this->authenticatingService, \$this->credentials, \$this->providerKey, parent::__serialize()]);
    }

    /**
     * @param array<int, mixed> \$data
     */
    public function __unserialize(array \$data): void
    {
        [\$this->authenticatingService, \$this->credentials, \$this->providerKey, \$parentArray] = \$data;
        parent::__unserialize(\$parentArray);
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
        return "@bundles/UserBundle/Security/Authentication/Token/PluginToken.php";
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
        return new Source("", "@bundles/UserBundle/Security/Authentication/Token/PluginToken.php", "/app/docroot/app/bundles/UserBundle/Security/Authentication/Token/PluginToken.php");
    }
}
