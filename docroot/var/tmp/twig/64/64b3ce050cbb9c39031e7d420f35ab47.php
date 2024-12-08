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

/* @bundles/NotificationBundle/Tests/Form/Type/MobileNotificationDetailsTypeTest.php */
class __TwigTemplate_a3e473fe2c3f456ee0c183ffa5a0eac9 extends Template
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

namespace Mautic\\NotificationBundle\\Tests\\Form\\Type;

use Mautic\\NotificationBundle\\Form\\Type\\MobileNotificationDetailsType;
use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorExtension;
use Symfony\\Component\\Form\\FormExtensionInterface;
use Symfony\\Component\\Form\\PreloadedExtension;
use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\Validator\\Validation;

class MobileNotificationDetailsTypeTest extends TypeTestCase
{
    /**
     * @var MockObject&Integration
     */
    private MockObject \$integrationSettings;

    /**
     * @return array<FormExtensionInterface>
     */
    protected function getExtensions(): array
    {
        \$validatorBuilder = Validation::createValidatorBuilder();
        \$validatorBuilder->addMethodMapping('loadValidatorMetadata');

        \$this->integrationSettings = \$this->createMock(Integration::class);

        // @phpstan-ignore-next-line
        \$integration = \$this->createMock(AbstractIntegration::class);
        \$integration->method('getIntegrationSettings')
            ->willReturn(\$this->integrationSettings);

        \$integrationHelper = \$this->createMock(IntegrationHelper::class);
        \$integrationHelper->method('getIntegrationObject')
            ->with('OneSignal')
            ->willReturn(\$integration);

        return [
            new ValidatorExtension(\$validatorBuilder->getValidator()),
            new PreloadedExtension([
                new MobileNotificationDetailsType(\$integrationHelper),
            ], []),
        ];
    }

    public function testNoPlatformsSelected(): void
    {
        \$this->integrationSettings->method('getFeatureSettings')
            ->willReturn([]);

        \$form = \$this->factory->create(MobileNotificationDetailsType::class);

        \$view = \$form->createView();
        // test only field is \"additional_data\"
        self::assertCount(1, \$view->children);
        self::assertArrayHasKey('additional_data', \$view->children);
    }

    /**
     * @param array<int, string> \$platforms
     * @param array<int, string> \$settings
     *
     * @dataProvider platformProvider
     */
    public function testPlatformSelected(array \$platforms, array \$settings): void
    {
        \$this->integrationSettings->method('getFeatureSettings')
            ->willReturn(['platforms' => \$platforms]);

        \$form = \$this->factory->create(MobileNotificationDetailsType::class);

        \$view = \$form->createView();
        self::assertCount(1 + count(\$settings), \$view->children);
        self::assertArrayHasKey('additional_data', \$view->children);

        foreach (\$settings as \$settingField) {
            self::assertArrayHasKey(\$settingField, \$view->children);
        }
    }

    public static function platformProvider(): \\Generator
    {
        \$iosSettings = [
            'ios_subtitle',
            'ios_sound',
            'ios_badges',
            'ios_badgeCount',
            'ios_contentAvailable',
            'ios_media',
            'ios_mutableContent',
        ];

        \$androidSettings = [
            'android_sound',
            'android_small_icon',
            'android_large_icon',
            'android_big_picture',
            'android_led_color',
            'android_accent_color',
            'android_group_key',
            'android_lockscreen_visibility',
        ];

        yield 'ios' => [['ios'], \$iosSettings];
        yield 'android' => [['android'], \$androidSettings];
        yield 'both' => [['android', 'ios'], array_merge(\$androidSettings, \$iosSettings)];
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
        return "@bundles/NotificationBundle/Tests/Form/Type/MobileNotificationDetailsTypeTest.php";
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
        return new Source("", "@bundles/NotificationBundle/Tests/Form/Type/MobileNotificationDetailsTypeTest.php", "/app/docroot/app/bundles/NotificationBundle/Tests/Form/Type/MobileNotificationDetailsTypeTest.php");
    }
}
