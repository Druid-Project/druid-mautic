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

/* @bundles/CoreBundle/Helper/UserHelper.php */
class __TwigTemplate_d8da6716ac323090cfcda25d921b4def extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Mautic\\UserBundle\\Entity\\User;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;

class UserHelper
{
    public function __construct(
        protected TokenStorageInterface \$tokenStorage
    ) {
    }

    /**
     * @param bool \$nullIfGuest
     *
     * @return User|null
     */
    public function getUser(\$nullIfGuest = false)
    {
        \$user  = null;
        \$token = \$this->tokenStorage->getToken();

        if (null !== \$token) {
            \$user = \$token->getUser();
        }

        if (!\$user instanceof User) {
            if (\$nullIfGuest) {
                return null;
            }

            \$user = new User(true);
        }

        return \$user;
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
        return "@bundles/CoreBundle/Helper/UserHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/UserHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/UserHelper.php");
    }
}
