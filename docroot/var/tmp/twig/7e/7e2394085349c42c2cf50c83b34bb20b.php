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

/* @bundles/UserBundle/Security/SAML/User/UserMapper.php */
class __TwigTemplate_692346b10c5da61a26c15f279c1749a1 extends Template
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

namespace Mautic\\UserBundle\\Security\\SAML\\User;

use LightSaml\\Model\\Assertion\\Assertion;
use LightSaml\\Model\\Protocol\\Response;
use LightSaml\\SpBundle\\Security\\User\\UsernameMapperInterface;
use Mautic\\UserBundle\\Entity\\User;

class UserMapper implements UsernameMapperInterface
{
    /**
     * @param array<string, mixed> \$attributes
     */
    public function __construct(
        private array \$attributes
    ) {
    }

    public function getUser(Response \$response): User
    {
        \$user = new User();

        foreach (\$response->getAllAssertions() as \$assertion) {
            \$this->setValuesFromAssertion(\$assertion, \$user);
        }

        return \$user;
    }

    public function getUsername(Response \$response): ?string
    {
        \$user = \$this->getUser(\$response);

        return \$user->getUserIdentifier();
    }

    private function setValuesFromAssertion(Assertion \$assertion, User \$user): void
    {
        \$attributes = \$this->extractAttributes(\$assertion);

        // use email as the user by default
        if (isset(\$attributes['email'])) {
            \$user->setEmail(\$attributes['email']);
            \$user->setUsername(\$attributes['email']);
        }

        if (isset(\$attributes['username']) && !empty(\$attributes['username'])) {
            \$user->setUsername(\$attributes['username']);
        }

        if (isset(\$attributes['firstname'])) {
            \$user->setFirstname(\$attributes['firstname']);
        }

        if (isset(\$attributes['lastname'])) {
            \$user->setLastName(\$attributes['lastname']);
        }
    }

    private function extractAttributes(Assertion \$assertion): array
    {
        \$attributes = [];

        foreach (\$this->attributes as \$key => \$attributeName) {
            if (!\$attributeName) {
                continue;
            }

            foreach (\$assertion->getAllAttributeStatements() as \$attributeStatement) {
                \$attribute = \$attributeStatement->getFirstAttributeByName(\$attributeName);
                if (\$attribute && \$attribute->getFirstAttributeValue()) {
                    \$attributes[\$key] = \$attribute->getFirstAttributeValue();
                }
            }
        }

        return \$attributes;
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
        return "@bundles/UserBundle/Security/SAML/User/UserMapper.php";
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
        return new Source("", "@bundles/UserBundle/Security/SAML/User/UserMapper.php", "/app/docroot/app/bundles/UserBundle/Security/SAML/User/UserMapper.php");
    }
}
