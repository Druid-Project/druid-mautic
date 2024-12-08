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

/* @bundles/LeadBundle/Twig/Extension/LeadExtension.php */
class __TwigTemplate_29331a5b9842bdf21c14f0cc0aa22a2a extends Template
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

namespace Mautic\\LeadBundle\\Twig\\Extension;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Twig\\Helper\\AvatarHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class LeadExtension extends AbstractExtension
{
    public function __construct(
        protected AvatarHelper \$avatarHelper
    ) {
    }

    /**
     * @see Twig_Extension::getFunctions()
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('leadGetAvatar', [\$this, 'getAvatar']),
        ];
    }

    /**
     * @see AvatarHelper::getAvatar
     *
     * @return mixed
     */
    public function getAvatar(Lead \$lead)
    {
        return \$this->avatarHelper->getAvatar(\$lead);
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
        return "@bundles/LeadBundle/Twig/Extension/LeadExtension.php";
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
        return new Source("", "@bundles/LeadBundle/Twig/Extension/LeadExtension.php", "/app/docroot/app/bundles/LeadBundle/Twig/Extension/LeadExtension.php");
    }
}
