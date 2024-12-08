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

/* @bundles/CoreBundle/Shortener/Shortener.php */
class __TwigTemplate_65c5681fe19fa38e1981e47667cf4688 extends Template
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

namespace Mautic\\CoreBundle\\Shortener;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class Shortener
{
    public const SHORTENER_SERVICE = 'shortener_service';

    /**
     * @var ShortenerServiceInterface[]
     */
    private array \$services = [];

    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function addService(ShortenerServiceInterface \$shortener): void
    {
        \$this->services[\$shortener::class] = \$shortener;
    }

    public function getService(): ShortenerServiceInterface
    {
        \$name = \$this->coreParametersHelper->get(self::SHORTENER_SERVICE);

        if (isset(\$this->services[\$name])) {
            return \$this->services[\$name];
        }

        throw new \\InvalidArgumentException(sprintf('There is not a shortener service  %s', \$name));
    }

    /**
     * @return ShortenerServiceInterface[]
     */
    public function getServices(): array
    {
        return \$this->services;
    }

    /**
     * @return ShortenerServiceInterface[]
     */
    public function getEnabledServices(): array
    {
        return array_filter(\$this->services, fn (\$service) => \$service->isEnabled());
    }

    public function shortenUrl(string \$url): string
    {
        try {
            return \$this->getService()->shortenUrl(\$url);
        } catch (\\InvalidArgumentException) {
            return \$url;
        }
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
        return "@bundles/CoreBundle/Shortener/Shortener.php";
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
        return new Source("", "@bundles/CoreBundle/Shortener/Shortener.php", "/app/docroot/app/bundles/CoreBundle/Shortener/Shortener.php");
    }
}
