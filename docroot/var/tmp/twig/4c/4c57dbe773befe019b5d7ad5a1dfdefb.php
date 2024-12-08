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

/* @bundles/CoreBundle/Controller/BuilderControllerTrait.php */
class __TwigTemplate_5a7862505db83470ac9a8d5d48bca2a7 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\RouterInterface;

trait BuilderControllerTrait
{
    /**
     * Get assets for builder.
     */
    protected function getAssetsForBuilder(AssetsHelper \$assetsHelper, Translator \$translatorHelper, Request \$request, RouterInterface \$routerHelper, CoreParametersHelper \$coreParametersHelper): string
    {
        // /** @var RouterInterface \$routerHelper */
        // \$routerHelper = \$this->get('router');
        \$assetsHelper
            ->setContext(AssetsHelper::CONTEXT_BUILDER)
            ->addScriptDeclaration(\"var mauticBasePath      = '\".\$request->getBasePath().\"';\")
            ->addScriptDeclaration(\"var mauticAjaxUrl       = '\".\$routerHelper->generate('mautic_core_ajax').\"';\")
            ->addScriptDeclaration(\"var mauticBaseUrl       = '\".\$routerHelper->generate('mautic_base_index').\"';\")
            ->addScriptDeclaration(\"var mauticAssetPrefix   = '\".\$assetsHelper->getAssetPrefix(true).\"';\")
            ->addScriptDeclaration('var mauticLang          = '.\$translatorHelper->getJsLang().';')
            ->addScriptDeclaration('var mauticFroalaEnabled = '.(int) \$coreParametersHelper->get('load_froala_assets').';')
            ->addCustomDeclaration(\$assetsHelper->getSystemScripts(true, true))
            ->addStylesheet('app/bundles/CoreBundle/Assets/css/libraries/builder.css');

        \$builderAssets = \$assetsHelper->getHeadDeclarations();

        // reset context to main
        \$assetsHelper->setContext();

        return \$builderAssets;
    }

    /**
     * @return array
     */
    protected function buildSlotForms(\$slotTypes)
    {
        foreach (\$slotTypes as \$key => \$slotType) {
            if (!empty(\$slotType['form'])) {
                \$slotForm                = \$this->formFactory->create(\$slotType['form']);
                \$slotTypes[\$key]['form'] = \$slotForm->createView();
            }
        }

        return \$slotTypes;
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
        return "@bundles/CoreBundle/Controller/BuilderControllerTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/BuilderControllerTrait.php", "/app/docroot/app/bundles/CoreBundle/Controller/BuilderControllerTrait.php");
    }
}
