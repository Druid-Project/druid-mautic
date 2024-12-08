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

/* @bundles/CoreBundle/Twig/Extension/GravatarExtension.php */
class __TwigTemplate_93185d55c352d494c5376556dbe9ea82 extends Template
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

use Mautic\\CoreBundle\\Twig\\Helper\\GravatarHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class GravatarExtension extends AbstractExtension
{
    public function __construct(
        protected GravatarHelper \$gravatarHelper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('gravatarGetImage', [\$this, 'getImage'], ['is_safe' => ['all']]),
        ];
    }

    public function getImage(string \$email, string \$size = '250', ?string \$default = null): string
    {
        return \$this->gravatarHelper->getImage(\$email, \$size, \$default);
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
        return "@bundles/CoreBundle/Twig/Extension/GravatarExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/GravatarExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/GravatarExtension.php");
    }
}
