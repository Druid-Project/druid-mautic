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

/* @bundles/CoreBundle/Event/CustomAssetsEvent.php */
class __TwigTemplate_f1274a98971041ecf950f1c1d572a8b1 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;
use Symfony\\Contracts\\EventDispatcher\\Event;

class CustomAssetsEvent extends Event
{
    public function __construct(
        protected AssetsHelper \$assetsHelper
    ) {
    }

    /**
     * @param string \$location
     * @param string \$context
     */
    public function addCustomDeclaration(\$declaration, \$location = 'head', \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addCustomDeclaration(\$declaration, \$location)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param string \$location
     * @param bool   \$async
     * @param string \$context
     */
    public function addScript(\$script, \$location = 'head', \$async = false, \$name = null, \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addScript(\$script, \$location, \$async, \$name)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param string \$location
     * @param string \$context
     */
    public function addScriptDeclaration(\$script, \$location = 'head', \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addScriptDeclaration(\$script, \$location)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param string \$context
     */
    public function addStylesheet(\$stylesheet, \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addStylesheet(\$stylesheet)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param string \$context
     */
    public function addStyleDeclaration(\$styles, \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addStyleDeclaration(\$styles)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
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
        return "@bundles/CoreBundle/Event/CustomAssetsEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/CustomAssetsEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/CustomAssetsEvent.php");
    }
}
