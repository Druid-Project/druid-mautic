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

/* @bundles/CoreBundle/Factory/PageHelperFactory.php */
class __TwigTemplate_2f18ff4781a005f4997ec96af642f9b8 extends Template
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

namespace Mautic\\CoreBundle\\Factory;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PageHelper;
use Mautic\\CoreBundle\\Helper\\PageHelperInterface;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;

final class PageHelperFactory implements PageHelperFactoryInterface
{
    public function __construct(
        private SessionInterface \$session,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function make(string \$sessionPrefix, int \$page): PageHelperInterface
    {
        return new PageHelper(\$this->session, \$this->coreParametersHelper, \$sessionPrefix, \$page);
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
        return "@bundles/CoreBundle/Factory/PageHelperFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Factory/PageHelperFactory.php", "/app/docroot/app/bundles/CoreBundle/Factory/PageHelperFactory.php");
    }
}
