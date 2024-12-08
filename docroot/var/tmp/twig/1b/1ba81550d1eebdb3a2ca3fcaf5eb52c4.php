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

/* @bundles/ConfigBundle/Tests/Mapper/Helper/ConfigHelperTest.php */
class __TwigTemplate_3a13cbb9893139b1e2d28907f842e324 extends Template
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

namespace Mautic\\ConfigBundle\\Tests\\Mapper\\Helper;

use Mautic\\ConfigBundle\\Mapper\\Helper\\ConfigHelper;

class ConfigHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Ensure a mixed numeric/string keyed array is formatted to all string based keys
     *
     * @covers \\Mautic\\ConfigBundle\\Mapper\\Helper\\ConfigHelper::bindNestedConfigValues
     */
    public function testNestedLocalParametersAreBoundCorrectly(): void
    {
        \$defaults = [
            'db_host'         => null,
            'db_user'         => null,
            'api_enabled'     => 1,
            'monitored_email' => [
                'general' => [
                    'address'    => null,
                    'host'       => null,
                    'port'       => '993',
                    'encryption' => '/ssl',
                    'user'       => null,
                    'password'   => null,
                ],
                'EmailBundle_bounces' => [
                    'address'           => 'test2@test.com',
                    'host'              => 'test2.com',
                    'port'              => '143',
                    'encryption'        => '/tls/novalidate-cert',
                    'user'              => 'test2@test.com',
                    'password'          => 'password',
                    'override_settings' => 1,
                    'folder'            => 'INBOX',
                ],
                'EmailBundle_unsubscribes' => [
                    'address'           => 'test3@test.com',
                    'host'              => null,
                    'port'              => '993',
                    'encryption'        => '/ssl',
                    'user'              => null,
                    'password'          => null,
                    'override_settings' => 0,
                    'folder'            => 'INBOX',
                ],
            ],
        ];

        \$config = [
            'db_host'         => 'dbhost',
            'db_user'         => 'dbuser',
            'monitored_email' => [
                'general' => [
                    'address'    => 'test@test.com',
                    'host'       => 'test.com',
                    'port'       => '143',
                    'encryption' => '/tls/novalidate-cert',
                    'user'       => 'test@test.com',
                    'password'   => 'password',
                ],
                'EmailBundle_bounces'      => null,
                'EmailBundle_unsubscribes' => [
                    'address'           => 'test3@test.com',
                    'host'              => null,
                    'port'              => '993',
                    'encryption'        => '/ssl',
                    'user'              => null,
                    'password'          => null,
                    'override_settings' => 0,
                    'folder'            => 'INBOX',
                ],
                'EmailBundle_replies' => [
                    'address'           => 'test4@test.com',
                    'host'              => null,
                    'port'              => '993',
                    'encryption'        => '/ssl',
                    'user'              => null,
                    'password'          => null,
                    'override_settings' => 0,
                    'folder'            => 'INBOX',
                ],
            ],
        ];

        \$expected = [
            // from config
            'db_host' => 'dbhost',
            'db_user' => 'dbuser',
            // from defaults
            'api_enabled'     => 1,
            'monitored_email' => [
                // from config
                'general' => [
                    'address'    => 'test@test.com',
                    'host'       => 'test.com',
                    'port'       => '143',
                    'encryption' => '/tls/novalidate-cert',
                    'user'       => 'test@test.com',
                    'password'   => 'password',
                ],
                'EmailBundle_bounces' => [
                    // from defaults
                    'address'           => 'test2@test.com',
                    'host'              => 'test2.com',
                    'port'              => '143',
                    'encryption'        => '/tls/novalidate-cert',
                    'user'              => 'test2@test.com',
                    'password'          => 'password',
                    'override_settings' => 1,
                    'folder'            => 'INBOX',
                ],
                // from config
                'EmailBundle_unsubscribes' => [
                    'address'           => 'test3@test.com',
                    'host'              => null,
                    'port'              => '993',
                    'encryption'        => '/ssl',
                    'user'              => null,
                    'password'          => null,
                    'override_settings' => 0,
                    'folder'            => 'INBOX',
                ],
                // from config
                'EmailBundle_replies' => [
                    'address'           => 'test4@test.com',
                    'host'              => null,
                    'port'              => '993',
                    'encryption'        => '/ssl',
                    'user'              => null,
                    'password'          => null,
                    'override_settings' => 0,
                    'folder'            => 'INBOX',
                ],
            ],
        ];

        \$this->assertEquals(\$expected, ConfigHelper::bindNestedConfigValues(\$config, \$defaults));
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
        return "@bundles/ConfigBundle/Tests/Mapper/Helper/ConfigHelperTest.php";
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
        return new Source("", "@bundles/ConfigBundle/Tests/Mapper/Helper/ConfigHelperTest.php", "/app/docroot/app/bundles/ConfigBundle/Tests/Mapper/Helper/ConfigHelperTest.php");
    }
}
