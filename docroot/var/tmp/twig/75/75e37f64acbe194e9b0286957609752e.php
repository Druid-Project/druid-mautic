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

/* @bundles/UserBundle/Entity/UserTokenRepositoryInterface.php */
class __TwigTemplate_2ae1ef6a1b3a79afe6b1e6aed9e1d992 extends Template
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

namespace Mautic\\UserBundle\\Entity;

/**
 * Interface UserTokenRepositoryInterface.
 */
interface UserTokenRepositoryInterface
{
    /**
     * @param string \$secret
     *
     * @return UserToken
     */
    public function isSecretUnique(\$secret);

    /**
     * @return bool
     */
    public function verify(UserToken \$token);

    /**
     * Delete expired user tokens.
     *
     * @param bool \$isDryRun
     *
     * @return int Number of selected or deleted rows
     */
    public function deleteExpired(\$isDryRun = false);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Entity/UserTokenRepositoryInterface.php";
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
        return new Source("", "@bundles/UserBundle/Entity/UserTokenRepositoryInterface.php", "/app/docroot/app/bundles/UserBundle/Entity/UserTokenRepositoryInterface.php");
    }
}
