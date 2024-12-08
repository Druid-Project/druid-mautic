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

/* @bundles/UserBundle/Model/UserToken/UserTokenServiceInterface.php */
class __TwigTemplate_2a063956ba802534e63a6ca57845a26d extends Template
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

namespace Mautic\\UserBundle\\Model\\UserToken;

use Mautic\\UserBundle\\Entity\\UserToken;

/**
 * Interface UserTokenServiceInterface.
 */
interface UserTokenServiceInterface
{
    /**
     * @param int \$secretLength
     *
     * @return UserToken
     */
    public function generateSecret(UserToken \$token, \$secretLength = 32);

    /**
     * @return bool
     */
    public function verify(UserToken \$token);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Model/UserToken/UserTokenServiceInterface.php";
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
        return new Source("", "@bundles/UserBundle/Model/UserToken/UserTokenServiceInterface.php", "/app/docroot/app/bundles/UserBundle/Model/UserToken/UserTokenServiceInterface.php");
    }
}
