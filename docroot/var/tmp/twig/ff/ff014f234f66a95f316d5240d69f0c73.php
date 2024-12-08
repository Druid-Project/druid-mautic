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

/* @bundles/CoreBundle/Twig/Extension/SecurityExtension.php */
class __TwigTemplate_26d665b0f6d13a04d704c4457b5060a3 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Mautic\\CoreBundle\\Twig\\Helper\\SecurityHelper;
use Mautic\\UserBundle\\Entity\\User;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class SecurityExtension extends AbstractExtension
{
    public function __construct(
        private SecurityHelper \$securityHelper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('securityGetAuthenticationContext', [\$this, 'getContext']),
            new TwigFunction('securityGetCsrfToken', [\$this, 'getCsrfToken']),
            new TwigFunction('securityHasEntityAccess', [\$this, 'hasEntityAccess']),
            new TwigFunction('securityIsGranted', [\$this, 'isGranted']),
        ];
    }

    public function getContext(): string
    {
        return \$this->securityHelper->getAuthenticationContent();
    }

    public function getCsrfToken(string \$intention): string
    {
        return \$this->securityHelper->getCsrfToken(\$intention);
    }

    /**
     * Helper function to check if the logged in user has access to an entity.
     *
     * @param string|bool \$ownPermission
     * @param string|bool \$otherPermission
     * @param User|int    \$ownerId
     */
    public function hasEntityAccess(\$ownPermission, \$otherPermission, \$ownerId): bool
    {
        return \$this->securityHelper->hasEntityAccess(\$ownPermission, \$otherPermission, \$ownerId);
    }

    /**
     * @return mixed
     */
    public function isGranted(string \$permission)
    {
        return \$this->securityHelper->isGranted(\$permission);
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
        return "@bundles/CoreBundle/Twig/Extension/SecurityExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/SecurityExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/SecurityExtension.php");
    }
}
