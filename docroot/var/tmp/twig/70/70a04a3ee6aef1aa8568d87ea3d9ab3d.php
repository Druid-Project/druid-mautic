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

/* @bundles/NotificationBundle/Tests/Unit/Api/OneSignalApiTest.php */
class __TwigTemplate_72e492cb2c63f2f247079a0f8a8afc1a extends Template
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

namespace Mautic\\NotificationBundle\\Tests\\Unit\\Api;

use Mautic\\NotificationBundle\\Api\\OneSignalApi;
use PHPUnit\\Framework\\TestCase;

class OneSignalApiTest extends TestCase
{
    public function testAddMobileData(): void
    {
        \$mockOneSignalApi = \$this->createMock(OneSignalApi::class);

        \$controllerReflection = (new \\ReflectionClass(OneSignalApi::class));
        \$method               = \$controllerReflection->getMethod('addMobileData');
        \$method->setAccessible(true);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['ios_subtitle' => 'test']]);
        \$this->assertEquals(['subtitle' => ['en' => 'test']], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['ios_sound' => 'test']]);
        \$this->assertEquals(['ios_sound' => 'test'], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['ios_sound' => '']]);
        \$this->assertEquals(['ios_sound' => 'default'], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['ios_badges' => 'test']]);
        \$this->assertEquals(['ios_badgeType' => 'test'], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['ios_badgeCount' => '5']]);
        \$this->assertEquals(['ios_badgeCount' => 5], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['ios_contentAvailable' => true]]);
        \$this->assertEquals(['content_available' => true], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['ios_mutableContent' => true]]);
        \$this->assertEquals(['mutable_content' => true], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['android_sound' => 'test']]);
        \$this->assertEquals(['android_sound' => 'test'], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['android_small_icon' => 'test']]);
        \$this->assertEquals(['small_icon' => 'test'], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['android_large_icon' => 'test']]);
        \$this->assertEquals(['large_icon' => 'test'], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['android_big_picture' => 'test']]);
        \$this->assertEquals(['big_picture' => 'test'], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['android_led_color' => 'test']]);
        \$this->assertEquals(['android_led_color' => 'FFTEST'], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['android_accent_color' => 'test']]);
        \$this->assertEquals(['android_accent_color' => 'FFTEST'], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['android_group_key' => 'test']]);
        \$this->assertEquals(['android_group' => 'test'], \$data);

        \$data = [];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, ['android_lockscreen_visibility' => 1]]);
        \$this->assertEquals(['android_visibility' => 1], \$data);

        \$data         = [];
        \$mobileConfig = ['additional_data' => ['list' => [
            ['label' => 'a', 'value' => 1],
            ['label' => 'b', 'value' => 2],
        ],
        ],
        ];
        \$method->invokeArgs(\$mockOneSignalApi, [&\$data, \$mobileConfig]);
        \$this->assertEquals(['data' => ['a' => 1, 'b' => 2]], \$data);
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
        return "@bundles/NotificationBundle/Tests/Unit/Api/OneSignalApiTest.php";
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
        return new Source("", "@bundles/NotificationBundle/Tests/Unit/Api/OneSignalApiTest.php", "/app/docroot/app/bundles/NotificationBundle/Tests/Unit/Api/OneSignalApiTest.php");
    }
}
