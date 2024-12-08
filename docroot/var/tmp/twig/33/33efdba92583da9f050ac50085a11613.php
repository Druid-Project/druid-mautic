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

/* @bundles/AssetBundle/Form/Type/AssetListType.php */
class __TwigTemplate_233888c529ca20f6db842dea80e5c7ba extends Template
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

namespace Mautic\\AssetBundle\\Form\\Type;

use Mautic\\AssetBundle\\Model\\AssetModel;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class AssetListType extends AbstractType
{
    public function __construct(
        private CorePermissions \$corePermissions,
        private AssetModel \$assetModel,
        private UserHelper \$userHelper
    ) {
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'choices'           => \$this->getAssetChoices(),
            'placeholder'       => false,
            'expanded'          => false,
            'multiple'          => true,
            'required'          => false,
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }

    private function getAssetChoices(): array
    {
        \$choices   = [];
        \$viewOther = \$this->corePermissions->isGranted('asset:assets:viewother');
        \$repo      = \$this->assetModel->getRepository();
        \$repo->setCurrentUser(\$this->userHelper->getUser());
        \$assets = \$repo->getAssetList('', 0, 0, \$viewOther);

        foreach (\$assets as \$asset) {
            \$choices[\$asset['language']][\$asset['title']] = \$asset['id'];
        }

        // sort by language
        ksort(\$choices);

        return \$choices;
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
        return "@bundles/AssetBundle/Form/Type/AssetListType.php";
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
        return new Source("", "@bundles/AssetBundle/Form/Type/AssetListType.php", "/app/docroot/app/bundles/AssetBundle/Form/Type/AssetListType.php");
    }
}
