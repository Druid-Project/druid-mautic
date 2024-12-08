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

/* @bundles/CoreBundle/Twig/Extension/MautibotExtension.php */
class __TwigTemplate_423f979b4feab1b19f89a87edad34bdf extends Template
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

use Mautic\\CoreBundle\\Twig\\Helper\\MautibotHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class MautibotExtension extends AbstractExtension
{
    public function __construct(
        protected MautibotHelper \$mautibotHelper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('mautibotGetImage', [\$this, 'getImage'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * @param string \$image One of openMouth | smile | wave
     */
    public function getImage(string \$image): string
    {
        return \$this->mautibotHelper->getImage(\$image);
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
        return "@bundles/CoreBundle/Twig/Extension/MautibotExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/MautibotExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/MautibotExtension.php");
    }
}
