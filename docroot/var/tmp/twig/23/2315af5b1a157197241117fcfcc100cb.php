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

/* @bundles/CampaignBundle/Controller/CampaignMapStatsController.php */
class __TwigTemplate_f7c7e60c2583e91795c528ba6d396f32 extends Template
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

namespace Mautic\\CampaignBundle\\Controller;

use Doctrine\\DBAL\\Exception;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CoreBundle\\Helper\\MapHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;

class CampaignMapStatsController extends AbstractController
{
    public const MAP_OPTIONS = [
        'contacts' => [
            'label' => 'mautic.lead.leads',
            'unit'  => 'Contact',
        ],
        'read_count' => [
            'label' => 'mautic.email.read',
            'unit'  => 'Read',
        ],
        'clicked_through_count'=> [
            'label' => 'mautic.email.click',
            'unit'  => 'Click',
        ],
    ];

    public const LEGEND_TEXT = 'Total: %total (%withCountry with country)';

    public function __construct(private CampaignModel \$model)
    {
    }

    /**
     * @return array<string, array<int, array<string, int|string>>>
     *
     * @throws Exception
     */
    public function getData(Campaign \$entity, \\DateTimeImmutable \$dateFromObject, \\DateTimeImmutable \$dateToObject): array
    {
        return \$this->model->getCountryStats(\$entity, \$dateFromObject, \$dateToObject);
    }

    public function hasAccess(CorePermissions \$security, Campaign \$entity): bool
    {
        return \$security->hasEntityAccess(
            'email:emails:viewown',
            'email:emails:viewother',
            \$entity->getCreatedBy()
        );
    }

    /**
     * @return array<string,array<string, string>>
     */
    public function getMapOptions(Campaign \$entity): array
    {
        if (\$entity->isEmailCampaign()) {
            return self::MAP_OPTIONS;
        }

        \$key = array_key_first(self::MAP_OPTIONS);

        return [\$key => self::MAP_OPTIONS[\$key]];
    }

    public function getMapOptionsTitle(): string
    {
        return '';
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
        \$mapData        = MapHelper::buildMapData(\$statsCountries, \$this->getMapOptions(\$entity), self::LEGEND_TEXT);

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
        return "@bundles/CampaignBundle/Controller/CampaignMapStatsController.php";
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
        return new Source("", "@bundles/CampaignBundle/Controller/CampaignMapStatsController.php", "/app/docroot/app/bundles/CampaignBundle/Controller/CampaignMapStatsController.php");
    }
}
