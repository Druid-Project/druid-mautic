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

/* @bundles/EmailBundle/Controller/EmailMapStatsController.php */
class __TwigTemplate_e8c74e3188d0689430239b0ccf280ce4 extends Template
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

namespace Mautic\\EmailBundle\\Controller;

use Doctrine\\DBAL\\Exception;
use Mautic\\CoreBundle\\Helper\\MapHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;

class EmailMapStatsController extends AbstractController
{
    public const MAP_OPTIONS = [
        'read_count' => [
            'label' => 'mautic.email.stat.read',
            'unit'  => 'Read',
        ],
        'clicked_through_count'=> [
            'label' => 'mautic.email.clicked',
            'unit'  => 'Click',
        ],
    ];

    public const LEGEND_TEXT = 'Total: %total (%withCountry with country)';

    public function __construct(protected EmailModel \$model)
    {
    }

    /**
     * @return array<string, array<int, array<string, int|string>>>
     *
     * @throws Exception
     */
    public function getData(Email \$entity, \\DateTimeImmutable \$dateFromObject, \\DateTimeImmutable \$dateToObject): array
    {
        // get A/B test information
        \$parent = \$entity->getVariantParent();

        // get translation parent
        \$translationParent = \$entity->getTranslationParent();

        \$includeVariants = ((\$entity->isVariant() && empty(\$parent)) || (\$entity->isTranslation() && empty(\$translationParent)));

        return \$this->model->getCountryStats(
            \$entity,
            \$dateFromObject,
            \$dateToObject,
            \$includeVariants,
        );
    }

    public function hasAccess(CorePermissions \$security, Email \$entity): bool
    {
        return \$security->hasEntityAccess(
            'email:emails:viewown',
            'email:emails:viewother',
            \$entity->getCreatedBy()
        );
    }

    /**
     * @return array<string, array<string, string>>
     */
    public function getMapOptions(): array
    {
        return self::MAP_OPTIONS;
    }

    public function getMapOptionsTitle(): string
    {
        return 'mautic.email.stats.options.title';
    }

    /**
     * @throws \\Exception
     */
    public function viewAction(
        CorePermissions \$security,
        int \$objectId,
        string \$dateFrom = '',
        string \$dateTo = ''
    ): Response {
        \$entity = \$this->model->getEntity(\$objectId);

        if (empty(\$entity) || !\$this->hasAccess(\$security, \$entity)) {
            throw new AccessDeniedHttpException();
        }

        \$statsCountries = \$this->getData(\$entity, new \\DateTimeImmutable(\$dateFrom), new \\DateTimeImmutable(\$dateTo));
        \$mapData        = MapHelper::buildMapData(\$statsCountries, \$this->getMapOptions(), self::LEGEND_TEXT);

        return \$this->render(
            '@MauticCore/Helper/map.html.twig',
            [
                'data'           => \$mapData[0]['data'],
                'height'         => 315,
                'optionsEnabled' => true,
                'optionsTitle'   => \$this->getMapOptionsTitle(),
                'options'        => \$mapData,
                'legendEnabled'  => true,
                'statUnit'       => \$mapData[0]['unit'],
            ]
        );
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
        return "@bundles/EmailBundle/Controller/EmailMapStatsController.php";
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
        return new Source("", "@bundles/EmailBundle/Controller/EmailMapStatsController.php", "/app/docroot/app/bundles/EmailBundle/Controller/EmailMapStatsController.php");
    }
}
