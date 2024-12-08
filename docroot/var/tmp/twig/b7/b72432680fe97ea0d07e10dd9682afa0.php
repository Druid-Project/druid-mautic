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

/* @bundles/LeadBundle/Twig/Helper/DefaultAvatarHelper.php */
class __TwigTemplate_5f3e35debe4d756adf6e96f150f70f2e extends Template
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

namespace Mautic\\LeadBundle\\Twig\\Helper;

use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;

final class DefaultAvatarHelper
{
    public function __construct(
        private AssetsHelper \$assetsHelper
    ) {
    }

    public function getDefaultAvatar(bool \$absolute = false): string
    {
        return \$this->assetsHelper->getOverridableUrl('images/avatar.png', \$absolute);
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
        return "@bundles/LeadBundle/Twig/Helper/DefaultAvatarHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Twig/Helper/DefaultAvatarHelper.php", "/app/docroot/app/bundles/LeadBundle/Twig/Helper/DefaultAvatarHelper.php");
    }
}
